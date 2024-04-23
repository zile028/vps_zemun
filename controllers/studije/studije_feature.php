<?php
$db = \Core\App::resolve(\Core\Database::class);
$sql = "SELECT naziv, id,naziv,nivo,modul,espb, zvanje FROM studijski_programi
        WHERE lang = 'srb' AND aktivan = 1
        ORDER BY FIELD(espb, 180,60,120)";

$studije = $db->query($sql)->find(PDO::FETCH_OBJ | PDO::FETCH_GROUP);
