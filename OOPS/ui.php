<?php
?>
<html>

<head>
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        form {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }

        h2 {
            margin-bottom: 20px;
            color: #333;
        }

        label {
            font-size: 16px;
            margin-bottom: 8px;
            display: block;
            text-align: left;
            color: #333;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .pass {
            font-size: 14px;
            color: #555;
        }

        .name {
            font-size: 14px;
            color: #555;
        }

        .form-container {
            max-width: 400px;
            width: 100%;
        }
    </style>
</head>

<body>
    <div class="form-container">
        <form action="Logindone.php" method="POST">
            <h2>Login</h2>
            <label class="name" for="name">Enter your name</label>
            <input type="text" name="name" id="name" required>
            <label for="pass" class="pass">Enter your password</label>
            <input type="password" name="pass" id="pass" required>
            <input type="submit" value="Submit" name="submit">
        </form>
    </div>
</body>

</html>