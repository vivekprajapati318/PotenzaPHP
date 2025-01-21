<?php

use Symfony\Component\Validator\Constraints\Length;

$images = array();
$image = $_POST['cat'];
for ($i = 0; $i < 7; $i++) {
    $images[$i] = $image;
}
print_r($images);
