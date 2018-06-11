<?php
	$q = $_REQUEST["q"];
		   
	if ($q == 0) {
		echo "NO DETERMINADO";
	}
	elseif ($q < 3.4) {
		echo "BAJO";
	}
	elseif ( $q >= 3.4 && $q <= 5) {
		echo "NORMAL";
	}
	else
		echo "ALTO";
?>