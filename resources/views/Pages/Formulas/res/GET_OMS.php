<?php

 $q = $_REQUEST["q"];
 $x = $_REQUEST["p"];

 list($p, $n) = explode("_", $x);

 $z = ($q*1.1)*$p;
 echo number_format($z);
?>