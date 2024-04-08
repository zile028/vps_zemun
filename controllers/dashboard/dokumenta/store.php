<?php

use Core\Validator;

$db = \Core\App::resolve(\Core\Database::class);
extract($_POST);
$error = [];
$parentID = isset($_POST["parentID"]) && $_POST["parentID"] === "null" ? $_POST["parentID"] : NULL;

if (!Validator::string($title)) {
    $error["title"] = "Назив документа је обавезан!";
}
$file = new \Core\FileValidator($_FILES["attachment"]);
$file->setValidType(["pdf"]);
$file->setLimit(3, "mb");
if (count($error) === 0 && $file->isValid()) {
    if ($file->upload()) {
        $sql = "INSERT INTO dokumenta (title, attachment, userID, parentID, category)
            VALUES (:title, :attachment, :userID, :parentID, :category)";
        $params = [
            "title" => $title,
            "userID" => \Core\Session::currentUser("id"),
            "parentID" => $parentID,
            "category" => $category,
            "attachment" => $file->storeName
        ];
        $result = $db->query($sql, $params)->isExecuteResult();

        $result ? redirect("/dashboard/dokumenta") : view("/dashboard/dokumenta/dodaj");
    } else {
        view("/dashboard/dokumenta/dodaj");
    }
} else {
    view("/dashboard/dokumenta/dodaj");
}

