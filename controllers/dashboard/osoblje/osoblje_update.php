<?php

use Core\Validator;
use Core\App;
use Core\Database;
use Core\FileValidator;

$oldImage = $_POST["oldImage"];
$oldCV = $_POST["oldCV"];
extract($_POST);
unset($_POST["oldImage"], $_POST["oldCV"], $_POST["_method"]);
$data = $_POST;
$data["id"] = $params["id"];
$data["image"] = $oldImage;
$data["cv"] = $oldCV;
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

if (isset($_FILES["image"]) && $_FILES["image"]["size"] > 0) {
    $profileImage = new FileValidator($_FILES["image"]);
    $profileImage->setLimit(2, "mb")->setValidType(["png", "jpeg", "jpg"]);
    if ($profileImage->isValid() && $profileImage->upload()) {
        $data["image"] = $profileImage->storeName;
        FileValidator::deleteFile($oldImage);
    }
}

if (isset($_FILES["cv"]) && $_FILES["cv"]["size"] > 0) {
    $cvFile = new FileValidator($_FILES["cv"]);
    $cvFile->setLimit(2, "mb")->setValidType(["pdf"]);
    if ($cvFile->isValid() && $cvFile->upload()) {
        $data["cv"] = $cvFile->storeName;
        FileValidator::deleteFile($oldCV);
    }
} else {
    $data["cv"] = null;

}

if (count($errors) === 0) {
    $db = App::resolve(Database::class);
    $sql = "UPDATE osoblje SET 
                   firstName=:firstName,
                   lastName=:lastName,
                   email=:email,
                   title=:title,
                   rank=:rank,
                   image=:image,
                   cv=:cv,
                   description=:description
                   WHERE id = :id
                   ";
    $result = $db->query($sql, $data)->isExecuteResult();
    redirect("/dashboard/osoblje");
} else {
    redirectBack();
}