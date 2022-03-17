<?php
$age = '{
    "Dick" : 20,
    "Bruce" : 40,
    "Clark" : 30,
    "Diana" : 1000
    }';

// var_dump(json_decode($age));
echo "<pre>";
print_r(json_decode($age));
echo "</pre>";
?>