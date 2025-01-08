<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success</title>
    <style>
        /* Basic Body Styling */
        body {
            background-color: #f0f8ff;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            color: #333;
        }

        /* Success Box Styling */
        .success-box {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 300px;
        }

        /* Heading Styling */
        h1 {
            font-size: 36px;
            color: #4CAF50;
            margin-bottom: 20px;
        }

        /* Success Message Styling */
        p {
            font-size: 18px;
            color: #555;
        }

        /* Button Styling */
        .back-button {
            display: inline-block;
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            font-size: 16px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .back-button:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <div class="success-box">
        <h1>Success</h1>
        <p>Your payment has been successfully processed!</p>
        <a href="index.php" class="back-button">Go Back</a>
    </div>
</body>

</html>