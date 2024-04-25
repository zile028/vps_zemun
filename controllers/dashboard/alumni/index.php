<?php
$db = \Core\App::resolve(\Core\Database::class);
$sql = "SELECT nivo, nivo, id,
            IF(modul IS NOT NULL , CONCAT(naziv, ' - ', modul), naziv) AS spNaziv
            FROM studijski_programi
            WHERE lang=:lang
            ORDER BY FIELD(espb, 180,60,120);
        SELECT DISTINCT poslodavac FROM alumni ORDER BY poslodavac;
        SELECT id,fileName, storeName FROM media WHERE mimetype LIKE 'image/%';
        SELECT a.*, m.storeName, IF(modul IS NOT NULL , CONCAT(sp.naziv, ' - ', sp.modul), sp.naziv) AS spNaziv, sp.nivo, sp.zvanje
            FROM alumni a
            JOIN media m ON m.id = a.imageID
            JOIN studijski_programi sp ON sp.id = a.spID
            WHERE a.lang = :lang;
";
$studije = $db->query($sql, ["lang" => "srb"])->find(PDO::FETCH_OBJ | PDO::FETCH_GROUP);
$poslodavci = $db->nextRowsetFind();
$media = $db->nextRowsetFind(PDO::FETCH_OBJ);
$alumnisti = $db->nextRowsetFind(PDO::FETCH_OBJ);


view("/dashboard/alumni/index.view", [
    "studije" => $studije,
    "poslodavci" => $poslodavci,
    "media" => $media,
    "alumnisti" => $alumnisti

]);