<?php

$dias2=array(
    "1" => "lunes",
     2 => "martes",
    "3" => "miercoles",
     4 => "jueves",
    "5" => "viernes",
    "6" => "sabado",
    "7" => "domingo");


    echo $dias2[1];


    echo "<br> <br> ";

    foreach ($dias2 as   $dia) {
    echo $dia."<br>";
    }

echo "<br><br><br>";

    $luisGustavo=[
        "edad"=> 21,
        "nombre"=>"Luis Gustavo",
        "apellido" =>"Llanes Lopez",
        "altura" => 1.75,
        "trabajas" => true,
        
    ];


    foreach ($luisGustavo as $i =>  $v) {        
            echo $i.": ".$v."<br>";       
    
    }


    echo "<br><br>";
    echo "Nombre Completo: ".$luisGustavo["nombre"]." ".$luisGustavo["apellido"];





?>