<?php
	$q = $_REQUEST["q"];
		   
	if ($q == 0) {
		echo "NO DETERMINADO";
	}
	elseif ($q < 4000) {
		echo "BAJO";
	}
	elseif ( $q >= 4000 && $q <= 11000) {
		echo "NORMAL";
	}
	else
		echo "ALTO";
?>