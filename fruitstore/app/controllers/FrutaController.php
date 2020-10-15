<?php

include_once("../models/Fruta.php"); //relativa
include_once("../models/FrutaTropical.php"); //relativa
//include("/fruitstore/app/models/Fruta.php"); //absoluta

$fruta = new Fruta();
$fruta -> set_nombre("Manzana");
echo "fruta 1: ".$fruta -> get_nombre()."<br>";

$fruta2 = new Fruta("Mango","Amarillo",32.99);
echo "fruta 2: <br>";
echo $fruta2->get_nombre()."<br>";
echo $fruta2->get_precio()."<br>";
echo $fruta2->get_color()."<br>";

$fruta3 = new Fruta("Guayaba","Amarillo",15.99);
echo "fruta 3: <br>";
echo $fruta3->nombre."<br>";
echo $fruta3->get_precio()."<br>";
echo $fruta3->color."<br>";
 
$frutaTropical = new FrutaTropical("Guanabana", "verde", "ADASDSADSA", "Sinaloa");
echo "fruta tropical";
echo $frutaTropical -> nombre;
echo $frutaTropical -> color;
//echo $frutaTropical -> precio;
//echo $frutaTropical -> codigoBarras;
echo $frutaTropical -> region; 



