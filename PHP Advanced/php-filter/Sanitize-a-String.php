<?php
$str = "<h1>Hi My Name Is NightWing.Nice To Meet You!!!</h1>";
$newstr = filter_var($str, FILTER_SANITIZE_STRING);
echo $newstr;
?>