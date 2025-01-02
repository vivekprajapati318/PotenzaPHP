<?php
class Insert
{

    function getdata($conn)
    {

        $name = $_POST['user_name'];
        $age = $_POST['age'];
        $phone = $_POST['phone'];
        $pass = $_POST['password'];

        $sql = "INSERT INTO CRUD ( ID ,UserName ,age ,phone ,password ) 
            VALUES('','$name','$age','$phone','$pass');";
        $ppo = $conn->query($sql);
    }
}
