<?php
$db = \Core\App::resolve(\Core\Database::class);
$osoblje = $db->query("SELECT id,firstName,lastName, title, rank, image FROM osoblje")->find(PDO::FETCH_OBJ);

view("dashboard/osoblje/osoblje_savet.view", ["osoblje" => $osoblje]);