<?php
class Fruit {
  public $name;
  public $color;

  function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color;
  }
  function get_name() {
    return $this->name;
  }
  function get_color() {
    return $this->color;
  }
}

$watermelon = new Fruit("WaterMelon", "Red");
echo $watermelon->get_name();
echo "<br>";
echo $watermelon->get_color();
