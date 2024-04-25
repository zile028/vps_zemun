<?php
$statusCode = \Core\Response::UNDER_CONSTRUCTION;
$bindParams = [];

$db = \Core\App::resolve(\Core\Database::class);
$sql = "SELECT a.*, m.storeName, sp.naziv AS spNaziv,sp.modul, sp.nivo
            FROM alumni a
            LEFT JOIN media m ON m.id = a.imageID
            JOIN studijski_programi sp ON sp.id = a.spID
";
if (isset($_GET["poslodavac"])) {
    $sql .= " WHERE poslodavac = :poslodavac";
    $bindParams = ["poslodavac" => $_GET["poslodavac"]];
}


$alumnisti = $db->query($sql, $bindParams)->find(PDO::FETCH_OBJ);
view("alumni.view", ["heading" => "Error",
    "heroImage" => "hero_alumni.jpg",
    "heroTitle" => "Алумни клуб",
    "alumnisti" => $alumnisti,
]);