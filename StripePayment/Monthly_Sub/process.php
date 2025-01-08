<?php

use Stripe\StripeClient;

require __DIR__ . "./vendor/autoload.php";

$name = $_POST['name'];
$email = $_POST['email'];
$Stoken = $_POST['stripeToken'];

$stripe_KEY = new StripeClient('sk_test_51Qd9RQBlCykLAMs1OO78UGFi0iPWfyeV4za0dsU21UFwmC86RzuZkf8LTJ2Le4Vs1M4YW6FIGXUhb7YlFxA7CaOz00py77cYah');

try {
    // Create a customer in Stripe
    $customer = $stripe_KEY->customers->create([
        'name' => $name,
        'email' => $email,
        'source' => $Stoken,
    ]);

    $customerID = $customer->id;

    // Create a subscription for the customer
    $subscription = $stripe_KEY->subscriptions->create([
        'customer' => $customerID,
        'items' => [
            ['price' => 'price_1QeuGNBlCykLAMs150asb5o7'],
        ],
    ]);

    if ($subscription->status == 'active') {
        echo "
        <html>
        <head>
            <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' rel='stylesheet'>
            <style>
                body {
                    background-color: #f8f9fa;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    height: 100vh;
                    margin: 0;
                }
                .message {
                    text-align: center;
                    background: #e9f7ef;
                    color: #155724;
                    border: 2px solid #c3e6cb;
                    padding: 20px;
                    border-radius: 10px;
                    font-family: Arial, sans-serif;
                }
                h1 {
                    font-size: 2.5rem;
                }
                p {
                    font-size: 1.2rem;
                }
            </style>
        </head>
        <body>
            <div class='message'>
                <h1>🎉 Subscription Successful!</h1>
                <p>Hurrah! You have successfully subscribed to our service.</p>
                <p>Thank you, <strong>$name</strong>, for choosing us!</p>
            </div>
        </body>
        </html>
        ";
    } else {
        echo "
        <html>
        <head>
            <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' rel='stylesheet'>
            <style>
                body {
                    background-color: #f8f9fa;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    height: 100vh;
                    margin: 0;
                }
                .message {
                    text-align: center;
                    background: #f8d7da;
                    color: #721c24;
                    border: 2px solid #f5c6cb;
                    padding: 20px;
                    border-radius: 10px;
                    font-family: Arial, sans-serif;
                }
                h1 {
                    font-size: 2.5rem;
                }
                p {
                    font-size: 1.2rem;
                }
            </style>
        </head>
        <body>
            <div class='message'>
                <h1>😞 Subscription Failed</h1>
                <p>Sorry, something went wrong. Please try again later.</p>
            </div>
        </body>
        </html>
        ";
    }
} catch (Exception $e) {
    echo "
    <html>
    <head>
        <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' rel='stylesheet'>
        <style>
            body {
                background-color: #f8f9fa;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                margin: 0;
            }
            .message {
                text-align: center;
                background: #f8d7da;
                color: #721c24;
                border: 2px solid #f5c6cb;
                padding: 20px;
                border-radius: 10px;
                font-family: Arial, sans-serif;
            }
            h1 {
                font-size: 2.5rem;
            }
            p {
                font-size: 1.2rem;
            }
        </style>
    </head>
    <body>
        <div class='message'>
            <h1>⚠️ Error Occurred</h1>
            <p>" . htmlspecialchars($e->getMessage()) . "</p>
        </div>
    </body>
    </html>
    ";
}
