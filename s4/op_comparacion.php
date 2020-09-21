
<h1>OPERADORES  DE COMPARACION</h1>

<?php 

 

$a1=11; $a2="11"; 
echo " 11 == '11' <br>";
var_dump($a1 ==  $a2) ;
echo "<br><br>";

$a1=11; $a2="11"; 
echo " 11 === '11' <br>";
var_dump($a1 ===  $a2) ;
echo "<br><br>";

$a1=11; $a2=11; 
echo " 11 != 11 <br>";
var_dump($a1 != $a2) ;
echo "<br><br>";
 
$a1=11; $a2=12; 
echo " 11 <> 12 <br>";
var_dump($a1 <> $a2) ;
echo "<br><br>";
 

$a1=11; $a2="11"; 
echo " 11 !== '11' <br>";
var_dump($a1 !== $a2) ;
echo "<br><br>";
 



$a1=11; $a2=3; 
echo " 11 > 3 <br>";
var_dump($a1 > $a2) ;
echo "<br><br>";

$a1=11; $a2=3; 
echo " 11 < 3 <br>";
var_dump($a1 < $a2) ;
echo "<br><br>";
 


$a1=11; $a2=3; 
echo " 11 <= 3 <br>";
var_dump($a1 <= $a2) ;
echo "<br><br>";

$a1=11; $a2=3; 
echo " 11 >= 3 <br>";
var_dump($a1 >= $a2) ;
echo "<br><br>";


$a1=11; $a2=3; 
echo " 11 <=> 3 <br>";
var_dump($a1 <=> $a2) ;
echo "<br><br>";
 


$a1=11; $a2=11; 
echo " 11 <=> 11 <br>";
var_dump($a1 <=> $a2) ;
echo "<br><br>";
 

$a1=1; $a2=11; 
echo " 1 <=> 11 <br>";
var_dump($a1 <=> $a2) ;
echo "<br><br>";
 


?>