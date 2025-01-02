<?php

$sno = $_POST['id'];
$name = $_POST['name'];
$age = $_POST['age'];
$phone = $_POST['phone'];
$pass = $_POST['pass'];

$conn = new mysqli("localhost", "root", "", "vivek");
$sql = "UPDATE `crud` SET `UserName` = '$name', `age` = '$age', `phone` = '$phone', `password` = '$pass' WHERE `crud`.`ID` = $sno;";
if ($conn->query($sql)) {
    echo 1;
} else {
    echo 0;
}
