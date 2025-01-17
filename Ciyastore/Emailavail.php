<?php

$email = $_POST['email'];

$conn = new mysqli("localhost", "root", "", "vivek");
$sql = "SELECT Email FROM ciyastore";
$result = $conn->query($sql);
$k = 0;
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $MSQEmail = $row['Email'];
        if ($MSQEmail == $email) {
            $k++;
        }
        if ($k == 1) {
            echo 1;
            break;
        }
    }
}
