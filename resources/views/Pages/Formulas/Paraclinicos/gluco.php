<?php
	$q = $_REQUEST["q"];
		   
	if ($q == 0) {
		echo "NO DETERMINADO";
	}
	elseif ($q < 65) {
		echo "BAJO";
	}
	elseif ( $q >= 65 && $q <= 110) {
		echo "NORMAL";
	}
	else
		echo "ALTO";
?>