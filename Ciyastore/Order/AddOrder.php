<?php
session_start();
require "../DBconn/DB.php";
if (isset($_SESSION['email'])) {
    $user = $conn->query("SELECT CId, customer_name,phone,Email from ciyastore WHERE Email='$_SESSION[email]'; ");
    $row = mysqli_fetch_assoc($user);

    $name = $row['customer_name'];
    $phone = $row['phone'];
    $email = $row['Email'];
    $address = $_POST['address'];
    $amount = $_POST['amount'];

    $SKU = $conn->query("SELECT  SKU ,Title from cart where Email='$_SESSION[email]';");
    $SKU2 = array();
    while ($row1 = mysqli_fetch_assoc($SKU)) {
        array_push($SKU2, $row1['SKU']);
    }
    $SKU2 = implode(",", $SKU2);

    $payment_method = $_POST['payment_method'];
    echo $payment_method;

    date_default_timezone_set('Asia/Kolkata');
    $orderId = date('ymdHis') . "-" . $row['CId'];




    $sql = $conn->query("INSERT INTO `order` (`Order_id`,`customer_name`,`phone`,`Email`,`address`,`SKU`,`total price`,`payment method`)
     values('$orderId','$name','$phone','$email','$address','$SKU2','$amount','$payment_method')");
} else {
    echo " please login";
}
