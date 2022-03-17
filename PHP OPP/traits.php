<?php
trait message1 {
  public function msg1() {
    echo "Learning PHP OPP! "; 
  }
}

class Welcome {
  use message1;
}

$obj = new Welcome();
$obj->msg1();
?>