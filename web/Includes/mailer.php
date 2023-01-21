<?php

require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);

// $mail->SMTPDebug = SMTP::DEBUG_SERVER;

$mail->isSMTP();
$mail->SMTPAuth = true;

$mail->Host = "YourHostHere";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;

$mail->Username = "YourUserNameHere";
$mail->Password = "YourPassWordHere";

$mail->setFrom("Email Sender", "Sender Name");
$mail->addAddress("Email Recipient", "Recipient Name");

/*
///change this to form data 
$mail->Subject = $subject;
$mail->Body = $message;

$mail->send();
header("Location: sent.html");
*/

