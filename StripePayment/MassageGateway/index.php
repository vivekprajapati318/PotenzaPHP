<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number Gateway</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>

<body>
    <form action="index.php" method="post">
        <label for="name" class="name" id="label1">Name</label>
        <input type="text" name="name" id="name" class="name" required>

        <label for="number" class="number" id="label2">Number</label>
        <input type="text" name="number" id="number" class="number" required placeholder="+1234567890">

        <label for="message" class="name" id="label1">Message</label>
        <textarea cols="35" rows="10" name="message" id="message" class="message" required></textarea>

        <input type="submit" value="Send" id="send" name="send" class="submit">
    </form>
</body>

</html>
<?php
require __DIR__ . '/vendor/autoload.php';

use Twilio\Rest\Client;

if (isset($_POST['send'])) {
    print_r($_POST);
    $name = $_POST['name'];
    $to = $_POST['number'];
    $message = $_POST['message'];
    try {

        $account_sid = 'ACf38ef576183810ffb8b9a7288a27d0df';
        $auth_token = 'ffe59a503c73f656a2f0ee25d2be70fb';
        $twilio_phone_number = '+12347203666';
        $client = new Client($account_sid, $auth_token);
        $messageResponse = $client->messages->create(
            $to,
            [
                'from' => $twilio_phone_number,
                'body' => $message,
            ]
        );

        echo 'Message sent successfully! Message SID: ' . $messageResponse->sid;
    } catch (Exception $e) {
        echo 'Error: ' . $e->getMessage();
    }
}
?>