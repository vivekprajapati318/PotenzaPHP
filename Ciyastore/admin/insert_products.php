<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vivek";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$products = [
    [
        "title" => "Men's Casual T-shirt",
        "description" => "Comfortable and stylish casual T-shirt for men",
        "image" => "https://example.com/image43.jpg",
        "SKU" => "12387",
        "category" => "Men's Apparel",
        "price" => "15.99"
    ],
    [
        "title" => "Women's Summer Dress",
        "description" => "Light and breezy summer dress for women",
        "image" => "https://example.com/image44.jpg",
        "SKU" => "12388",
        "category" => "Women's Apparel",
        "price" => "39.99"
    ],
    [
        "title" => "Men's Jogger Pants",
        "description" => "Comfortable jogger pants for men, perfect for casual wear",
        "image" => "https://example.com/image45.jpg",
        "SKU" => "12389",
        "category" => "Men's Apparel",
        "price" => "29.99"
    ],
    [
        "title" => "Women's Leather Jacket",
        "description" => "Chic leather jacket for women",
        "image" => "https://example.com/image46.jpg",
        "SKU" => "12390",
        "category" => "Women's Apparel",
        "price" => "79.99"
    ],
    [
        "title" => "Men's Slim Fit Jeans",
        "description" => "Slim-fit jeans for a trendy look",
        "image" => "https://example.com/image47.jpg",
        "SKU" => "12391",
        "category" => "Men's Apparel",
        "price" => "49.99"
    ],
    [
        "title" => "Women's Skirt",
        "description" => "Elegant skirt for women, suitable for casual or formal wear",
        "image" => "https://example.com/image48.jpg",
        "SKU" => "12392",
        "category" => "Women's Apparel",
        "price" => "34.99"
    ],
    [
        "title" => "Men's Button-Down Shirt",
        "description" => "Classic button-down shirt for men, ideal for office wear",
        "image" => "https://example.com/image49.jpg",
        "SKU" => "12393",
        "category" => "Men's Apparel",
        "price" => "39.99"
    ],
    [
        "title" => "Women's Cardigan",
        "description" => "Cozy cardigan for women",
        "image" => "https://example.com/image50.jpg",
        "SKU" => "12394",
        "category" => "Women's Apparel",
        "price" => "45.99"
    ],
    [
        "title" => "Men's Boots",
        "description" => "Sturdy leather boots for men",
        "image" => "https://example.com/image51.jpg",
        "SKU" => "12395",
        "category" => "Men's Footwear",
        "price" => "89.99"
    ],
    [
        "title" => "Women's Sandals",
        "description" => "Comfortable sandals for women, perfect for warm weather",
        "image" => "https://example.com/image52.jpg",
        "SKU" => "12396",
        "category" => "Women's Footwear",
        "price" => "24.99"
    ],
    [
        "title" => "Men's Hoodie",
        "description" => "Casual hoodie for men, warm and stylish",
        "image" => "https://example.com/image53.jpg",
        "SKU" => "12397",
        "category" => "Men's Apparel",
        "price" => "39.99"
    ],
    [
        "title" => "Women's Blouse",
        "description" => "Elegant blouse for women, perfect for office or casual wear",
        "image" => "https://example.com/image54.jpg",
        "SKU" => "12398",
        "category" => "Women's Apparel",
        "price" => "29.99"
    ],
    [
        "title" => "Men's Winter Jacket",
        "description" => "Warm winter jacket for men, great for cold weather",
        "image" => "https://example.com/image55.jpg",
        "SKU" => "12399",
        "category" => "Men's Apparel",
        "price" => "119.99"
    ],
    [
        "title" => "Women's Winter Coat",
        "description" => "Elegant winter coat for women, ideal for freezing temperatures",
        "image" => "https://example.com/image56.jpg",
        "SKU" => "12400",
        "category" => "Women's Apparel",
        "price" => "129.99"
    ],
    [
        "title" => "Men's Sneakers",
        "description" => "Sporty sneakers for men",
        "image" => "https://example.com/image57.jpg",
        "SKU" => "12401",
        "category" => "Men's Footwear",
        "price" => "69.99"
    ],
    [
        "title" => "Women's Flats",
        "description" => "Comfortable flats for women",
        "image" => "https://example.com/image58.jpg",
        "SKU" => "12402",
        "category" => "Women's Footwear",
        "price" => "19.99"
    ],
    [
        "title" => "Men's Sports Shorts",
        "description" => "Sports shorts for men, ideal for workouts and casual wear",
        "image" => "https://example.com/image59.jpg",
        "SKU" => "12403",
        "category" => "Men's Apparel",
        "price" => "24.99"
    ],
    [
        "title" => "Women's Leggings",
        "description" => "Comfortable leggings for women",
        "image" => "https://example.com/image60.jpg",
        "SKU" => "12404",
        "category" => "Women's Apparel",
        "price" => "19.99"
    ]
];




// Prepare SQL statement
$stmt = $conn->prepare("INSERT INTO product (Title, description, image, SKU, catagory, price) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssd", $title, $description, $image, $sku, $category, $price);

// Insert each product
foreach ($products as $product) {
    $title = $product["title"];
    $description = $product["description"];
    $image = $product["image"];
    $sku = $product["SKU"];
    $category = $product["category"];
    $price = $product["price"];
    $stmt->execute();
}

echo "Products inserted successfully.";

// Close connections
$stmt->close();
$conn->close();
