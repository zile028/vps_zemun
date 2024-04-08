<?php

use Core\App;
use Core\Database;
use Core\Validator;

if (!Validator::string($_POST["modul"])) {
    $error["modul"] = "Модул је обавезан";
    view("dashboard/studije/modul_create.view");
} else {
    $db = App::resolve(Database::class);
    $storeResult = $db->query("INSERT INTO moduli (modul, spID) VALUES (:modul, :spID)", $_POST)->isExecuteResult();
    if ($storeResult) {
        redirect("/dashboard/studije");
    }
}