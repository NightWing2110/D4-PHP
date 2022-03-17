<?php
$age = '{
    "Dick" : 20,
    "Bruce" : 40,
    "Clark" : 30,
    "Diana" : 1000
    }';

$obj = json_decode($age);

foreach($obj as $key => $value) {
  echo $key . " => " . $value . "<br>";
}
?>