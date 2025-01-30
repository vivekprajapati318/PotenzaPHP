<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
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

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <!-- MDB CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.1/mdb.min.css" rel="stylesheet">
    <style>
        /* Custom styles */
        .ecommerce-gallery-main-img {
            width: 100%;
            max-height: 500px;
            object-fit: cover;
            border-radius: 10px;
            transition: transform 0.3s ease;
        }

        .ecommerce-gallery-main-img:hover {
            transform: scale(1.05);
        }

        .ecommerce-gallery img {
            width: 100%;
            height: auto;
            border-radius: 5px;
            transition: transform 0.3s ease;
            cursor: pointer;
            object-fit: cover;
        }

        .ecommerce-gallery img:hover {
            transform: scale(1.1);
        }

        .ecommerce-gallery {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .gallery-thumbnails {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .gallery-thumbnails .col-3 {
            margin: 10px;
        }

        .gallery-thumbnails img {
            cursor: pointer;
        }

        .gallery-thumbnails .col-3 {
            width: 120px;
            height: 160px;
        }

        .gallery-thumbnails .col-3 img {
            height: 100%;
            width: 100%;
            object-fit: cover;
        }

        /* Product info styling */
        .product-info {
            margin-top: 20px;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 8px;
        }

        .product-info h3 {
            font-size: 1.8rem;
            font-weight: bold;
            color: #333;
        }

        .product-info .price {
            font-size: 1.5rem;
            color: #00aaff;
            font-weight: bold;
        }

        .product-info .quantity {
            font-size: 1.1rem;
            margin-top: 10px;
        }

        .product-info .product-category a {
            color: #888;
            text-decoration: none;
            font-size: 1rem;
        }

        /* Align buttons to the right */
        .product-actions {
            display: flex;
            justify-content: flex-end;
            /* Align buttons to the right */
            gap: 15px;
            /* Add some space between buttons */
            margin-top: 20px;
        }

        .product-actions .add_to_cart_button {
            background-color: #00aaff;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 1.1rem;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .product-actions .add_to_cart_button:hover {
            background-color: #0088cc;
        }


        .star-rating-wrapper {
            margin-top: 15px;
        }

        .star-rating-wrapper i {
            font-size: 1.2rem;
            color: #ffcc00;
        }

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

<div>
    <div class="commm"></div>
    <?php require "./header.php"; ?>
    <button class="back"> &#8592; back</button>
    <div class="container py-5">
        <!-- Ecommerce Gallery -->
        <div class="ecommerce-gallery" data-mdb-ecommerce-gallery-init data-mdb-zoom-effect="true" data-mdb-auto-height="true">

            <?php
            if (isset($_GET)) {
                $id = $_GET['proid'];
            }
            require "./DBconn/DB.php";

            $sql = "SELECT * FROM product where proid='$id' ";
            $result = $conn->query($sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $image1 = $row['image'];
                    $image1 = explode(" ", $image1); // Assuming images are space-separated in your database
                    $title = $row['Title'];

                    $description = $row['description'];


                    $SKU = $row['SKU'];
                    $catagory = $row['catagory'];
                    $catagory = explode(",",  $catagory);
                    $price = $row['price'];
                    $quantity = $row['ProCount'];
                    // Main image HTML
                    $out = '
        <div class="row py-3 shadow-5">
            <div class="col-12 mb-3">
              
                <div class="lightbox" data-mdb-lightbox-init>
                    <img src="' . $image1[0] . '"
                        alt="Gallery image 1"
                        class="ecommerce-gallery-main-img active" id="mainImage" />
                </div>
            </div>
   
            <div class="col-12">
                <div class="gallery-thumbnails row justify-content-center">
        ';

                    // Thumbnails for this product
                    foreach ($image1 as $value) {
                        $out .= '
                <div class="col-3 mt-1">
                    <img src="' . $value . '" 
                         alt="Thumbnail image" 
                         class="thumbnail w-100" />
                </div>';
                    }

                    // Closing the divs
                    $out .= '
                </div> <!-- End of gallery-thumbnails -->
            </div>
        </div>';
                    echo $out;

            ?>
                    <span class="ciyastore-product-category">

                        <a href="catagortSort.php"><?php echo  $description ?> </a>
                    </span>
                    <input type="hidden" name="vivek" value=<?php echo $row["proid"] ?> id="Proid">

        </div>
        <div class="product-info">

            <h3 class="product-name">
                <?php echo  $title ?>
            </h3> <span class="ciyastore-product-category">

                <a href="catagortSort.php"><?php echo  $catagory[0] ?> </a>
            </span>
            <br>
            <span class="price">
                <ins>
                    <span class="price-amount amount">
                        <span class="currency-symbol">$</span><?php echo  $price ?>.00
                    </span>
                </ins>
            </span>
            <span class="quantity">
                <ins>
                    <span class="quantity-amount amount">
                        <span class="currency-symbol"></span>
                        <h4>in stock:<span><?php echo  $quantity ?> </span></h4>
                    </span>
                </ins>
            </span>
            <div class="star-rating-wrapper">
                <i class="fa fa-star text-warning"></i>
                <i class="fa fa-star text-warning"></i>
                <i class="fa fa-star text-warning"></i>
                <i class="fa fa-star text-warning"></i>
                <i class="fa fa-star-o"></i>
            </div>
        </div>
    </div>
    <?php if ($row['ProCount'] > 0) { ?>
        <div class="product-actions" style="display: flex; justify-content: flex-start; gap: 15px; padding: 10px;">
            <div class="product-actions-inner" style="display: flex; align-items: center;">
                <div class="product-action product-action-add-to-cart" style="display: flex; justify-content: center;">

                    <?php echo '<input type="hidden" name="vivek" >' ?>
                    <h4 class="button add_to_cart_button ADDcart" data-id="<?php echo $_GET['proid'] ?>"
                        style="background-color: #00aaff; color: white; padding: 12px 24px; border-radius: 5px; font-size: 1.1rem; cursor: pointer; text-align: center; text-decoration: none; transition: background-color 0.3s ease;">
                        Add to cart
                    </h4>
                </div>
            </div>
        </div>
    <?php } else {
    ?>
        <div class="product-actions" style="display: flex; justify-content: flex-start; gap: 15px; padding: 10px;">
            <div class="product-actions-inner" style="display: flex; align-items: center;">
                <div class="product-action product-action-out-of-stock" style="display: flex; justify-content: center;">
                    <h4 class="button out_of_stock_button"
                        style="background-color: #cccccc; color: #666666; padding: 12px 24px; border-radius: 5px; font-size: 1.1rem; cursor: not-allowed; text-align: center; text-decoration: none; transition: background-color 0.3s ease;">
                        Out of Stock
                    </h4>
                </div>
            </div>
        </div>

    <?php
                    } ?>
    <hr style="border: 1px solid #ddd; margin: 20px 0;">
    <h1 style="text-align: center; font-size: 2rem; color: #333; margin-bottom: 20px;">Some of Related Products</h1>
    <hr style="border: 1px solid #ddd; margin: 20px 0;">


<?php
                }
            }
            echo           '
                                        <div class="row">
                                         <div class="col">
<div class="row products" value="">   
   
         '
                .
                $count = 0;
            $total = 0;
            foreach ($catagory as $key => $value) {
                $cat = $conn->query("SELECT * from product");
                while ($row = mysqli_fetch_assoc($cat)) {
                    $image = $row['image'];

                    $image = explode(" ", $image); // Assuming images are space-separated in your database
                    $title = $row['Title'];
                    $description = $row['description'];
                    $SKU = $row['SKU'];
                    $catagory = $row['catagory'];
                    $catagory = explode(",",  $catagory);
                    $price = $row['price'];
                    $quantity = $row['ProCount'];
                    $cata = $row['catagory'];
                    $cata = explode(",", $cata);
                    if (in_array($value, $cata)) {
                        require "./sorting/shopPRO.php";
                    }
                }
            };



            require "footer.php"; ?>

</div>
</div>
</div>

<!-- MDB JS -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.1/mdb.min.js"></script>

<script>
    $(document).ready(function() {
        $(document).on("click", "a#login", function() {

            $('.commm').load("login.php", function() {

                $("#pgs_login_form").toggle()
            })

        })
        $('.thumbnail').hover(function() {

            var newSrc = $(this).attr('src');

            $('#mainImage').attr('src', newSrc);
        });
        $(document).on("click", ".ADDcart", function(e) {

            var id = $(this).data('id')


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
                    } else if (data == 0) {
                        alert('exist')
                    }
                }

            })
        });
        $('.back').on("click", function() {
            window.history.back()
        })

    })
</script>
</body>

</html>