
<h1>OPERADORES  LOGICOS </h1>

<?php 

 

 
echo " (5==5) and (6==6) <br>"; // AND  o  &&
var_dump((5==5) and (6==6)); 
echo "<br><br>";

echo " (5==5) and (5==6) <br>";  // AND  o  &&
var_dump((5==5) and (5==6)); 
echo "<br><br>";


echo " (5==5) or (5==6) <br>";  // OR o ||
var_dump((5==5) or (5==6)); 
echo "<br><br>";

echo " (5==5) xor (5==5) <br>";  // XOR o ||
var_dump((5==5) xor (5==5)); 
echo "<br><br>";


echo " (5==5) xor (1==5) <br>";  // XOR o ||
var_dump((5==5) xor (1==5)); 
echo "<br><br>";
  

?>