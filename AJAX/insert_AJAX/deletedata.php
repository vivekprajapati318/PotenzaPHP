<?php
$sno = $_GET['delet'];
$conn = new mysqli("localhost", "root", "", "vivek");
$sql = "DELETE FROM `crud` WHERE `crud`.`ID` = $sno;";
if ($conn->query($sql)) {
    echo 1;
} else {
    echo 0;
}
