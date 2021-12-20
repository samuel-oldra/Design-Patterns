<?php

abstract class IAbstract
{
    // Propriedade disponível a todas as implementações
    protected $valueNow;

    // Todas as implementações devem incluir os 2 métodos a seguir:
    // Deve retornar um valor decimal
    abstract protected function giveCost();
    // Deve retornar uma string
    abstract protected function giveCity();

    // Esta função concreta está disponível a todas as implementações
    // da classe sem sobrescrita do conteúdo
    public function displayShow()
    {
        $stringCost = $this->giveCost();
        $stringCost = (string) $stringCost;
        $allTogether = ("Cost: $" . $stringCost . " for " . $this->giveCity());
        return $allTogether;
    }
}

class NorthRegion extends IAbstract
{
    // Deve retornar um valor decimal
    protected function giveCost()
    {
        return 210.54;
    }

    // Deve retornar uma string
    protected function giveCity()
    {
        return "Moose Breath";
    }
}

class WestRegion extends IAbstract
{
    // Deve retornar um valor decimal
    protected function giveCost()
    {
        $solarSavings = 2;
        $this->valueNow = 210.54 / $solarSavings;
        return $this->valueNow;
    }

    // Deve retornar uma string
    protected function giveCity()
    {
        return "Rattlesnake Gulch";
    }
}

class Client
{
    public function __construct()
    {
        $north = new NorthRegion();
        $west = new WestRegion();
        $this->showInterface($north);
        $this->showInterface($west);
    }

    private function showInterface(IAbstract $region)
    {
        echo $region->displayShow() . "<br/>";
    }
}

$worker = new Client();

?>