<?php

$db = \Core\App::resolve(\Core\Database::class);
$sql = "
        DELETE FROM raspored WHERE id=:id;
";
$bindParams = [
    "id" => $params["id"],
];
$db->query($sql, $bindParams)->isExecuteResult();
redirectBack();