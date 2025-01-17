<?php
session_start();
if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];
}

$currpass = $_POST['curr'];
$updpass = $_POST['updpass'];
$confpass = $_POST['confi'];
$conn = new mysqli("localhost", "root", "", "vivek");
$sql = "SELECT * FROM ciyastore WHERE Email='$email'";
$result = $conn->query($sql);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    if ($updpass != $currpass) {
        if ($row['password'] == $currpass) {
            if ($updpass == $confpass) {
                echo 1;
                $sql = "UPDATE ciyastore set password='$updpass'WHERE Email='$email'";
                $result = $conn->query($sql);
            } else {
                echo 0;
            }
        } else {
            echo 2;
        }
    } else echo 4;
}
