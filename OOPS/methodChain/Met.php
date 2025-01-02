<?php
class Met
{
    function first()
    {
        echo "first  ";
        return $this;
    }
    function sec()
    {
        echo "secound  ";
        return $this;
    }
    function thi()
    {
        echo "third";
        return $this;
    }
}
$pk = new Met();
$pk->first()->sec()->thi();
