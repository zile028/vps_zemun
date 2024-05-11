<?php
$doc = $params["doc"];
$osobaID = $params["id"];
$db = \Core\App::resolve(\Core\Database::class);
if ($doc === "cv") {
    $sql = "
            SELECT cv FROM osoblje WHERE id = :id;
            UPDATE osoblje SET cv = null WHERE id = :id;";
} elseif ($doc === "image") {
    $sql = "
            SELECT image FROM osoblje WHERE id = :id;
            UPDATE osoblje SET image = 'avatar.png' WHERE id = :id;";
}

$docName = $db->query($sql, ["id" => $osobaID])->findOne(PDO::FETCH_GROUP);
\Core\FileValidator::deleteFile($docName);
redirectBack();