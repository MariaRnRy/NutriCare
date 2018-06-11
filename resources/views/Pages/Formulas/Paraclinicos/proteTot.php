<?php
	$q = $_REQUEST["q"];
		   
	if ($q == 0) {
		echo "NO DETERMINADO";
	}
	elseif ($q < 6.4) {
		echo "BAJO";
	}
	elseif ( $q >= 6.4 && $q <= 8.3) {
		echo "NORMAL";
	}
	else
		echo "ALTO";
?>