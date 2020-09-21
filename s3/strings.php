<?php

$saludo="Hola Mundo";


echo $saludo." contiene ".strlen($saludo)." caracteres";
 //retorna el tamaño del string

echo "<br>";

echo $saludo." contiene ".str_word_count($saludo)." palabras";
 //retorna el numero de paplabras en un string 
 echo "<br>";

 echo $saludo." al revez es: ".strrev($saludo);
 echo "<br>";

 echo "Mundo se encuentra en la pos: ".strpos($saludo, "Mundo");
 echo "<br>";

 echo str_replace("Mundo","Steve",$saludo);
 echo "<br>";


 $persona="steve";
echo "Hola $persona";
echo "<br>"; 
echo 'Hola $persona';

?>