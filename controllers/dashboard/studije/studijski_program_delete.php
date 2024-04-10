<?php
$db = \Core\App::resolve(\Core\Database::class);
$result = $db->query("
DELETE FROM studijski_programi WHERE id = :id;
DELETE FROM sp_predmet WHERE spID = :id", $params)->isExecuteResult();
redirectBack();