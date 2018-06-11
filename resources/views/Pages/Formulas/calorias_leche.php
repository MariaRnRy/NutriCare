<?php

	$q = $_REQUEST["q"];

    $w = ($q*12);
    $x = ($q*9);
    $y = ($q*5);

    $z = ($w*4)+($x*4)+($y*9);
 
	echo $z;

?>