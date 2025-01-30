<?php
require "../DBconn/DB.php";
$id = $_POST['id'];
$sql = $conn->query("DELETE FROM cart WHERE proid='$id';");
if ($sql) {
    echo 1;
} else {
    echo "err";
}
