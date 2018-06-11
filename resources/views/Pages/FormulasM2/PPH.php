<?php

$q = $_REQUEST["q"];
$p = $_REQUEST["p"];

    $z = ($q/$p)*100;
 
echo number_format($z, 2, '.', ',')." %<br>";

if ($z < 54.9) {
	echo "PESO MINIMO DE SOBREVIVENCIA";
}
elseif (55 <= $z && $z <= 75) {
	echo "DESNUTRICION SEVERA 3er GRADO";
}
elseif (75 < $z && $z <= 84.9) {
	echo "DESNUTRICION MODERADA 2do GRADO";
}
elseif (85 <= $z && $z < 90) {
	echo "DESNUTRICION LEVE 1er GRADO";
}
else
	echo "SIN PROBLEMAS DE DESNUTRICION";

?>