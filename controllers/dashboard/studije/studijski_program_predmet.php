<?php

$db = \Core\App::resolve(\Core\Database::class);
$sql = "INSERT INTO sp_predmet (spID, predmetID,redniBroj) VALUES (:spID,:predmetID, :redniBroj)";
$result = $db->query($sql, ["spID" => $params["id"], "predmetID" => $_POST["predmetID"], "redniBroj" => $_POST["redniBroj"]])
    ->isExecuteResult();
if ($result) {
    redirectBack();
}
