<?php
$db = \Core\App::resolve(\Core\Database::class);

$sql = "SELECT * FROM cenovnik WHERE lang = :lang ORDER BY service ASC";
$cenovnik = $db->query($sql, ["lang" => "srb"])->find();

view("dashboard/cenovnik", ["cenovnik" => $cenovnik]);