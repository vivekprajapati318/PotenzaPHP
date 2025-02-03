<?php
session_start();
require "../DBconn/DB.php";

$id = $_POST['id'];
if (isset($_SESSION['email'])) {
        $email = $_SESSION['email'];
        $name = $conn->query("SELECT  customer_name from ciyastore where Email='$email';");
        $name = mysqli_fetch_assoc($name);

        $title = $conn->query("SELECT  Title from product where proid='$id';");
        $title = mysqli_fetch_assoc($title);

        $SKU = $conn->query("SELECT  SKU from product where proid='$id';");
        $SKU = mysqli_fetch_assoc($SKU);
        $image = $conn->query("SELECT  image from product where proid='$id';");
        $image = mysqli_fetch_assoc($image);


        $proid = $conn->query(" SELECT proid FROM cart WHERE Email='$email'");
        $proid = mysqli_fetch_all($proid, MYSQLI_ASSOC);

        $price = $conn->query("SELECT  price from product where proid='$id';");
        $price = mysqli_fetch_assoc($price);
        $k = 0;
        foreach ($proid as $val) {

                foreach ($val as $PID) {

                        if ($PID == $id) {
                                $k = 1;
                        }
                }
        }
        if ($k != 1) {
                $sql = "INSERT INTO cart (Email, customer_name, proid, Title,SKU, image, price,quantity) 
        VALUES ('$email', '$name[customer_name]', '$id', '$title[Title]', '$SKU[SKU]','$image[image]', '$price[price]','1')";
                $result = $conn->query($sql);
                echo 1;
        } else {
                echo 0;
        }
} else {
        echo  404;
}
