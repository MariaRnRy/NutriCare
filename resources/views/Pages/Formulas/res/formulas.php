<?php

	function oms_geb($edad, $peso)
	{

		if ($edad <= 3) {
			$z = (61*$peso)-51;
			return $z;
		}
		elseif (3 < $edad && $edad <= 10) {
			$z = (22.5*$peso)+499;
			return $z;
		}
		elseif (10 < $edad && $edad <= 18) {
			$z = (12.5*$peso)+746;
			return $z;
		}
		elseif (18 < $edad && $edad <= 30) {
			$z = (14.7*$peso)+496;
			return $z;
		}
		elseif (30 < $edad && $edad <= 60) {
			$z = (8.7*$peso)+829;
			return $z;
		}
		else{
			$z = (10.5*$peso)+596;
			return $z;
		}
	}
	function hb_geb($edad, $peso,$estatura)
	{
	    $z = 665.1+(9.565*$peso)+(1.85*$estatura*100)-(4.68*$edad);
	    return $z;
	}
	function owen_geb($peso)
	{
		$z = 795+(7.18*$peso);
		return $z;	
	}
	function val_geb($edad,$peso)
	{
		if ($edad <= 30) {
			$z=(11.02*$peso)+679;
			return $z;
		}
		elseif (30 < $edad && $edad <= 60) {
			$z = (10.92*$peso)+677;
			return $z;
		}
		else{
			$z = (10.98*$peso)+520;
			return $z;	
		}
	}
	function msj_geb($edad,$peso,$estatura)
	{ 
	    $z = (9.99*$peso)+(6.25*$estatura*100)-(4.92*$edad)-161;
	    return $z;
	}						
		
?>