<?php

    session_start();

   // $_SESSION["nombre"] = "Alan Romero Hernandez";

      $_SESSION['usuario'] = array(
          "nombre" => "Alan",
          "apellido1" => "Romero",
          "apellido2" => "Hernandez",
          "edad" => 20,
          "carrera" => "ISW",
          "semestre" => 5
      );
      
      header("location:perfil.php");


    echo "La session a sido iniciada";





?>