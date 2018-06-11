<?php
	$cliente = new SoapClient("http://localhost/FormulasPt2/Service1.asmx?WSDL");

	$pAbd = $_REQUEST["periAbd"];
	
	try{
		$params = array ("x"=>$pAbd);
		$p = $cliente->__call("pa", array("parameters"=> $params));
		echo $p->paResult;
	} catch (SoapFault $fault) {
		echo "Error: " , $fault->faultcode, ", string: ", $fault->faultstring;
			}
?>