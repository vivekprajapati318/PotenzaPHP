<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin </title>

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
        .container {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 0;
        }

        .container1 {
            max-width: 600px;
            margin: 0 auto;
        }

        .form-group {
            margin-bottom: 20px;
            text-align: left;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input[type="button"],
        input[type="submit"] {
            display: inline-block;
            padding: 10px 15px;
            font-size: 16px;
            color: #022222;
            background-color: #04d39f;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-align: center;
        }

        input[type="button"]:hover,
        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .lk {
            margin: 20px 0;
            text-align: center;
        }

        .form-group input[type="submit"] {
            width: 100%;
        }
    </style>
</head>

<body>
    <?php

    if ($_SESSION['User'] == "admin") {
    ?>
        <div class="container">
            <div class="container1">
                <input type="button" id="back" value="Back">
                <input type="button" id="home" value="home">

                <div class="lk" id="lk"></div>
                <div class="userData form-group">
                    <label for="UserData">User data will be stored here</label>
                    <input type="submit" id="user" value="User's Data">
                </div>

                <div class="ProductData form-group">
                    <label for="ProductData">Product details will be stored here</label>
                    <input type="submit" id="Pro" value="Product Details">
                </div>



                <div class="ProductData form-group">
                    <label for="AddProductData">New product details</label>
                    <input type="submit" id="ProAdd" value="Add Product">
                </div>

                <div class="lkj"></div>
            </div> <?php } else {

                    echo "<script> window.location.href = '../adminLogin.php'</script>'";
                }

                    ?>
        </div>
        <?php require "../footer.php"; ?>
</body>


</html>

<script>
    $('#back').hide()


    $(document).on("click", '#back', function() {
        window.location.href = "index.php"
    })
    $(document).ready(function() {

        $("#user").on('click', function() {
            $.ajax({
                url: "UserData.php",
                type: 'POST',
                success: function(data) {
                    $("#lk").html(data);
                    $('.form-group').hide()
                    $('#back').show()
                }
            })
        })
        $("#Pro").on('click', function() {
            $.ajax({
                url: "Product.php",
                type: 'POST',
                success: function(data) {
                    $("#lk").html(data);
                    $('.form-group').hide()
                    $('#back').show()
                    window.location.href = "Product.php"
                }
            })
        })
        $("#ProAdd").on('click', function() {
            $.ajax({
                url: "Addprod.php",
                type: 'POST',
                success: function(data) {
                    $("#lk").html(data);
                    $('.form-group').hide()
                    $('#back').show()
                }
            })
        })

        $("#home").on('click', function() {

            $.ajax({
                url: '../sess.php',
                success: function() {
                    alert('logged out')
                    window.location.href = "../index.php";
                }
            })
        })
        $('a#login').text("admin")


    })
</script>
</body>

</html>