<?php
$conn = new PDO("mysql:host=localhost;dbname=vivek", "root", "");
$sno = $_GET['id'];
$sql = $conn->prepare("DELETE FROM `crud` WHERE `crud`.`ID` = ?;");
$sql->bindParam(1, $sno);
$sql->execute();
if ($sql) {
    echo 1;
} else {
    echo 0;
}
