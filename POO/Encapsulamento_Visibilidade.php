<?php

class PrivateVis
{
    private $money;

    public function __construct()
    {
        $this->money = 200;
        $this->secret();
    }

    private function secret()
    {
        echo $this->money;
    }
}

$worker = new PrivateVis();

?>