<?php

 session_start();

if( isset( $_COOKIE['pais'] ) ){
    $pais= $_COOKIE['pais'];
}else{
    $pais = "mx";
}




 if( !isset($_SESSION['usuario']) ){
     header("location:index.php");
 }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
</head>
<body>

<?php if($pais =="mx"){ ?>

    <h1> Hola <?= $_SESSION['usuario']['nombre']; ?> </h1>
<ul>
    <li>Nombre: <?= $_SESSION['usuario']['nombre']; ?></li>
    <li>Primer apellido: <?= $_SESSION['usuario']['apellido1']; ?></li>
    <li>Segundo apellido: <?= $_SESSION['usuario']['apellido2']; ?></li>
    <li>Edad: <?= $_SESSION['usuario']['edad']; ?></li>
    <li>Carrera: <?= $_SESSION['usuario']['carrera']; ?></li>
    <li>Semestre: <?= $_SESSION['usuario']['semestre']; ?></li>
</ul>

<?php } else{ ?>
    <h1> Hello <?= $_SESSION['usuario']['nombre']; ?> </h1>

    <ul>
    <li>Name: <?= $_SESSION['usuario']['nombre']; ?></li>
    <li>Last surname: <?= $_SESSION['usuario']['apellido1']; ?></li>
    <li>Last name: <?= $_SESSION['usuario']['apellido2']; ?></li>
    <li>AGE: <?= $_SESSION['usuario']['edad']; ?></li>
    <li>Carrera: <?= $_SESSION['usuario']['carrera']; ?></li>
    <li>Semester: <?= $_SESSION['usuario']['semestre']; ?></li>
</ul>


<?php } ?>




    
</body>
</html>