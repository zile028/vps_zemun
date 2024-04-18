<?php
$db = \Core\App::resolve(\Core\Database::class);
$sql = "
    INSERT INTO osoblje_odbor (osobljeID, odborID, pozicija) VALUES (:osobljeID,:odborID,:pozicija);
";
$result = $db->query($sql, [
    "osobljeID" => $_POST["osobljeID"],
    "odborID" => $params["id"],
    "pozicija" => $_POST["pozicija"],

])->isExecuteResult();

redirectBack();