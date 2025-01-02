<?php

$h = $_FILES['file']['name'];
echo $h . "<br>";
$fileext = explode(".", $h);
$filee = strtolower(end($fileext));
echo $filee . "<br>";
$FileSize = $_FILES['file']['size'];
$fileERROR = $_FILES['file']['error'];
$tempna = $_FILES['file']['tmp_name'];
$FileSizein = round($FileSize / 1000);
if ($FileSize > 550000) {
    echo "file is  greater then limit <br>";
} else {

    if ($filee == "png" || $filee == "jpg" || $filee == "jpeg" || $filee == "gif") {
        echo "file is image file";
        if ($fileERROR === 0) {
            echo "<br>";
            echo "file is added";
            $newname = uniqid("", true) . "." . $filee;
            $newdest = 'uploded_files/' . $newname;
            move_uploaded_file($tempna, $newdest);
            header("success");
            echo $newname;
        } else {
            die("there is some error");
        }
    } else {
        echo " file is $filee upload image file";
    }
};
