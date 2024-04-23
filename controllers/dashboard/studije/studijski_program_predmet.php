<?php

$db = \Core\App::resolve(\Core\Database::class);
$izborni = isset($_POST["izborni"]);
$sql = "INSERT INTO sp_predmet (spID, predmetID,redniBroj,izborni,semestar) VALUES (:spID,:predmetID, :redniBroj,:izborni,:semestar)";
$result = $db->query($sql, ["spID" => $params["id"], "predmetID" => $_POST["predmetID"], "redniBroj" => $_POST["redniBroj"], "izborni" => $izborni, "semestar" => $_POST["semestar"]])
    ->isExecuteResult();
if ($result) {
    redirectBack();
}
