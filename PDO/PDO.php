<?php
$conn = new PDO("mysql:host=localhost;dbname=vivek", "root", "");

$age = 20;
$sql = $conn->prepare("SELECT UserName,phone FROM CRUD WHERE age=?");
$sql->bindParam(1, $age, PDO::PARAM_INT);

$sql->execute();
if ($sql) {
    echo "seccess";
} else {
    echo "lkojiu";
}

while ($result = $sql->fetch(PDO::FETCH_ASSOC)) {
    echo "<pre>";
    print_r($result);
    echo "</pre>";
}
