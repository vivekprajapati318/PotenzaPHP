<?php
$arr = array(
  "class1" =>
  array(
    "vivek" => array("MATH" => 98, "English" => 98, "FSD" => 98, "BT" => 96, "CD" => 96),
    "yuvraj" => array("MATH" => 98, "English" => 98, "FSD" => 98, "BT" => 96, "CD" => 96),
    "parth" => array("MATH" => 98, "English" => 98, "FSD" => 98, "BT" => 96, "CD" => 96)
  ),
  "class2" => array(
    "parth" => array("MATH" => 98, "English" => 98, "FSD" => 98, "BT" => 96, "CD" => 96),
    "vinit" => array("MATH" => 98, "English" => 98, "FSD" => 98, "BT" => 96, "CD" => 96),
    "bhagyesh" => array("MATH" => 98, "English" => 98, "FSD" => 98, "BT" => 96, "CD" => 96)
  ),
  "class3" => array(
    "yash" => array("MATH" => 98, "English" => 98, "FSD" => 98, "BT" => 96, "CD" => 96),
    "ridham" => array("MATH" => 98, "English" => 98, "FSD" => 98, "BT" => 96, "CD" => 96),
    "dainik" => array("MATH" => 98, "English" => 98, "FSD" => 98, "BT" => 96, "CD" => 96)
  ),
  "class4" => array(
    "OM" => array("MATH" => 98, "English" => 98, "FSD" => 98, "BT" => 96, "CD" => 96),
    "raj" => array("MATH" => 98, "English" => 98, "FSD" => 98, "BT" => 96, "CD" => 96),
    "prem" => array("MATH" => 98, "English" => 98, "FSD" => 98, "BT" => 96, "CD" => 96)
  )

);
echo "<div style=\" margin:5px;text-align:center\";>";
foreach ($arr as $o => $class) {



  foreach ($class as $k => $j) {
    if (isset($_POST)) {
      $ser = $_POST['search'];
      if ($class[$k] == $ser) {
        echo " <h3>class:" . ($o) . "</h3>";
      }
      if ($k == $ser) {
        echo "<h4>";
        echo " student:" . $k;
        echo "</h4>";
      }
    }
    foreach ($j as $l => $m) {
      echo "<br>";
      if (isset($_POST)) {
        $ser = $_POST['search'];
        if ($k == $ser) {
          echo "<div >";
          echo "<table   style= \" border:1px solid black ; justify-content:canter; \"  >";
          echo "<tr  style= \" background-image: linear-gradient( to bottom right,green, yellow); color:red;\"  >";
          echo "<th >";
          echo "subject";
          echo "</th>";
          echo "<th>";
          echo "marks";
          echo "</th>";
          echo "</tr>";
          echo "<tr style= \" background-image: linear-gradient(green, yellow); color:red;\"  >";
          echo "<td>";
          echo "$l";
          echo "</td>";
          echo "<td>";
          echo "$m";
          echo "</td>";
          echo "</tr>";
          echo "</table>";
          echo "</div>";
        }
      }
    }
  }
}
echo "</div>";
