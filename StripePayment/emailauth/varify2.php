<?php
require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;



$name = $_POST['name'];
$email = $_POST['email'];

$message = rand(0000000, 999999);

$mail = new PHPMailer(true);
$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->Host = 'smtp.gmail.com';
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;
$mail->Username = 'vivekprajapati120304@gmail.com';
$mail->Password = 'zjph mmhq zwsc fhpy';
$mail->setFrom('vivekprajapati120304@gmail.com', 'Vivek Prajapati');
$mail->addAddress($email, 'Vivek Prajapati');

$mail->Subject = "here this massage is sent to you for varification";
$mail->Body = "this is a varification code " . $message;




try {
    $mail->send();
    echo $message;
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
