<?php
	$cliente = new SoapClient("http://localhost:8081/ode/processes/ProyectoComposicion?wsdl");

	$pAct = $_REQUEST["pAct"];
	$pHab = $_REQUEST["pph"];
	try{
		$params = array ("in1"=>$pAct,"in2"=>$pHab);
		$p = $cliente->__call("pphF", array("parameters"=> $params));
		echo number_format($p->out1, 2, '.', ',')." %<br>";
		echo $p->out2;
	} catch (SoapFault $fault) {
		echo "Error: " , $fault->faultcode, ", string: ", $fault->faultstring;
			}
?>

