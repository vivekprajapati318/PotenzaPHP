<?php
require "../DBconn/DB.php";
$id = mysqli_real_escape_string($conn, $_POST['id']);
echo $id;
$quant = $_POST['Quant'];
echo $quant;
$add = $quant + 1;
$result = $conn->query("UPDATE cart set quantity='$add' where proid='$id'");

if ($result) {
    echo 1;
} else {
    echo "erros";
}
