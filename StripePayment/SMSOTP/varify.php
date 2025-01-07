
<?php
require __DIR__ . '/vendor/autoload.php';

use Twilio\Rest\Client;

$name = $_POST['name'];
$to = $_POST['number'];
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
            'body' => "your OTP is " . $message,
        ]
    );
    echo $message;
} catch (Exception $e) {
    echo 'Error: ' . $e->getMessage();
}

?>