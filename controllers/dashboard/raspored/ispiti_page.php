<?php

$db = \Core\App::resolve(\Core\Database::class);
$sql = "
        SELECT nivo, id,nivo,naziv, modul FROM studijski_programi WHERE lang = 'srb' ORDER BY FIELD(espb,180,60,120);
        SELECT type, media.* FROM media ORDER BY fileName;

        SELECT r.active, r.*, m.id AS mediaID, m.fileName, m.storeName, m.type, m.createdAt, sp.naziv,sp.nivo,sp.modul
        FROM raspored r
        JOIN media m ON m.id = r.mediaID
        JOIN studijski_programi sp ON sp.id = r.spID 
        WHERE r.kategorija = :predavanja
        ORDER BY r.active DESC , FIELD(sp.espb, 180,60,120)
";

$bindParam = ["predavanja" => "ispiti"];
$studije = $db->query($sql, $bindParam)->find(PDO::FETCH_OBJ | PDO::FETCH_GROUP);
$media = $db->nextRowsetFind(PDO::FETCH_OBJ | PDO::FETCH_GROUP);
$rasporedi = $db->nextRowsetFind(PDO::FETCH_OBJ | PDO::FETCH_GROUP);
view("dashboard/raspored/ispiti.view", [
    "studije" => $studije,
    "media" => $media,
    "rasporedi" => $rasporedi
]);