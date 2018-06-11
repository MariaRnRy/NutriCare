<?php

$q = $_REQUEST["q"];

    $z = $q * $q * 24.9;
 
echo number_format($z, 2, '.', ',')." Kg";
?>