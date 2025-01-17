<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>product details</title>
</head>

<body>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>user data</title>
        <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.css">
    </head>

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
                <td> <button class='update' style='border-radius: 12px;    background-image: linear-gradient(70deg, yellow, transparent 100px);' data-id=" . $row['ID'] . " name='update'>update</button>
                 <button class='delete'  style='border-radius: 12px;        background-image: linear-gradient(10deg, red, transparent);' data-id=" . $row['ID'] . " name='delete'>delete</button> </td>
           
                 
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
            {
                $(document).ready(function() {
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

                });
                // let table = new DataTable('#myTable', {
                //     paging: false
                // });
            }
        </script>
    </body>

    </html>
</body>

</html>