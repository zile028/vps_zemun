<?php
$db = \Core\App::resolve(\Core\Database::class);
$sql = "
        SELECT id, category AS caption FROM kategorije WHERE id != 6;
        SELECT id, odbor AS caption FROM odbori ORDER BY prioritet;
";

$dokumentaMenu = $db->query($sql)->find();
$odboriMenu = $db->nextRowsetFind();
$menu = [
    "dokumenta" => $dokumentaMenu,
    "odbori" => $odboriMenu
];
