<?php
$db = \Core\App::resolve(\Core\Database::class);
$sql = "UPDATE raspored SET active = :active WHERE id=:id";
$bindParams = [
    "active" => $_POST["active"],
    "id" => $params["id"]
];

$db->query($sql, $bindParams)->isExecuteResult();
redirectBack();