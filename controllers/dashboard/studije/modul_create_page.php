<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);
$studijskiProgrami = $db->query("SELECT id, naziv,akreditovan,nivo FROM studijski_programi")->find
(PDO::FETCH_OBJ);
$studijskiProgrami = array_map(static function ($item) {
    $words = explode(" ", $item->nivo);
    $item->nivo = "";
    foreach ($words as $word) {
        $item->nivo .= mb_substr($word, 0, 1, "UTF-8");
    }
    return $item;
}, $studijskiProgrami);

view("dashboard/studije/modul_create.view", ["studijskiProgrami" => $studijskiProgrami]);