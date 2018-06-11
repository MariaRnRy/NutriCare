<?php

$q = $_REQUEST["q"];
$p = $_REQUEST["p"];

    $w = $p * $p * 21.5;
    $z = ($q/$w)*100;
 
echo number_format($z, 2, '.', ',')." %<br>";

if ($z <= 89.9) {
	echo "BAJO PESO";
}
elseif (90 <= $z && $z <= 120) {
	echo "PESO ACEPTABLE";
}
else
	echo "EXCESO O SOBREPESO";

?>