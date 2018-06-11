<?php

	function circunMu($q, $p)
	{
		    $z = ($p*100)/$q;

		if ($z <= 9.5) {
			echo "COMPLEXION GRANDE";
		}
		elseif (9.5 < $z && $z < 10.4) {
			echo "COMPLEXION MEDIANA";
		}
		else
			echo "COMPLEXION PEQUEÑA";
	}
	function clasif($q, $p)
	{

	    $z = $q/($p*$p);

		if ($z < 16) {
			echo "DESNUTRICION TERCER GRADO";
		}
		elseif (16 <= $z && $z < 17) {
			echo "DESNUTRICION SEGUNDO GRADO";
		}
		elseif (17 <= $z && $z < 18.5) {
			echo "DESNUTRICION PRIMER GRADO";
		}
		elseif (18.5 <= $z && $z < 25.1) {
			echo "PESO NORMAL";
		}
		elseif (25.1 <= $z && $z < 30) {
			echo "OBESIDAD PRIMER GRADO";
		}
		elseif (30 <= $z && $z < 40) {
			echo "OBESIDAD SEGUNDO GRADO";
		}
		else
			echo "OBESIDAD TERCER GRADO";
	}
	function ICC($q, $p)
	{

	    $z = $q/$p;
 
		echo number_format($z, 2, '.', ',')."<br>";

		if ($z <= 0.99) {
			echo "DISTRIBUCION DE GRASA GINECOIDE";
		}
		else
			echo "DISTRIBUCION DE GRASA ANDROIDE";
	}
	function imc($q, $p)
	{

	    $z = $q/($p*$p);
 
		echo number_format($z, 2, '.', ',')." Kg/m";
	}

	function MP($q, $p)
	{

		$z = ((100-$q)/100)*$p;

		echo number_format($z, 2, '.', ',')." Kg";
	}

	function PA($q)
	{   
		if ($q <= 101.9) {
			echo "MEDICION DE RIESGO INCREMENTADO";
		}
		elseif (102 <= $q) {
			echo "MEDICION DE RIESGO SUSTANCIALMENTE INCREMENTADO";
		}
	}

	function pesoInfe($q)
	{

	    
		$z = $q * $q * 18.5;
 
		echo number_format($z, 2, '.', ',')." Kg";
	}

	function pesoSupe($q)
	{

	    
		    $z = $q * $q * 24.9;
 
			echo number_format($z, 2, '.', ',')." Kg";
	}		

	function pesoTeo($q)
	{

	    
		    $z = $q * $q * 21.5;
 
		echo number_format($z, 2, '.', ',')." Kg";
	}

	function ppci($q, $p)
	{
		 $w = $p * $p * 21.5;
		 $z = ($q/$w)*100;
		 
		echo number_format($z, 2, '.', ',')." %<br>";

		if ($z < 70) {
			echo "SUGIERE DEPLECION SEVERA";
		}
		elseif (70 <= $z && $z < 80) {
			echo "SUGIERE DEPLECION MODERADA";
		}
		elseif (80 <= $z && $z <= 90) {
			echo "SUGIERE DEPLECION LEVE";
		}
		else
			echo "SIN DEPLECION";
	}

	function PPH($q, $p)
	{
			  $z = ($q/$p)*100;
			 
			echo number_format($z, 2, '.', ',')." %<br>";

			if ($z < 54.9) {
				echo "PESO MINIMO DE SOBREVIVENCIA";
			}
			elseif (55 <= $z && $z <= 75) {
				echo "DESNUTRICION SEVERA 3er GRADO";
			}
			elseif (75 < $z && $z <= 84.9) {
				echo "DESNUTRICION MODERADA 2do GRADO";
			}
			elseif (85 <= $z && $z < 90) {
				echo "DESNUTRICION LEVE 1er GRADO";
			}
			else
				echo "SIN PROBLEMAS DE DESNUTRICION";
	}		

	function PPT($q, $p)
	{
		     $w = $p * $p * 21.5;
		    $z = ($q/$w)*100;
		 
		echo number_format($z, 2, '.', ',')." %<br>";

		if ($z <= 89.9) {
			echo "BAJO PESO";
		}
		elseif (90 <= $z && $z <= 120) {
			echo "PESO ACEPTABLE";
		}
		else
			echo "EXCESO O SOBREPESO";
	}	
?>