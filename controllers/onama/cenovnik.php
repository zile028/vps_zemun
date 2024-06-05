<?php
$db = \Core\App::resolve(\Core\Database::class);
// $cenovnik = $db->query("SELECT * FROM cenovnik WHERE lang = 'srb'")->find(PDO::FETCH_OBJ);

$db = \Core\App::resolve(\Core\Database::class);
$sql = "SELECT k.category, d.* ,k.category,
        CASE
            WHEN d.parentID = 0 THEN d.id
            ELSE d.parentID 
        END AS parentID
        FROM dokumenta d
        JOIN kategorije k ON k.id = d.category
        WHERE d.lang = :lang AND d.category = 7
        ORDER BY k.category, parentID ASC;
        ";
$params["lang"] = "srb";
$cenovnik = $db->query($sql, $params)->find(PDO::FETCH_OBJ);

view("cenovnik.view", [
    "heroImage" => "hero_cenovnik.jpg",
    "heroTitle" => "Ценовник",
    "cenovnik" => $cenovnik
]);
