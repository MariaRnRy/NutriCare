<?php
	$q = $_REQUEST["q"];
		   
	if ($q == 0) {
		echo "NO DETERMINADO";
	}
	elseif ($q < 36.0) {
		echo "BAJO";
	}
	elseif ( $q >=36 && $q <= 47) {
		echo "NORMAL";
	}
	else
		echo "ALTO";
?>