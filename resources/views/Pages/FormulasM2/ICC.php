<?php

$q = $_REQUEST["q"];
$p = $_REQUEST["p"];

    $z = $q/$p;
 
echo number_format($z, 2, '.', ',')."<br>";

if ($z <= 0.99) {
	echo "DISTRIBUCION DE GRASA GINECOIDE";
}
else
	echo "DISTRIBUCION DE GRASA ANDROIDE";

?>