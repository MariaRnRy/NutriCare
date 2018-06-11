<?php

$q = $_REQUEST["q"];
$p = $_REQUEST["p"];

    $w = $p * $p * 21.5;
    $z = ($q/$w)*100;
 
echo number_format($z, 2, '.', ',')." %<br>";

if ($z < 70) {
	echo "SUGIERE DEPLECION SEVERA";
}
elseif (70 <= $z && $z < 80) {
	echo "SUGIERE DEPLECION MODERADA";
}
elseif (80 <= $z && $z <= 90) {
	echo "SUGIERE DEPLECION LEVE";
}
else
	echo "SIN DEPLECION";

?>