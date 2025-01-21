<?php
$sno = $_GET['delet'];
$conn = new mysqli("localhost", "root", "", "vivek");
$sql = "DELETE FROM `product` WHERE `product`.`proid` = $sno;";
if ($conn->query($sql)) {
    echo 1;
} else {
    echo 0;
}
