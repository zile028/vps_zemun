<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);
$studije = $db->query("
                        SELECT id,naziv, nivo, modul
                        FROM studijski_programi
                        ORDER BY FIELD(espb, 180,60,120), akreditovan DESC 
                       ")
    ->find(PDO::FETCH_OBJ);
$studije + array_map(static function ($item) {
    $words = explode(" ", $item->nivo);
    $item->nivo = "";
    foreach ($words as $word) {
        $item->nivo .= mb_strtoupper(mb_substr($word, 0, 1, "UTF-8"));
    }
    return $item;
}, $studije);

view("dashboard/studije/predmet_create.view", ["studije" => $studije]);