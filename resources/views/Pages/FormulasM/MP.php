<?php
	$cliente = new SoapClient("http://LAPTOP-TT6JV407:8085/FormulasWS/FormulasWS?WSDL");

	$miemAp = $_REQUEST["miemAp"];
	$pAct = $_REQUEST["pAct"];
	try{
		$params = array ("name_a"=>$miemAp, "name_b"=>$pAct);
		$p = $cliente->__call("MP", array("parameters"=> $params));
		echo number_format($p->return, 2, '.', ',')." Kg";
	} catch (SoapFault $fault) {
		echo "Error: " , $fault->faultcode, ", string: ", $fault->faultstring;
			}
?>