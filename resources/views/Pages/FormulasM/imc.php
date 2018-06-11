<?php
	$cliente = new SoapClient("http://LAPTOP-TT6JV407:8085/FormulasWS/FormulasWS?WSDL");

	$pAct = $_REQUEST["pAct"];
	$altura = $_REQUEST["altura"];
	try{
		$params = array ("name_a"=>$pAct,"name_b"=>$altura);
		$p = $cliente->__call("clasif", array("parameters"=> $params));
		echo number_format($p->return, 2, '.', ',')." Kg/m";
	} catch (SoapFault $fault) {
		echo "Error: " , $fault->faultcode, ", string: ", $fault->faultstring;
			}
?>

