<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);
$studije = $db->query("
                        SELECT sp.id, sp.*
                        FROM studijski_programi sp
                        ORDER BY FIELD(espb, 180,60,120), akreditovan DESC
                       "
)->find(PDO::FETCH_OBJ);

view("dashboard/studije/index.view", ["studije" => $studije]);