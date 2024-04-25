<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . "/../../../vendor/phpmailer/phpmailer/src/Exception.php";
require_once __DIR__ . "/../../../vendor/phpmailer/phpmailer/src/PHPMailer.php";
require_once __DIR__ . "/../../../vendor/phpmailer/phpmailer/src/SMTP.php";

$data = $_POST;
// Generisanje slučajnog niza bajtova dužine 5
$randomBytes = random_bytes(5);
// Konvertovanje slučajnih bajtova u heksadecimalni format
$generatedPassword = bin2hex($randomBytes);
$data["password"] = password_hash($generatedPassword, PASSWORD_BCRYPT);

$sql = "INSERT INTO users (firstName, lastName, email, password, role) VALUES (:firstName, :lastName, :email, :password, :role)";
$db = \Core\App::resolve(\Core\Database::class);
$result = $db->query($sql, $data)->affectedRows();

$mail = new PHPMailer();
$mail->isSMTP();
$mail->Host = MAIL_HOST;
$mail->SMTPAuth = true;
$mail->Username = MAIL_USERNAME;
$mail->Password = MAIL_PASSWORD;
$mail->Port = MAIL_PORT;
$mail->CharSet = $mail::CHARSET_UTF8;
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->setFrom(MAIL_USERNAME, "ВПШ Београд");
$mail->addAddress($_POST["email"], $data["firstName"] . " " . $data["lastName"]);
$mail->addBCC("zile028@gmail.com", "VPS BEOGRAD");
$mail->Subject = 'Ваш налог је креиран!';
// Set HTML
$mail->isHTML(TRUE);
$mail->Body = "
    <ul>
        <li>Korisnik: " . $data["firstName"] . " " . $data["lastName"] . "</li>        
        <li>Username: " . $data['email'] . "</li>
        <li>Password: " . $generatedPassword . "</li>
    </ul>
";
// send the message
if (!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    redirectBack();
}