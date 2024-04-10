<?php
$db = \Core\App::resolve(\Core\Database::class);

$sql = "UPDATE sp_predmet SET 
                redniBroj = :redniBroj
                WHERE predmetID=:predmetID AND spID = :spID";
$bindValue = [
    "redniBroj" => $_POST["order"],
    "predmetID" => $params["predmetID"],
    "spID" => $params["spID"]
];
$result = $db->query($sql, $bindValue)->isExecuteResult();
redirectBack();