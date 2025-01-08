<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number Gateway</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <style>
        /* Background Image with Light Colors */
        body {
            background-image: url('https://source.unsplash.com/1600x900/?nature,communication');
            background-size: cover;
            background-position: center;
            font-family: Arial, sans-serif;
            color: white;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
        }

        /* Form Styling with Light Colors */
        form {
            background-color: rgba(255, 255, 255, 0.8);
            /* Light background */
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 500px;
        }

        label {
            display: block;
            font-weight: 600;
            font-size: 1.1rem;
            margin-top: 10px;
            color: #6c757d;
            /* Light gray */
        }

        input,
        textarea {
            width: 100%;
            padding: 12px;
            margin-top: 8px;
            margin-bottom: 16px;
            border-radius: 8px;
            border: 1px solid #ced4da;
            background-color: #f8f9fa;
            /* Light background */
            color: #495057;
            /* Dark gray */
            font-size: 1rem;
        }

        input[type="submit"] {
            background-color: #ffc107;
            /* Light yellow */
            font-size: 1.1rem;
            font-weight: bold;
            cursor: pointer;
            border: none;
            padding: 15px;
            border-radius: 8px;
            transition: background-color 0.3s ease;
            color: #fff;
        }

        input[type="submit"]:hover {
            background-color: #e0a800;
            /* Darker yellow */
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            form {
                padding: 20px;
            }

            input,
            textarea {
                font-size: 0.9rem;
                padding: 10px;
            }

            label {
                font-size: 1rem;
            }
        }
    </style>
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