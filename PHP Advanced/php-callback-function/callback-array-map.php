<?php
function my_callback($item) {
  return strlen($item);
}

$strings = ["NightWing", "Superman", "Batman", "Green Lantern"];
$lengths = array_map("my_callback", $strings);
// print_r($lengths);
echo "<pre>";
print_r($lengths);
echo "</pre>";
?>