<?php

	$lch = $_REQUEST["a"];
	$crn = $_REQUEST["b"];
	$frt = $_REQUEST["c"];
	$vg = $_REQUEST["d"];
	$cyt = $_REQUEST["e"];
	$lgu = $_REQUEST["f"];
	$grs = $_REQUEST["g"];
	$azr = $_REQUEST["h"];

	$a = ($lch*12*4)+($lch*9*4)+($lch*5*9);
	$b = ($crn*7*4)+($crn*4*9);
	$c = ($frt*15*4);
	$d = ($vg*4*4)+($vg*2*4);
	$e = ($cyt*15*4)+($cyt*2*4);
	$f = ($lgu*20*4)+($lgu*8*4)+($lgu*9);
	$g = ($grs*5*9);
	$h = ($azr*10*4);

	$totKC = $a+$b+$c+$d+$e+$f+$g+$h;
	$totPRT = ($lch*9)+($crn*7)+($vg*2)+($cyt*2)+($lgu*8);
	if($totPRT == 0)
		$z = 0;
	else{
		$KCal = $totPRT*4;
		$z = ($KCal*100)/$totKC;
	}
	echo number_format($z, 2, '.', ',')."%";
?>