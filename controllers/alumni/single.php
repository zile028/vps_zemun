<?php
$db = \Core\App::resolve(\Core\Database::class);
$sql = "SELECT a.*, m.storeName, sp.naziv AS spNaziv,sp.modul AS spModul,sp.nivo,sp.zvanje
            FROM alumni a
            JOIN media m ON m.id = a.imageID
            JOIN studijski_programi sp ON sp.id = a.spID 
            WHERE a.id = :id";

$clan = $db->query($sql, ["id" => $params["id"]])->findOne(PDO::FETCH_OBJ);

view("alumni_single.view", [
    "heroImage" => "hero_alumni_single.jpg",
    "heroTitle" => "Алумни члан",
    "clan" => $clan
]);