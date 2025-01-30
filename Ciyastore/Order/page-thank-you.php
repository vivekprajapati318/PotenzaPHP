<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Ciyastore-thankyou</title>
    <!-- Favicon -->
    <link rel="icon" href="../assets/images/favicon.png" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700%7CPoppins:400,500,600,700&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="../assets/css/plugins.css" />
    <!-- Base Style CSS -->
    <link rel="stylesheet" href="../assets/css/style.css" />
    <!-- category css -->
    <link rel="stylesheet" href="../assets/css/categories/default.css" />
    <!-- REVOLUTION STYLE SHEETS -->
    <link rel="stylesheet" type="text/css" href="revolution/css/settings.css" />
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <!-- REVOLUTION LAYERS STYLES -->
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
            color: #333;
        }

        header {
            background-color: rgb(25, 222, 147);
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        header h1 {
            margin: 0;
            font-size: 36px;
        }

        .thank-you-message {
            text-align: center;
            margin-top: 30px;
        }

        .thank-you-message h2 {
            font-size: 28px;
            color: #2d4059;
        }

        .order-summary {
            margin: 30px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            width: 80%;
            max-width: 600px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .order-summary h3 {
            margin-top: 0;
            font-size: 24px;
            color: #333;
        }

        .order-summary ul {
            list-style: none;
            padding: 0;
        }

        .order-summary li {
            display: flex;
            justify-content: space-between;
            padding: 10px 0;
            border-bottom: 1px solid #ddd;
        }

        .order-summary .total {
            font-weight: bold;
            font-size: 18px;
        }

        .cta-buttons {
            text-align: center;
            margin-top: 30px;
        }

        .back {
            background-color: transparent;
            border: none;
            font-size: 24px;
            cursor: pointer;
            color: #333;
            transition: color 0.3s ease;
            border: 2px solid rgb(25, 222, 147);
            border-radius: 25%;
        }

        .back:hover {
            color: #007bff;
        }

        .cta-buttons a {
            display: inline-block;
            background-color: rgb(25, 222, 147);

            color: #fff;
            padding: 12px 24px;
            text-decoration: none;
            border-radius: 30px;
            font-size: 16px;
            margin: 10px;
        }

        .cta-buttons a:hover {
            background-color: rgb(25, 222, 147);

        }

        .social-media {
            text-align: center;
            margin-top: 30px;
        }

        .social-media a {
            color: #1e2a47;
            text-decoration: none;
            font-size: 18px;
            margin: 0 10px;
        }

        .social-media a:hover {
            text-decoration: underline;
        }

        footer {
            background-color: rgb(25, 222, 147);

            color: #fff;
            text-align: center;
            padding: 10px 0;
            font-size: 14px;
        }
    </style>
</head>

<body>

    <header>
        <h1>Ciyastore</h1>
    </header>
    <button class="back"> &#8592; back</button>

    <div class="thank-you-message">
        <h2>Thank you for your order, [Customer Name]!</h2>
        <p>We're getting your order ready to be shipped, and you'll receive a confirmation email shortly.</p>
    </div>

    <div class="order-summary">
        <h3>Order Summary</h3>
        <ul>
            <li>
                <span>Item 1</span>
                <span>$29.99</span>
            </li>
            <li>
                <span>Item 2</span>
                <span>$49.99</span>
            </li>
            <li class="total">
                <span>Total</span>
                <span>$79.98</span>
            </li>
        </ul>
        <p><strong>Order #12345</strong></p>
    </div>

    <div class="cta-buttons">
        <a href="/track-order">Track Your Order</a>
        <a href="/shop">Continue Shopping</a>
    </div>

    <div class="social-media">
        <p>Share your Ciyastore find with us! Tag us on social media:</p>
        <a href="https://facebook.com/ciyastore" target="_blank">Facebook</a>
        <a href="https://instagram.com/ciyastore" target="_blank">Instagram</a>
        <a href="https://twitter.com/ciyastore" target="_blank">Twitter</a>
    </div>
    <?php require "../footer.php" ?>
    <script>
        $('.back').on("click", function() {
            window.history.back()
        })
    </script>
</body>

</html>