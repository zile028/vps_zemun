<?php
$db = \Core\App::resolve(\Core\Database::class);
$sql = "DELETE FROM sp_predmet WHERE predmetID = :id";
$removeStatus = $db->query($sql, $params)->isExecuteResult();
if ($removeStatus) {
    redirectBack();
} else {
    view("/dashboard");
}