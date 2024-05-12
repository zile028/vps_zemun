<?php
$sql = "UPDATE studijski_programi SET 
        naziv = :naziv,
        modul = :modul,
        nivo = :nivo,
        trajanje = :trajanje,
        opis = :opis,
        espb = :espb,
        zvanje = :zvanje,
        polje = :polje,
        akreditovan = :akreditovan,
        cilj = :cilj,
        ishod = :ishod
        WHERE id = :id";

$db = \Core\App::resolve(\Core\Database::class);
$data = $_POST;
unset($data["_method"]);
$data["id"] = $params["id"];
$db->query($sql, $data);
redirectBack();