<?php 

 $numero= "5.5"+100;
echo is_numeric($numero);
echo "<br>"; 
var_dump($numero);

echo "<br>  ejemplos de la presentacion<br>";
$x = 5985;
var_dump(is_numeric($x));
echo "<br>"; 
$x = "5985";
var_dump(is_numeric($x));
echo "<br>"; 
$x = "59.85" + 100;
var_dump(is_numeric($x));
echo "<br>"; 
$x = "55Hello";
var_dump(is_numeric($x));
echo "<br>"; 

/* cast a int ****/

$numero2= (int) 5.6;
var_dump($numero2);
echo "<br>"; 
 
$numero3=  (int)"4543.34 as";
var_dump($numero3);
echo "<br>"; 















?>