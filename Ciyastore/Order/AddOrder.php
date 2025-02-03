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
    $SKU = $conn->query("SELECT  SKU ,Title,quantity from cart where Email='$_SESSION[email]';");
    $SKU2 = array();
    $quantity = array();
    while ($row1 = mysqli_fetch_assoc($SKU)) {
        array_push($SKU2, $row1['SKU']);
        array_push($quantity, $row1['quantity']);
    }
    $SKU2 = implode(",", $SKU2);
    $quantity = implode(",", $quantity);
    $payment_method = $_POST['payment_method'];
    echo $payment_method;
    date_default_timezone_set('Asia/Kolkata');
    $orderId = date('ymdHis') . "-" . $row['CId'];
    $data = array("method" => $payment_method, 'orderId' => $orderId);
    $sql = $conn->query("INSERT INTO `order` (`Order_id`,`customer_name`,`phone`,`Email`,`address`,`SKU`,`quantity`,`total price`,`payment method`)
     values('$orderId','$name','$phone','$email','$address','$SKU2','$quantity','$amount','$payment_method')");
} else {
    echo " please login";
}
