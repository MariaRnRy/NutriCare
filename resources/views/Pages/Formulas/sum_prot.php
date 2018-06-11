<?php

$lch = $_REQUEST["a"];
$crn = $_REQUEST["b"];
$vg = $_REQUEST["c"];
$cyt = $_REQUEST["d"];
$lgu = $_REQUEST["e"];

 $z = ($lch*9)+($crn*7)+($vg*2)+($cyt*2)+($lgu*8);
echo $z;
?>