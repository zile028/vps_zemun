<?php

use Core\App;
use Core\Database;
use Core\Validator;
use Core\FileValidator;

$data = $_POST;
$error = [];
if (!Validator::string($data["firstName"])) {
    $error["firstName"] = "Обавезно";
}
if (!Validator::string($data["lastName"])) {
    $error["lastName"] = "Обавезно";
}
if (!Validator::number($data["godina"], 1900, (int)date("Y"))) {
    $error["godina"] = "Неисправна година дипломирања";
}
if (!Validator::string($data["tema"])) {
    $error["tema"] = "Обавезно";
}
if (!Validator::string($data["poslodavac"])) {
    $error["poslodavac"] = "Обавезно";
}
if (!Validator::string($data["posao"])) {
    $error["posao"] = "Обавезно";
}

if ($_FILES["image"]["size"] > 0) {
    $image = new FileValidator($_FILES["image"]);
    $image->setLimit(2, "mb");
    $image->setValidType(FileValidator::ALLOW_IMAGE);
    if ($image->isValid() && $image->upload()) {
        $media = new \Core\Media($image->forMedia($data["firstName"] . " " . $data["lastName"]));


    }


}
