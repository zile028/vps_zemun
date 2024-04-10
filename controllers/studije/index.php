<?php
$db = \Core\App::resolve(\Core\Database::class);

$sql = "SELECT id,naziv,nivo,opis FROM studijski_programi
        WHERE lang = 'srb' AND aktivan = 1
        GROUP BY naziv, nivo,espb
        ORDER BY FIELD(espb, 180,60,120)";
$studije = $db->query($sql)->find(PDO::FETCH_OBJ);

view("studije.view", [
    "heroImage" => "hero_studije.jpg",
    "heroTitle" => "Студијски програми",
    "studije" => $studije
]);