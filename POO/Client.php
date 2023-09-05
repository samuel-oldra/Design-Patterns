<?php

include_once("MobileSniffer.php");

class Client
{
    private $mobSniff;

    public function __construct()
    {
        $this->mobSniff = new MobileSniffer();
        print "Device = " . $this->mobSniff->findDevice() . "<br/>";
        print "Browser = " . $this->mobSniff->findBrowser() . "<br/>";
    }
}

$trigger = new Client();

?>