<?php

require_once "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;

$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];

// use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer();
$mail->isSMTP();
$mail->Host = 'sandbox.smtp.mailtrap.io';
$mail->SMTPAuth = true;
$mail->Port = 2525;
$mail->Username = '11e7b9bea214c6';
$mail->Password = '68ea307bc6c951';

$mail->setFrom($email, $name);
$mail->addAddress("jaronshoulars4@gmail.com", "Jaron");

$mail->Subject = $subject;
$mail->Body = $message;

$mail->send();

// header("Location: sent.html");