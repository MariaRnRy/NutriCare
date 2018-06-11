<?php

$q = $_REQUEST["q"];
$p = $_REQUEST["p"];

    $z = $q/($p*$p);
 
echo number_format($z, 2, '.', ',')." Kg/m";
?>