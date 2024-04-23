<?php
$db = \Core\App::resolve(\Core\Database::class);

$sql = "SELECT p.kategorija, p.*,m.storeName
        FROM preuzimanja p
        JOIN media m ON m.id = p.mediaID
        WHERE p.lang = 'srb'
        ORDER BY FIELD(p.kategorija,'%',''), p.fileName
        ";
$dokumenta = $db->query($sql)->find(PDO::FETCH_OBJ | PDO::FETCH_GROUP);
view("preuzimanja.view", [
    "heroImage" => "hero_downloading.jpg",
    "heroTitle" => "Упутства и обрасци",
    "dokumenta" => $dokumenta
]);