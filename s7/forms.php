<?php

    //print_r($_GET);

    if( isset($_GET["nombre"])  ){
        
        echo $_GET["nombre"]."<br>";
        echo $_GET["correo"]."<br>";
        echo $_GET["contrasena"]."<br>";
        
    }

?>

<!DOCTYPE html>
<html lang="en">
    <head>        
    </head>
    <body>
       
        <form method="GET">
            <h1>Login</h1>
           Nombre  <input name="nombre"> <br>
           Correo <input name="correo"> <br>
           Contraseña <input name="contrasena"> <br>
            <button type="submit">Enviar</button>

            

        </form>
        
    </body>
</html>