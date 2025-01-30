<?php
require "../DBconn/DB.php";
$search = $_POST['search'];
$sql = "SELECT * FROM product where Title LIKE '%{$search}%' ";
$result = $conn->query($sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $image =  explode(" ", $row['image']);
        $catagory =  explode(",", $row['catagory']);

        require "shopPRO.php";
    }
} else {
    echo "
    <html>
    <head>
    <style>
    .modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  background-color: rgba(0, 0, 0, 0.4); /* Black with opacity */
  overflow: auto; /* Enable scroll if needed */
}

.modal-content {
  background-color: #fefefe;
  margin: 15% auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
  text-align: center;
}

.close-btn {
  color: #aaa;
  font-size: 28px;
  font-weight: bold;
  position: absolute;
  top: 10px;
  right: 20px;
  cursor: pointer;
}

.close-btn:hover,
.close-btn:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}

button {
  padding: 10px 20px;
  background-color: #007BFF;
  color: white;
  border: none;
  cursor: pointer;
}

button:hover {
  background-color: #0056b3;
}

    </style>
    </head>
    <body>


    <div id='productNotFoundModal' class='modal'>
  <div class='modal-content'>
    <span class='close-btn' >&times;</span>
    <h2>Product Not Found</h2>
    <p>Sorry, the product you're looking for is not available.</p>
    
  </div>
</div>

    <script>
    $(document).ready(function(){
    $('#productNotFoundModal').show()
    $('.close-btn').on('click',function(){
     $('#productNotFoundModal').hide()
     window.location.reload()
    })
    })
    </script>
     </body> </html>";
}
