<?php
$db = \Core\App::resolve(\Core\Database::class);
$sql = "SELECT k.category, d.* ,k.category,
        CASE
            WHEN d.parentID = 0 THEN d.id
            ELSE d.parentID 
        END AS parentID
        FROM dokumenta d
        JOIN kategorije k ON k.id = d.category
        WHERE d.lang = :lang
        ORDER BY k.category,  parentID ASC 
        ";
$params = ["lang" => "srb"];

$dokumenta = $db->query($sql, $params)->find(PDO::FETCH_OBJ);

view("akta.view", [
    "heroImage" => "hero_documents.jpg",
    "heroTitle" => "Акта",
    "dokumenta" => $dokumenta
]);