<?php
$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = "NightWing\n";
fwrite($myfile, $txt);
$txt = "Wonder-Boy\n";
fwrite($myfile, $txt);
fclose($myfile);
?>