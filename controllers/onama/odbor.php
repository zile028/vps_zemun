<?php

$db = \Core\App::resolve(\Core\Database::class);

$sql = "
SELECT odbor FROM odbori WHERE id = :odborID AND lang = 'srb';
    SELECT oo.pozicija, o.firstName,o.lastName,o.image,o.rank, o.title, o.email, o.id
    FROM osoblje o
    JOIN osoblje_odbor oo ON oo.osobljeID = o.id
    JOIN odbori od ON od.id = oo.odborID
    WHERE oo.odborID = :odborID
    ORDER BY oo.prioritet
    ;
";

$odbor = $db->query($sql, $params)->findOne(PDO::FETCH_OBJ);
$osoblje = $db->nextRowsetFind(PDO::FETCH_OBJ | PDO::FETCH_GROUP);

view("odbor.view", [
    "heroImage" => "hero_odbor.jpg",
    "heroTitle" => $odbor->odbor,
    "odbor" => $osoblje
]);