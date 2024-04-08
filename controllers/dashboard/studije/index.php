<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);
$studije = $db->query("
                        SELECT sp.id, sp.*,m.modul
                        FROM studijski_programi sp
                        LEFT JOIN moduli m ON m.spID = sp.id 
                       "
)->find(PDO::FETCH_GROUP | PDO::FETCH_OBJ);


view("dashboard/studije/index.view", ["studije" => $studije]);