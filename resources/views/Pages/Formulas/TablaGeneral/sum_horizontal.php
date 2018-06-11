<?php

	$des = $_REQUEST["p"];
	$col = $_REQUEST["q"];
	$com = $_REQUEST["n"];
    $cv = $_REQUEST["r"];
    $cena = $_REQUEST["s"];
    $raciones = $_REQUEST["f"];
    

    $z = $des+$col+$com+$cv+$cena;
    //echo $z;
    if($z < $raciones)
    	echo $z." - "."Te Falta";
 	elseif($z == $raciones)
    	echo $z." - "."Muy Bien";
    else
    	echo $z." - "."Te Pasaste";
?>