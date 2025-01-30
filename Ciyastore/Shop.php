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
    <link rel="icon" href="assets/images/favicon.png" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700%7CPoppins:400,500,600,700&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/css/plugins.css" />
    <!-- Base Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css" />
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

</head>

<body>
    <div class="commm"></div>
    <?php require "header.php";
    require_once "./admin/proCat.php"; ?>
    <div class="site-content">
        <div class="inner-intro shop-intro">
            <div class="container">
                <div class="row intro-title align-items-center">
                    <div class="col-md-6 text-left">
                        <div class="intro-title-inner">
                            <h1>Shop</h1>
                        </div>
                    </div>
                    <div class="col-md-6 text-right">
                        <ul class="ciyastore_breadcrumbs page-breadcrumb breadcrumbs">
                            <li class="home">
                                <span class="item-element">
                                    <a class="bread-link bread-home" href="index.php">Home</a>
                                </span>
                            </li>
                            <li><span class="item-element">Products</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-wrapper section-spacing  ">
            <div class="container">
                <div class="row">
                    <div class="content col-sm-12">
                        <div class="products-header">
                            <div class="right-banner">
                                <img alt="Shop Banner" src="assets/images/shop/shop-banner.jpg" class="img-fluid">
                            </div>
                            <div class="loop-header">
                                <div class="loop-header-filters">
                                    <div class="widget pgs_shop_filters">
                                        <h2 class="widgettitle">Product Filters</h2>
                                        <div class="pgs-shop-filters-wrapper">
                                            <div class="row no-gutters">
                                                <div class="col-md-3 col-sm-6">
                                                    <div class="shop-filter shop-filter-search">
                                                        <div class="shop-filter-wrapper">
                                                            <input type="search" id="shop-filter-search" class="search-field" placeholder="Search products…" value="" name="s">
                                                        </div>
                                                    </div>
                                                    <!-- .shop-filter.shop-filter-search -->
                                                </div>
                                                <div class="col-md-3 col-sm-6">
                                                    <div class="shop-filter shop-filter-product-category">
                                                        <div class="shop-filter-wrapper">

                                                            <select name="product_cat" id="product_cat" class="dropdown_product_cat select2 select2-hidden-accessible" tabindex="-1" aria-hidden="true" data-select2-id="product_cat">
                                                                <option value="any" selected="selected" data-select2-id="34">Any
                                                                    Category
                                                                </option>

                                                                <?php


                                                                foreach ($catagory as $value) {
                                                                    echo '<option class="' . 'opto' . '" value="' . $value . '">';
                                                                    echo $value;
                                                                    echo '</option>';
                                                                }
                                                                ?>

                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2 col-sm-6">

                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="loop-header-tools">
                                    <div class="loop-header-tools-wrapper">
                                        <div class="row">
                                            <div class="col">

                                                <p class="result-count">
                                                    Showing 1–12 of 99 results</p>
                                                <form class="ordering">
                                                    <select name="orderby" id="priceSelect" class="orderby select2 select2-hidden-accessible" tabindex="-1" aria-hidden="true" data-select2-id="44">
                                                        <option value="menu_order" selected="selected" value="default" data-select2-id="46">Default sorting
                                                        </option>

                                                        <option value="asc">Sort by price: low to high</option>
                                                        <option value="desc">Sort by price: high to low</option>
                                                    </select>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><?php $sql =  "SELECT * FROM product ";
                                $result = $conn->query($sql); ?>
                        <div class="row products" value="">



                            <?php
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $image =  explode(" ", $row['image']);
                                    $catagory =  explode(",", $row['catagory']);






                                    if ($row['ProCount'] > 0) {
                                        $out = '   
    <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="product product-hover-style-hover-summary product-hover-button-style-light product_title_type-single_line product_icon_type-line-icon">
            <div class="product-inner"> 
                <div class="content-hover-block" style="margin-bottom: -103px;"></div>
                <div class="product-thumbnail">
                    <div class="product-thumbnail-inner">
                        <a href="ProDetail.php?proid=' . $row["proid"] . '">
                            <div class="product-thumbnail-main">
                                <img src="' . $image[0] . '" style="height:300px;">
                                <p class="stock in-stock">' . $row['ProCount'] . ' in stock</p>
                            </div>
                            <div class="product-thumbnail-swap">
                                <img src="' . $image[1] . '" style="height:300px;">
                            </div>
                        </a>
                    </div>
                    <div class="product-actions">
                        <div class="product-actions-inner">
                            <div class="product-action product-action-add-to-cart">
                                <button  class="ADDcart product-action" data-toggle="tooltip" data-original-title="add to cart" data-placement="right" data-id="' . $row['proid'] . ' " style="color:white;background-color:rgb(23, 221, 145);">Add to cart</button>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-info center-text">
                    <span class="ciyastore-product-category">
                        <a href="#">' . $catagory[0] . '</a>
                    </span>
                    <h3 class="product-name">
                        <a href="shop-single-classic-no-sidebar.html">' . $row['Title'] . '</a>
                    </h3>
                    <span class="price">
                        <ins>
                            <span class="price-amount amount">
                                <span class="currency-symbol">$</span>' . $row['price'] . '
                            </span>
                        </ins>
                    </span>
                    <div class="ciyastore-product-description ciyastore-short-description">
                        <div class="ciyastore-description-inner">
                            ' . $row['description'] . '
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>';
                                        echo $out;
                                    } else {
                                        echo '               
    <div class="col-md-4 col-sm-6">
        <div class="product product-hover-style-hover-summary product-hover-button-style-light product_title_type-single_line product_icon_type-line-icon">
            <div class="product-inner">
                <div class="content-hover-block" style="margin-bottom: -103px;"></div>
                <div class="product-thumbnail">
                    <div class="product-thumbnail-inner">
                        <a href="ProDetail.php?proid=' . $row["proid"] . '">
                            <div class="product-thumbnail-main">
                                <img src="' . $image[0] . '" style="height:300px;">
                                <p class="stock out-of-stock">Out of stock</p>
                            </div>
                            <div class="product-thumbnail-swap">
                                <img src="' . $image[1] . '" style="height:300px;">
                            </div>
                        </a>
                    </div>
                    <div class="product-actions">
                        <div class="product-actions-inner">
                            <div class="product-action product-action-add-to-cart">
                                <button class="notinStockproduct-action" data-toggle="tooltip" data-original-title="out of stock" data-placement="right" style="background-color:rgb(235, 70, 70); color:white;">Out of stock</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-info center-text">
                    <span class="ciyastore-product-category">
                        <a href="#">' . $catagory[0] . '</a>
                    </span>
                    <h3 class="product-name">
                        <a href="shop-single-classic-no-sidebar.html">' . $row['Title'] . '</a>
                    </h3>
                    <span class="price">
                        <ins>
                            <span class="price-amount amount">
                                <span class="currency-symbol">$</span>' . $row['price'] . '
                            </span>
                        </ins>
                    </span>
                    <div class="ciyastore-product-description ciyastore-short-description">
                        <div class="ciyastore-description-inner">
                            ' . $row['description'] . '
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>';
                                    }
                                }
                            }
                            ?>



                        </div>


                        <?php require "./footer.php"; ?>

                        <script src="assets/js/jquery.min.js"></script>
                        <script src="assets/js/bootstrap.bundle.min.js"></script>
                        <!-- plugins path -->
                        <script>
                            var plugin_path = 'assets/js/';
                        </script>
                        <script>
                            $(document).ready(function() {
                                $(document).on("click", "a#login", function() {
                                    alert('click')
                                    $('.commm').load("login.php", function() {
                                        alert('loaded')
                                        $("#pgs_login_form").toggle()
                                    })
                                })
                                $.ajax({
                                    url: "./sorting/shopPRO.php",
                                    success: function() {
                                        $(document).on("click", ".ADDcart", function(e) {
                                            var id = $(this).data("id")

                                            $.ajax({
                                                url: "./cart/adding.php",
                                                type: "POST",
                                                data: {
                                                    id: id
                                                },
                                                success: function(data) {
                                                    console.log(data);
                                                    if (data == 1) {
                                                        alert("added")
                                                        window.location.reload()
                                                    } else if (data == 0) {
                                                        alert('exist')
                                                    }
                                                }

                                            })



                                            var title = $(e.target).closest('div').eq(1).html()
                                            console.log(title, id)
                                        });
                                        $(document).on("click", ".notinStockproduct-action", function() {
                                            console.log("Out of stock button clicked");
                                            alert("This product is out of stock.");
                                        });
                                    }
                                })



                                $("#priceSelect").on("change", function() {

                                    var priceval = $("#priceSelect").val()
                                    console.log(priceval)
                                    $.ajax({
                                        url: "./sorting/sortingbyPrice.php",
                                        type: 'post',
                                        data: {
                                            price: priceval
                                        },
                                        success: function(data) {
                                            console.log(data)

                                            $val = $(".products").html(data)
                                            $(".products").addClass('products')
                                        }
                                    })
                                })



                                $("#product_cat").on("change", function() {
                                    var cat = $("#product_cat").val();

                                    $.ajax({
                                        url: "./sorting/sortingbycat.php",
                                        type: "POST",
                                        data: {
                                            cat: cat
                                        },
                                        success: function(data) {
                                            console.log("Response from server:", data);

                                            $(".products").html(data);
                                        }

                                    });
                                });
                                $("#shop-filter-search").on("keyup", function() {
                                    var search = $("#shop-filter-search").val()
                                    $.ajax({
                                        url: "./sorting/sortingbysearch.php",
                                        type: "POST",
                                        data: {
                                            search: search
                                        },
                                        success: function(data) {
                                            console.log("Response from server:", data);

                                            $(".products").html(data);
                                        }

                                    });

                                })




                            })
                        </script>
                        <!-- custom -->
                        <script src="assets/js/custom.js"></script>
</body>

</html>