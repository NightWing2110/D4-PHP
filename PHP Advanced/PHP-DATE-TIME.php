<h4>Get a Date</h4>
<?php
echo "Hôm nay là " . date("y/m/d"). "<br>";
echo "Hôm nay là " . date("y-m-d"). "<br>";
echo "Hôm nay là " . date("y.m.d"). "<br>";
echo "Hôm nay là " . date("d.m.y");
?>

<h4>Automatic Copyright Year</h4>
&copy;2010-<?php echo date("Y");?>

<h4>Get a Time</h4>
<?php
echo "Bây giờ là " . date('H:i:sa');
?>
<h4>Get Your Time Zone</h4>
<?php
date_default_timezone_set("America/New_York");
echo "Bây giờ là " . date('H:i:sa');
?>
<h4>Create A Date With mktime</h4>
<?php
$D = mktime(9,47,54,3,17,2022);
echo "Ngày tạo " . date("Y-m-d h:i:sa",$D);
?>
<h4>Create a Date From a String with strtotime</h4>
<?php
$D = strtotime("9:50am March 17 2022");
echo "Ngày tạo " . date("Y-m-d h:i:sa",$D) . "<br>";

$d=strtotime("tomorrow");
echo "Ngày mai " . date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("next Saturday");
echo "Thứ 7 tới " . date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("+3 Months");
echo "3 tháng sau " . date("Y-m-d h:i:sa", $d) . "<br>";
?>
