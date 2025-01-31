<?php
require "../DBconn/DB.php";
$id = mysqli_real_escape_string($conn, $_POST['id']);
echo $id;
$quant = $_POST['Quant'];
$procount = $conn->query("SELECT ProCount from product WHERE proid='$id' ");
$procount = mysqli_fetch_assoc($procount);

if (($quant + 1) > $procount['ProCount']) {
    echo 1;
} else {
    $add = $quant + 1;
    $result = $conn->query("UPDATE cart set quantity='$add' where proid='$id'");
}
