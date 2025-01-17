<?php
session_start();
if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];
}
$newpass = $_POST['newpass'];
$conpass = $_POST['conpass'];
$conn = new mysqli("localhost", "root", "", "vivek");
$sql = "SELECT password FROM ciyastore WHERE Email='$email'";
$result = $conn->query($sql);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);

    if ($newpass == $conpass) {
        if (!empty($newpass)) {
            echo 1;
            $sql = "UPDATE ciyastore set password='$newpass'WHERE Email='$email'";
            $result = $conn->query($sql);
        } else echo 4;
    } else {
        echo 0;
    }
}
