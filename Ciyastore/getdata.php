<?php

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$DOB = $_POST['DOB'];
$password = $_POST['pass'];

$conn = new mysqli("localhost", "root", "", "vivek");
$sql = "INSERT INTO  ciyastore( 	CId ,
customer_name ,
 Email ,
phone ,
DOB,
password ) VALUES('','$name','$email','$phone',$DOB,'$password');";
if ($conn->query($sql)) {
    echo 1;
} else {
    echo 0;
}
