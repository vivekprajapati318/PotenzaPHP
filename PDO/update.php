<?php
$sno = $_POST['id'];
$name = $_POST['name'];
$age = $_POST['age'];
$phone = $_POST['phone'];
$pass = $_POST['pass'];
$conn = new PDO("mysql:host=localhost;dbname=vivek", "root", "");
$sql = $conn->prepare("UPDATE `crud` SET `UserName` = '$name', `age` = '$age', `phone` = '$phone', `password` = '$pass' WHERE `ID` = ?;");

$sql->bindParam(1, $sno);;
if ($sql->execute()) {
    echo 1;
} else {
    echo 0;
}
