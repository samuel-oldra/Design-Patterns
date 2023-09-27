<?php

include_once 'Product.php';

class GraphicProduct implements Product
{
    private $mfgProduct;

    public function getProperties()
    {
        $this->mfgProduct = <<<PRODUCT

<!doctype html>
<html>
    <head>
        <meta charset='UTF-8' />
        <title>Map Product Factory</title>
    </head>
    <body>
        <img src="..\README_IMGS\mali.png" width='200' height='200' />
    </body>
</html>

PRODUCT;
        return $this->mfgProduct;

    }
}

?>