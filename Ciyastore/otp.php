<?php
if (isset($_POST)) {
    $email = $_POST['email'];

    $conn = new mysqli("localhost", "root", "", "vivek");
    $sql = "SELECT Email FROM ciyastore";
    $result = $conn->query($sql);
    if (mysqli_num_rows($result) >= 0) {
        $off = 0;
        while ($row = mysqli_fetch_assoc($result)) {

            if ($row['Email'] == $email) {

                $off++;
            }

            if ($off == 1) {
                echo 1;
                break;
            }
        }
    }
}
