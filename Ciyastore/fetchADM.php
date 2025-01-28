<?php
session_start();
if (isset($_POST)) {
    $AEmal = $_POST['email'];
    $Apass = $_POST['pass'];
    $conn = new mysqli("localhost", "root", "", "vivek");
    $sql = "SELECT * FROM ciyastoreadmin";
    $result = $conn->query($sql);
    $k = 0;
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $email = $row['Email'];
            $pass = $row['password'];
            if ($AEmal === $email && $Apass === $pass) {
                $k = 1;
                break;
            }
        }
        if ($k == 1) {
            $_SESSION['User'] = "admin";
            $_SESSION['Email'] = $AEmal;
            echo 1;
        }
    }
}
