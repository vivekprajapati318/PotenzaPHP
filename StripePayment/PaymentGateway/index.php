<?php

use Stripe\Stripe;
use Stripe\Checkout\Session;

require __DIR__ . "/vendor/autoload.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number Gateway</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <style>
        /* Basic Body Styling */
        body {
            background-color: #f4f7f6;
            font-family: Arial, sans-serif;
            padding: 20px;
        }

        /* Center the form */
        form {
            max-width: 500px;
            margin: 0 auto;
            background: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        /* Label Styling */
        label {
            font-size: 16px;
            color: #333;
            font-weight: bold;
            margin-top: 15px;
            display: block;
        }

        /* Input and Textarea Styling */
        input[type="text"],
        input[type="number"],
        textarea {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        /* Submit Button Styling */
        input[type="submit"] {
            background: #4CAF50;
            color: white;
            padding: 12px;
            font-size: 16px;
            width: 100%;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        input[type="submit"]:hover {
            background: #45a049;
        }

        /* Select Box Styling */
        select {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        /* Textarea Styling */
        textarea {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        /* Add some spacing between form elements */
        .form-group {
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <form action="index.php" method="post">
        <div class="form-group">
            <label for="clothes">Select Clothes</label>
            <select name="clothes" id="clothes">
                <option value="pents">Pants</option>
                <option value="chaddi">Shirt</option>
                <option value="Tshirt">T-shirt</option>
            </select>
        </div>

        <div class="form-group">
            <label for="number">Enter Amount</label>
            <input type="number" name="number" id="number" class="number" required>
        </div>

        <div class="form-group">
            <label for="message">Feedback</label>
            <textarea name="message" id="message" placeholder="Give me feedback" class="message" required></textarea>
        </div>

        <div class="form-group">
            <input type="submit" value="Send" id="send" name="send" class="submit">
        </div>
    </form>
</body>

</html>

<?php
if (isset($_POST['send'])) {
    print_r($_POST);
    $product = $_POST['clothes'];
    $price = $_POST['number'];
    $price = $price * 100; // Stripe requires amount in cents

    $stripe_secret_KEY = "sk_test_51Qd9RQBlCykLAMs1OO78UGFi0iPWfyeV4za0dsU21UFwmC86RzuZkf8LTJ2Le4Vs1M4YW6FIGXUhb7YlFxA7CaOz00py77cYah";
    \Stripe\Stripe::setApiKey($stripe_secret_KEY);

    $CSO = \Stripe\Checkout\Session::create([
        "mode" => "payment",
        "line_items" => [
            [
                "quantity" => 1,
                "price_data" => [
                    "currency" => "usd",
                    "unit_amount" => $price,
                    "product_data" => [
                        "name" => $product
                    ]
                ]
            ]
        ],
        "success_url" => "http://localhost/vivek/StripePayment/PaymentGateway/success.php",
    ]);

    header("Location: " . $CSO->url);
    exit();
}
?>