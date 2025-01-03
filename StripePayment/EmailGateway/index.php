<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Gatway</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>

<body>
    <form action="index.php" method="post">
        <label for="text" class="name" id="label1">name</label>
        <input type="text" name="name" id="name" class="name">
        <label for="email" class="email" id="label2">email</label>
        <input type="email" name="email" id="email" class="email">

        <label for="    " class="subject" id="label3">subject</label>
        <input type="text" name="subjecti" id="subjecti" class="subjecti">
        <label for="textbox" class="name" id="label1">massege</label>
        <textarea cols=35 rows=10 name="massage" id="masaage" class="masaage"></textarea>
        <input type="submit" value="send" id="send" name="send" class="submit">
    </form>
</body>

</html>


<?php
require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

if (isset($_POST['send'])) {
    print_r($_POST);
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subjecti'];
    $message = $_POST['massage'];

    // Setup PHPMailer
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->Host = 'smtp.gmail.com'; // Replace with your SMTP server (e.g., smtp.gmail.com)
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;
    $mail->Username = 'vivekprajapati120304@gmail.com'; // Replace with your SMTP username
    $mail->Password = 'zjph mmhq zwsc fhpy'; // Replace with your SMTP password

    // Sender and recipient
    $mail->setFrom('vivekprajapati120304@gmail.com', 'Vivek Prajapati'); // Sender's email
    $mail->addAddress($email, 'Vivek Prajapati'); // Recipient's email

    // Email content
    $mail->Subject = $subject;
    $mail->Body = $message;

    // Send email
    try {
        $mail->send();
        echo "Message has been sent.";
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>