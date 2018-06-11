<?php

	
    $a = $_REQUEST["a"];
    $b= $_REQUEST["b"];
     $c=$_REQUEST["c"];
     $d=$_REQUEST["d"];
     $e=$_REQUEST["e"];
     $f=$_REQUEST["f"];
     $g=$_REQUEST["g"];
     $h=$_REQUEST["h"];


    $z = ($a*129)+($b*64)+($c*60)+($d*24)+($e*68)+($f*121)+($g*45)+($h*40);
 
	echo $z;

?>