<?php

abstract class Creator
{
    abstract protected function factoryMethod(Product $product);

    public function doFactory($productNow)
    {
        $countryProduct = $productNow;
        $mfg = $this->factoryMethod($countryProduct);
        return $mfg;
    }
}

?>