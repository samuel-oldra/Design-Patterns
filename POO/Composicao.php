<?php

class DoMath
{
    private $sum;
    private $quotient;

    public function simpleAdd($first, $second)
    {
        $this->sum = ($first + $second);
        return $this->sum;
    }

    public function simpleDivide($dividend, $divisor)
    {
        $this->quotient = ($dividend / $divisor);
        return $this->quotient;
    }
}

class DoText
{
    private $textOut;
    private $fullFace;

    public function numToText($num)
    {
        $this->textOut = (string) $num;
        return $this->textOut;
    }

    public function addFace($face, $msg)
    {
        $this->fullFace = "<strong>" . $face . "</strong>: " . $msg;
        return $this->fullFace;
    }
}

class ClientCompose
{
    private $added;
    private $divided;
    private $textNum;
    private $output;

    public function __construct()
    {
        $useMath = new DoMath();
        $useText = new DoText();

        $this->added = $useMath->simpleAdd(40, 60);
        $this->divided = $useMath->simpleDivide($this->added, 25);
        $this->textNum = $useText->numToText($this->divided);
        $this->output = $useText->addFace("Your results", $this->textNum);
        echo $this->output;
    }
}

$worker = new ClientCompose();

?>