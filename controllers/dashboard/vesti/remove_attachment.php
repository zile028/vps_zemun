<?php
$vestID = $params["vestID"];
$attachID = $params["attachID"];

$db = \Core\App::resolve(\Core\Database::class);
$sql = "
        SELECT storeName FROM media WHERE id = :attachID;
        DELETE FROM vest_media WHERE mediaID = :attachID AND vestID = :vestID;
        DELETE FROM media WHERE id = :attachID;
";
$file = $db->query($sql, $params)->findOne(PDO::FETCH_OBJ);
\Core\FileValidator::deleteFile($file->storeName);
redirectBack();