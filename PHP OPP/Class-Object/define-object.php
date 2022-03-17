<?php
class Fruit {
  // Properties
  public $name;
  public $color;

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
  function set_color($color) {
    $this->color = $color;
  }
  function get_color() {
    return $this->color;
  }
}

$watermelon = new Fruit();
$watermelon->set_name('WaterMelon');
$watermelon->set_color('red');
echo "Name: " . $watermelon->get_name();
echo "<br>";
echo "Color: " . $watermelon->get_color();
?>