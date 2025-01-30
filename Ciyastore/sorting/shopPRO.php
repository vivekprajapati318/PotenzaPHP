
<?php
if ($row['ProCount'] > 0) {
    $out = '   
    <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="product product-hover-style-hover-summary product-hover-button-style-light product_title_type-single_line product_icon_type-line-icon">
            <div class="product-inner"> 
                <div class="content-hover-block" style="margin-bottom: -103px;"></div>
                <div class="product-thumbnail">
                    <div class="product-thumbnail-inner">
                    <input type="hidden" name="vivek" data-id= "' . $row["proid"] . '">
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
                       <div class="product-actions-inner" style="padding: 10px; display: flex; justify-content: center;">
    <div class="product-action product-action-add-to-cart" style="width: 100%; text-align: center;">
        <button class="ADDcart product-action" 
                data-toggle="tooltip" 
                data-original-title="add to cart" 
                data-placement="right" 
                data-id="' . $row['proid'] . '" 
                style="color: white; background-color: rgb(23, 221, 145); padding: 10px 20px; border: none; cursor: pointer; border-radius: 5px; width: 100%; font-size: 14px;">
            Add to cart
        </button>
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
                        <div class="product-actions-inner" 
     style="padding: 10px; display: flex; justify-content: center; align-items: center; height: 100%;">
    <div class="product-action product-action-add-to-cart" 
         style="text-align: center; display: flex; justify-content: center; width: 100%;">
        <button class="notinStockproduct-action" 
                data-toggle="tooltip" 
                data-original-title="out of stock" 
                data-placement="right" 
                style="background-color: rgb(235, 70, 70); color: white; padding: 10px 20px; border: none; cursor: not-allowed; border-radius: 5px; font-size: 14px;">
            Out of stock
        </button>
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
