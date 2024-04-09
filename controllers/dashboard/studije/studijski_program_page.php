<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);
$studijskiProgram = $db->query("SELECT * FROM studijski_programi WHERE id = :id", $params)
    ->findOne();

$sql = "SELECT p.*
        FROM sp_predmet spp
        JOIN predmeti p ON p.id = spp.predmetID 
        WHERE spp.spID= :id
        ";

$nastavniPlan = $db->query($sql, $params)->find();
vd($studijskiProgram);
dd($nastavniPlan);