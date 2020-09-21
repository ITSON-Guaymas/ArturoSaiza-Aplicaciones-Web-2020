<?php

$estadefinida= isset($_GET['nombre']);
$Noestavacio = !empty($_GET['nombre']);



if($estadefinida and $Noestavacio){
    //enviar info a vista.php
    header("location:vista.php?nombre=".$_GET['nombre']);
}else{
    //regresarnos a form.php
    header("location:form.php?error=el campo nombre esta vacio");
} 