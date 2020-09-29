<?php

$nombreCookie = "pais";
$valorCookie = $_GET['pais'];
$finDevidaCookie= time()+(86400*30); // durara 30 dias


setcookie($nombreCookie, $valorCookie, $finDevidaCookie, "/" );


?>