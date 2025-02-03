<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Ciyastore - Multi-Purpose Responsive HTML5 eCommerce Template</title>
    <!-- Favicon -->
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

    <body>
        <?php
        $conn = new mysqli("localhost", "root", "", "vivek");
        $sql = "SELECT * FROM ciyastore";
        $result = $conn->query($sql);
        $out = "";
        $sno = 0;
        if (mysqli_num_rows($result) > 0) {

            $out .= '<table class="table1"  id="myTable" border="1" width="100% cellpadding="15px" margin-left:10px>
    <thead>
<tr>
           
            <th>ID</th>
            <th>name</th>
            <th>Email</th>
            <th>phone</th>
            <th>Birth Year</th>
            <th style="padding: 10px; margin: left 40px;">action</th>
        </tr>
        </thead><tbody> ';


            while ($row = mysqli_fetch_assoc($result)) {
                $sno = $sno + 1;
                $out .=
                    " <tr>
                 <td>" . $sno . "</td>
                <td>" . $row['customer_name'] . "</td>
                <td>" . $row['Email'] . "</td>
                <td>" . $row['phone'] . "</td>
                <td>" . $row['DOB'] . "</td>
                <td>" . " <input type='submit' class=OrderDetails data-id='$row[Email]' value='order details'>" . "</td>
                 
                </tr> 
                
            ";
            }
            $out .= " </tbody></table>";

            echo $out;
            mysqli_close($conn);
        } else {
            # code...
        }

        ?>

        <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
        <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
        <script>
            $(document).ready(function() {
                $(document).on("click", '.back', function() {
                    window.history.back()
                })
                $('table#myTable').DataTable({
                    // paging: false
                    // searching: false
                    // order: [
                    //     [2, "asc"]
                    // ]
                    // ordering: false
                    columnDefs: [{
                        "targets": [3, 4, 5],
                        "orderable": false,
                        searchable: false
                    }],

                })



                $(document).on("click", '.OrderDetails', function() {
                    var email = $(this).data('id')
                    $.ajax({
                        url: "Show.php",
                        type: "POST",
                        data: {
                            email: email
                        },
                        success: function(data) {
                            $('#myTable').html(data)

                        }
                    })

                });
            })
        </script>
    </body>

</html>