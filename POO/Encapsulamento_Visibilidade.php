<?php

// PRIVATE

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

//$worker = new PrivateVis();

// PROTECTED

abstract class ProtectVis
{
    protected $wage;

    abstract protected function countMoney();

    protected function setHourly($hourly)
    {
        $money = $hourly;
        return $money;

    }
}

class ConcreteProtect extends ProtectVis
{
    public function __construct()
    {
        $this->countMoney();
    }

    protected function countMoney()
    {
        $this->wage = "Your hourly wage is $";
        echo $this->wage . $this->setHourly(36);
    }
}

$worker = new ConcreteProtect();

?>