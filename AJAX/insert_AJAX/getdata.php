<?php

$name = $_POST['name'];
$age = $_POST['age'];
$phone = $_POST['phone'];
$password = $_POST['pass'];
$conn = new mysqli("localhost", "root", "", "vivek");
$sql = "INSERT INTO  CRUD ( ID  ,
UserName ,
age ,
phone ,
password ) VALUES('','$name','$age','$phone','$password');";
if ($conn->query($sql)) {
    echo 1;
} else {
    echo 0;
}
