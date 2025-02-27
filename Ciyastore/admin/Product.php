<!DOCTYPE html>
<html>




<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
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
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
    <style>
        /* Container Styling for Table */
        .table-container {
            width: 90%;
            /* Adjust to your desired width */
            max-width: 1200px;
            /* Optional: Limit max width */
            margin: 40px auto;
            /* Center the container */
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        /* Table Styling */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
            color: #333;
        }

        th {
            background-color: #f2f2f2;
            color: #007bff;
        }

        td img {
            max-width: 100px;
            height: auto;
            margin-right: 10px;
            border-radius: 5px;
        }

        tr:hover {
            background-color: #f9f9f9;
        }

        /* Modal Positioning Fix */
        .modal-content {
            border-radius: 10px;
            padding: 20px;
        }

        .modal-header {
            background-color: #007bff;
            color: white;
            border-radius: 10px 10px 0 0;
            padding: 15px;
        }

        .modal-header h4 {
            margin: 0;
        }

        .modal-header .close {
            color: white;
            font-size: 24px;
            cursor: pointer;
            margin-right: 0;
        }

        .modal-body {
            padding: 20px;
        }

        /* Responsive Styling */
        @media (max-width: 768px) {
            .table-container {
                width: 95%;
                /* Adjust for smaller screens */
                padding: 15px;
            }

            table {
                font-size: 14px;
            }

            th,
            td {
                padding: 10px;
            }
        }
    </style>


</head>

<body>
    <!-- Button trigger modal -->

    <div class="modal fade show" id="pgs_product" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-modal="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Update product </h4>
                    <p class="close" margin-right="0"><span>X</span></p>
                </div>

                <div class="modal-body">
                    <div class="box-authentication">
                        <div class="row">
                            <div class="col-sm-6">

                            </div>
                            <div class="container">


                                <div class="userData">
                                    <label for="title">Title</label>
                                    <input type="text" id="title" required placeholder="Product name">
                                </div>
                                <div class="product desc">
                                    <label for="desc">Description</label>
                                    <textarea name="desc" id="desc" required placeholder="Enter product description"></textarea>
                                </div>
                                <div class="product images">
                                    <label for="fileUpload">Images</label>
                                    <div class="com">
                                        <input type="file" name="file[]" required id="file" multiple class=file>
                                        <textarea name="imagedata" id="imagedata" required placeholder="Enter product description"></textarea>

                                    </div>
                                    <input type="button" id="add" class="add" value="Add Image">
                                </div>

                                <div class="product category">
                                    <label for="category">Category</label>
                                    <p>you can add multiple catagory by using ' , ' </p>
                                    <input type="text" id="category" required placeholder="Category" class="cat"><br>

                                </div>
                                <div class="product price">
                                    <label for="price">Price</label>
                                    <input type="number" id="price" required placeholder="Price">
                                </div>
                                <div class="product Quantity">
                                    <label for="Quantity">Quantity</label>
                                    <input type="number" id="Quantity" required placeholder="Quantity">
                                </div>
                                <input type="submit" value="Add Product" id="updatepr">

                            </div>

                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <img src="" alt="">


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
            <th>price</th><th>Quantity</th>
            <th style="padding: 10px; margin: left 40px;">action</th>
        </tr>
        </thead><tbody> ';


        while ($row = mysqli_fetch_assoc($result)) {
            $sno = $sno + 1;
            $image = explode(" ", $row['image']);

            $out .= "<tr>
                 <td>" . $sno . "</td>
                 <td>" . $row['Title'] . "</td>
                 <td>" . $row['description'] . "</td>";

            $out .= "<td>";
            foreach ($image as $img) {
                $out .= "<img src='" . $img . "' alt='Image' style='max-width: 100px; height: auto; margin-right: 5px;' />";
            }
            $out .= "</td>";

            $out .= "<td>" . $row['SKU'] . "</td>
                 <td>" . $row['catagory'] . "</td>
                 <td>" . $row['price'] . " <b>$</b></td>
                 <td>" . $row['ProCount'] . "</td>
                 <td>
                     <button class='update' style='border-radius: 12px; background-image: linear-gradient(70deg, yellow, transparent 100px);' data-id=" . $row['proid'] . " name='update'>update</button>
                     <button class='delete' style='border-radius: 12px; background-image: linear-gradient(10deg, red, transparent);' data-id=" . $row['proid'] . " name='delete'>delete</button>
                 </td>
             </tr>";
        }

        $out .= " </tbody></table>";

        echo $out;
        mysqli_close($conn);
    } else {
        # code...
    }

    ?>

    <!-- Button trigger modal -->





    <script>
        $(document).ready(function() {

            $("#back").on('click', function() {
                window.location.href = "index.php";
            })
            $("#add").on('click', function() {
                const img = $('#file').val()
                $("#imagedata").append(img)
            })
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

            $(document).on("click", ".update", function(e) {
                $(".close").on("click", function() {
                    $("#pgs_product").hide()
                })

                image_arr = []
                var title = $(e.target).closest('tr').find('td').eq(1).text();
                var desc = $(e.target).closest('tr').find('td').eq(2).text();
                var image = $(e.target).closest('tr').find('td').eq(3).find('img').each(function() {
                    let imgsrc = $(this).attr('src')
                    if (imgsrc) {
                        image_arr.push(imgsrc);
                        $("#imagedata").val(image_arr)
                    }
                })

                var category = $(e.target).closest('tr').find('td').eq(5).text();
                var price = $(e.target).closest('tr').find('td').eq(6).text();
                pu = price.split(" ", 2)
                var quantity = $(e.target).closest('tr').find('td').eq(7).text();

                console.log(desc, title, price, quantity, pu)

                $("#title").val(title)
                $("#desc").val(desc)

                $("#category").val(category)
                $("#price").val(pu[0])
                $("#Quantity").val(quantity)
                var update = $(this).data("id");
                console.log(update)
                titleerr = descerr = imageerr = categoryerr = priceerr = 0




                $("#updatepr").on('click', function() {

                    var title = $("#title").val()
                    var desc = $("#desc").val()
                    var image = $("#imagedata").val()
                    var category = $("#category").val()
                    var price = $("#price").val()
                    var quantity = $("#Quantity").val()





                    alert("kj")
                    $.ajax({
                        url: "UpdatePro.php",
                        type: "post",
                        data: {
                            up: update,
                            title: title,
                            desc: desc,
                            image: image,
                            category: category,
                            price: price,
                            quantity: quantity
                        },
                        success: function(data) {
                            console.log(data)
                            if (data == 1) {
                                alert("data updated")
                                window.location.href = "Product.php"
                                window.location.reload()
                            } else {
                                alert(data);
                            }
                        }
                    })

                })

                $("#pgs_product").toggle()


            })

        })
    </script>
    <script>
        $('table#myTable').DataTable({
            // paging: false

            columnDefs: [{
                "targets": [3, 4, 5],
                "orderable": false,
                searchable: false
            }],

        })
    </script>
</body>



</html>