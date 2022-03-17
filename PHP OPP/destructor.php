<?php
class Fruit {
    public $name;
    public $color;

    function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }
    function __destruct()
    {
        // echo "This is {$this->$name} and color is {$this->$color}";
        echo "This is {$this->name} and color is {$this->color}.";
    }
}

$watermelon = new Fruit("WaterMelon","Red");
?>