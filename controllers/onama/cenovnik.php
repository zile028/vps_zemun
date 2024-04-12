<?php
$db = \Core\App::resolve(\Core\Database::class);
$cenovnik = $db->query("SELECT * FROM cenovnik WHERE lang = 'srb'")->find(PDO::FETCH_OBJ);
view("cenovnik.view", [
    "heroImage" => "hero_cenovnik.jpg",
    "heroTitle" => "Ценовник",
    "cenovnik" => $cenovnik
]);