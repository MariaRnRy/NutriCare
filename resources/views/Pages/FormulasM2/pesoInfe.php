<?php

$q = $_REQUEST["q"];

    $z = $q * $q * 18.5;
 
echo number_format($z, 2, '.', ',')." Kg";
?>