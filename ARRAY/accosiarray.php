<?php 
$a=array("pi"=>3.14,"r"=>8,"h"=>34);
$area=2*$a['pi']*$a['r']*$a['h'];
echo "total area is :$area<br>";
print_r($a);
echo "<br>";
$a['h']=25;
print_r($a);
echo "<br>";
foreach($a as $k=>$l){
 echo "$k :$l <br>";
}
array_splice($a,1,1);
foreach($a as $k=>$l){
    echo "$k :$l <br>";
   }
echo "ll";
unset($a[0],$a[1]);
var_dump($a);
//remove first item
array_shift($a);

foreach($a as $k=>$l){
    echo "$k :$l <br>";
   }
   $a["pi"]=3.14;
   $a["r"]=5;
