<?php


$db = \Core\App::resolve(\Core\Database::class);

$osoblje = $db->query("SELECT * FROM osoblje WHERE lang = :lang", ["lang" => "srb"])->find();

view("nastavno_osoblje",
    [
        "heroImage" => "nastavno_osoblje.jpg",
        "heroTitle" => "Наставно особље",
        "osoblje" => $osoblje
    ]);