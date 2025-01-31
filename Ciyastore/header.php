<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ciya store</title>

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
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <header class="site-header header-style-menu-center">
        <div class="topbar topbar-bg-color-default topbar-desktop-on topbar-mobile-off">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <div class="topbar-left text-left">
                            <div class="topbar-link">
                                <ul>
                                    <li class="topbar_item topbar_item_type-currency">
                                        <select class="select23 select2-hidden-accessible" data-select2-id="4" tabindex="-1" aria-hidden="true">
                                            <option id="6">USD ($)</option>
                                            <option>EUR (€)</option>
                                        </select><span class="select23 select2-container select2-container--default" dir="ltr" data-select2-id="5" style="width: 89px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-hnt7-container"><span class="select2-selection__rendered" id="select2-hnt7-container" role="textbox" aria-readonly="true" title="USD ($)">USD ($)</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </li>
                                    <li class="topbar_item topbar_item_type-email">
                                        <a href="mailto:vivekprajapati318@gmail.com"><i class="fa fa-envelope-o">&nbsp;</i>vivekprajapati@318.com</a>
                                    </li>
                                    <li class="topbar_item topbar_item_type-phone_number">
                                        <a href="tel:9173133627"><i class="fa fa-phone">&nbsp;</i>9173133627</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="topbar-right text-right">
                            <div class="topbar-link">
                                <ul>
                                    <li class="topbar_item topbar_item_type-topbar_menu">
                                        <ul class="top-menu list-inline">
                                            <li class="menu-item">
                                            <li>
                                                <a id="login" data-toggle="modal" data-target="#pgs_login_form"><i class="fa fa-sign-in">&nbsp;</i>
                                                    Login</a>
                                            </li>
                                            <li>
                                                <label for="user" id="lable1">
                                                    <?php if (isset($_SESSION['email'])) {
                                                        echo $_SESSION['email'];
                                                        echo "<script>$('a#login').hide();</script>";
                                                    } ?>
                                                </label>
                                            </li>


                                        </ul>
                                    </li>
                                    <li class="topbar_item topbar_item_type-social_profiles">
                                        <ul class="topbar-social_profiles">
                                            <li class="topbar-social_profile">
                                                <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                                            </li>
                                            <li class="topbar-social_profile">
                                                <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                                            </li>
                                            <li class="topbar-social_profile">
                                                <a href="#" target="_blank"><i class="fa fa-google-plus"></i></a>
                                            </li>
                                            <li class="topbar-social_profile">
                                                <a href="#" target="_blank"><i class="fa fa-vimeo"></i></a>
                                            </li>
                                            <li class="topbar-social_profile">
                                                <a href="#" target="_blank"><i class="fa fa-pinterest"></i></a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-main header-main-bg-color-default">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row align-items-center justify-content-md-center">
                            <div class="col-xl-2 col-lg-2 col-5">
                                <div class="logo-wrapper">
                                    <a href="index.php">
                                        <img class="img-fluid " src="assets/images/logo.png" alt="CiyaStore">
                                    </a>
                                </div>
                            </div>
                            <div class="col" id="mainMenu">
                                <div class="header-nav header-nav-bg-color-default">
                                    <div class="row justify-content-center">
                                        <div class="primary-nav-wrapper">
                                            <nav id="menu" class="mega-menu" data-color="">
                                                <!-- menu list items container -->
                                                <div class="menu-list-items">
                                                    <!-- menu links -->
                                                    <ul class="menu-links mega-menu-primary" style="display: none; max-height: 400px; overflow: auto;">
                                                        <!-- active class -->
                                                        <li class="hoverTrigger active">
                                                            <a href="index.php">Home <div class="mobileTriggerButton"></div></a>
                                                            <!-- drop down multilevel  -->

                                                        <li class="hoverTrigger">
                                                            <a href="Blog.php">Blog</i>
                                                                <div class="mobileTriggerButton"></div>
                                                            </a>
                                                            <!-- drop down multilevel  -->

                                                        </li>
                                                        <li class="hoverTrigger">
                                                            <a href="Shop.php">Shop<div class="mobileTriggerButton"></div></a>
                                                            <!-- drop down full width -->

                                                        </li>
                                                        <li class="hoverTrigger">
                                                            <a href="javascript:void(0)">Shop Hover <i class="fa fa-angle-down fa-indicator"></i>
                                                                <div class="mobileTriggerButton"></div>
                                                            </a>
                                                            <!-- drop down full width -->
                                                            <div class="drop-down grid-col-12 effect-expand-top" style="transition: 400ms;">
                                                                <!--grid row-->
                                                                <div class="grid-row">

                                                                    <div class="grid-col-2">
                                                                        <h4>Product Hovers</h4>
                                                                        <ul>
                                                                            <li class="mega-menu-item">
                                                                                <input type="button" class="Filterman" id="man" value="men">
                                                                            </li>
                                                                            <li class="mega-menu-item">
                                                                                <input type="button" id="woman" value="women">
                                                                            </li>
                                                                            <li class="mega-menu-item">
                                                                                <input type="button" id="kids" value="kids">
                                                                            </li>
                                                                            <li class="mega-menu-item">
                                                                                <input type="button" id="footwear" value="footwear">
                                                                            </li>
                                                                            <li class="mega-menu-item">
                                                                                <input type="button" id="Winter" value="winter wear">
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="hoverTrigger">
                                                            <a href="javascript:void(0)">My Account <i class="fa fa-angle-down fa-indicator"></i>
                                                                <div class="mobileTriggerButton"></div>
                                                            </a>
                                                            <ul class="drop-down-multilevel effect-expand-top" style="transition: 400ms;">
                                                                <li class="hoverTrigger">
                                                                    <a href="javascript:void(0)">account
                                                                        Pages<i class="fa fa-angle-right fa-indicator"></i>
                                                                        <div class="mobileTriggerButton">

                                                                        </div>
                                                                    </a>
                                                                    <ul class="drop-down-multilevel effect-expand-top" style="transition: 400ms;">
                                                                        <li class="mega-menu-item">
                                                                            <label for="username" id="UserName" style="font-size:small;"><?php if (isset($_SESSION['User'])) {
                                                                                                                                                echo $_SESSION['email'];
                                                                                                                                            } else {
                                                                                                                                                echo 'no user, login first';
                                                                                                                                            }
                                                                                                                                            ?>
                                                                            </label>
                                                                        </li>
                                                                        <li class="mega-menu-item">
                                                                            <?php if (isset($_SESSION['User'])) {
                                                                                echo '  <a class="mega-menu-link" href="Update_profile.php">  update profile</a>';
                                                                            } else {
                                                                                echo "";
                                                                            }
                                                                            ?>


                                                                        </li>

                                                                        <li class="mega-menu-item" id="reset">
                                                                            <?php if (isset($_SESSION['User'])) {
                                                                                echo '   <a class="mega-menu-link" href="resetPass.php">
                                                                                reset password</a>';
                                                                            } else {
                                                                                echo ` login first`;
                                                                            }
                                                                            ?>


                                                                        </li>

                                                                        <li class="mega-menu-item form-group">
                                                                            <input type="button" id="logout" value="logout">
                                                                        </li>
                                                                    </ul>



                                                            </ul>
                                                        </li>




                                                        <li class="hoverTrigger">
                                                            <a href="javascript:void(0)">Pages <i class="fa fa-angle-down fa-indicator"></i>
                                                                <div class="mobileTriggerButton"></div>
                                                            </a>
                                                            <ul class="drop-down-multilevel effect-expand-top" style="transition: 400ms;">
                                                                <li class="hoverTrigger">
                                                                    <a href="javascript:void(0)">Basic
                                                                        Pages<i class="fa fa-angle-right fa-indicator"></i>
                                                                        <div class="mobileTriggerButton"></div>
                                                                    </a>
                                                                    <ul class="drop-down-multilevel effect-expand-top" style="transition: 400ms;">
                                                                        <li class="mega-menu-item">
                                                                            <a class="mega-menu-link" href="page-about-us.html">About
                                                                                Us</a>
                                                                        </li>
                                                                        <li class="mega-menu-item">
                                                                            <a class="mega-menu-link" href="page-contact-us.html">Contact
                                                                                Us</a>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                                <li class="hoverTrigger">
                                                                    <a href="javascript:void(0)">Information
                                                                        Pages<i class="fa fa-angle-right fa-indicator"></i>
                                                                        <div class="mobileTriggerButton"></div>
                                                                    </a>
                                                                    <ul class="drop-down-multilevel effect-expand-top" style="transition: 400ms;">
                                                                        <li class="mega-menu-item">
                                                                            <a class="mega-menu-link" href="page-terms-condition.html">Terms
                                                                                Conditions</a>
                                                                        </li>
                                                                        <li class="mega-menu-item">
                                                                            <a class="mega-menu-link" href="page-privacy-policy.html">Privacy
                                                                                Policy</a>
                                                                        </li>
                                                                        <li class="mega-menu-item">
                                                                            <a class="mega-menu-link" href="page-team-members.html">Team
                                                                                Members</a>
                                                                        </li>
                                                                        <li class="mega-menu-item">
                                                                            <a class="mega-menu-link" href="page-typography.html">Typography</a>
                                                                        </li>
                                                                        <li class="mega-menu-item">
                                                                            <a class="mega-menu-link" href="page-payment-method.html">Payment
                                                                                Method</a>
                                                                        </li>
                                                                        <li class="mega-menu-item">
                                                                            <a class="mega-menu-link" href="page-shipping-method.html">Shipping
                                                                                Method</a>
                                                                        </li>
                                                                        <li class="mega-menu-item">
                                                                            <a class="mega-menu-link" href="page-warranty-and-services.html">Warranty
                                                                                and Services</a>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                                <li class="hoverTrigger">
                                                                    <a href="javascript:void(0)">Portfolio<i class="fa fa-angle-right fa-indicator"></i>
                                                                        <div class="mobileTriggerButton"></div>
                                                                    </a>
                                                                    <ul class="drop-down-multilevel effect-expand-top" style="transition: 400ms;">
                                                                        <li class="mega-menu-item ">
                                                                            <a class="mega-menu-link" href="portfolio-style-1.html">Portfolio
                                                                                Style 01</a>
                                                                        </li>
                                                                        <li class="mega-menu-item ">
                                                                            <a class="mega-menu-link" href="portfolio-style-2.html">Portfolio
                                                                                Style 02</a>
                                                                        </li>
                                                                        <li class="mega-menu-item ">
                                                                            <a class="mega-menu-link" href="portfolio-style-3.html">Portfolio
                                                                                Style 03</a>
                                                                        </li>
                                                                        <li class="mega-menu-item ">
                                                                            <a class="mega-menu-link" href="portfolio-style-4.html">Portfolio
                                                                                Style 04</a>
                                                                        </li>
                                                                        <li class="mega-menu-item ">
                                                                            <a class="mega-menu-link" href="portfolio-style-5.html">Portfolio
                                                                                Style 05</a>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                                <li class="hoverTrigger">
                                                                    <a href="javascript:void(0)">Extra
                                                                        Pages<i class="fa fa-angle-right fa-indicator"></i>
                                                                        <div class="mobileTriggerButton"></div>
                                                                    </a>
                                                                    <ul class="drop-down-multilevel effect-expand-top" style="transition: 400ms;">
                                                                        <li class="mega-popular-label mega-menu-item ">
                                                                            <a class="mega-menu-link" href="error-404.html">404</a>
                                                                        </li>
                                                                        <li class="mega-menu-item ">
                                                                            <a class="mega-menu-link" href="coming-soon.html">Coming
                                                                                Soon</a>
                                                                        </li>
                                                                        <li class="mega-menu-item ">
                                                                            <a class="mega-menu-link" href="maintenance.html">Maintenance</a>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-7">
                                <div class="header-nav-right-wrapper">
                                    <div class="ciya-tools">
                                        <ul class="ciya-tools-actions">
                                            <li class="ciya-tools-action ciya-tools-cart">
                                                <a class="cart-link" href="cart.php">
                                                    <span class="cart-icon"><i class="glyph-icon pgsicon-ecommerce-empty-shopping-cart"></i></span>
                                                    <span class="cart-count count">
                                                        <?php
                                                        require "./DBconn/DB.php";
                                                        if (isset($_SESSION['email'])) {
                                                            $sql = $conn->query("SELECT COUNT('proid') from cart WHERE Email= '$_SESSION[email]';");
                                                            $result = mysqli_fetch_array($sql);
                                                            echo $result[0];
                                                        } else {
                                                            echo 0;
                                                        } ?></span>
                                                </a>




                                                <!-- cart hover -->
                                                <div class="widget ciyastore widget-shopping-cart">
                                                    <div class="widget-shopping-cart-content">
                                                        <div class="product-list-widget-container has-scrollbar">
                                                            <ul class="ciyastore-mini-cart cart-list">


                                                                <?PHP
                                                                if (isset($_SESSION['email'])) {
                                                                    require "./DBconn/DB.php";
                                                                    $sql = $conn->query("SELECT * FROM cart WHERE Email='$_SESSION[email]'");
                                                                    $total = 0;
                                                                    if (mysqli_num_rows($sql) > 0) {
                                                                        while ($row = mysqli_fetch_assoc($sql)) {

                                                                            $image = $row['image'];
                                                                            $image = explode(" ", $image);

                                                                            echo '    <li class="ciya-mini-cart-item">

                                                                    <div class="media"> <button class="remove remove_from_cart_button"data-id="' . $row['proid'] . '" style="margin-top :25px;">X</button>
                                                                        <a href="#"><img width="60" height="76" src="' . $image[0] . '" data-src="assets/images/shop/img-03.jpg" class="img-fluid" alt=""></a>
                                                                        <div class="media-body">
                                                                                    <h6>' . $row['Title'] . '
                                                                                    </h6>
                                                                            <span class="quantity">' . $row['quantity'] . ' × <span class="woocs-special_price_code"><span class="ciya-Price-amount amount"><span class="ciya-Price-currencySymbol">$</span>' . $row['price'] . '</span>
                                                                                </span>
                                                                            </span>
                                                                        </div>
                                                                    </div>  
                                                                    </li>  ';


                                                                            $val22 = $row['quantity'] * $row['price'];
                                                                            $total += $val22;

                                                                            echo '
                                                                    <input type="hidden" value="' .
                                                                                $total .
                                                                                '" name="cov" class="checkout_value">



                                                                </li>
 ';
                                                                        }
                                                                    }
                                                                } else {
                                                                    echo "please login to access cart";
                                                                }

                                                                ?>


                                                            </ul>
                                                        </div>

                                                        <p class="ciyastore-mini-cart__buttons buttons">
                                                            <a href="cart.php" class="button wc-forward">View cart</a>
                                                            <a href="Order/order.php?stotal=<?php echo $total ?>&amo=<?php echo $total + (0.08 * $total) ?>" class="button checkout wc-forward">Checkout </a>
                                                        </p>
                                                    </div>
                                                </div>






                                        </ul>
                                    </div>
                                    <div class="header-search-wrap">
                                        <button type="button" id="search_button" class="btn btn-primary btn-lg search-button" data-toggle="modal" data-target="#search-popup">
                                            <i class="glyph-icon pgsicon-ecommerce-magnifying-glass"></i>
                                        </button>
                                    </div>
                                    <div class="mobile-butoon mobile-button-menu">
                                        <a class="mobile-menu-trigger mobile-menu-trigger-closed" href="javascript:void(0)"><span></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="mobile-menu" id="mobileMenu">
                            <div class="slicknav_menu"><a href="#" aria-haspopup="true" role="button" tabindex="0" class="slicknav_btn slicknav_collapsed"><span class="slicknav_menutxt">MENU</span><span class="slicknav_icon"><span class="slicknav_icon-bar"></span><span class="slicknav_icon-bar"></span><span class="slicknav_icon-bar"></span></span></a>
                                <ul class="slicknav_nav slicknav_hidden" id="mobileNav" aria-hidden="true" role="menu" style="display: none;">
                                    <li class="slicknav_collapsed slicknav_parent"><a href="#" role="menuitem" aria-haspopup="true" tabindex="-1" class="slicknav_item slicknav_row">
                                            <a href="index.php" tabindex="-1">Home</a>
                                            <!-- drop down multilevel  -->
                                            <span class="slicknav_arrow">+</span></a>
                                        <ul class="drop-down-multilevel slicknav_hidden" role="menu" aria-hidden="true" style="display: none;">
                                            <li><a href="index.html" role="menuitem" tabindex="-1">Home Default</a></li>
                                        </ul>
                                    </li>
                                    <li class="slicknav_collapsed slicknav_parent"><a href="Blog.php" role="menuitem" aria-haspopup="true" tabindex="-1" class="slicknav_item slicknav_row">
                                            <a href="Blog.php" tabindex="-1">Blog</a>

                                    </li>
                                    <li class="slicknav_collapsed slicknav_parent"><a href="#" role="menuitem" aria-haspopup="true" tabindex="-1" class="slicknav_item slicknav_row">
                                            <a href="javascript:void(0)" tabindex="-1">Shop</a>
                                            <span class="slicknav_arrow">+</span></a>
                                        <ul role="menu" class="slicknav_hidden" aria-hidden="true" style="display: none;">
                                            <li class="slicknav_collapsed slicknav_parent"><a href="#" role="menuitem" aria-haspopup="true" tabindex="-1" class="slicknav_item slicknav_row"><a href="javascript:void(0);" tabindex="-1">Shop Layout</a>
                                                    <span class="slicknav_arrow">+</span></a>
                                                <ul role="menu" aria-hidden="true" class="slicknav_hidden" style="display: none;">
                                                    <li class="mega-menu-item ">
                                                        <a class="mega-menu-link" href="shop-hidden-left-sidebar.html" role="menuitem" tabindex="-1">Hidden
                                                            Left Sidebar</a>
                                                    </li>

                                                </ul>
                                            </li>
                                            <li class="slicknav_collapsed slicknav_parent"><a href="#" role="menuitem" aria-haspopup="true" tabindex="-1" class="slicknav_item slicknav_row"><a href="javascript:void(0);" tabindex="-1">Product Pages</a>
                                                    <span class="slicknav_arrow">+</span></a>
                                                <ul role="menu" aria-hidden="true" class="slicknav_hidden" style="display: none;">

                                                    <li class="mega-menu-item">
                                                        <a class="mega-menu-link" href="shop-single-classic-right-sidebar.html" role="menuitem" tabindex="-1">Classic
                                                            Right Sidebar</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="slicknav_collapsed slicknav_parent"><a href="#" role="menuitem" aria-haspopup="true" tabindex="-1" class="slicknav_item slicknav_row"><a href="javascript:void(0);" tabindex="-1">Shop Pages</a>
                                                    <span class="slicknav_arrow">+</span></a>
                                                <ul role="menu" aria-hidden="true" class="slicknav_hidden" style="display: none;">
                                                    <li class="mega-menu-item">
                                                        <a class="mega-menu-link" href="shopping-cart.html" role="menuitem" tabindex="-1">My Shopping cart</a>
                                                    </li>
                                                    <li class="mega-menu-item">
                                                        <a class="mega-menu-link" href="checkout.php" role="menuitem" tabindex="-1">Checkout Default</a>
                                                    </li>
                                                    <li class="mega-menu-item">
                                                        <a class="mega-menu-link" href="my-account.html" role="menuitem" tabindex="-1">My Account</a>
                                                    </li>
                                                    <li class="mega-menu-item ">
                                                        <a class="mega-menu-link" href="wishlist.html" role="menuitem" tabindex="-1">Wishlist</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="slicknav_collapsed slicknav_parent"><a href="#" role="menuitem" aria-haspopup="true" tabindex="-1" class="slicknav_item slicknav_row">
                                            <a href="javascript:void(0)" tabindex="-1">Pages</a>
                                            <span class="slicknav_arrow">+</span></a>
                                        <ul role="menu" class="slicknav_hidden" aria-hidden="true" style="display: none;">
                                            <li class="slicknav_collapsed slicknav_parent"><a href="#" role="menuitem" aria-haspopup="true" tabindex="-1" class="slicknav_item slicknav_row"><a href="javascript:void(0);" tabindex="-1">Basic Pages</a>
                                                    <span class="slicknav_arrow">+</span></a>
                                                <ul role="menu" aria-hidden="true" class="slicknav_hidden" style="display: none;">
                                                    <li class="mega-menu-item">
                                                        <a class="mega-menu-link" href="page-about-us.html" role="menuitem" tabindex="-1">About Us</a>
                                                    </li>
                                                    <li class="mega-menu-item">
                                                        <a class="mega-menu-link" href="page-contact-us.html" role="menuitem" tabindex="-1">Contact Us</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="slicknav_collapsed slicknav_parent"><a href="#" role="menuitem" aria-haspopup="true" tabindex="-1" class="slicknav_item slicknav_row"><a href="javascript:void(0);" tabindex="-1">Information Pages</a>
                                                    <span class="slicknav_arrow">+</span></a>
                                                <ul role="menu" aria-hidden="true" class="slicknav_hidden" style="display: none;">
                                                    <li class="mega-menu-item">
                                                        <a class="mega-menu-link" href="page-terms-condition.html" role="menuitem" tabindex="-1">Terms
                                                            &amp; Conditions</a>
                                                    </li>
                                                    <li class="mega-menu-item">
                                                        <a class="mega-menu-link" href="page-privacy-policy.html" role="menuitem" tabindex="-1">Privacy
                                                            Policy</a>
                                                    </li>
                                                    <li class="mega-menu-item">
                                                        <a class="mega-menu-link" href="page-team-members.html" role="menuitem" tabindex="-1">Team
                                                            Members</a>
                                                    </li>
                                                    <li class="mega-menu-item">
                                                        <a class="mega-menu-link" href="page-typography.html" role="menuitem" tabindex="-1">Typography</a>
                                                    </li>
                                                    <li class="mega-menu-item">
                                                        <a class="mega-menu-link" href="page-payment-method.html" role="menuitem" tabindex="-1">Payment
                                                            Method</a>
                                                    </li>
                                                    <li class="mega-menu-item">
                                                        <a class="mega-menu-link" href="page-shipping-method.html" role="menuitem" tabindex="-1">Shipping
                                                            Method</a>
                                                    </li>
                                                    <li class="mega-menu-item">
                                                        <a class="mega-menu-link" href="page-warranty-and-services.html" role="menuitem" tabindex="-1">Warranty
                                                            and Services</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="slicknav_collapsed slicknav_parent"><a href="#" role="menuitem" aria-haspopup="true" tabindex="-1" class="slicknav_item slicknav_row"><a href="javascript:void(0);" tabindex="-1">Portfolio</a>
                                                    <span class="slicknav_arrow">+</span></a>
                                                <ul role="menu" aria-hidden="true" class="slicknav_hidden" style="display: none;">
                                                    <li class="mega-menu-item ">
                                                        <a class="mega-menu-link" href="portfolio-style-1.html" role="menuitem" tabindex="-1">Portfolio
                                                            Style 01</a>
                                                    </li>

                                                </ul>
                                            </li>
                                            <li class="slicknav_collapsed slicknav_parent"><a href="#" role="menuitem" aria-haspopup="true" tabindex="-1" class="slicknav_item slicknav_row"><a href="javascript:void(0);" tabindex="-1">Extra Page</a>
                                                    <span class="slicknav_arrow">+</span></a>
                                                <ul role="menu" aria-hidden="true" class="slicknav_hidden" style="display: none;">
                                                    <li class="mega-popular-label mega-menu-item ">
                                                        <a class="mega-menu-link" href="error-404.html" role="menuitem" tabindex="-1">404</a>
                                                    </li>
                                                    <li class="mega-menu-item ">
                                                        <a class="mega-menu-link" href="coming-soon.html" role="menuitem" tabindex="-1">Coming
                                                            Soon</a>
                                                    </li>
                                                    <li class="mega-menu-item ">
                                                        <a class="mega-menu-link" href="maintenance.html" role="menuitem" tabindex="-1">Maintenance</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="slicknav_collapsed slicknav_parent"><a href="#" role="menuitem" aria-haspopup="true" tabindex="-1" class="slicknav_item slicknav_row">
                                            <a href="javascript:void(0)" tabindex="-1">Elements</a>
                                            <span class="slicknav_arrow">+</span></a>
                                        <ul role="menu" class="slicknav_hidden" aria-hidden="true" style="display: none;">
                                            <li class="slicknav_collapsed slicknav_parent"><a href="#" role="menuitem" aria-haspopup="true" tabindex="-1" class="slicknav_item slicknav_row"><a href="javascript:void(0);" tabindex="-1">Ciya elements 01</a>
                                                    <span class="slicknav_arrow">+</span></a>
                                                <ul role="menu" aria-hidden="true" class="slicknav_hidden" style="display: none;">
                                                    <li class="mega-menu-item">
                                                        <a class="mega-menu-link" href="elements-address-block.html" role="menuitem" tabindex="-1">Address
                                                            block</a>
                                                    </li>
                                                    <li class="mega-menu-item">
                                                        <a class="mega-menu-link" href="elements-banners.html" role="menuitem" tabindex="-1">Banner</a>
                                                    </li>
                                                    <li class="mega-menu-item">
                                                        <a class="mega-menu-link" href="elements-carousels.html" role="menuitem" tabindex="-1">Carousels</a>
                                                    </li>
                                                    <li class="mega-menu-item">
                                                        <a class="mega-menu-link" href="elements-category-box.html" role="menuitem" tabindex="-1">Category
                                                            box</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="slicknav_collapsed slicknav_parent"><a href="#" role="menuitem" aria-haspopup="true" tabindex="-1" class="slicknav_item slicknav_row"><a href="javascript:void(0);" tabindex="-1">Ciya elements 02</a>
                                                    <span class="slicknav_arrow">+</span></a>
                                                <ul role="menu" aria-hidden="true" class="slicknav_hidden" style="display: none;">
                                                    <li class="mega-menu-item">
                                                        <a class="mega-menu-link" href="elements-clients-logo.html" role="menuitem" tabindex="-1">Clients
                                                            logo</a>
                                                    </li>
                                                    <li class="mega-menu-item">
                                                        <a class="mega-menu-link" href="elements-instagram.html" role="menuitem" tabindex="-1">Instagram</a>
                                                    </li>
                                                    <li class="mega-menu-item">
                                                        <a class="mega-menu-link" href="elements-images-slider.html" role="menuitem" tabindex="-1">Images
                                                            slider</a>
                                                    </li>
                                                    <li class="mega-menu-item">
                                                        <a class="mega-menu-link" href="elements-list.html" role="menuitem" tabindex="-1">List</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="slicknav_collapsed slicknav_parent"><a href="#" role="menuitem" aria-haspopup="true" tabindex="-1" class="slicknav_item slicknav_row"><a href="javascript:void(0);" tabindex="-1">Ciya elements 03</a>
                                                    <span class="slicknav_arrow">+</span></a>
                                                <ul role="menu" aria-hidden="true" class="slicknav_hidden" style="display: none;">
                                                    <li class="mega-menu-item">
                                                        <a class="mega-menu-link" href="elements-news-letter.html" role="menuitem" tabindex="-1">Newsletter</a>
                                                    </li>
                                                    <li class="mega-menu-item">
                                                        <a class="mega-menu-link" href="elements-product-deals.html" role="menuitem" tabindex="-1">Product
                                                            deals</a>
                                                    </li>
                                                    <li class="mega-menu-item">
                                                        <a class="mega-menu-link" href="elements-product-listing.html" role="menuitem" tabindex="-1">Product
                                                            listing</a>
                                                    </li>
                                                    <li class="mega-menu-item">
                                                        <a class="mega-menu-link" href="elements-countdown.html" role="menuitem" tabindex="-1">Countdown
                                                            Timer</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="slicknav_collapsed slicknav_parent"><a href="#" role="menuitem" aria-haspopup="true" tabindex="-1" class="slicknav_item slicknav_row"><a href="javascript:void(0);" tabindex="-1">Ciya elements 04</a>
                                                    <span class="slicknav_arrow">+</span></a>
                                                <ul role="menu" aria-hidden="true" class="slicknav_hidden" style="display: none;">
                                                    <li class="mega-menu-item">
                                                        <a class="mega-menu-link" href="elements-recent-posts.html" role="menuitem" tabindex="-1">Recent
                                                            posts</a>
                                                    </li>
                                                    <li class="mega-menu-item">
                                                        <a class="mega-menu-link" href="elements-social-icon.html" role="menuitem" tabindex="-1">Social
                                                            icon</a>
                                                    </li>
                                                    <li class="mega-menu-item">
                                                        <a class="mega-menu-link" href="elements-team-member.html" role="menuitem" tabindex="-1">Team
                                                            member</a>
                                                    </li>
                                                    <li class="mega-menu-item">
                                                        <a class="mega-menu-link" href="elements-testimonials.html" role="menuitem" tabindex="-1">Testimonials</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mobile-nav">

        </div>
    </header>

    <div class="search-modal modal fade" id="search-popup" style="display: none;" aria-hidden="true">
        <div class="search-wrapper modal-dialog">
            <div class="search-modal-content modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="search-modal-content-inner" data-select2-id="37">
                    <div class="search_form-wrap" data-select2-id="36">
                        <div class="search_form-inner search-bg-default" data-select2-id="35">
                            <form class="search-form" role="search" method="get" data-select2-id="34">
                                <div class="search_form-category-wrap">
                                    <select name="search_category" class="search_form-category select2 select2-hidden-accessible" tabindex="-1" aria-hidden="true" data-select2-id="29">
                                        <option value="" selected="" data-select2-id="31">All Categories</option>
                                        <option value="34" data-select2-id="38"> Men</option>
                                        <option value="35" data-select2-id="39"> Sport</option>
                                        <option value="36" data-select2-id="40"> Women</option>
                                        <option value="58" data-select2-id="41"> Bags</option>
                                        <option value="68" data-select2-id="42"> Kids</option>
                                        <option value="69" data-select2-id="43"> Clothing</option>
                                        <option value="238" data-select2-id="44"> Shirt</option>
                                        <option value="286" data-select2-id="45"> Boys</option>
                                        <option value="287" data-select2-id="46"> Shoes</option>
                                        <option value="298" data-select2-id="47"> Coats &amp; jackets</option>
                                        <option value="299" data-select2-id="48"> Dresswear</option>
                                        <option value="300" data-select2-id="49"> Girls</option>
                                        <option value="302" data-select2-id="50"> Outfits</option>
                                        <option value="303" data-select2-id="51"> Blazers</option>
                                        <option value="304" data-select2-id="52"> Accessories</option>
                                        <option value="308" data-select2-id="53"> Athleisure</option>
                                        <option value="309" data-select2-id="54"> jumpsuits</option>
                                        <option value="310" data-select2-id="55"> Juniors</option>
                                        <option value="311" data-select2-id="56"> New Arrivals</option>
                                        <option value="312" data-select2-id="57"> Pajamas &amp; Robes</option>
                                        <option value="316" data-select2-id="58"> Uncategorized</option>
                                        <option value="328" data-select2-id="59"> Hoodies</option>
                                    </select><span class="select2 select2-container select2-container--default select2-container--below" dir="ltr" data-select2-id="30" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false" aria-labelledby="select2-search_category-07-container"><span class="select2-selection__rendered" id="select2-search_category-07-container" role="textbox" aria-readonly="true" title="All Categories">All Categories</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                </div>
                                <div class="search_form-input-wrap">
                                    <input type="hidden" name="post_type" value="product">
                                    <label class="screen-reader-text" for="header-el-search-0">Search for:</label>
                                    <div class="search_form-search-field">
                                        <input type="text" id="header-el-search-0" class="form-control search-form ui-autocomplete-input" value="" name="s" placeholder="Enter Search Keyword..." autocomplete="off">
                                    </div>
                                    <div class="search_form-search-button"> <input value="" type="submit"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {

            $(document).on("click", ".search_button", function() {
                alert("clicks")
                $(".modal").toggle()
            })
            $("button.close span").on("click", function() {
                $(".show").hide()
            })
            $(document).on("click", ".remove", function() {
                var id = $(this).data('id')

                $.ajax({
                    url: "./cart/Removeitem.php",
                    type: "POST",
                    data: {
                        id: id
                    },
                    success: function(data) {
                        console.log(data)
                    }
                })
            })

            $("#logout").on("click", function() {

                $.ajax({
                    url: "sess.php",
                    success: function(data) {
                        console.log(data)
                        if (data == 1) {
                            alert('logout successfully')
                            window.location.reload(true)
                            $('a#login').show()
                            $('#lable1').hide()

                        } else {
                            console.log("err")
                        }
                    }
                })
            })
        })
    </script>
</body>

</html>