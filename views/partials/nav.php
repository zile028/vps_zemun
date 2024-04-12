<?php
$db = \Core\App::resolve(\Core\Database::class);
$sql = "
        SELECT id, category AS caption FROM kategorije;
        SELECT id, odbor AS caption FROM odbori ORDER BY prioritet;
";

$dokumenta = $db->query($sql)->find();
$odbori = $db->nextRowsetFind();
$menu = [
    "dokumenta" => $dokumenta,
    "odbori" => $odbori
];