<?php

use Core\App;
use Core\Database;
use Core\Validator;

extract($_POST);
$data = $_POST;
unset($data["spID"]);
$error = [];
if (!Validator::string($predmet)) {
    $error["predmet"] = "Назив предмете је обавезан!";
}
if (!Validator::string($sifra)) {
    $error["sifra"] = "Шифра предмета је обавезна!";
}

if (!Validator::string($semestar)) {
    $error["semestar"] = "редни број семетра је обавезан!";
}

if (!Validator::string($predavanje)) {
    $error["predavanja"] = "Број часова предавања је обавезан!";
}

if (!Validator::string($vezbe)) {
    $error["vezbe"] = "Број часова вежби је обавезан!";
}

if (!Validator::string($espb)) {
    $error["espb"] = "Број ЕСПБ је обавезан!";
}
if (count($error) === 0) {

    $db = App::resolve(Database::class);
    $sqlPredmet = "INSERT INTO predmeti (predmet, sifra, semestar, predavanja, vezbe, espb, obavezan_izborni) 
                VALUES (:predmet, :sifra, :semestar, :predavanje, :vezbe, :espb, :obavezan_izborni)";
    $predmetID = $db->query($sqlPredmet, $data)->lastID();
    $sqlPredmetSP = "INSERT INTO sp_predmet (spID, predmetID) VALUES (:spID, :predmetID)";

   
    redirect("/dashboard/studije/predmet/dodaj");
} else {
    view("dashboard/studije/predmet_create.view");
}