<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);
$studijskiProgram = $db->query("SELECT * FROM studijski_programi WHERE id = :id", $params)
    ->findOne(PDO::FETCH_OBJ);

$sql = "SELECT p.*, spp.redniBroj AS redniBroj, spp.izborni, spp.semestar
        FROM sp_predmet spp
        JOIN predmeti p ON p.id = spp.predmetID 
        WHERE spp.spID= :id
        ORDER BY spp.redniBroj, p.id 
        ";

$predmeti = $db->query($sql, $params)->find(PDO::FETCH_OBJ);

$slobodniPredmeti = $db->query("SELECT p.* 
                                FROM predmeti p
                                WHERE p.id NOT IN (SELECT predmetID FROM sp_predmet WHERE spID = :id)
                                 ", $params)->find(PDO::FETCH_OBJ);

view("dashboard/studije/studijski_program_page.view", ["sp" => $studijskiProgram, "predmeti" =>
    $predmeti, "slobodniPredmeti" => $slobodniPredmeti, "flag" => "remove"]);
