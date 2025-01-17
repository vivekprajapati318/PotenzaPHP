<?php
if (isset($_POST)) {
    $AEmal = $_POST['email'];
    $Apass = $_POST['pass'];
    $conn = new mysqli("localhost", "root", "", "vivek");
    $sql = "SELECT * FROM ciyastoreadmin";
    $result = $conn->query($sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $email = $row['Email'];
            $pass = $row['password'];
        }
        if ($AEmal === $email && $Apass === $pass) {
            $_SESSION['User'] = "USER";
            $_SESSION['Email'] = $AEmal;

            echo 1;
        } else {
            echo 0;
        }
    }
}
