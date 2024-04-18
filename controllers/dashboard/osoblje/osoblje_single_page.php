<?php
$db = \Core\App::resolve(\Core\Database::class);
$sql = "SELECT * 
            FROM osoblje o 
            
            WHERE id = :id";
$osoba = $db->query($sql, ["id" => $params["id"]])->findOne(PDO::FETCH_OBJ);


view("dashboard/osoblje/osoblje_single.view", ["osoba" => $osoba]);