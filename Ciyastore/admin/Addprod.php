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
                <textarea name="imagedata" id="imagedata" placeholder="imagedata"></textarea>
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
        <div class="product Quantity">
            <label for="Quantity">

                Quantity</label>
            <input type="number" id="Quantity" required placeholder="Quantity">
        </div>
        <input type="submit" value="Add Product" id="AddProduct">

    </div>

    <script>
        $(document).ready(function() {
            $(".alert").hide();
            let imageUploaded = false;

            $(".add").on("click", function() {
                const formdata = new FormData();
                const files = $("#file")[0].files;

                if (files.length === 0) {
                    alert("Please select an image to upload.");
                    return;
                }

                for (let i = 0; i < files.length; i++) {
                    formdata.append("file[]", files[i]);
                }

                $.ajax({
                    url: "proImages.php",
                    type: "POST",
                    data: formdata,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        if (response === "1") {
                            alert("File size is too large.");
                        } else {
                            alert("Files uploaded successfully.");
                            $("#imagedata").val(response);
                            imageUploaded = true;
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error("Error uploading files:", error);
                    },
                });
            });

            $(document).on("click", "#AddProduct", function() {
                const title = $("#title").val();
                const desc = $("#desc").val();
                const image = $("#imagedata").val();
                const SKU = $("#SKU").val();
                const category = $("#category").val();
                const price = $("#price").val();
                const Quantity = $("#Quantity").val();

                let hasError = false;


                if (!title) {
                    alert("Please add a title.");
                    hasError = true;
                }
                if (!desc) {
                    alert("Please add a description.");
                    hasError = true;
                }
                if (!imageUploaded || !image) {
                    alert("Please upload an image.");
                    hasError = true;
                }
                if (!SKU) {
                    alert("Please add an SKU.");
                    hasError = true;
                }
                if (!category) {
                    alert("Please add a category.");
                    hasError = true;
                }
                if (!price || isNaN(price) || price <= 0) {
                    alert("Please add a valid price.");
                    hasError = true;
                }
                if (!Quantity || isNaN(Quantity) || Quantity <= 0) {
                    alert("Please add a valid quantity.");
                    hasError = true;
                }

                if (hasError) {
                    $(".alert").show().text("Invalid credentials. Please fix the errors and try again.");
                    return;
                }

                $.ajax({
                    url: "IndertPro.php",
                    type: "POST",
                    data: {
                        title: title,
                        desc: desc,
                        image: image,
                        SKU: SKU,
                        category: category,
                        price: price,
                        Quantity: Quantity,
                    },
                    success: function(response) {
                        console.log(response);
                        if (response == 1) {
                            alert("Product added successfully!");
                            window.location.href = "index.php";
                        } else {
                            alert("Error adding product: " + response);
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error("Error adding product:", error);
                    },
                });
            });
        });
    </script>
</body>

</html>