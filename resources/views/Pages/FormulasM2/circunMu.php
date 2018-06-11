<?php

$q = $_REQUEST["q"];
$p = $_REQUEST["p"];

    $z = ($p*100)/$q;

if ($z <= 9.5) {
	echo "COMPLEXION GRANDE";
}
elseif (9.5 < $z && $z < 10.4) {
	echo "COMPLEXION MEDIANA";
}
else
	echo "COMPLEXION PEQUEÑA";
?>