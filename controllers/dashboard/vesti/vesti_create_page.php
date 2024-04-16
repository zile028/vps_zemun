<?php
$db = \Core\App::resolve(\Core\Database::class);
$sql = "
        SELECT type, media.* FROM media WHERE mimetype LIKE 'image/%' ORDER BY fileName;
";
$media = $db->query($sql)->find(PDO::FETCH_OBJ);
view("dashboard/vesti/create_page.view", [
    "media" => $media
]);