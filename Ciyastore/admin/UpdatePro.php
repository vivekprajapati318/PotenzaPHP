<?php
$conn = new mysqli("localhost", "root", "", "vivek");

$Pno = $_POST['up'];
$title = $_POST['title'];
$title = mysqli_real_escape_string($conn, $title);
$desc = $_POST['desc'];
$desc = mysqli_real_escape_string($conn, $desc);
$image = $_POST['image'];
$image = explode(",", $image);
$image = implode(" ", $image);
$category = $_POST['category'];
$category = mysqli_real_escape_string($conn, $category);
$price = $_POST['price'];
$quantity = $_POST['quantity'];

$sql = "UPDATE product SET  `Title`='$title',`description`='$desc',`image`='$image',`catagory`='$category',`price`='$price',`ProCount`='$quantity' WHERE `proid`= $Pno;";
$result = $conn->query($sql);

if ($result) {
    echo 1;
} else {
    echo "there is an error in uploading try again";
}
