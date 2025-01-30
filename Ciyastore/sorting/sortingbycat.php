<?php
require "../DBconn/DB.php";
if (isset($_POST['cat'])) {

  $sort = $_POST['cat'];

  $sql =  "SELECT * FROM product";
  $result = $conn->query($sql);
  if (mysqli_num_rows($result) > 0) {

    while ($row = mysqli_fetch_assoc($result)) {
      $image =  explode(" ", $row['image']);
      $catagory =  explode(",", $row['catagory']);

      if (in_array($sort, $catagory)) {
        require "shopPRO.php";
      } else if ($sort == 'any') {
        require "shopPRO.php";
      }
    }
  }
}
