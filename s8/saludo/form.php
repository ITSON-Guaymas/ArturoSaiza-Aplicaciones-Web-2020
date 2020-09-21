<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>

    <p style="color:#f00;"> <?php if(isset($_GET['error'])){echo $_GET['error'];} ?> </p>

    <form action="controlador.php" method="GET">

        <input type="text" name="nombre">   <br>

        <button type="submit">Enviar</button>


    </form>


    
</body>
</html>