<?php
require "../DBconn/DB.php";
$sort = $_POST['price'];

if ($sort == 'price') {
    $sort = 'asc';
} else {
    $sort = 'desc';
}
$sql =  "SELECT * FROM product order by price $sort ";
$result = $conn->query($sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $image =  explode(" ", $row['image']);
        $catagory =  explode(",", $row['catagory']);

        if ($row['ProCount'] > 0) {
            $out = '   <div class="col-lg-3 col-md-4 col-sm-6">
    <div class="product product-hover-style-hover-summary product-hover-button-style-light product_title_type-single_line product_icon_type-line-icon">

                  <div class="product-inner"> <div class="content-hover-block" style="margin-bottom: -103px;"></div>
            <div class="product-thumbnail">
                <div class="product-thumbnail-inner">
                    <a href="#">
                        <div class="product-thumbnail-main">
                            <img src="' . $image[0] . ' "style="height:300px;">
                            <p class="stock in-stock">' . $row['ProCount'] . ' in stock</p>
                        </div>
                        <div class="product-thumbnail-swap">
                            <img src="' . $image[1] . '">
                        </div>
                    </a>
                </div>

                <div class="product-actions">
                    <div class="product-actions-inner">
                        <div class="product-action product-action-add-to-cart">
                            <a href="cart.php" class="button add_to_cart_button">Add to
                                cart</a>
                        </div>


                    </div>
                </div>
            </div>
            <div class="product-info center-text">
                <span class="ciyastore-product-category">
                    <a href="#">' . $catagory[0] . '</a>
                </span>
                <h3 class="product-name">
                    <a href="shop-single-classic-no-sidebar.html">' . $row['Title'] . ' </a>
                </h3>
                <span class="price">
                    <ins>
                        <span class="price-amount amount">
                            <span class="currency-symbol">$</span>' . $row['price'] . '
                        </span>
                    </ins>
                </span>
                <div class="ciyastore-product-description ciyastore-short-description ">
                    <div class="ciyastore-description-inner">
                        ' . $row['description'] . '
                    </div>

                </div>
            </div>
     
    </div> </div>
</div>
';
        } else {
            $out =    '  <div class="col-md-4 col-sm-6">
    <div class="product product-hover-style-hover-summary product-hover-button-style-light product_title_type-single_line product_icon_type-line-icon">
        <div class="product-inner">
            <div class="content-hover-block" style="margin-bottom: -103px;"></div>
            <div class="product-thumbnail">
                <div class="product-thumbnail-inner">
                    <a href="#">
                        <div class="product-thumbnail-main">
                            <img src="' . $image[0] . '"style="height:300px;" >
                            <p class="stock out-of-stock">Out of stock</p>
                        </div>
                        <div class="product-thumbnail-swap">
                            <img src=' . $image[1] . '"style="height:300px;">
                        </div>
                    </a>
                </div>
                <div class="product-action product-action-wishlist">
                    <a href="wishlist.html" class="add_to_wishlist" data-toggle="tooltip" data-original-title="Wishlist" data-placement="right"> Add to
                        Wishlist</a>
                </div>
                <div class="product-actions">
                    <div class="product-actions-inner">
                            
                        <div class="product-action product-action-add-to-cart">
                            <a href="cart.php" class="button add_to_cart_button">Add to
                                cart</a>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="product-info center-text">
                <span class="ciyastore-product-category">
                    <a href="#">Accessories</a>
                </span>
                <h3 class="product-name">
                    <a href="shop-single-classic-no-sidebar.html">' . $row['Title'] . '</a>
                </h3>
                <span class="price">
                    <ins>
                        <span class="price-amount amount">
                            <span class="currency-symbol">$</span>  ' . $row['price'] . '
                </span>
                </ins>
                </span>
                <div class="ciyastore-product-description ciyastore-short-description">
                    <div class="ciyastore-description-inner">
                        ' . $row['description'] . ' </div>

                </div>
            </div>
        </div>
    </div>
 </div>';
        }
        echo $out;
    }
}
