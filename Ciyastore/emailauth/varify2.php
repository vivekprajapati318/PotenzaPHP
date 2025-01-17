
<?php
session_start();
require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

if (isset($_POST)) {

    $email = $_POST['email'];
    $_SESSION['email'] = $email;

    $conn = new mysqli("localhost", "root", "", "vivek");
    $sql = "SELECT Email FROM ciyastore where Email= '$email'";
    $result = $conn->query($sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $to = $row['Email'];
    }
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die('Invalid email address.');
}

$message = random_int(100000, 999999); // Secure random 6-digit code

$mail = new PHPMailer(true);

try {
    // SMTP Configuration
    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;
    $mail->Username = 'vivekprajapati120304@gmail.com';
    $mail->Password = 'uyzq shbm bsso wyja';
    $mail->setFrom('vivekprajapati120304@gmail.com', 'Vivek Prajapati');
    $mail->addAddress($email);

    // Email Content
    $mail->Subject = "Verification Code";
    $mail->Body = "This is your verification code: " . $message;

    $mail->send();
    echo  $message;
} catch (Exception $e) {
    error_log("Mailer Error: {$mail->ErrorInfo}"); // Log error for debugging
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
