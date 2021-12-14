<?php

// Indução de tipos: quase tipagem de dados

interface IProduct
{
    public function apples();
    function oranges();
}

class FruitStore implements IProduct
{
    public function apples()
    {
        return "FruitStore -- We have apples.<br/>";
    }

    public function oranges()
    {
        return "FruitStore -- We have no citrus fruit.<br/>";
    }
}

class CitrusStore implements IProduct
{
    public function apples()
    {
        return "CitrusStore -- We do not sell apples.<br/>";
    }

    public function oranges()
    {
        return "CitrusStore -- We have citrus fruit.<br/>";
    }
}

class UseProducts
{
    public function __construct()
    {
        $appleSauce = new FruitStore();
        $orangeJuice = new CitrusStore();

        $this->doInterface($appleSauce);
        $this->doInterface($orangeJuice);
    }

    public function doInterface(IProduct $product)
    {
        echo $product->apples();
        echo $product->oranges();
    }
}

$worker = new UseProducts();

?>