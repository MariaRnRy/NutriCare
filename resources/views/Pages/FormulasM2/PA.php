<?php

$q = $_REQUEST["q"];

if ($q <= 101.9) {
	echo "MEDICION DE RIESGO INCREMENTADO";
}
elseif (102 <= $q) {
	echo "MEDICION DE RIESGO SUSTANCIALMENTE INCREMENTADO";
}
?>