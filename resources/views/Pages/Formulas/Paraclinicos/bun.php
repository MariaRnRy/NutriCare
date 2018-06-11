<?php
	$q = $_REQUEST["q"];
		   
	if ($q == 0) {
		echo "NO DETERMINADO";
	}
	elseif ($q < 9) {
		echo "BAJO";
	}
	elseif ( $q >=9 && $q <= 20) {
		echo "NORMAL";
	}
	else
		echo "ALTO";
?>