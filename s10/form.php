<?php

$dataAlumno = array(
    "Nombre" => "Sergio Felipe",
    "edad" => 20,
    "telefono" => "622 1481247",
    "ID" => "0000042124",
    "contrasena" => "frijol",
    "carrera" => "LDG",
    "genero" => "hombre",
    "clases"=> array("Programacion 3", "Aplicaciones Web", "Optativa I" ) 
);
 
    $dataCarreras = array(
         "ISW" => "Ingenieria en Software",
         "IIS" => "Ingenieria Industrial",
         "LDG"  => "Licenciatura en Diseno Grafico",
         "LP"  => "Licenciatura en Psicologia"        
        );
    
    $dataClases = array(
        "Programacion 3",
        "Aplicaciones Web",
        "Aplicaciones Moviles",
        "Diseno Web",
        "Optativa I", 
    );

    $dataGenero = array(
        "mujer", "hombre",  "otro"
    );



?>



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
        <input type="text" name="nombre" value="<?= $dataAlumno["Nombre"]; ?>" >
    </div>
    <br>
           
    <div>
        <label > Edad </label>
        <input type="number" name="edad" value="<?= $dataAlumno["edad"]; ?>" >
    </div>
    <br>

               
    <div>
        <label  > Telefono</label>
        <input type="text" name="telefono" value="<?= $dataAlumno["telefono"]; ?>" >
    </div>
    <br>
               
    <div>
        <label  >ID</label>
        <input type="text" name="id" value="<?= $dataAlumno["ID"]; ?>" readonly >
    </div>
    <br>    

    <div>
        <label  >Contrasena</label>
        <input type="password" name="contrasena"  readonly >
    </div>               

    <br>
    <div>
        <label >Carrera</label>
        <select name="carrera"  >
      <?php foreach($dataCarreras as $i => $carrera){ ?>

            <?php if($i == $dataAlumno["carrera"]){ ?>

                <option value="<?= $i; ?>" selected  >  <?= $carrera; ?>    </option>
            
            <?php }else{ ?>

                <option value="<?= $i; ?>"  >  <?= $carrera; ?>    </option>

            <?php } ?>
           
      <?php } ?>
      
        </select>
    </div>

    <br>
    <div> 
        <label for="hombre"> Genero </label> <br>  

        <?php foreach($dataGenero as $genero){ ?>
        <?php if( $genero == $dataAlumno["genero"] ){ $checarGenero="checked"; }else{$checarGenero=" "; } ?>

            <input type="radio" value="<?= $genero; ?>" name="genero" id="<?= $genero; ?>" <?= $checarGenero; ?> > 
            <label for="hombre"><?= $genero; ?> </label>
            <br>


        <?php } ?> 

    </div>

<br>
<div>SELECCIONA LAS MATERIAS</div> 

        <?php foreach($dataClases as $clase){ ?>
            <?php foreach($dataAlumno['clases'] as $claseAlumno){
                 // $claseCheck = ($clase == $claseAlumno)? "checked" : "";
    if($clase == $claseAlumno ){ $claseCheck="checked"; break; }else{ $claseCheck=""; }
             
            
            } ?>
                <div>
                    <input <?=  $claseCheck ; ?> type="checkbox" name="clases[]" value="<?= $clase; ?>"  >
                    <label > <?= $clase; ?></label>
                </div>
        <?php } ?> 
    
   <button type="submit"> Registrar</button>

    </form>
  



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
   <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>