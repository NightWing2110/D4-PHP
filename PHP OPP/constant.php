<?php
class wellcome {
  const Hello_Message = "Welcome to the Earth!!!";
  public function hello() {
    echo self::Hello_Message;
  }
}

$wellcome = new wellcome();
$wellcome->hello();
?>