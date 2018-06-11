<?php

$q = $_REQUEST["q"];
$p = $_REQUEST["p"];

    $z = $q/($p*$p);

if ($z < 16) {
	echo "DESNUTRICION TERCER GRADO";
}
elseif (16 <= $z && $z < 17) {
	echo "DESNUTRICION SEGUNDO GRADO";
}
elseif (17 <= $z && $z < 18.5) {
	echo "DESNUTRICION PRIMER GRADO";
}
elseif (18.5 <= $z && $z < 25.1) {
	echo "PESO NORMAL";
}
elseif (25.1 <= $z && $z < 30) {
	echo "OBESIDAD PRIMER GRADO";
}
elseif (30 <= $z && $z < 40) {
	echo "OBESIDAD SEGUNDO GRADO";
}
else
	echo "OBESIDAD TERCER GRADO";
?>