<?php

//include "librerias/calificaciones.php";
require "librerias/calificaciones.php";
 
include ("../includes/menu.php");



$promAplicacionesWeb = promedioMaterias(1,2,3);
$promMatematicas = promedioMaterias(8,9, 4);
$promProrgamacion3 = promedioMaterias(10,10,10);

$promedioGeneral_6toSemestre= promedioMaterias($promAplicacionesWeb,$promMatematicas,$promProrgamacion3);


echo "Aplicaciones web: $promAplicacionesWeb  <br>";
echo "Matematicas: $promMatematicas <br>";
echo "Programacion 3: $promProrgamacion3 <br>";
echo "<hr>";
echo "Calificacion final: $promedioGeneral_6toSemestre";
echo "<hr>";

$paso =verificarPase( $promedioGeneral_6toSemestre);

if($paso){
    echo "Felicidades, pasaste (=";
}else{
    echo "Lo siento mucho, bye  ";
}


?>