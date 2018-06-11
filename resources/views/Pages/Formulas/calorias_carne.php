<?php

	$q = $_REQUEST["q"];

    $x = ($q*7);
    $y = ($q*4);

    $z = ($x*4)+($y*9);
 
	echo $z;

?>