<?php
$age = '{
    "Dick" : 20,
    "Bruce" : 40,
    "Clark" : 30,
    "Diana" : 1000
    }';

$obj = json_decode($age);

echo $obj->Dick . "<br>";
echo $obj->Bruce . "<br>";
echo $obj->Clark . "<br>";
echo $obj->Diana;
?>