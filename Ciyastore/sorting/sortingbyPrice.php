<?php
require "../DBconn/DB.php";
$sort = $_POST['price'];

if ($sort == 'asc' || $sort == 'desc') {
    $sql =  "SELECT * FROM product order by price $sort ";
} else {
    $sql =  "SELECT * FROM product order by proid asc ";
}

$result = $conn->query($sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $image =  explode(" ", $row['image']);
        $catagory =  explode(",", $row['catagory']);

        require "shopPRO.php";
    }
}
