<?php
$db = \Core\App::resolve(\Core\Database::class);
$sql = "SELECT naziv,id,nivo,opis,espb,polje,akreditovan,zvanje,trajanje, modul
        FROM studijski_programi
        WHERE id = :id;
        ##SELECT PREDMETI
        SELECT p.*
        FROM predmeti p
        JOIN sp_predmet sp ON sp.predmetID = p.id
        WHERE sp.spID = :id AND p.lang = 'srb';";
$studije = $db->query($sql, $params)->findOne(PDO::FETCH_OBJ);
$predmeti = $db->nextRowsetFind(PDO::FETCH_OBJ);
view("studije_single.view", [
    "heroTitle" => $studije->naziv,
    "heroSubtitle" => $studije->modul,
    "heroImage" => $studije->espb . "_thumbnail.jpg",
    "studije" => $studije,
    "predmeti" => $predmeti
]);