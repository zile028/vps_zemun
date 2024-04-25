<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . "/../../vendor/phpmailer/phpmailer/src/Exception.php";
require_once __DIR__ . "/../../vendor/phpmailer/phpmailer/src/PHPMailer.php";
require_once __DIR__ . "/../../vendor/phpmailer/phpmailer/src/SMTP.php";
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
$mail->addAddress($_POST["email"], $_POST["fullName"]);
$mail->Subject = 'Хвала што сте нас контактирали!';
// Set HTML
$mail->isHTML(TRUE);
$mail->Body = $_POST["message"];
// send the message
if (!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    redirectBack();
}