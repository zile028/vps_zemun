<?php

$db = \Core\App::resolve(\Core\Database::class);
$predmeti = $db->query("SELECT * FROM predmeti")->find(PDO::FETCH_OBJ);

view("dashboard/studije/predmeti_page.view", ["predmeti" => $predmeti]);