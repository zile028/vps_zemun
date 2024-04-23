<?php
$statusCode = \Core\Response::UNDER_CONSTRUCTION;

$db = \Core\App::resolve(\Core\Database::class);
$sql = "SELECT a.*, m.storeName, IF(modul IS NOT NULL , CONCAT(naziv, ' - ', modul), naziv) AS spNaziv, sp.nivo
            FROM alumni a
            JOIN media m ON m.id = a.imageID
            JOIN studijski_programi sp ON sp.id = a.spID
";

$alumnisti = $db->query($sql)->find(PDO::FETCH_OBJ);
view("alumni.view", ["heading" => "Error",
    "heroImage" => "hero_alumni.jpg",
    "heroTitle" => "Алумни клуб",
    "alumnisti" => $alumnisti,
]);