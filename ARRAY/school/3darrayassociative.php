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

echo "<div style='margin: 5px; text-align: center;'>";
echo "<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 20px;
        }
        h3 {
            color: #2c3e50;
            font-size: 24px;
            margin-top: 20px;
            text-decoration: underline;
        }
        h4 {
            color: #34495e;
            font-size: 20px;
            margin-top: 10px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        th, td {
            padding: 10px;
            text-align: center;
        }
        th {
            background: linear-gradient(to bottom right, #2ecc71, #f39c12);
            color: #fff;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        .container {
            max-width: 800px;
            margin: auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.1);
        }
        .search {
            margin: 20px 0;
        }
        .search input {
            padding: 10px;
            width: 80%;
            border-radius: 5px;
            border: 1px solid #ddd;
            font-size: 16px;
        }
        .search button {
            padding: 10px 20px;
            background-color: #3498db;
            border: none;
            border-radius: 5px;
            color: #fff;
            cursor: pointer;
            font-size: 16px;
        }
        .search button:hover {
            background-color: #2980b9;
        }
      </style>";
foreach ($arr as $o => $class) {
  foreach ($class as $k => $j) {
    if (isset($_POST)) {
      $ser = $_POST['search'];
      if ($class[$k] == $ser) {
        echo " <h3>Class: " . ucfirst($o) . "</h3>";
      }
      if ($k == $ser) {
        echo "<h4>Student: " . ucfirst($k) . "</h4>";
      }
    }
    foreach ($j as $l => $m) {
      echo "<br>";
      if (isset($_POST)) {
        $ser = $_POST['search'];
        if ($k == $ser) {
          echo "<div>";
          echo "<table>";
          echo "<tr>";
          echo "<th>Subject</th>";
          echo "<th>Marks</th>";
          echo "</tr>";
          echo "<tr>";
          echo "<td>" . ucfirst($l) . "</td>";
          echo "<td>" . $m . "</td>";
          echo "</tr>";
          echo "</table>";
          echo "</div>";
        }
      }
    }
  }
}
echo "</div>";
