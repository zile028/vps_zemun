<?php
$db = \Core\App::resolve(\Core\Database::class);

$sql = "SELECT v.* ,m.fileName,m.storeName,m.id AS mediaID, CONCAT(u.firstName, ' ', u.lastName) AS autor
        FROM vesti v 
        JOIN media m ON m.id = v.featured_imageID
        JOIN users u ON u.id = v.userID;
";
$vesti = $db->query($sql)->find(PDO::FETCH_OBJ);
view("dashboard/vesti/index.view", ["vesti" => $vesti]);