<?php

interface IMethodHolder
{
    public function getInfo($info);
    public function sendInfo($info);
    public function calculate($first, $second);
}

class ImplementAlpha implements IMethodHolder
{
    public function getInfo($info)
    {
        print "This is NEWS! " . $info . "<br/>";
    }

    public function sendInfo($info)
    {
        return $info;
    }

    public function calculate($first, $second)
    {
        $calculated = $first * $second;
        return $calculated;
    }

    public function useMethods()
    {
        $this->getInfo("The sky is falling...");
        print $this->sendInfo("Vote for Senator Snort!") . "<br/>";
        print "You make $" . $this->calculate(20, 15) . " in your part-time job<br/>";
    }
}

$worker = new ImplementAlpha();
$worker->useMethods();

?>