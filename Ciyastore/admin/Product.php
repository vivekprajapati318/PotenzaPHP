<!DOCTYPE html>
<html>




<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
</head>

<body>
    <input type="button" id="back" value="Back">
    <?php
    $conn = new mysqli("localhost", "root", "", "vivek");
    $sql = "SELECT * FROM product";
    $result = $conn->query($sql);
    $out = "";
    $sno = 0;
    if (mysqli_num_rows($result) > 0) {

        $out .= '<table class="table1"  id="myTable" border="1" width="100% cellpadding="15px" style="possition:absolute" margin-left:10px>
    <thead>
<tr>
           
            <th>proid</th>
            <th>Title</th>
            <th>description</th>
            <th>image</th>
            <th>SKU</th>
            <th>category</th>
            <th>price</th>
            <th style="padding: 10px; margin: left 40px;">action</th>
        </tr>
        </thead><tbody> ';


        while ($row = mysqli_fetch_assoc($result)) {
            $sno = $sno + 1;
            $out .=
                " <tr>
                 <td>" . $sno . "</td>
                <td>" . $row['Title'] . "</td>
                <td>" . $row['description'] . "</td>
                <td>" .  $row['image'] . "</td>
                <td>" . $row['SKU'] . "</td>
                <td>" . $row['catagory'] . "</td>
                <td>" . $row['price'] . "$" . "</td>
                <td> <button class='update' style='border-radius: 12px;    background-image: linear-gradient(70deg, yellow, transparent 100px);' data-id=" . $row['proid'] . " name='update'>update</button>
                 <button class='delete'  style='border-radius: 12px;        background-image: linear-gradient(10deg, red, transparent);' data-id=" . $row['proid'] . " name='delete'>delete</button> </td>

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


    <script>
        {
            $(document).ready(function() {
                $("#back").on('click', function() {
                    window.location.href = "index.php";
                })
                $('table#myTable').DataTable({
                    // paging: false

                    columnDefs: [{
                        "targets": [3, 4, 5],
                        "orderable": false,
                        searchable: false
                    }],

                })

            });
            $(document).on("click", ".delete", function() {
                if (confirm("do you really want to delete")) {
                    var delet = $(this).data("id");
                    console.log(delet)
                    $.ajax({
                        url: "./deletedata.php",
                        data: {
                            delet: delet
                        },
                        success: function(data) {
                            console.log(data)
                            if (data == 1) {
                                alert('deleted')
                                window.location.href = "Product.php"
                            } else {
                                console.log("error in delete".Error);
                            }

                        }
                    })
                } else {
                    alert("not delete");
                }
            })
            $(document).on("click", ".update", function() {
                alert("you mf")
            })

            // let table = new DataTable('#myTable', {
            //     paging: false
            // });
        }
    </script>
</body>



</html>