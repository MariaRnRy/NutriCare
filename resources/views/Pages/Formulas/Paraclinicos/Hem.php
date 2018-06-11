<?php
	$q = $_REQUEST["q"];
		   
	if ($q == 0) {
		echo "NO DETERMINADO";
	}
	elseif ($q < 12) {
		echo "BAJO";
	}
	elseif (12 <= $q && $q <= 16) {
		echo "NORMAL";
	}
	else
		echo "ALTO";
?>