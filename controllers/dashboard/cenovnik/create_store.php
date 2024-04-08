<?php
$db = \Core\App::resolve(\Core\Database::class);
$sql = "INSERT INTO cenovnik (service, price) VALUES (:service, :price)";

$status = $db->query($sql, $_POST);

redirect("/dashboard/cenovnik");