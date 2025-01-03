<?php

use Stripe\LineItem;

require __DIR__ . "/vendor/autoload.php";
?>
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
        <select name="clothes" id="clothes">

            <option value="pents">pents</option>
            <option value="shirt">shirt</option>
            <option value="Tshirt">Tshirt</option>
        </select>
        <label for="number" class="number" id="label2">enter amount</label>
        <input type="number" name="number" id="number" class="number">
        <textarea cols=35 rows=10 name="message" id="masaage" placeholder="give me feedback" class="masaage"></textarea>
        <input type="submit" value="send" id="send" name="send" class="submit">
    </form>
</body>

</html>
<?php
if (isset($_POST['send'])) {
    print_r($_POST);
    $product = $_POST['clothes'];
    $price = $_POST['number'];
    $price = $price * 100;

    $stripe_secrete_KEY = "sk_test_51Qd9RQBlCykLAMs1OO78UGFi0iPWfyeV4za0dsU21UFwmC86RzuZkf8LTJ2Le4Vs1M4YW6FIGXUhb7YlFxA7CaOz00py77cYah";
    \Stripe\Stripe::setApiKey($stripe_secrete_KEY);
    $CSO = \Stripe\Checkout\Session::create([
        "mode" => "payment",

        "line_items" => [
            [
                "quantity" => 1,
                "price_data" => [
                    "currency" => "usd",
                    "unit_amount" => $price,
                    "product_data" => [
                        "name" =>   $product
                    ]
                ]
            ]
        ],
        "success_url" => "http://localhost/vivek/StripePayment/PaymentGateway/success.php",
    ]);
    header("Location: " . $CSO->url);
    exit();
    // Handle errors, such as A
}
?>