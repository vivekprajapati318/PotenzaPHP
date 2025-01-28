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
</head>

<body>
    <?php require "header.php"; ?>

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

                                <tr>
                                    <td class="product-remove">
                                        <a href="#" class="remove"></a>
                                    </td>
                                    <td class="product-thumbnail">
                                        <a href="#">
                                            <img src="assets/images/shop/img-03.jpg" alt="product">
                                        </a>
                                    </td>
                                    <td class="product-name" data-title="Product">
                                        Girl's Cold Shoulder Bling Dress – Black
                                    </td>
                                    <td class="product-price" min="0" name="price" id="price" value="160" data-title="Price">
                                        160.00
                                    </td>
                                    <td class="product-quantity" data-title="Quantity">
                                        <div class="number-input md-number-input" style="display:flex;">
                                            <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus">-</button>
                                            <input class="quantity" min="0" name="quantity" id="quantity" value="1" type="number">
                                            <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus">+</button>
                                        </div>
                                    </td>
                                    <td class="product-subtotal price" data-title="Total">
                                        <lable class="price" min="0" name="price" id=toAmount>160.00</lable>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="6" class="actions">
                                        <div class="coupon">
                                            <label for="coupon_code">Coupon:</label> <input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="Coupon code"> <button type="submit" class="button" name="apply_coupon" value="Apply coupon">Apply coupon</button>
                                        </div>
                                        <button type="submit" class="button" name="update_cart" value="Update cart" disabled="">Update cart</button>
                                    </td>
                                </tr>
                            </thead>
                        </table>
                    </div>
                    <div class="cart-collaterals col-xl-4">
                        <div class="cart_totals ">
                            <h2>Cart totals</h2>
                            <table class="shop_table shop_table_responsive">
                                <tbody>
                                    <tr class="cart-subtotal">
                                        <th>Subtotal</th>
                                        <td data-title="Subtotal"><span class="woocs_special_price_code"><span class="Price-amount amount"><span class="Price-currencySymbol">$</span></span>
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
                                        <td data-title="Total"><strong><span class="special_price_code"><span class="Price-amount amount3"><span class="Price-currencySymbol">$</span>196.00</span></span></strong>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="proceed-to-checkout">
                                <a href="checkout.php" class="checkout-button button">
                                    Proceed to checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require "footer.php"; ?>
    <script>
        $(document).ready(function() {
            var quant = $('#quantity').val()
            var price = $('#price').html().trim()
            console.log(price)
            console.log(quant)
            var total = (price * 1) + price * 8 / 100
            $('.amount').text(total)

            $('.amount2').text(price * 8 / 100)
            $('.amount3').text(total)

            $(".plus").on('click', function() {

                var quant = $('#quantity').val()
                var price = $('#price').html().trim()
                console.log(price)
                console.log(quant)

                console.log(quant)
                var tax = (quant * price) * 8 / 100
                total = (quant * price) + tax
                $('.amount2').text(tax)
                console.log(total)
                var quant = $('#toAmount').text(total)
                var quant = $('.amount').text(total)
                var quant = $('.amount3').text(total)
            })
            $(".minus").on('click', function() {
                var quant = $('#quantity').val()
                var price = $('#price').html().trim()
                console.log(price)
                console.log(quant)
                var tax = (quant * price) * 8 / 100
                total = (quant * price) + tax
                $('.amount2').text(tax)
                console.log(total)
                var quant = $('#toAmount').text(total)
                var quant = $('.amount').text(total)
                $('.amount3').text(total)

            })
        })
    </script>

</body>

</html>