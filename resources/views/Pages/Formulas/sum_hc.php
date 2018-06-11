<?php

$lch = $_REQUEST["a"];
$frt = $_REQUEST["b"];
$vg = $_REQUEST["c"];
$cyt = $_REQUEST["d"];
$lgu = $_REQUEST["e"];
$azr = $_REQUEST["f"];

 $z = ($lch*12)+($frt*15)+($vg*4)+($cyt*15)+($lgu*20)+($azr*10);
echo $z;
?>