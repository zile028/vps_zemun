<?php
$db = \Core\App::resolve(\Core\Database::class);
$result = $db->query("
DELETE FROM predmeti WHERE id = :id;
DELETE FROM sp_predmet WHERE predmetID = :id", $params)->isExecuteResult();
redirectBack();