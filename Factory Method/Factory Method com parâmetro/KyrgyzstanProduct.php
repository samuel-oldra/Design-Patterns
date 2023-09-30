<?php

include_once 'FormatHelper.php';
include_once 'Product.php';

class KyrgyzstanProduct implements Product
{
    private $mfgProduct;
    private $formatHelper;

    public function getProperties()
    {
        $this->formatHelper = new FormatHelper();
        $this->mfgProduct = $this->formatHelper->addTop();
        $this->mfgProduct .= <<<Kyrgyzstan

<img src='..\..\README_IMGS\kyrgyzstan.png' class='pixRight' width='300' height='300' />

<header>Kyrgyzstan</header>

<p>O Quirguist&#227;o &#233; um pa&#237;s da &#193;sia Central ao longo da Rota da Seda,
antigo trajeto comercial entre a China e o Mediterr&#226;neo. As montanhas de Tian Shan,
que contornam a antiga rota de caravanas e dominam o pa&#237;s, s&#227;o o habitat de
leopardos, linces e ovelhas. No sul, a cidade milenar de Osh tem um enorme e movimentado
bazar, que j&#225; foi uma parada da Rota da Seda.</p>

Kyrgyzstan;
        $this->mfgProduct .= $this->formatHelper->closeUp();
        return $this->mfgProduct;
    }
}

?>