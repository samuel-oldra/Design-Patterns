<?php

include_once 'CountryFactory.php';
//include_once 'KyrgyzstanProduct.php';
include_once 'MoldovaProduct.php';

class Client
{
    private $countryFactory;

    public function __construct()
    {
        $this->countryFactory = new CountryFactory();
        //echo $this->countryFactory->doFactory(new KyrgyzstanProduct());
        echo $this->countryFactory->doFactory(new MoldovaProduct());
    }
}

$worker = new Client();

?>