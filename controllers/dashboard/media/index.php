<?php

$db = \Core\App::resolve(\Core\Database::class);
$sql = "SELECT * FROM media ORDER BY type, fileName";
$media = $db->query($sql)->find(PDO::FETCH_OBJ);

view("dashboard/media/index.view", ["media" => $media]);