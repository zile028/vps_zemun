<?php

use Core\App;
use Core\Database;
use Core\Validator;

extract($_POST);
$error = [];

if (!Validator::string($nivo)) {
    $error["nivo"] = "Ниво студија је обавезан!";
}

if (!Validator::string($naziv)) {
    $error["naziv"] = "Назив је обавезан!";
}
if (!Validator::string($trajanje)) {
    $error["trajanje"] = "Трајање студија је обавезно!";
}
if (!Validator::string($espb)) {
    $error["espb"] = "Број ЕСПБ-а је обавезан!";
}
if (!Validator::string($zvanje)) {
    $error["zvanje"] = "Стечено звање је обавезно!";
}
if (!Validator::string($polje)) {
    $error["polje"] = "Поље је обавезно!";
}
if (!Validator::number($akreditovan, 2000)) {
    $error["akreditovan"] = "Година акредитације је обавезна!";
}


if (count($error) === 0) {
    $db = App::resolve(Database::class);
    $sql = "INSERT INTO studijski_programi (nivo, naziv, modul, trajanje, espb, zvanje, polje, cilj, opis, akreditovan)
            VALUES (:nivo, :naziv, :modul, :trajanje, :espb, :zvanje, :polje, :cilj, :opis, :akreditovan)";
    $result = $db->query($sql, $_POST)->isExecuteResult();
    redirect("/dashboard/studije");
} else {
    view("dashboard/studije/sp_create.view");
}










