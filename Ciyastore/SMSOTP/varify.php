<?php
session_start();
require __DIR__ . '/vendor/autoload.php';

use Twilio\Rest\Client;

$Email = $_POST['email'];
$_SESSION['email'] = $Email;
$to = "+919173133627";
if (isset($_POST)) {


    $conn = new mysqli("localhost", "root", "", "vivek");
    $sql = "SELECT phone FROM ciyastore where Email= '$Email'";
    $result = $conn->query($sql);

    $k = 0;
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $to = $row['phone'];
    }
}

$message = rand(111111, 999999);
try {
    $account_sid = 'ACf38ef576183810ffb8b9a7288a27d0df';
    $auth_token = 'ffe59a503c73f656a2f0ee25d2be70fb';
    $twilio_phone_number = '+12347203666';
    $client = new Client($account_sid, $auth_token);

    $messageResponse = $client->messages->create(
        $to,
        [
            'from' => $twilio_phone_number,
            'body' => "Your OTP is " . $message,
        ]
    );

    echo  $message;  // Check if message was sent successfully
} catch (Exception $e) {
    echo 'Error: ' . $e->getMessage(); // Show error message from Twilio API
}
