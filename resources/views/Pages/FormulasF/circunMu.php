<?php

$q = $_REQUEST["q"];
$p = $_REQUEST["p"];

    $z = ($p*100)/$q;

if ($z <= 9.8) {
	echo "COMPLEXION GRANDE";
}
elseif (9.8 < $z && $z < 10.9) {
	echo "COMPLEXION MEDIANA";
}
else
	echo "COMPLEXION PEQUEÑA";
?>