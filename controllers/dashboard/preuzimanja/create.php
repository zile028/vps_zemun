<?php

use Core\FileValidator;
use Core\App;
use Core\Database;

$db = App::resolve(Database::class);
//prioritet ima atacovan fajl
$attachment = $_FILES["attachment"];
$bindParams = $_POST;
if (isset($attachment) && $attachment["size"] > 0) {
//    Koristi atacovan fajl
//    upload attachment-a, upisivanje u bazi i uzimanje njegovog id
    $media = new \Core\FileValidator($attachment);
    $media->setLimit(3, "mb");
    $media->setValidType(\Core\FileValidator::ALLOW_ALL_FILE);
    if ($media->isValid() && $media->upload()) {
        $mediaID = $db->query("INSERT INTO media (fileName, storeName, type, size, mimetype)
                                VALUES (:fileName, :storeName, :type, :size, :mimetype)",
            [
                "fileName" => $bindParams["fileName"],
                "storeName" => $media->storeName,
                "type" => $media->extension,
                "size" => $media->size,
                "mimetype" => $media->type,
            ])
            ->lastID();
        $bindParams["mediaID"] = $mediaID;
    }
}
$bindParams["lang"] = "srb";
$sql = "INSERT INTO preuzimanja (fileName, mediaID, kategorija,lang) VALUES (:fileName, :mediaID, :kategorija, :lang);";
$result = $db->query($sql, $bindParams)->affectedRows();
redirectBack();