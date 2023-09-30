<?php

include_once 'CountryFactory.php';
include_once 'KyrgyzstanProduct.php';

class Client
{
    private $countryFactory;

    public function __construct()
    {
        $this->countryFactory = new CountryFactory();
        echo $this->countryFactory->doFactory(new KyrgyzstanProduct());
    }
}

$worker = new Client();

?>