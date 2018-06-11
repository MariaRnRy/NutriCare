<?php

$lch = $_REQUEST["a"];
$crn = $_REQUEST["b"];
$lgu = $_REQUEST["c"];
$grs = $_REQUEST["d"];

 $z = ($lch*5)+($crn*4)+$lgu+($grs*5);
echo $z;
?>