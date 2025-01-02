<?php
function p1($a, $b)
{
    $n1=$a;
    $n2=$b;
    if ($n1>$n2) {
        echo "$n1 is greater than $n2 <br>";
    } elseif ($n1<$n2) {
        echo "$n2 n2 is greater than $n1<br>";
    } else {
        echo "both are equal <br>";
    }
}
p1(15, 25);
p1(26, 45);
p1(52, 15);
?>
