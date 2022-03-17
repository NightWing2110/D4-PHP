<?php
function exclaim($str) {
  return $str . "! ";
}

function ask($str) {
  return $str . "? ";
}

function printFormatted($str, $format) {
  echo $format($str);
}

printFormatted("Hello NightWing", "exclaim");
printFormatted("Hello world", "ask");
?>