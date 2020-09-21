<?php   

if(
 isset($_GET['num1'])
 and isset($_GET['num2'])
 and !empty($_GET['num1'])
 and !empty($_GET['num2'])

 ){
 
    $operacion = $_GET['operacion'];
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $resultado="";

    switch ($operacion) {
        case 's':   $resultado = $num1 + $num2;  break;
        case 'r':   $resultado = $num1 - $num2;  break;
        case 'm':   $resultado = $num1 * $num2;  break;
        case 'd':   $resultado = $num1 / $num2;  break; 
 
    }

    header("location:calculadora.php?resultado=$resultado");



 }else{
    header("location:calculadora.php?error= alguno de los campos esta vacio");
 }




?>