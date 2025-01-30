<?php
session_start();
require "../DBconn/DB.php";
$id = $_POST['id'];

$email = $_SESSION['email'];
$name = $conn->query("SELECT  customer_name from ciyastore where Email='$email';");
$name = mysqli_fetch_assoc($name);

$title = $conn->query("SELECT  Title from product where proid='$id';");
$title = mysqli_fetch_assoc($title);


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
        $sql = "INSERT INTO cart (Email, customer_name, proid, Title, image, price) 
        VALUES ('$email', '$name[customer_name]', '$id', '$title[Title]', '$image[image]', '$price[price]')";
        $result = $conn->query($sql);
        echo 1;
} else {
        echo 0;
}
