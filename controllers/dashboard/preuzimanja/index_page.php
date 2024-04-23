<?php
$db = \Core\App::resolve(\Core\Database::class);
$sql = "
        SELECT DISTINCT kategorija FROM preuzimanja WHERE lang = :lang;
        SELECT type, media.* FROM media ORDER BY fileName;
        SELECT p.kategorija, p.*, m.storeName
            FROM preuzimanja p
            JOIN media m ON m.id = p.mediaID
            ORDER BY FIELD(p.kategorija, '%',''), p.fileName
";

$bindParam = ["lang" => "srb"];
$kategorije = $db->query($sql, $bindParam)->find(PDO::FETCH_COLUMN);
$media = $db->nextRowsetFind(PDO::FETCH_OBJ | PDO::FETCH_GROUP);
$dokumenta = $db->nextRowsetFind(PDO::FETCH_OBJ | PDO::FETCH_GROUP);

view("dashboard/preuzimanja/index.view", [
    "kategorije" => $kategorije,
    "media" => $media,
    "dokumenta" => $dokumenta
]);
