<?php

$db = \Core\App::resolve(\Core\Database::class);
$sql = "
SELECT * FROM osoblje WHERE lang = 'srb';
SELECT * FROM odbori WHERE lang = 'srb';
";
$osoblje = $db->query($sql)->find();
$odbori = $db->nextRowset()->find(PDO::FETCH_OBJ);


view("dashboard/osoblje/index.view", ["osoblje" => $osoblje, "odbori" => $odbori]);