<?php

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$pass = $_POST['pass'];

$conn = new mysqli("localhost", "root", "", "vivek");
$sql = "SELECT * FROM ciyastore WHERE Email='$email'";
$result = $conn->query($sql);
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $sql = "UPDATE ciyastore set customer_name='$name', phone = '$phone', Email='$email', password='$pass'WHERE Email='$email'";
    $result = $conn->query($sql);
    echo 1;
} else {
    echo 0;
}
