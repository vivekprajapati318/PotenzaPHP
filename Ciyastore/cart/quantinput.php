<?php
require "../DBconn/DB.php";
$id = mysqli_real_escape_string($conn, $_POST['id']);

$quant = $_POST['Quant'];

$result = $conn->query("UPDATE cart set quantity='$quant' where proid='$id'");

if ($result) {
    echo 1;
} else {
    echo "error";
}
