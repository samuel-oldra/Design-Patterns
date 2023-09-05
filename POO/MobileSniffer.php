<?php

class MobileSniffer
{
    private $userAgent;
    private $device;
    private $browser;
    private $deviceLength;
    private $browserLength;

    public function __construct()
    {
        $this->userAgent = $_SERVER["HTTP_USER_AGENT"];
        $this->userAgent = strtolower($this->userAgent);

        $this->device = array("iphone", "ipad", "android", "silk", "blackberry", "touch");
        $this->browser = array("firefox", "chrome", "opera", "msie", "safari", "blackberry", "trident");
        $this->deviceLength = count($this->device);
        $this->browserLength = count($this->browser);
    }

    public function findDevice()
    {
        for ($uaSniff = 0; $uaSniff < $this->deviceLength; $uaSniff++) {
            if (strstr($this->userAgent, $this->device[$uaSniff])) {
                return $this->device[$uaSniff];
            }
        }
    }

    public function findBrowser()
    {
        for ($uaSniff = 0; $uaSniff < $this->browserLength; $uaSniff++) {
            if (strstr($this->userAgent, $this->browser[$uaSniff])) {
                return $this->browser[$uaSniff];
            }
        }
    }
}

?>