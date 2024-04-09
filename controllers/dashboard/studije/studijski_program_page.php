<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);
$studijskiProgram = $db->query("SELECT * FROM studijski_programi WHERE id = :id", $params)
    ->findOne(PDO::FETCH_OBJ);

$sql = "SELECT p.*
        FROM sp_predmet spp
        JOIN predmeti p ON p.id = spp.predmetID 
        WHERE spp.spID= :id
        ";

$predmeti = $db->query($sql, $params)->find(PDO::FETCH_OBJ);
view("dashboard/studije/studijski_program_page.view", ["sp" => $studijskiProgram, "predmeti" => $predmeti]);
