<?php
	$q = $_REQUEST["q"];
		   
	if ($q == 0) {
		echo "NO DETERMINADO";
	}
	elseif ($q < 0.5) {
		echo "BAJO";
	}
	elseif ( $q >=0.5 && $q <= 1.6) {
		echo "NORMAL";
	}
	else
		echo "ALTO";
?>