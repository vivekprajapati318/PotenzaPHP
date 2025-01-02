<?php

class Login
{
    public $nam;
    public $pass;

    public function __construct($n,  $p)
    {
        $this->nam = $n;
        $this->pass = $p;
    }
    public function log()
    {

        if (strlen($this->nam) > 5 && strlen($this->pass) > 5) {
            echo "login successfull";
        } else {
            echo "invalid credencial password should be longer then 5";
        }
    }
}
