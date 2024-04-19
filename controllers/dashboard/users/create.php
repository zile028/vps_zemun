<?php
$data = $_POST;

// Generisanje slučajnog niza bajtova dužine 5
$randomBytes = random_bytes(5);
// Konvertovanje slučajnih bajtova u heksadecimalni format
$generatedPassword = bin2hex($randomBytes);
$generatedPassword = 12345;
$data["password"] = password_hash("12345", PASSWORD_BCRYPT);

$sql = "INSERT INTO users (firstName, lastName, email, password, role) VALUES (:firstName, :lastName, :email, :password, :role)";
$db = \Core\App::resolve(\Core\Database::class);
$result = $db->query($sql, $data)->affectedRows();
redirect("/dashboard/users");