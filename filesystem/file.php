<?php

$file = fopen("h.txt", 'r');

// $file = fopen("h.txt", 'r+');
// $file = fopen("h.txt", 'w');
// $file = fopen("h.txt", 'w+');
// $file = fopen("h.txt", 'a');
// $file = fopen("h.txt", 'a+');
// $file = fopen("h.txt", 'c');
// $file = fopen("o.txt", 'x');
// $file = fopen("p.txt", 'x+');
// echo fgets($file, filesize("h.txt"));
$con = "hello how are you i am good. where y";
fwrite($file, $con);
fclose($file);
