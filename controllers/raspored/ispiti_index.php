<?php
$db = \Core\App::resolve(\Core\Database::class);

$sql = "SELECT sp.nivo, r.*, m.fileName, m.storeName, sp.naziv, sp.modul,sp.nivo
            FROM raspored r
            JOIN studijski_programi sp ON sp.id = r.spID
            JOIN media m ON m.id = r.mediaID
            WHERE kategorija='ispiti'";
$raspored = $db->query($sql)->find(PDO::FETCH_OBJ | PDO::FETCH_GROUP);
view("raspored.view", [
    "heroImage" => "hero_raspored.jpg",
    "heroTitle" => "Распоред испита",
    "rasporedi" => $raspored
]);