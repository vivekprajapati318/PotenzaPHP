<?php

$conn = new mysqli("localhost", "root", "", "vivek");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$title = $conn->real_escape_string($_POST['title']);
$desc = $conn->real_escape_string($_POST['desc']);
$image = $conn->real_escape_string($_POST['image']);
$SKU = $conn->real_escape_string($_POST['SKU']);
$category = $conn->real_escape_string($_POST['category']);
$price = floatval($_POST['price']);
$Quantity = intval($_POST['Quantity']);

if (empty($title) || empty($desc) || empty($image) || empty($SKU) || empty($category) || $price <= 0 || $Quantity <= 0) {
    echo "Error: Please ensure all fields are filled out correctly.";
    exit;
}

$sql = "INSERT INTO product (Title, description, image, SKU, catagory, price, ProCount) 
        VALUES ('$title', '$desc', '$image', '$SKU', '$category', '$price', '$Quantity')";

if ($conn->query($sql) === TRUE) {
    echo 1;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
