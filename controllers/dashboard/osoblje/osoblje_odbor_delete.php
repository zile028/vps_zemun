<?php
$db = \Core\App::resolve(\Core\Database::class);
$sql = "DELETE FROM osoblje_odbor WHERE osobljeID = :clanID AND odborID = :odborID";
$db->query($sql, $params);
redirectBack();