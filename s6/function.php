<?php 



    function saludo(){
        echo "Hola";
    } 

    function saludo2($nombre){
        echo "Hola $nombre";
    }


    function saludo3($nombre="Mundo"){
        echo "Hola $nombre <br>";
    }

    function saludo4($nombre="Mundo", $apellidos=""){
        echo "Hola $nombre  $apellidos <br>";
    }

    function edad(int $anos){
        echo "tienes $anos años";
    } 

    include ("../includes/menu.php");

    saludo4(null, "garcia");
    edad(22);

    

?>