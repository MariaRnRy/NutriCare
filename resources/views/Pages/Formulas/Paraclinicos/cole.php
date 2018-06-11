<?php
	$q = $_REQUEST["q"];
		   
	if ($q == 0) {
		echo "NO DETERMINADO";
	}
	elseif ($q < 140) {
		echo "BAJO";
	}
	elseif ( $q >= 140 && $q <= 200) {
		echo "NORMAL";
	}
	else
		echo "ALTO";
?>