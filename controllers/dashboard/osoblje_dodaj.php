<?php


use Core\App;
use Core\Validator;
use Core\FileValidator;

$db = App::resolve(Core\Database::class);
extract($_POST);
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

if (!Validator::string($title, 2,)) {
    $errors["title"] = "Nesipravna titula, mora sadržati minimum 2 karaktera!";
}

if (!Validator::string($rank, 3,)) {
    $errors["rank"] = "Nesipravno zvanje, mora sadržati minimum 3 karaktera!";
}

$profileImage = new FileValidator($_FILES["image"]);
$profileImage->setLimit($validateFile::MB * 2)->setValidType(["png", "jpeg", "jpg"]);


if (count($errors) === 0) {
    $colName = implode(", ", array_keys($_POST));
    $placeholders = implode(",", array_map(static function ($el) {
        return ":" . $el;
    }, array_keys($_POST)));


    $db->query("INSERT INTO osoblje ($colName) VALUES ($placeholders)", $_POST);
    redirect("/dashboard/osoblje");
} else {
    view("dashboard/register", ["heading" => "Register", ...$_POST, "errors" => $errors]);
}