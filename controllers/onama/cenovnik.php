<?php
$db = \Core\App::resolve(\Core\Database::class);
// $cenovnik = $db->query("SELECT * FROM cenovnik WHERE lang = 'srb'")->find(PDO::FETCH_OBJ);

$db = \Core\App::resolve(\Core\Database::class);
$sql = "SELECT k.category, d.* ,k.category,
        FROM dokumenta d
        JOIN kategorije k ON k.id = d.category
        WHERE d.lang = :lang AND d.category = 6
        ORDER BY k.category;
        ";
$params["lang"] = "srb";
$cenovnik = $db->query($sql, $params)->find(PDO::FETCH_OBJ);
dd($cenovnik);
view("cenovnik.view", [
    "heroImage" => "hero_cenovnik.jpg",
    "heroTitle" => "Ценовник",
    "cenovnik" => $cenovnik
]);
