<?php

  //  print_r($_POST);
    $infoEnviada=false;

    if( isset($_POST["nombre"])  ){ 
         $infoEnviada=true;  
    }
    

?>

<!DOCTYPE html>
<html lang="en">
    <head>        
    </head>
    <body>
       
        <?php if($infoEnviada){  ?>

            <h1> Hola <?php echo $_POST['nombre']; ?> </h1>
            <p>Tu correo es: <?php echo $_POST["correo"]; ?> </p>
            <p>Edad: <?= $_POST['edad']; ?> </p>

        <?php }else{ ?>

 
        <form method="POST" >
            <h1>Login</h1>

           Nombre  <input name="nombre"> <br>
           Correo <input name="correo"> <br>
           Contraseña <input name="contrasena"> <br>
           Edad <input name="edad"> <br>
           
            <button type="submit">Enviar</button>
            

        </form>

        <?php } ?>
        
    </body>
</html>