<?php
$db = \Core\App::resolve(\Core\Database::class);
$kategorije = $db->query("SELECT * FROM kategorije WHERE lang = :lang", ["lang" => "srb"])->find();
$dokumenta = $db->query("SELECT id,title FROM dokumenta WHERE lang = :lang AND parentID = :parentID",
    ["lang" => "srb", "parentID" => 0])
    ->find();
view("dashboard/dokumenta/create_page", ["kategorije" => $kategorije, "dokumenta" => $dokumenta]);