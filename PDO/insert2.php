
<?php
$conn = new PDO("mysql:host=localhost;dbname=vivek", "root", "");
$name = $_POST['name'];
$age = $_POST['age'];
$phone = $_POST['phone'];
$pass = $_POST['pass'];
$sql = $conn->prepare("INSERT INTO  CRUD ( ID  ,
UserName ,
age ,
phone ,
password ) VALUES('','$name','$age','$phone','$pass');");
if ($sql->execute()) {
    echo 1;
} else {
    echo 0;
}
