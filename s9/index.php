<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Registro</title> 

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

  </head>
  <body>

    <form action="RegistroController.php" method="POST" target="_blank">
       
    <div>
        <label  > Nombre  </label>
        <input type="text" name="nombre" >
    </div>
    <br>
           
    <div>
        <label > Edad </label>
        <input type="number" name="edad" >
    </div>
    <br>

               
    <div>
        <label  > Telefono</label>
        <input type="text" name="telefono" >
    </div>
    <br>
               
    <div>
        <label  >ID</label>
        <input type="text" name="id" >
    </div>
    <br>    

    <div>
        <label  >Contrasena</label>
        <input type="password" name="contrasena" >
    </div>               

    <br>
    <div>
        <label >Carrera</label>
        <select name="carrera"  >
            <option value="ISW">Ingenieria en Software</option>
            <option value="IIS" selected>Ingenieria Industrial</option>
            <option value="LDG">Licenciatura en Diseno Grafico</option>
        </select>
    </div>

    <br>
    <div> 
        <label for="hombre"> Genero </label> <br>  

        <input type="radio" value="hombre" name="genero" id="hombre" > 
        <label for="hombre"> Hombre </label>
        <br>
        <input type="radio" value="mujer" name="genero" id="mujer" > 
        <label for="mujer"> Mujer </label> 
    </div>

<br>
<div>SELECCIONA LAS MATERIAS</div>

    <div>
    <input type="checkbox" name="clases[]" value="Programacion I" >
    <label > Programacion I</label>
    </div>
    
    <div>
    <input type="checkbox" name="clases[]" value="Aplicaciones Web" >
    <label > Aplicaciones Web</label>
    </div>
    
    <div>
    <input type="checkbox" name="clases[]" value="Aplicaciones Moviles" >
    <label > Aplicaciones Moviles</label>
    </div>
    
    <div>
    <input type="checkbox" name="clases[]" value="Diseno Web" >
    <label > Diseno Web</label>
    </div>
    
    
   <button type="submit"> Registrar</button>

    </form>
  



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
   <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>