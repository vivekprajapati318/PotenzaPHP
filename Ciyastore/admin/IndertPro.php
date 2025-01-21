<?php
$conn = new mysqli("localhost", "root", "", "vivek");

$title = $_POST['title'];
$desc = $_POST['desc'];
$image = $_POST['image'];
$SKU = $_POST['SKU'];
$category = $_POST['category'];
$price = $_POST['price'];

$sql = "INSERT INTO product (Title,description,image,SKU,catagory,price) 
values('$title','$desc','$image','$SKU','$category','$price');";
$result = $conn->query($sql);
if ($result) {
    echo 1;
} else {
    echo "there is an error in uploading try again";
}
