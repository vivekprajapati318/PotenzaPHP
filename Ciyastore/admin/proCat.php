<?php
require "./DBconn/DB.php";
$sql = "SELECT catagory from product";
$result = $conn->query($sql);
$strr = "";
while ($row = mysqli_fetch_assoc($result)) {

    $strr = $strr . "," . $row['catagory'];
}

$catagory = explode(",", $strr);
