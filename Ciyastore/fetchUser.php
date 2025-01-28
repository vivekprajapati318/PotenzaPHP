<?php session_start();
if (isset($_POST)) {
    $UEmal = $_POST['email'];

    $Upass = $_POST['pass'];

    $conn = new mysqli("localhost", "root", "", "vivek");
    $sql = "SELECT * FROM ciyastore";
    $result = $conn->query($sql);
    $k = 0;
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $email = $row['Email'];
            $pass = $row['password'];

            if ($UEmal == $email && $Upass == $pass) {
                $_SESSION['User'] = "user";
                $_SESSION['email'] = $email;
                $k++;
            }
            if ($k == 1) {
                echo 1;
                break;
            }
        }
    }
}
