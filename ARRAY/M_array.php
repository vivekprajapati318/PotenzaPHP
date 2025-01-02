<?php 
$arr=array(
array(  "owner","carname","price","model" ),
array(  "vivek", "supra","12cr","mk5" ),
array(  "yuvraj","BMW","5cr","m4" ),
array(  "jeet","rolls royal","25cr","Ghost" ),
);
for ($i=0; $i < count($arr)-1; $i++) {  echo "<ul>";
    echo " owner name :".$arr[$i+1][0];
  for ($j=0; $j <count($arr[0])-1; $j++) { 
    echo "<li>".$arr[$i+1][$j+1]."</li>";
  }
  echo "</ul>";
  echo "<br>";
}
?>
