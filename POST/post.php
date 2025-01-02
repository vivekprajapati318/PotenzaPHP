<?php 

if(isset($_POST)){
    $use=$_POST['Username'];
    $pas=$_POST['password'];
    if($use=="admin" && $pas==1234){
        echo "success";
    }
    else{
        echo "not valid";
    }
}

?>