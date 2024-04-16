<?php
$db = \Core\App::resolve(\Core\Database::class);

$sql = "
    UPDATE raspored SET active = :active WHERE spID = :spID;
    INSERT INTO raspored 
        (spID, mediaID, kategorija) 
    VALUES (:spID, :mediaID, :kategorija);
    ";
$bindParams = [
    "active" => false,
    "kategorija" => "ispiti",
    "spID" => $_POST["spID"],
    "mediaID" => $_POST["mediaID"],
];
$result = $db->query($sql, $bindParams)->isExecuteResult();
if ($result) {
    redirectBack();
}