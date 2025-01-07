
<?php
require __DIR__ . '/vendor/autoload.php';

use Twilio\Rest\Client;

$name = $_POST['name'];
$to = $_POST['number'];
$message = rand(111111, 999999);
try {

    // $account_sid = 'YOUR AcCOUNT ID';
    // $auth_token = 'YOUR AUTH TOKEn';
    // $twilio_phone_number = 'NUMBER';
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