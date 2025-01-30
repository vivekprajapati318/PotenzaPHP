<?php session_start() ?>
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
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <!-- REVOLUTION LAYERS STYLES -->
    <style>
        .back {
            background-color: transparent;
            border: none;
            font-size: 24px;
            cursor: pointer;
            color: #333;
            transition: color 0.3s ease;
        }

        .back:hover {
            color: #007bff;
            /* Change color on hover */
        }
    </style>
</head>

<body>
    <div class="commm"></div>
    <?php require "header.php"; ?>
    <button class="back"> &#8592; back</button>

    <div class="site-content">
        <div class="inner-intro shop-intro">
            <div class="container">
                <div class="row intro-title align-items-center">
                    <div class="col-md-6 text-left">
                        <div class="intro-title-inner">
                            <h1>Shopping Cart</h1>
                        </div>
                    </div>
                    <div class="col-md-6 text-right">
                        <ul class="ciyastore_breadcrumbs page-breadcrumb breadcrumbs">
                            <li class="home">
                                <span class="item-element">
                                    <a class="bread-link bread-home" href="index.php">Home</a>
                                </span>
                            </li>
                            <li><span class="item-element">Shopping Cart</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-wrapper  section-spacing">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8">


                        <table class="table cart-table">


                            <thead>
                                <tr class="heading-row">
                                    <th class="product-remove"></th>
                                    <th class="product-thumbnail"></th>
                                    <th class="product-name">
                                        <span class="nobr">Product</span>
                                    </th>
                                    <th class="product-price">
                                        <span class="nobr">
                                            Price </span>
                                    </th>
                                    <th class="product-stock-status">
                                        Quantity
                                    </th>
                                    <th class="product-subtotal">Total</th>
                                </tr>
                                <?php

                                require "./DBconn/DB.php";
                                if (isset($_SESSION['email'])) {
                                    $sql =  "SELECT * FROM cart where Email='$_SESSION[email]'; ";
                                    $result = $conn->query($sql);
                                    if (mysqli_num_rows($result) > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {

                                            $iamge = $row['image'];
                                            $image =  explode(" ", $iamge);
                                            $Title = $row['Title'];
                                            $price = $row['price'];


                                            $out = '
                            

                                <tr>
                                    <td class="product-remove "style="display:flex co;or">
                                        <button class="remove"   data-id="' . $row["proid"] . '">  </button>
                                    </td>
                                    <td class="product-thumbnail">
                                        <a href="#">
                                            <img src="' . $image[0] . '" alt="product">
                                        </a>
                                    </td>
                                    <td class="product-name" data-title="Product">
                              ' . $Title . '
                                    </td>
                                    <td class="product-price price" min="0" name="price" id="price" value="' . $price . '" data-title="Price">
                                      ' .  $price . '
                                    </td>';
                                            $out .= '
                                    <td class="product-quantity" data-title="Quantity">
                                        <div class="number-input md-number-input" style="display:flex;">
                                            <button onclick="this.parentNode.querySelector(\'input[type=number]\').stepDown()" class="minus">-</button>
                                            <input class="quantity" min="0" name="quantity" id="quantity" value="1" type="number">
                                            <button onclick="this.parentNode.querySelector(\'input[type=number]\').stepUp()" class="plus">+</button>
                                        </div>
                                    </td>
                                
                                    </td>
                                    <td class="product-subtotal price" data-title="Total">
                                        <lable class="price" min="0" name="price" id=toAmount>160.00</lable>
                                    </td>
                                </tr>
                               ';



                                            echo $out;
                                        }
                                    }
                                } else {
                                    echo "<h2 style='background-color:rgb(25, 222, 147);color:rgb(102, 107, 106);'>login  for using add to cart functionality </h2>";
                                }

                                ?>


                            </thead>
                        </table>

                    </div>





                    <div class="cart_totals ">
                        <h2>Cart totals</h2>
                        <table class="shop_table shop_table_responsive">
                            <tbody>
                                <tr class="cart-subtotal">
                                    <th>Subtotal</th>
                                    <td data-title="Subtotal"><span class="woocs_special_price_code"><span class="Price-amount amount"><span class="Price-currencySymbol">$</span>196.00</span>
                                        </span>
                                    </td>
                                </tr>
                                <tr class="shipping-totals shipping">
                                    <th>Shipping</th>
                                    <td data-title="Shipping">
                                        <ul id="shipping_method" class="shipping-methods">
                                            <li>
                                                <input type="radio" name="shipping_method[0]" data-index="0" id="shipping_method_0_flat_rate3" value="flat_rate:3" class="shipping_method" checked="checked"><label for="shipping_method_0_flat_rate3">Flat rate: <span class="Price-amount amount2"><span class="Price-currencySymbol">$</span>0.00</span></label>
                                            </li>
                                            <li>
                                                <input type="radio" name="shipping_method[0]" data-index="0" id="shipping_method_0_local_pickup4" value="local_pickup:4" class="shipping_method"><label for="shipping_method_0_local_pickup4">Local pickup: <span class="Price-amount amount2"><span class="Price-currencySymbol">$</span>0.00</span></label>
                                            </li>
                                        </ul>
                                        <p class="shipping-destination">
                                            Estimate for <strong>India</strong>. </p>
                                        <form class="shipping-calculator" method="post">
                                            <a href="#" class="shipping-calculator-button">Change address</a>
                                        </form>
                                    </td>
                                </tr>
                                <tr class="order-total">
                                    <th>Total</th>


                                    <td data-title="Total" style="text-align: right; padding: 10px; background-color: #f8f9fa;">
                                        <strong>
                                            <span class="special_price_code" style="font-weight: bold; color: #333;">
                                                <span class="Price-amount amount3" style="font-size: 1.2rem;">
                                                    <span class="Price-currencySymbol" style="font-size: 1.2rem; color: #28a745;">$</span>
                                                    0.00
                                                </span>
                                            </span>
                                        </strong>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="proceed-to-checkout">
                            <a href="checkout.php" class="checkout-button button">
                                Proceed to checkout</a>
                        </div>
                    </div>

                    <?php require "footer.php"; ?>
                    <script>
                        $(document).ready(function() {
                            function updateCart() {
                                var total = 0;
                                var totalwith_tax = 0;
                                $('table.cart-table tr').each(function() {
                                    var price = parseFloat($(this).find('.product-price').text().replace('$', "").trim());

                                    parseFloat(price);

                                    var quantity = parseInt($(this).find('.quantity').val());

                                    if (!isNaN(price) && !isNaN(quantity)) {
                                        var subtotal = price * quantity;

                                        total += subtotal;


                                        // console.log(total)
                                        totalwith_tax = (total * 0.08) + total

                                        $(this).find(' .product-subtotal ').text('$' + subtotal.toFixed(2));
                                    }
                                });
                                var pal1 = $(' .cart_totals .cart-subtotal td ').text('$' + total.toFixed(2));

                                var pal = $('.cart_totals .order-total ').text('$' + totalwith_tax.toFixed(2));
                                // console.log(pal, pal1)
                            }

                            updateCart();
                            $(document).on('click', ' .remove', function() {

                                id = $(this).data('id')

                                $.ajax({
                                    url: "./cart/RemoveItem.php",
                                    type: "POST",
                                    data: {
                                        id: id
                                    },
                                    success: function(data) {

                                        alert("deleted")
                                        window.location.reload()
                                    }
                                })


                            })
                            $(document).on('click', ' .minus', function() {
                                updateCart();
                                $.ajax({
                                    Url: "./cart/quantplus.php",

                                })
                            });
                            $(document).on('click', '.plus ', function() {
                                updateCart();
                            });

                            $(document).on('input', '.quantity', function() {
                                updateCart();
                            });
                            $('.back').on("click", function() {
                                window.history.back()
                            })
                            $(document).on("click", "a#login", function() {

                                $('.commm').load("login.php", function() {

                                    $("#pgs_login_form").toggle()
                                })

                            })

                        });
                    </script>

</body>

</html>