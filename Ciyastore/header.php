<?php session_start(); ?>
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
                                        <select class="select2 select2-hidden-accessible" data-select2-id="4" tabindex="-1" aria-hidden="true">
                                            <option data-select2-id="6">USD ($)</option>
                                            <option>EUR (€)</option>
                                        </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="5" style="width: 89px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-hnt7-container"><span class="select2-selection__rendered" id="select2-hnt7-container" role="textbox" aria-readonly="true" title="USD ($)">USD ($)</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
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
                                        <img class="img-fluid " src="assets/images/logo.png" alt="logo">
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
                                                            <a href="javascript:void(0)">Home <div class="mobileTriggerButton"></div></a>
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
                                                                                <a class="mega-menu-link" href="menWear.php">men</a>
                                                                            </li>
                                                                            <li class="mega-menu-item">
                                                                                <a class="mega-menu-link" href="womenWear.php">woman

                                                                                </a>
                                                                            </li>
                                                                            <li class="mega-menu-item">
                                                                                <a class="mega-menu-link" href="kids.php">kids</a>
                                                                            </li>
                                                                            <li class="mega-menu-item">
                                                                                <a class="mega-menu-link" href="footWear.php">footwear</a>
                                                                            </li>
                                                                            <li class="mega-menu-item">
                                                                                <a class="mega-menu-link" href="winterWear.php">winter wear</a>
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
                                                                            <label for="username" id="UserName" style="font-size:small;"><?php if (isset($_SESSION['email'])) {
                                                                                                                                                echo $_SESSION['email'];
                                                                                                                                            } else {
                                                                                                                                                echo 'no user, login first';
                                                                                                                                            }
                                                                                                                                            ?>
                                                                            </label>
                                                                        </li>
                                                                        <li class="mega-menu-item">
                                                                            <?php if (isset($_SESSION['email'])) {
                                                                                echo '  <a class="mega-menu-link" href="Update_profile.php">  update profile</a>';
                                                                            } else {
                                                                                echo "";
                                                                            }
                                                                            ?>


                                                                        </li>

                                                                        <li class="mega-menu-item" id="reset">
                                                                            <?php if (isset($_SESSION['email'])) {
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
                                                <a class="cart-link" href="#">
                                                    <span class="cart-icon"><i class="glyph-icon pgsicon-ecommerce-empty-shopping-cart"></i></span>
                                                    <span class="cart-count count">3</span>
                                                </a>




                                                <!-- cart hover -->
                                                <div class="widget ciyastore widget-shopping-cart">
                                                    <div class="widget-shopping-cart-content">
                                                        <div class="product-list-widget-container has-scrollbar">
                                                            <ul class="ciyastore-mini-cart cart-list">
                                                                <li class="ciya-mini-cart-item">
                                                                    <a href="#" class="remove remove_from_cart_button">×</a>
                                                                    <div class="media">
                                                                        <a href="#"><img width="60" height="76" src="assets/images/shop/img-01.jpg" data-src="assets/images/shop/img-01.jpg" class="img-fluid" alt=""></a>
                                                                        <div class="media-body">
                                                                            <a href="#" class="product-title">Buckle
                                                                                belt – Saint Laurent</a>
                                                                            <span class="quantity">1 × <span class="woocs-special_price_code"><span class="ciya-Price-amount amount"><span class="ciya-Price-currencySymbol">$</span>40.00</span>
                                                                                </span>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="ciya-mini-cart-item">
                                                                    <a href="#" class="remove remove_from_cart_button">×</a>
                                                                    <div class="media">
                                                                        <a href="#"><img width="60" height="76" src="assets/images/shop/img-02.jpg" data-src="assets/images/shop/img-02.jpg" class="img-fluid" alt=""></a>
                                                                        <div class="media-body">
                                                                            <a href="#" class="product-title">Extra Fine
                                                                                Wool Jumpers </a>
                                                                            <span class="quantity">1 × <span class="woocs-special_price_code"><span class="ciya-Price-amount amount"><span class="ciya-Price-currencySymbol">$</span>40.00</span>
                                                                                </span>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="ciya-mini-cart-item">
                                                                    <a href="#" class="remove remove_from_cart_button">×</a>
                                                                    <div class="media">
                                                                        <a href="#"><img width="60" height="76" src="assets/images/shop/img-03.jpg" data-src="assets/images/shop/img-03.jpg" class="img-fluid" alt=""></a>
                                                                        <div class="media-body">
                                                                            <a href="#" class="product-title">Girl's
                                                                                Cold Shoulder Bling Dress –
                                                                                Black</a>
                                                                            <span class="quantity">1 × <span class="woocs-special_price_code"><span class="ciya-Price-amount amount"><span class="ciya-Price-currencySymbol">$</span>116.00</span>
                                                                                </span>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <p class="ciyastore-mini-cart__total total">
                                                            <strong>Subtotal:</strong> <span class="woocs_special_price_code"><span class="ciyastore-Price-amount amount"><span class="ciyastore-Price-currencySymbol">$</span>196.00</span>
                                                            </span>
                                                        </p>
                                                        <p class="ciyastore-mini-cart__buttons buttons">
                                                            <a href="cart.php" class="button wc-forward">View cart</a>
                                                            <a href="checkout.html" class="button checkout wc-forward">Checkout</a>
                                                        </p>
                                                    </div>
                                                </div>




                                            </li>


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
                                            <a href="javascript:void(0)" tabindex="-1">Home</a>
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
                                                        <a class="mega-menu-link" href="checkout.html" role="menuitem" tabindex="-1">Checkout Default</a>
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
    <script>
        $(document).ready(function() {
            $("#logout").on("click", function() {

                $.ajax({
                    url: "sess.php",
                    success: function(data) {
                        console.log(data)
                        if (data == 1) {
                            alert('logout successfully')
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