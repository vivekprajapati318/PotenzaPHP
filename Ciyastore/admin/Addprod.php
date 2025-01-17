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
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f6f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 90vh;
        }

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

<body>

    <div class="container">
        <h1>Add Product</h1>
        <div class="userData">
            <label for="title">Title</label>
            <input type="text" id="title" placeholder="Product name">
        </div>
        <div class="product desc">
            <label for="desc">Description</label>
            <textarea name="desc" id="desc" placeholder="Enter product description"></textarea>
        </div>
        <div class="product images">
            <label for="fileUpload">Images</label>
            <input type="file" name="file" id="file">
            <input type="button" id="add" value="Add Image">
        </div>
        <div class="product SKU">
            <label for="SKU">SKU</label>
            <input type="text" id="SKU" placeholder="SKU">
        </div>
        <div class="product category">
            <label for="category">Category</label>
            <input type="text" id="category" placeholder="Category"><br>
            <input type="button" value="add catagory" id="addcat">
        </div>
        <div class="product price">
            <label for="price">Price</label>
            <input type="number" id="price" placeholder="Price">
        </div>
        <input type="submit" value="Add Product">
    </div>

    <script>
        $(document).ready(function() {
            $("#add").on("click", function() {
                const newImage = $("<input>", {
                    type: "file",
                    name: "file",
                    style: "margin-top: 10px;"
                });
                $(".product.images").append(newImage);
            });
            $("#addcat").on("click", function() {
                const newcat = $("<input>", {
                    type: "text",
                    name: "text",
                    style: "margin-top: 10px;",
                    placeholder: "catagory"
                });
                $(".product.category").append(newcat);
            });
        });
    </script>
</body>

</html>