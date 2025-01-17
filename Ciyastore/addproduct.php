<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Ciyastore - Multi-Purpose Responsive HTML5 eCommerce Template</title>
    <!-- Favicon -->
    <link rel="icon" href="assets/images/favicon.png" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700%7CPoppins:400,500,600,700&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/css/plugins.css" />
    <!-- Base Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css" />
    <!-- category css -->
    <link rel="stylesheet" href="assets/css/categories/default.css" />
    <!-- REVOLUTION STYLE SHEETS -->
    <link rel="stylesheet" type="text/css" href="revolution/css/settings.css" />
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
            background-color: #eef2f3;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            animation: fadeIn 1s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        .login {
            background: linear-gradient(135deg, #89f7fe, #66a6ff);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            animation: slideIn 1s ease-in-out;
        }

        @keyframes slideIn {
            from {
                transform: translateY(-50px);
            }

            to {
                transform: translateY(0);
            }
        }

        .login .form-group label {
            font-weight: bold;
            margin-bottom: 5px;
            display: block;
            color: #333;
        }

        .login .form-control {
            border-radius: 10px;
            height: 40px;
            padding: 10px;
            border: 1px solid #ced4da;
            transition: border-color 0.3s, box-shadow 0.3s;
        }

        .login .form-control:focus {
            border-color: #0056b3;
            box-shadow: 0 0 5px rgba(0, 86, 179, 0.5);
        }

        .login .form-group img {
            display: block;
            width: 100%;
            height: auto;
            margin: 10px 0;
            border-radius: 10px;
            border: 2px solid #ddd;
        }

        .login .button {
            background-color: #0056b3;
            border: none;
            color: white;
            padding: 10px 20px;
            border-radius: 10px;
            font-size: 16px;
            cursor: pointer;
            width: 100%;
            margin-top: 10px;
            transition: background-color 0.3s, transform 0.2s;
        }

        .login .button:hover {
            background-color: #0041a3;
            transform: scale(1.05);
        }

        .login .form-group input[type="number"] {
            -moz-appearance: textfield;
        }

        .login .form-group input::-webkit-inner-spin-button,
        .login .form-group input::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
</head>

<body>
    <form action="#" method="post" class="login">
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" id="title" placeholder="Enter title">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <input class="form-control" type="text" placeholder="Enter description" name="description" id="description">
        </div>
        <div class="form-group">
            <label for="mainimage">Main Image</label>
            <img src="assets/images/example.jpg" alt="Main Image">
        </div>
        <div class="form-group">
            <label for="images">Images</label>
            <?php
            ?>
            <input class="form-control" type="text" placeholder="Enter image URL" name="image" id="image">
        </div>
        <div class="form-group">
            <label for="SKU">SKU</label>
            <input class="form-control" type="number" placeholder="Enter SKU" name="SKU" id="SKU">
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input class="form-control" type="number" placeholder="Enter price" name="price" id="price">
        </div>
        <div class="form-group">
            <input type="submit" class="button btn-primary submit-login" name="add" value="Add">
        </div>
    </form>
</body>

</html>