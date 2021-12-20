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

?>