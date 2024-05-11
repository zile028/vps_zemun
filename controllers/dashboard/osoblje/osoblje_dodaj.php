<?php

use Core\App;
use Core\Validator;
use Core\FileValidator;

$db = App::resolve(Core\Database::class);
extract($_POST);
$data = $_POST;
$errors = [];


if (!Validator::string($firstName)) {
    $errors["firstName"] = "Ime je obavezno";
}

if (!Validator::string($lastName)) {
    $errors["lastName"] = "Ime je obavezno";
}

if (!Validator::email($email)) {
    $errors["email"] = "Neispravna e-mail adresa!";
}

//if (!Validator::string($title, 2,)) {
//    $errors["title"] = "Nesipravna titula, mora sadržati minimum 2 karaktera!";
//}

//if (!Validator::string($rank, 3,)) {
//    $errors["rank"] = "Nesipravno zvanje, mora sadržati minimum 3 karaktera!";
//}

$colName = implode(", ", array_keys([...$_POST]));
$placeholders = implode(",", array_map(static function ($el) {
    return ":" . $el;
}, array_keys($_POST)));


if ($_FILES["image"]["size"] > 0) {
    $profileImage = new FileValidator($_FILES["image"]);
    $profileImage->setLimit(2, "mb")->setValidType(["png", "jpeg", "jpg"]);
    if ($profileImage->isValid()) {
        $profileImage->upload();
        $data["image"] = $profileImage->storeName;
    }
} else {
    $data["image"] = "avatar.png";
}
$colName .= ", image";
$placeholders .= ", :image";
$cvFile = new FileValidator($_FILES["cv"]);
$cvFile->setLimit(2, "mb")->setValidType(["pdf"]);
if ($cvFile->isValid()) {
    $cvFile->upload();
    $colName .= ", cv";
    $placeholders .= ", :cv";
    $data["cv"] = $cvFile->storeName;
}

if (count($errors) === 0) {
    $db->query("INSERT INTO osoblje ($colName) VALUES ($placeholders)", $data);
    redirect("/dashboard/osoblje");
} else {
    view("dashboard/register", ["heading" => "Register", ...$_POST, "errors" => $errors]);
}

