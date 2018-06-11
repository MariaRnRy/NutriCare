<?php

$q = $_REQUEST["q"];

if ($q <= 87.9) {
	echo "MEDICION DE RIESGO INCREMENTADO";
}
elseif (88 <= $q) {
	echo "MEDICION DE RIESGO SUSTANCIALMENTE INCREMENTADO";
}
?>