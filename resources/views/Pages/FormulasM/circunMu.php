<?php
	$cliente = new SoapClient("http://localhost:8081/ode/processes/ProyectoComposicion?wsdl");

	$cirMu = $_REQUEST["cirMu"];
	$altura = $_REQUEST["altura"];
	
	try{
		$params = array ("input1"=>$cirMu, "input2"=>$altura);
		$p = $cliente->__call("circunMu", array("parameters"=> $params));
		echo $p->result;
	} catch (SoapFault $fault) {
		echo "Error: " , $fault->faultcode, ", string: ", $fault->faultstring;
			}
?>