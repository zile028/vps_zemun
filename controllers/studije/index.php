<?php
$db = \Core\App::resolve(\Core\Database::class);
$sql = "SELECT naziv,id,nivo,opis,espb,polje,akreditovan,zvanje,trajanje, modul
        FROM studijski_programi
        ORDER BY FIELD(espb, 180,60,120)";
$studije = $db->query($sql)->find(PDO::FETCH_OBJ | PDO::FETCH_GROUP);
view("studije.view", [
    "heroImage" => "hero_studije.jpg",
    "heroTitle" => "Студијски програми",
    "studije" => $studije
]);