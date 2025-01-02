<?php
function add()
{
    $a = 45;
    $b = 77;
    $c = $a + $b;
    echo $c . "<br>";
}
$arr = array(1, 5, 4, 4, 9, 8, 7);
//sorting array
$a = sort($arr);

echo "<h4>getting array item by mapping</h4>";
$p = array_map(null, $arr);
for ($i = 0; $i < count($arr); $i++) {
    print_r($p[$i]);
    echo "<br>";
}

echo "<h4> calling function from array</h4>";
$r = array(4, 8, $arr, add());
$r[3];
//count items in array 
echo "<h4>count items in array </h4>";
echo count($r) . "<br>";
echo "<h4>geting varriable type in human readable </h4>";
var_dump($arr);
echo "<br>";

//getting value of arr function 
echo "<h4>values of arr</h4>";
foreach ($arr as $k => $val) {
    print_r($val . "  ");
}
//getting key of arr function 
echo "<h4>indexes of arr</h4>";
foreach ($arr as $k => $val) {

    print_r($k . "  ");
}
//array push opp..
echo "<h4>array push opp..</h4>";
array_push($arr,19);
print_r($arr);
echo "<h4>array pop opp..</h4>";
array_pop($arr);
print_r($arr);