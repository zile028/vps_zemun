<?php
$db = \Core\App::resolve(\Core\Database::class);

$sql = "SELECT id,naslov FROM vesti ORDER BY createdAt DESC LIMIT 8";
$najnovije = $db->query($sql)->find(PDO::FETCH_OBJ);
