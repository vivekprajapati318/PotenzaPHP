      <!DOCTYPE html>
      <html lang="en">

      <head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link rel="icon" href="../assets/images/favicon.png" />
          <!-- Google Fonts -->
          <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700%7CPoppins:400,500,600,700&display=swap" rel="stylesheet">
          <!-- Bootstrap CSS -->
          <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
          <!-- Plugins CSS -->
          <link rel="stylesheet" href="../assets/css/plugins.css" />
          <!-- Base Style CSS -->
          <link rel="stylesheet" href="../assets/css/style.css" />
          <!-- category css -->
          <link rel="stylesheet" href="../assets/css/categories/default.css" />
          <!-- REVOLUTION STYLE SHEETS -->
          <link rel="stylesheet" type="text/css" href="revolution/css/settings.css" />
          <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
          <!-- REVOLUTION LAYERS STYLES -->

      </head>

      <body>
          <?php
            $email = $_POST['email'];
            $conn = new mysqli("localhost", "root", "", "vivek");
            $sql = "SELECT * FROM `order` WHERE Email='$email';";
            $result = $conn->query($sql);
            $out = "";
            $sno = 0;
            if (mysqli_num_rows($result) > 0) {

                $out .= '<table class="table1"  id="myTable" border="1" width="100% cellpadding="15px" margin-left:10px>
    <thead>
<tr>
           
            <th>ID</th>
        
            <th>Email</th>
            <th>Order ID</th>
            <th>Customer name</th>
            <th>phone number</th>
            <th>address</th>
            <th>SKU</th>
            <th>quantity</th>
            <th>total price</th>
            <th>payment method</th>


       
        </tr>
        </thead><tbody> ';


                while ($row = mysqli_fetch_assoc($result)) {
                    $sno = $sno + 1;
                    $out .=
                        " <tr>
                 <td>" . $sno . "</td>  
                   <td>" . $row['Email'] . "</td>
                   <td>" . $row['Order_id'] . "</td>
                   <td>" . $row['customer_name'] . "</td>
                   <td>" . $row['phone'] . "</td>
                   <td>" . $row['address'] . "</td>
                   <td>" . $row['SKU'] . "</td> " . "   <td>" . $row['quantity'] . "</td>
                   <td>" . $row['total price'] . "</td>
                   <td>" . $row['payment method'] . "</td>
            
                 
                </tr> 
                
            ";
                }
                $out .= " </tbody></table>";

                echo $out;
            }
            mysqli_close($conn); ?>
          <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
          <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
          <script>
              $('table#myTable').DataTable({

                  columnDefs: [{
                      "targets": [3, 4, 5],
                      "orderable": false,
                      searchable: false
                  }],

              })
          </script>
      </body>

      </html>