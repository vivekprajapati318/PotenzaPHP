<?php
require "Add.php";
require "Sub.php";
require "Mul.php";
require "mod.php";
require "Div.php";
require "Square.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
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
            background-color: #ffffff;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            width: 300px;
        }

        label {
            font-size: 18px;
            margin-bottom: 8px;
        }

        input[type="number"],
        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 16px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .op1,
        .op2,
        .opp {
            margin-bottom: 20px;
        }

        .result {
            text-align: center;
            font-size: 24px;
            margin-top: 20px;
            font-weight: bold;
        }

        .submit {
            text-align: center;
        }
    </style>
</head>

<body>
    <form action="index.php" method="post">
        <div class="op1">
            <label for="op1">Number 1</label>
            <input type="number" name="number1" id="num1" required>
        </div>
        <div class="opp">
            <label for="opp">Operation</label>
            <input type="text" name="oparation" id="operation" required>
        </div>
        <div class="op2">
            <label for="op2">Number 2</label>
            <input type="number" name="number2" id="num2" required>
        </div>
        <div class="submit">
            <input type="submit" name="=" value="Calculate">
        </div>
    </form>

    <div class="result">
        <?php
        if (isset($_POST["="])) {
            $num1 = $_POST["number1"];
            $num2 = $_POST["number2"];
            $opp = $_POST["oparation"];
            if ($opp == "+" || $opp == "-" || $opp == "*" || $opp == "/" || $opp == "%" || $opp == "**") {
                switch ($opp) {
                    case "+":
                        $c = new Add();
                        echo "Result: " . $c->Add($num1, $num2);
                        break;
                    case "-":
                        $k = new Sub();
                        echo "Result: " . $k->Sub($num1, $num2);
                        break;
                    case "*":
                        $l = new Mul();
                        echo "Result: " . $l->Mul($num1, $num2);
                        break;
                    case "/":
                        $k = new Div();
                        echo "Result: " . $k->Div($num1, $num2);
                        break;
                    case "%":
                        $k = new mod();
                        echo "Result: " . $k->mod($num1, $num2);
                        break;
                    case "**":
                        $k = new Square();
                        echo "Result: " . $k->Square($num1, $num2);
                        break;
                    default:
                        echo "Invalid expression";
                        break;
                }
            } else {
                echo "Invalid operation";
            }
        }
        ?>
    </div>
</body>

</html>