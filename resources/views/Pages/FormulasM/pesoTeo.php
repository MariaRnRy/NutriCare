<?php
	$cliente = new SoapClient("http://LAPTOP-TT6JV407:8085/FormulasWS/FormulasWS?WSDL");

	$altura = $_REQUEST['altura'];
	try{
		$params = array ("name_a"=>$altura);
		$p = $cliente->__call("pesoTeo", array("parameters"=> $params));
		echo number_format($p->return, 2, '.', ',')." Kg";
	} catch (SoapFault $fault) {
		echo "Error: " , $fault->faultcode, ", string: ", $fault->faultstring;
			}
?>

