<?php

$q = $_REQUEST["q"];
$p = $_REQUEST["p"];

    $z = ((100-$q)/100)*$p;

echo number_format($z, 2, '.', ',')." Kg";
?>