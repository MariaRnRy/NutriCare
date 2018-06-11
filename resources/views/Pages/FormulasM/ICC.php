<?php
	$cliente = new SoapClient("http://localhost:8081/ode/processes/ProyectoComposicion?wsdl");

	$cintura = $_REQUEST["cintura"];
	$cadera = $_REQUEST["cadera"];
	
	try{
		$params = array ("in1"=>$cintura,"in2"=>$cadera);
		$p = $cliente->__call("icc", array("parameters"=> $params));
		echo number_format($p->out2, 2, '.', ',')." %<br>";
		echo $p->out;
	} catch (SoapFault $fault) {
		echo "Error: " , $fault->faultcode, ", string: ", $fault->faultstring;
			}
?>