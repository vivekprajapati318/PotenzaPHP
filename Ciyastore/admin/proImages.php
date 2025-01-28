<?php
if (!empty($_FILES['file']['name'][0])) {
    foreach ($_FILES['file']['name'] as $index => $name) {
        $Filename = $_FILES['file']['name'][$index];
        $FileSize = $_FILES['file']['size'][$index];
        $fileERROR = $_FILES['file']['error'][$index];
        $tempna = $_FILES['file']['tmp_name'][$index];
        $FileSizein = $FileSize / 1000;
        $fileext = explode(".", $Filename);
        $filee = strtolower(end($fileext));
        if ($FileSize > 550000) {
            echo 1;
        } else {

            if ($filee == "png" || $filee == "jpg" || $filee == "jpeg" || $filee == "gif") {

                if ($fileERROR === 0) {


                    $newname = uniqid("", true) . "." . $filee;
                    $newdest = './uploaded_files/' . $newname;
                    move_uploaded_file($tempna, $newdest);

                    echo " " . 'http://localhost/vivek/Ciyastore/admin/uploaded_files/' . $newname;
                } else {
                    die("there is some error");
                }
            } else {
                echo " file is $filee upload image file";
            }
        };
    }
}
