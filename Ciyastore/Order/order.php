<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Ciyastore - Multi-Purpose Responsive HTML5 eCommerce Template</title>
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
</head>

<body>


    <div class="site-content">
        <div class="inner-intro shop-intro">
            <div class="container">
                <div class="row intro-title align-items-center">
                    <div class="col-md-6 text-left">
                        <div class="intro-title-inner">
                            <h1>Checkout</h1>
                        </div>
                    </div>
                    <div class="col-md-6 text-right">
                        <ul class="ciyastore_breadcrumbs page-breadcrumb breadcrumbs">
                            <li class="home">
                                <span class="item-element">
                                    <a class="bread-link bread-home" href="../index.php">Home</a>
                                </span>
                            </li>
                            <li><span class="item-element">Checkout</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-wrapper section-spacing">
            <div class="container">
                <?php if (isset($_SESSION['email'])) {
                } else {
                    echo ' <div class="row">
                    <div class="col-xl-6">
                        <div class="user-info message">
                            Returning customer? <a href="../index.php" class="showlogin" data-toggle="modal" data-target="#pgs_login_form">Click here to login</a>
                        </div>
                    </div>';
                }
                ?>
            </div>
            <div class="row ">
                <div class="col-xl-6">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="billing-fields">
                                <h3>Billing details</h3>
                                <div class="billing-fields__field-wrapper">


                                    <?php
                                    require "../DBconn/DB.php";
                                    $result = $conn->query("SELECT * FROM ciyastore WHERE Email='$_SESSION[email]'");
                                    if (mysqli_num_rows($result) > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {

                                            $name = $row['customer_name'];
                                            $name = explode(" ", $name);
                                            $first = $name[0];
                                            $last = $name[1];
                                            $phone =    $row['phone'];
                                            $email =    $row['Email'];
                                        }
                                    }
                                    ?>
                                    <div class="form-group">
                                        <label for="billing_first_name" class="">First name&nbsp;<abbr class="required" title="required">*</abbr>
                                        </label>
                                        <input type="text" tabindex="1" class="form-control " name="billing_first_name" id="billing_first_name" readonly placeholder="" value="<?php echo  $first; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="billing_last_name" class="">Last name&nbsp;<abbr class="required" title="required">*</abbr></label>
                                        <input type="text" tabindex="2" class="form-control " name="billing_last_name" id="billing_last_name" placeholder="" readonly value="<?php echo  $last; ?>">
                                    </div>


                                    <div class="form-group">
                                        <label for="billing_address_1" class="">Street address&nbsp;<abbr class="required" title="required">*</abbr></label>
                                        <input type="text" tabindex="5" class="form-control" name="billing_address_1" id="billing_address_1" placeholder="House number and street name" value="">
                                    </div>
                                    <div class="form-group">
                                        <label for="billing_address_2" class="screen-reader-text">Apartment, suite,
                                            unit etc.&nbsp;<span class="optional">(optional)</span></label>
                                        <input type="text" tabindex="6" class="form-control" name="billing_address_2" id="billing_address_2" placeholder="Apartment, suite, unit etc. (optional)" value="">
                                    </div>
                                    <div class="form-group">
                                        <label for="billing_city" class="">Town / City&nbsp;<abbr class="required" title="required">*</abbr></label>
                                        <input type="text" tabindex="7" class="form-control" name="billing_city" id="billing_city" placeholder="" value="">
                                    </div>
                                    <div class="form-group">
                                        <label for="billing_state" class="">State / County&nbsp;<abbr class="required" title="required">*</abbr></label>
                                        <select name="billing_state" id="billing_state" class="select2 select2-accessible" data-placeholder="" tabindex="-1" data-select2-id="billing_state">
                                            <option value="" data-select2-id="36">Select a state…</option>
                                            <option value="AP">Andhra Pradesh</option>
                                            <option value="AR">Arunachal Pradesh</option>
                                            <option value="AS">Assam</option>
                                            <option value="BR">Bihar</option>
                                            <option value="CT">Chhattisgarh</option>
                                            <option value="GA">Goa</option>
                                            <option value="GJ">Gujarat</option>
                                            <option value="HR">Haryana</option>
                                            <option value="HP">Himachal Pradesh</option>
                                            <option value="JK">Jammu and Kashmir</option>
                                            <option value="JH">Jharkhand</option>
                                            <option value="KA">Karnataka</option>
                                            <option value="KL">Kerala</option>
                                            <option value="MP">Madhya Pradesh</option>
                                            <option value="MH">Maharashtra</option>
                                            <option value="MN">Manipur</option>
                                            <option value="ML">Meghalaya</option>
                                            <option value="MZ">Mizoram</option>
                                            <option value="NL">Nagaland</option>
                                            <option value="OR">Orissa</option>
                                            <option value="PB">Punjab</option>
                                            <option value="RJ">Rajasthan</option>
                                            <option value="SK">Sikkim</option>
                                            <option value="TN">Tamil Nadu</option>
                                            <option value="TS">Telangana</option>
                                            <option value="TR">Tripura</option>
                                            <option value="UK">Uttarakhand</option>
                                            <option value="UP">Uttar Pradesh</option>
                                            <option value="WB">West Bengal</option>
                                            <option value="AN">Andaman and Nicobar Islands</option>
                                            <option value="CH">Chandigarh</option>
                                            <option value="DN">Dadra and Nagar Haveli</option>
                                            <option value="DD">Daman and Diu</option>
                                            <option value="DL">Delhi</option>
                                            <option value="LD">Lakshadeep</option>
                                            <option value="PY">Pondicherry (Puducherry)</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="billing_postcode" class="">Postcode / ZIP&nbsp;<abbr class="required" title="required">*</abbr></label>
                                        <input type="text" tabindex="9" class="form-control" name="billing_postcode" id="billing_postcode" placeholder="" value="" autocomplete="postal-code">
                                    </div>
                                    <div class="form-group">
                                        <label for="billing_phone" class="">Phone&nbsp;<abbr class="required" title="required">*</abbr></label>
                                        <input type="tel" tabindex="10" class="form-control" name="billing_phone" id="billing_phone" readonly placeholder="" value="<?php echo  $phone; ?>" autocomplete="tel">
                                    </div>
                                    <div class="form-group">
                                        <label for="billing_email" class="">Email address&nbsp;<abbr class="required" title="required">*</abbr></label>
                                        <input type="email" tabindex="11" class="form-control" name="billing_email" id="billing_email" readonly placeholder="" value="<?php echo  $email; ?>" autocomplete="email">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="shipping-fields">
                                <h3 id="ship-to-different-address">
                                    <label class="checkbox">
                                        <input id="ship-to-different-address-checkbox" class="input-checkbox" type="checkbox" name="ship_to_different_address" value="1"> <span>Ship
                                            to a different address?</span>
                                    </label>
                                </h3>
                            </div>
                            <div class="additional-fields">
                                <div class="additional-fields__field-wrapper">
                                    <div class="form-group">
                                        <label for="order_comments" class="">Order notes&nbsp;<span class="optional">(optional)</span></label>
                                        <textarea name="order_comments" class="form-control" id="order_comments" placeholder="Notes about your order, e.g. special notes for delivery." rows="5" cols="5"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <h3 id="order_review_heading">Your order</h3>
                    <div id="order_review" class="checkout-review-order">
                        <table class="shop_table checkout-review-order-table">
                            <thead>
                                <tr>
                                    <th class="product-name">Product</th>
                                    <th class="product-total">Total</th>
                                </tr>
                            </thead>
                            <tbody>



                                <?php
                                $sql = $conn->query("SELECT Title , price, quantity from cart where Email='$_SESSION[email]';");

                                if (mysqli_num_rows($sql) > 0) {
                                    while ($row = mysqli_fetch_assoc($sql)) {


                                        echo '
                                <tr class="cart_item">
                                    <td class="product-name">
                                      ' . $row['Title'] . ' <strong class="product-quantity">× ' . $row['quantity'] . '</strong>
                                    </td>
                                    <td class="product-total">
                                        <span class="woocs_special_price_code"><span class="Price-amount amount"><span class="Price-currencySymbol">$</span>' . $row['price'] * $row['quantity'] . '</span>
                                        </span>
                                    </td>
                                </tr>';
                                    }
                                }
                                ?>




                            </tbody>
                            <tfoot>
                                <tr class="cart-subtotal">
                                    <th>Subtotal</th>
                                    <td><span class="woocs_special_price_code"><span class="Price-amount amount"><span class="Price-currencySymbol">$</span><?php echo  $_GET['stotal']  ?></span>
                                        </span>
                                    </td>
                                </tr>
                                <tr class="shipping-totals shipping">
                                    <th>Shipping</th>
                                    <td data-title="Shipping">
                                        <ul id="shipping_method" class="shipping-methods">
                                            <li>
                                                <input type="radio" name="shipping_method[0]" data-index="0" id="shipping_method_0_flat_rate3" value="flat_rate:3" class="shipping_method" checked="checked"><label for="shipping_method_0_flat_rate3">Flat rate: <span class="Price-amount amount"><span class="Price-currencySymbol"></span>8%</span></label>
                                            </li>
                                            <li>
                                                <input type="radio" name="shipping_method[0]" data-index="0" id="shipping_method_0_local_pickup4" value="local_pickup:4" class="shipping_method"><label for="shipping_method_0_local_pickup4">Local pickup: <span class="Price-amount amount"><span class="Price-currencySymbol"></span>8%</span></label>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr class="order-total">
                                    <th>Total</th>
                                    <td><strong><span class="woocs_special_price_code"><span class="Price-amount amount1" value="<?php echo  $_GET['amo']  ?>"><span class="Price-currencySymbol">$</span><?php echo  $_GET['amo']  ?></span></span></strong>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                        <div id="payment" class="checkout-payment">
                            <ul class="payment_methods methods">
                                <li class="payment_method_bacs">
                                    <input id="payment_method_bacs" type="radio" class="input-radio" name="payment_method" value="bacs" data-order_button_text="">
                                    <label for="payment_method_bacs">
                                        Direct bank transfer </label>
                                    <div class="payment_box payment_method_bacs">
                                        <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.
                                        </p>
                                    </div>
                                </li>

                                <li class="payment_method_cod">
                                    <input id="payment_method_cod" type="radio" class="input-radio" name="payment_method" value="cod" checked="checked" data-order_button_text="">
                                    <label for="payment_method_cod">
                                        Cash on delivery </label>
                                    <div class="payment_box payment_method_cod">
                                        <p>Pay with cash upon delivery.</p>
                                    </div>
                                </li>
                                <li class="payment_method_paypal">
                                    <input id="payment_method_paypal" type="radio" class="input-radio" name="payment_method" value="UPI" data-order_button_text="Proceed to UPI">
                                    <label for="payment_method_paypal">
                                        UPI <img src="https://www.shutterstock.com/shutterstock/photos/2327361425/display_1500/stock-vector-unified-payments-interface-upi-logo-vector-editorial-use-only-july-bangalore-india-2327361425.jpg" alt="UPI acceptance mark"><a href="https://www.npci.org.in/what-we-do/upi/product-overview" class="about_paypal" onclick="javascript:window.open('https://www.npci.org.in/what-we-do/upi/product-overview','WIPaypal','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1060, height=700'); return false;">What
                                            is UPI?</a> </label>
                                    <div class="payment_box payment_method_paypal" style="display:none;">
                                        <p>Pay via UPI; you can pay with your credit card if you don’t have a UPI account. SANDBOX ENABLED. You can use sandbox testing accounts only. See the <a href="https://developer.BHIM.com/docs/classic/lifecycle/ug_sandbox/">UPI
                                                Sandbox Testing Guide</a> for more details.
                                        </p>
                                    </div>
                                </li>
                            </ul>
                            <div class="form-row place-order">
                                <noscript>
                                    Since your browser does not support JavaScript, or it is disabled, please ensure
                                    you click the &lt;em&gt;Update Totals&lt;/em&gt; button before placing your
                                    order. You may be charged more than the amount stated above if you fail to do
                                    so. <br /><button type="submit" class="button alt" name="checkout_update_totals" value="Update totals">Update
                                        totals</button>
                                </noscript>
                                <div class="terms-and-conditions-wrapper">
                                    <div class="privacy-policy-text">
                                        <p>Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our <a href="#" class="privacy-policy-link" target="_blank">privacy
                                                policy</a>.
                                        </p>
                                    </div>

                                    <p class="form-row validate-required">
                                        <label class="form__label form__label-for-checkbox checkbox">
                                            <input type="checkbox" class="form__input form__input-checkbox input-checkbox" name="terms" id="terms">
                                            <span class="terms-and-conditions-checkbox-text">I have read
                                                and agree to the website <a href="#" class="terms-and-conditions-link" target="_blank">terms and conditions</a></span>&nbsp;<span class="required">*</span>
                                        </label>
                                        <input type="hidden" name="terms-field" value="1">
                                    </p>
                                </div>
                                <button class="button alt" id="place_order">Place
                                    order</button>
                                <input type="hidden" id="process-checkout-nonce" name="process-checkout-nonce" value="22d433e66f"><input type="hidden" name="_wp_http_referer" value="/?wc-ajax=update_order_review">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#place_order').on("click", function() {
                var amount = $(".Price-amount.amount1 ").text()
                amount = amount.substring(1)
                address1 = $("#billing_address_1").val()
                address2 = $("#billing_address_2").val()
                city = $("#billing_city").val()
                state = $("#billing_state").val()
                zipcode = $("#billing_postcode").val()
                var address = address1 + "/" + address2 + "," + city + "," + state + "," + zipcode
                $('input[name="payment_method"]:checked').each(function() {
                    payment_method = $(this).val()
                })
                addErr = cityErr = stateErr = zipErr = 0

                if (address1 == "") {
                    alert('empty address')
                    addErr = 1;
                }
                if (city == "") {
                    alert('empty city')
                    cityErr = 1;
                }
                if (state == "") {
                    alert('empty state')
                    stateErr = 1
                }
                if (zipcode == "") {
                    alert('empty zipcode')
                    zipErr = 1
                }
                if (zipcode.length != 6) {
                    alert("zipcode must be of 6 latter")
                    zipErr = 1
                }
                let pattern = /^[0-9]+$/;
                if (pattern.test(zipcode) == false) {
                    console.log('only numbers')
                    zipErr = 1
                }
                if (addErr == 1 || cityErr == 1 || stateErr == 1 || zipErr == 1) {
                    alert("invalid cradencials")
                } else {
                    $.ajax({
                        url: "AddOrder.php",
                        type: "post",
                        data: {
                            address: address,
                            amount: amount,
                            payment_method: payment_method
                        },

                        success: function(data) {
                            alert(data)
                            if (data == "UPI" || data == 'bacs') {
                                window.location.href = `../PaymentGateway?amount=${amount}`;
                            }
                            if (data == "cod") {
                                window.location.href = "./page-thank-you.php"
                            }

                        }
                    })
                }
            })
        })
    </script>

</body>

</html>