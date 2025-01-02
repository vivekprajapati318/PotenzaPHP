    <?php
    $a=10;
    $b=9;
  
    $expration="*";
    switch ($expration) {
        case "+":
            $c=$a+$b;
            echo "your answer $c is. ";
            break;
        case "-":
            $c=$a-$b;
            echo "your answer $c is. ";
            break;
        case "/":
            $c=$a/$b;
            echo "your answer $c is. ";
            break;
        case "**":
            $c=$a**$b;
            echo "your answer $c is. ";
            break;
        case "*":
            $c=$a*$b;
            echo "your answer $c is. ";
            break;
        case "%":
            $c=$a%$b;
            echo "your answer $c is. ";
            break;
        default:
            echo "your favorite color is orange";
    }
    ?>
