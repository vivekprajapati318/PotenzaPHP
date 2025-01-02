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
    <title>calculator</title>
</head>

<body>
    <form action="index.php" method="post" style="display: flex;">
        <div class="op1" style=""> <label style="margin-left:29%; font-size:large;" for="op1">num1</label>
            <br><input type="number" name="number1" id="">
        </div>
        <div style=" margin-left:5px;" class="opp"> <label style="margin-left:29%; font-size:large;" for="opp">oparation</label><br><input type="text" name="oparation" id=""></div>
        <div style=" margin-left:5px;" class="op2"> <label style="margin-left:29%; font-size:large;" for="op2">num2</label><br><input type="number" name="number2" id=""></div>
        <div class="submit" style="margin-left: 10px; margin-top: 20px;"> <input type="submit" name="=" value="="></div>

    </form>

</body>

</html>
<?php
if (isset($_POST["="])) {
    $num1 = $_POST["number1"];
    $num2 = $_POST["number2"];
    $opp = $_POST["oparation"];
    if ($opp == "+" || $opp == "-" || $opp == "*" || $opp == "/" || $opp == "%" || $opp == "**") {
        switch ($opp) {
            case "+":
                $c = new Add();
                echo $c->Add($num1, $num2);
                break;
            case "-":
                $k = new Sub();
                echo  $k->Sub($num1, $num2);
                break;
            case "*":
                $l = new Mul();
                echo  $l->Mul($num1, $num2);
                break;
            case "/":
                $k = new Div();
                echo  $k->Div($num1, $num2);
                break;
            case "%":
                $k = new mod();
                echo  $k->mod($num1, $num2);
                break;
            case "**":
                $k = new Square();
                echo  $k->Square($num1, $num2);
                break;
            default:
                # code...
                break;
        }
    } else {
        echo "invalid exxpretion";
    }
}
?>