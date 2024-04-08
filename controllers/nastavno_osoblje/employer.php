<?php

$db = \Core\App::resolve(\Core\Database::class);

$nastavnik = $db->query(
    "SELECT * FROM osoblje WHERE lang = :lang AND id = :id",
    ["lang" => "srb", ...$params])->findOne();

view("employer", ["heroTitle" => "Zaposleni", "heroImage" => "hero_employer.jpg", "nastavnik" =>
    $nastavnik]);
