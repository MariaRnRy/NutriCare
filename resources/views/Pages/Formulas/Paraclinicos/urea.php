<?php
	$q = $_REQUEST["q"];
		   
	if ($q == 0) {
		echo "NO DETERMINADO";
	}
	elseif ($q < 14) {
		echo "BAJO";
	}
	elseif ( $q >= 14 && $q <= 44) {
		echo "NORMAL";
	}
	else
		echo "ALTO";
?>