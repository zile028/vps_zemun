<?php

use Core\FileValidator;
use Core\App;
use Core\Database;
use Core\Validator;


/*
 * 1. upload file +
 * 2. store file to media table +
 * 3. get id of each stored file +
 */
$db = App::resolve(Database::class);
$sqlMedia = "INSERT INTO media (fileName, storeName, type, size, mimetype) 
                VALUES (:fileName, :storeName, :type, :size, :mimetype)";

$sqlVest = "UPDATE vesti SET 
                 naslov = :naslov, 
                 description = :description, 
                 featured_imageID = :featured_imageID, 
                 userID = :userID
            WHERE id = :id
                 ";
$files = [];
$storeFileData = [];
$error = [];

if (!Validator::string($_POST["naslov"])) {
    $error["naslov"] = "Наслов је бавезан!";
}
if (!Validator::string($_POST["description"])) {
    $error["vest"] = "Текст вести је обавезан!";
}
if (!isset($_POST["featured_imageID"])) {
    $error["featured_imageID"] = "Слика вести је обавезна";
}

if (count($error) === 0) {
    $bindParamVest = [
        "naslov" => $_POST["naslov"],
        "description" => $_POST["description"],
        "featured_imageID" => (int)$_POST["featured_imageID"],
        "userID" => \Core\Session::currentUser("id"),
        "id" => $params["id"]
    ];

    $vestID = $db->query($sqlVest, $bindParamVest);

    foreach ($_FILES["attachment"] as $property => $values) {
        foreach ($values as $index => $value) {
            $files[$index][$property] = $value;
        }
    }

    foreach ($files as $index => $file) {
        $checkedFile = new FileValidator($file);
        $checkedFile->setLimit(3, "mb");
        $checkedFile->setValidType(["jpg", "jpeg", "doc", "docx", "xls", "xlsx", "pdf", "png", "bmp", "ppt", "pptx"]);
        if ($checkedFile->isValid()) {
            $checkedFile->upload();
            $db->query($sqlMedia, [
                "fileName" => $_POST["atachmentName"][$index],
                "storeName" => $checkedFile->storeName,
                "type" => $checkedFile->extension,
                "mimetype" => $checkedFile->type,
                "size" => $checkedFile->size,
            ])->isExecuteResult();
            $mediaID = $db->lastID();
            $db->query("INSERT INTO vest_media (vestID, mediaID) VALUES (:vestID,:mediaID)",
                [
                    "vestID" => $params["id"],
                    "mediaID" => $mediaID
                ]);
        }
    }
    redirect("/dashboard/vesti/" . $params["id"]);
} else {
    redirectBack();
//    $sql = "SELECT type, media.* FROM media WHERE mimetype LIKE 'image/%' ORDER BY fileName;";
//    $media = $db->query($sql)->find(PDO::FETCH_OBJ);
//    view("dashboard/vesti/show.view", [
//        "media" => $media, "error" => $error, "naslov" => $_POST["naslov"], "description" => $_POST["description"]
//    ]);
}
