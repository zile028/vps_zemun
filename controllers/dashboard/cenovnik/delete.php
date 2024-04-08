<?php
$db = \Core\App::resolve(\Core\Database::class);
$sql = "DELETE FROM cenovnik WHERE id = :id;";
$response = $db->query($sql, $params);
redirect("/dashboard/cenovnik");