<?php

include_once 'Product.php';

class GraphicProduct implements Product
{
    private $mfgProduct;

    public function getProperties()
    {
        $this->mfgProduct = "<img src='..\README_IMGS\mali.png' width='200' height='200' align='left' style='padding: 10px 10px 10px 10px' />";
        return $this->mfgProduct;
    }
}

?>