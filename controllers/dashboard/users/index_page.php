<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);
$sql = "SELECT * FROM users ";
$users = $db->query($sql)->find(PDO::FETCH_OBJ);

view("dashboard/users/index.view", ["users" => $users]);