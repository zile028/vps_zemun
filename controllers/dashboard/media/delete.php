<?php
$db = \Core\App::resolve(\Core\Database::class);
$sql = "
        SELECT storeName FROM media WHERE id = :id;
        DELETE FROM media WHERE id = :id;
";

$oldMedia = $db->query($sql, $params)->findOne(PDO::FETCH_OBJ);
\Core\FileValidator::deleteFile($oldMedia->storeName);

redirectBack();