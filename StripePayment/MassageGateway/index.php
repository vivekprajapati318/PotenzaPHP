<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>number Gatway</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>

<body>
    <form action="index.php" method="post">
        <label for="text" class="name" id="label1">name</label>
        <input type="text" name="name" id="name" class="name">
        <label for="number" class="number" id="label2">number</label>
        <input type="number" name="number" id="number" class="number">

        <label for="textbox" class="name" id="label1">massege</label>
        <textarea cols=35 rows=10 name="message" id="masaage" class="masaage"></textarea>
        <input type="submit" value="send" id="send" name="send" class="submit">
    </form>
</body>

</html>
<?php


use Infobip\Configuration;
use Infobip\Api\SmsApi;
use Infobip\Model\SmsDestination;
use Infobip\model\SmsTextualMessage;
use Infobip\Model\SmsAdvancedTextualRequest;

require __DIR__ . "/vendor/autoload.php";

if (isset($_POST['send'])) {
    $name = $_POST['name'];
    $number = $_POST['number'];
    $message = $_POST['message'];
    print_r($_POST);
    $base_url = "lqwyrw.api.infobip.com";
    $api_key = "f39f9e1c8b23ec238032faca48206f59-19531b83-7df6-48ca-9eb9-9256f2eaf953";
    $connfiguration = new Configuration($base_url, $api_key);
    $api = new SmsApi($connfiguration);
    $destination = new SmsDestination($number);
    $message  = new SmsTextualMessage(
        destinations: [$destination],
        text: $message
    );
    $request = new SmsAdvancedTextualRequest([$message]);
    $response = $api->sendSmsMessage($request);
}
echo "massage sent";
?>