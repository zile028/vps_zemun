<?php
$db = \Core\App::resolve(\Core\Database::class);
$dokument = $db->query("SELECT id,parentID, attachment FROM dokumenta WHERE id = :id", $params)
    ->findOne(PDO::FETCH_OBJ);
$response = $db->query("DELETE FROM dokumenta WHERE id = :id;", $params)->isExecuteResult();
$deleteFile = \Core\FileValidator::deleteFile($dokument->attachment);
redirect("/dashboard/dokumenta");

