    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.css">
    </head>

    <body>
        <?php
        $conn = new mysqli("localhost", "root", "", "vivek");
        $sql = "SELECT * FROM CRUD";
        $result = $conn->query($sql);
        $out = "";
        if (mysqli_num_rows($result) > 0) {
            $out .= '<table class="table1" id="myTable" border="1" width="100% cellpadding="15px" margin-left:10px>
        <thead>
    <tr>
                <th>ID</th>
                <th>name</th>
                <th>age</th>
                <th>phone</th>
                <th>pass</th>
            </tr>
            </thead><tbody> ';


            while ($row = mysqli_fetch_assoc($result)) {
                $out .=
                    " <tr>
                    <td>" . $row['ID'] . "</td>
                    <td>" . $row['UserName'] . "</td>
                    <td>" . $row['age'] . "</td>
                    <td>" . $row['phone'] . "</td>
                    <td>" . $row['password'] . "</td>
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
                            "targets": [3, 4],
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