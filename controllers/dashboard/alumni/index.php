<?php
$db = \Core\App::resolve(\Core\Database::class);
$sql = "SELECT nivo, nivo, id,
            IF(modul IS NOT NULL , CONCAT(naziv, ' - ', modul), naziv) AS spNaziv
            FROM studijski_programi
            WHERE lang=:lang
            ORDER BY FIELD(espb, 180,60,120);
        SELECT DISTINCT poslodavac FROM alumni ORDER BY poslodavac;
        SELECT id,fileName, storeName FROM media WHERE mimetype LIKE 'image/%';
";
$studije = $db->query($sql, ["lang" => "srb"])->find(PDO::FETCH_OBJ | PDO::FETCH_GROUP);
$poslodavci = $db->nextRowsetFind();
$media = $db->nextRowsetFind(PDO::FETCH_OBJ);
$poslodavci = ["IMLEK", "STUP", "Hemofarm"];
view("/dashboard/alumni/index.view", [
    "studije" => $studije,
    "poslodavci" => $poslodavci,
    "media" => $media
]);