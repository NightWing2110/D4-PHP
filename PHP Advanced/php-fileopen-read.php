<h4>PHP Read Single Line - fgets()</h4>
<?php
$myfile = fopen("readme.txt", "r") or die("Unable to open file!");
echo fgets($myfile);
fclose($myfile);
?>
<h4>PHP Check End-Of-File - feof()</h4>
<?php
$myfile = fopen("readme.txt", "r") or die("Unable to open file!");
// Output one line until end-of-file
while(!feof($myfile)) {
  echo fgets($myfile) . "<br>";
}
fclose($myfile);
?>
<h4>PHP Read Single Character - fgetc()</h4>
<?php
$myfile = fopen("readme.txt", "r") or die("Unable to open file!");
// Output one character until end-of-file
while(!feof($myfile)) {
  echo fgetc($myfile);
}
fclose($myfile);
?>