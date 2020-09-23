<?php

if(!isset($_POST['nombre'])  or empty($_POST['nombre']))
header("location:index.php");
 
$data = $_POST;

/*
echo "<pre>";
var_dump($data);
echo "</pre>";
*/


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Su registro fue exitso</h1>

<ul>
    <li>Nombre: <?= $data['nombre']; ?> </li>
    <li>Edad: <?= $data['edad']; ?> </li>
    <li>Telefono: <?= $data['telefono']; ?> </li>
    <li>ID: <?= $data['id']; ?> </li> 

    <li>Generero:  <?= $data['genero']; ?> </li>
    <li>Carrea:  <?= $data['carrera']; ?> </li>
    <li>
        Clases Registradas: <br>
        <?php foreach ($data['clases'] as  $clase) {
            echo " - ".$clase."<br>"; 
        } ?>
    </li>
</ul>


    
</body>
</html>













