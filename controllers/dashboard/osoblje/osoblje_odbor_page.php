<?php
$db = \Core\App::resolve(\Core\Database::class);
$sql = "
    SELECT o.id, o.firstName, o.lastName, o.title, o.rank, o.image
        FROM osoblje o
            WHERE o.id NOT IN (SELECT osobljeID FROM osoblje_odbor WHERE odborID = :id)
    ;
    SELECT * FROM odbori WHERE id = :id;
    SELECT DISTINCT pozicija FROM osoblje_odbor WHERE lang = 'srb';
    SELECT oo.pozicija, oo.prioritet, o.id,
           CONCAT(o.title,' ', o.firstName,' ',o.lastName) AS fullName, o.image, o.`rank` 
        FROM osoblje_odbor oo
        JOIN osoblje o ON o.id = oo.osobljeID
        WHERE odborID = :id
        ORDER BY oo.prioritet ;
";
$osoblje = $db->query($sql, ["id" => $params["id"]])->find(PDO::FETCH_OBJ);
$odbor = $db->nextRowset()->findOne(PDO::FETCH_OBJ);
$pozicije = $db->nextRowset()->find(PDO::FETCH_COLUMN);
$clanovi = $db->nextRowset()->find(PDO::FETCH_OBJ | PDO::FETCH_GROUP);

view("dashboard/osoblje/osoblje_odbor.view", ["osoblje" => $osoblje, "odbor" => $odbor,
    "pozicije" => $pozicije, "clanovi" => $clanovi]);