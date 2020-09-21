<?php

function sumar($num1, $num2){
    return ($num1 + $num2);
}

function restar($num1, $num2){
    return ($num1 - $num2);
}

function multiplicar($num1, $num2){
    return ($num1 * $num2);
}

function dividir ($num1,$num2){
    return ($num1 / $num2);
}

include ("../includes/menu.php");

$totalsuma = sumar(10,5);
echo $totalsuma;
echo "<br>";

echo restar(10,5);
echo "<br>";
echo multiplicar(10,5);
echo "<br>";
echo dividir(10,5);




?>