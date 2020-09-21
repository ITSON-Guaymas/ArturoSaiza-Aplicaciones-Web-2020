<?php
if(!isset($_GET) or empty($_GET)){  header("location:form.php"); }
?>

<br>
<br> 

<h1> Hola <?= $_GET['nombre']; ?> </h1>