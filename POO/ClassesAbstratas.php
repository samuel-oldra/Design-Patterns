<?php

abstract class OneTrickAbstract
{
    public $storeHere;
    abstract public function trick($whatever);
}

class OneTrickConcrete extends OneTrickAbstract
{
    public function trick($whatever)
    {
        $this->storeHere = "An abstract property";
        return $whatever . $this->storeHere;
    }
}

$worker = new OneTrickConcrete();
print $worker->trick("From an abstract origin...");

?>