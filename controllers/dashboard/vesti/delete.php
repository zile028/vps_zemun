<?php
$db = \Core\App::resolve(\Core\Database::class);

$sql = "DELETE FROM vesti WHERE id = :id;
        DELETE FROM vest_media WHERE vestID = :id;";
$result = $db->query($sql, ["id" => $params["id"]])->isExecuteResult();
redirectBack();