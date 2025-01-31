<?php
require "../DBconn/DB.php";
$id = mysqli_real_escape_string($conn, $_POST['id']);

$quant = $_POST['Quant'];
$procount = $conn->query("SELECT ProCount from product WHERE proid='$id' ");
$procount = mysqli_fetch_assoc($procount);

if ($quant > $procount['ProCount']) {
    echo 1;
} else {
    $result = $conn->query("UPDATE cart set quantity='$quant' where proid='$id'");
}
