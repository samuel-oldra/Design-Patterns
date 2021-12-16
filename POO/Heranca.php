<?php

class FurryPets
{
    protected $sound;

    protected function fourlegs()
    {
        return "walk on all fours";
    }

    protected function makesSound($petNoise)
    {
        $this->sound = $petNoise;
        return $this->sound;
    }
}

class Dogs extends FurryPets
{
    public function __construct()
    {
        echo "Dogs " . $this->fourlegs() . "<br/>";
        echo $this->makesSound("Woof, woof") . "<br/>";
        echo $this->guardsHouse() . "<br/>";
    }

    private function guardsHouse()
    {
        return "Grrrrr" . "<br/>";
    }
}

class Cats extends FurryPets
{
    public function __construct()
    {
        echo "Cats " . $this->fourlegs() . "<br/>";
        echo $this->makesSound("Meow, purrr") . "<br/>";
        echo $this->ownsHouse() . "<br/>";
    }

    private function ownsHouse()
    {
        return "I'll just walk on this keyboard." . "<br/>";
    }
}

class Client
{
    public function __construct()
    {
        $dogs = new Dogs();
        $cats = new Cats();
    }
}

$worker = new Client();

?>