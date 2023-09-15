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

$worker = new PrivateVis();

echo "<br/><br/>";

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

echo "<br/><br/>";

// PUBLIC

class PublicVis
{
    private $password;

    private function openSesame($someData)
    {
        $this->password = $someData;

        if ($this->password == "secret") {
            echo "You're in!<br/>";
        } else {
            echo "Release the hounds!<br/>";
        }
    }

    public function unlock($safe)
    {
        $this->openSesame($safe);
    }
}

$worker = new PublicVis();
$worker->unlock("secret");
$worker->unlock("duh");

echo "<br/><br/>";

// GETTERS E SETTERS

class GetSet
{
    private $dataWarehouse;

    public function __construct()
    {
        $this->setter(200);
        $got = $this->getter();
        echo $got;
    }

    private function getter()
    {
        return $this->dataWarehouse;
    }

    private function setter($setValue)
    {
        $this->dataWarehouse;
    }
}

$worker = new GetSet();

?>