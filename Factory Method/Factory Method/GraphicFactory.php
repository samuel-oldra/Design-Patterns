<?php

include_once 'Creator.php';
include_once 'GraphicProduct.php';

class GraphicFactory extends Creator
{
    protected function factoryMethod()
    {
        $product = new GraphicProduct();
        return $product->getProperties();
    }
}

?>