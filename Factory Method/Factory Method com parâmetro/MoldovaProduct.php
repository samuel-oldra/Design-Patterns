<?php

include_once 'FormatHelper.php';
include_once 'Product.php';

class MoldovaProduct implements Product
{
    private $mfgProduct;
    private $formatHelper;
    private $countryNow;

    public function getProperties()
    {
        // Carrega o texto a partir de um arquivo texto externo
        $this->countryNow = file_get_contents("CountryWriteups/Moldova.txt");
        $this->formatHelper = new FormatHelper();
        $this->mfgProduct = $this->formatHelper->addTop();
        $this->mfgProduct .= "<img src='../../README_IMGS/Moldova.png' class='pixRight' width='300' height='300'>";
        $this->mfgProduct .= "<header>Moldova</header>";
        $this->mfgProduct .= "<p>$this->countryNow</p>";
        $this->mfgProduct .= $this->formatHelper->closeUp();
        return $this->mfgProduct;
    }
}

?>