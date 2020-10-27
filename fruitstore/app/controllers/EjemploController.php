<?php

include_once("../models/Verdura.php");
include_once("../models/Legumbre.php");
include_once("../models/Especias.php");

$tomate = new Verdura("Tomate", 15, "#ff0000", "TOMSONORA");
$aguacate = new Verdura("Aguacate",99,"#10aa55", "AGuCATEX");

$frijo = new Legumbre("Frijo", 30.10);
$lenteja = new Legumbre("Lenteja", 15);

$clinatro = new Especias("Cilantro", 40.50);
$ajo = new Especias("Nombre", 55.99);

echo "----------- VERDURAS -----------------";
echo "<div style='color: $tomate->color; '>";
    echo "<br> Nombre: ".$tomate->nombre;
    echo "<br> Precio: ".$tomate->precioIva();
    echo "<br> Color: ".$tomate-> color;
    echo "<br> Codigo: ".$tomate-> codigo;
echo "</div>";

echo "<div style='color: $aguacate->color; '>";
echo "<br>".$aguacate->nombre;
echo "<br>".$aguacate->precioIva();
echo "<br>".$aguacate->color;
echo "<br>".$aguacate->codigo;
echo "</div>";


echo $frijo ->nombre."<br>";
echo $frijo ->precioIva."<br>";
echo "<br>";

echo $lenteja ->nombre."<br>";
echo $lenteja ->precioIva."<br>";
echo "<br>";

echo $clinatro ->nombre."<br>";
echo $clinatro ->precioIva."<br>";
echo "<br>";

echo $ajo ->nombre."<br>";
echo $ajo ->precioIva."<br>";
echo "<br>";


