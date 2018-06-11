<?php
	$q = $_REQUEST["q"];
		   
	if ($q == 0) {
		echo "NO DETERMINADO";
	}
	elseif ($q < 12) {
		echo "BAJO";
	}
	elseif ($q>=12 && $q <= 16) {
		echo "NORMAL";
	}
	else ($q >16 ) {
		echo "ALTO";
	}
?>