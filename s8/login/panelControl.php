<?php

session_start();
$haysession = isset($_SESSION["usuario"]) and !empty($_SESSION["usuario"]);

 if(!$haysession){ header("location:login.php"); }

?>


<h1> Panel de Control</h1>