<?php

$sql = "DELETE FROM preuzimanja WHERE  id =:id;";
$db = \Core\App::resolve(\Core\Database::class);
$db->query($sql, ["id" => $params["id"]]);
redirectBack();