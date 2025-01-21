<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Products</title>
    <link rel="icon" href="../assets/images/favicon.png" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700%7CPoppins:400,500,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
    <style>
        .container {
            background: #fff;
            margin-top: 150px;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
            width: 80%;
            max-width: 600px;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        .container label {
            font-weight: bold;
            margin-bottom: 5px;
            display: block;
            color: #555;
        }

        .container input[type="text"],
        .container input[type="number"],
        .container textarea,
        .container input[type="file"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 14px;
            transition: border-color 0.3s;
        }

        .container input[type="text"]:focus,
        .container input[type="number"]:focus,
        .container textarea:focus,
        .container input[type="file"]:focus {
            border-color: #007bff;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.3);
        }

        .container .product.images {
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-bottom: 20px;
            position: relative;
            overflow: hidden;
        }

        .container input[type="submit"],
        .container input[type="button"] {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background-color: #007bff;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .container input[type="submit"]:hover,
        .container input[type="button"]:hover {
            background-color: #0056b3;
        }

        #add {
            margin-left: 10px;
            background-color: #28a745;
        }

        #add:hover {
            background-color: #218838;
        }

        .product.desc textarea {
            height: 80px;
        }

        .product.images img {
            max-width: 100px;
            margin: 5px;
            border-radius: 5px;
        }

        .product.price,
        .product.SKU {
            display: flex;
            justify-content: space-between;
            align-items: center;

        }

        .product.category {
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-bottom: 20px;
            position: relative;
            overflow: hidden;


        }

        .product.price input,
        .product.SKU input,
        .product.category input {
            flex: 1;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
</head>
<div class="alert">
    <h2>Alert Messages</h2>

    <p>error!</p>
    <div class="alert">
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
        <strong>Danger!</strong> invalid credencials password should have 8 char
    </div>
</div>

<body>

    <div class="container">

        <h1>Add Product</h1>

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

            </div>
            <input type="button" id="add" class="add" value="Add Image">
        </div>
        <div class="product SKU">
            <label for="SKU">SKU</label>
            <input type="text" id="SKU" required placeholder="SKU">
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
        <input type="submit" value="Add Product" id="AddProduct">

    </div>

    <script>
        $(document).ready(function() {
            $(".alert").hide()
            click = 0;
            $(document).on("click", "#AddProduct", function() {

                if (click == 0) {
                    alert("click on add image first")
                }
            })

            $(".add").on("click", function() {
                click = 1;
                var formElement = $(this).closest("form")[0];

                var formdata = new FormData(formElement);

                var files = $("#file")[0].files;
                console.log(files)
                for (var i = 1; i < files.length; i++) {
                    formdata.append("file[]", files[i]);
                }

                $.ajax({
                    url: 'proImages.php',
                    type: "post",
                    data: formdata,
                    contentType: false,
                    processData: false,
                    success: function(data) {
                        if (data == 1) {
                            alert("file is greater");
                        } else {
                            alert("Files uploaded successfully:", data);
                            $(document).on("click", "#AddProduct", function() {
                                var title = $('#title').val()
                                var desc = $('#desc').val()
                                var image = data
                                var SKU = $("#SKU").val()
                                var category = $("#category").val()
                                var price = $("#price").val()
                                const titleerr = descerr = imageerr = categoryerr = priceerr = click = 0
                                if (!title) {
                                    alert("add title")
                                    titleerr = 1
                                }
                                if (!SKU) {
                                    SKUerr = 1
                                }
                                if (!desc) {
                                    alert("add description")
                                    descerr = 1
                                }

                                if (!category) {
                                    alert("add category")
                                    categoryerr = 1
                                }
                                if (!price) {
                                    alert("add price")
                                    priceerr = 1
                                }

                                var reg = new RegExp('^[0-9]$');
                                testpr = reg.test(price)
                                if (!testpr) {
                                    priceerr = 1
                                }


                                $.ajax({
                                    url: "IndertPro.php",
                                    type: "post",
                                    data: {
                                        title: title,
                                        desc: desc,
                                        image: image,
                                        SKU: SKU,
                                        category: category,
                                        price: price
                                    },
                                    success: function(data) {
                                        console.log(data)
                                        if (titleerr || descerr || imageerr || categoryerr || priceerr || click == 0) {
                                            $(".alert").show().text("Invalid credentials. Please fix the errors and try again.");
                                        } else {
                                            if (data == 1) {
                                                alert("success")
                                                window.location.href = "index.php";
                                            } else {
                                                alert("err", data)
                                            }
                                        }
                                    }
                                })
                                $('#title').val()
                            });
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error("Error uploading files:", error);


                    }
                });
            });


        });
    </script>
</body>

</html>