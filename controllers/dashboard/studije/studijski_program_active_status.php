<?php
$db = \Core\App::resolve(\Core\Database::class);
$sql = "UPDATE studijski_programi SET aktivan =:aktivan WHERE id = :spID";
$aktivan = (bool)$params["status"];
$spID = (int)$params["spID"];
$db->query($sql, [
    "aktivan" => !$aktivan,
    "spID" => $spID
]);
redirectBack();