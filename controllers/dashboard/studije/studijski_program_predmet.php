<?php

$db = \Core\App::resolve(\Core\Database::class);
$sql = "INSERT INTO sp_predmet (spID, predmetID) VALUES (:spID,:predmetID)";
$result = $db->query($sql, ["spID" => $params["id"], "predmetID" => $_POST["predmetID"]])
    ->isExecuteResult();
if ($result) {
    redirectBack();
}
