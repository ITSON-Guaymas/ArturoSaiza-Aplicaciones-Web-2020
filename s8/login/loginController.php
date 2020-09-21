<?php

  function login($usuario, $contrasena){

    if($usuario=="Rene" and $contrasena=="Rana"){

        session_start();
        $_SESSION["usuario"]= "Rene Parada Rivera";  
        header("location:panelControl.php");

    }else{
        header("location:login.php?error=usuario o contraseña invalidos");
    }
}

    login($_GET['usuario'],$_GET['password']);


 


?>