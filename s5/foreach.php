<?php

$colores = array("naranja","amarillo","rojo","morado","azul","Verde");


foreach($colores as $color ){

    echo  $color."<br>";

}


echo "<br><br>";


$alumnos= array(
    "daniel"=>"21 años", 
    "hilda"=>"21 años",
    "hiram"=>"23 años",
    "jesus"=> "21 años",
    "jorge"=>"22 años",
    "luis"=>"21 años",
    "Rogelio"=>"23 años"
);


foreach($alumnos as  $indice => $valor){
 echo "$indice: $valor<br>";
}

echo "<br>";

foreach($alumnos as  $nombre => $edad){

    echo "$nombre: $edad<br>";

   }
   





?>