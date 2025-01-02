<?php

if (isset($GET)) {
    $use = $GET['Username'];
    $pas = $GET['password'];
    if ($use == "admin" && $pas == 1234) {
        echo "success";
    } else {
        echo "not valid";
    }
}
