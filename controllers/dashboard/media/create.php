<?php

use Core\FileValidator;
use Core\Validator;
use Core\App;
use Core\Database;

$db = App::resolve(Database::class);
$sql = "INSERT INTO media (fileName, storeName, type, size,mimetype) VALUES (:fileName, :storeName, :type, :size,:mimetype)";

$file = new FileValidator($_FILES["attachment"]);
$file->setValidType(["jpg", "jpeg", "doc", "docx", "xls", "xlsx", "pdf", "png", "bmp", "ppt", "pptx"]);
$file->setLimit(10, "mb");
if (Validator::string($_POST["fileName"]) && $file->isValid()) {
    if ($file->upload()) {
        $bindParam = [
            "fileName" => $_POST["fileName"],
            "storeName" => $file->storeName,
            "type" => $file->extension,
            "mimetype" => $file->type,
            "size" => $file->size,
        ];
        $db->query($sql, $bindParam);
        redirect("/dashboard/media");
    }
} else {
    dd($file->getError());
}

