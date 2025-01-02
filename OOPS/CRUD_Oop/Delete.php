<?php

class Delete
{
    function load($conn)
    {

        $sno = $_GET['delete'];

        $sql = "DELETE FROM `crud` WHERE `crud`.`ID` = $sno;";
        $dell = $conn->query($sql);
        if ($dell) {
        }
    }
}
