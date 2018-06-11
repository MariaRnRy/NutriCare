<?php
	$q = $_REQUEST["q"];
		   
	if ($q == 0) {
		echo "NO DETERMINADO";
	}
	elseif ($q < 40) {
		echo "BAJO";
	}
	elseif ( $q >= 40 && $q <= 160) {
		echo "NORMAL";
	}
	else
		echo "ALTO";
?>