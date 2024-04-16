<?php

$db = \Core\App::resolve(\Core\Database::class);
$sql = "SELECT id,naziv,nivo,opis FROM studijski_programi
        WHERE lang = 'srb' AND aktivan = 1
        GROUP BY naziv, nivo,espb
        ORDER BY FIELD(espb, 180,60,120)";
$studije = $db->query($sql)->find(PDO::FETCH_OBJ);

view("home", [
    "studije" => $studije,
    "heroTitle" => "Висока пословна школа<br>струковних студија",
    "heroImage" => "hero_home.jpg",
    "heroAction" => [
        ["caption" => "Упис", "link" => "/upis"],
        ["caption" => "Студије", "link" => "/studije"]
    ]

]);