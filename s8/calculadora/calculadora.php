 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>

<div style="color:#0f0;"> <?= isset($_GET['resultado'])? $_GET['resultado'] : "" ;  ?> </div>
<div style="color:#f00;" > <?php if(isset($_GET['error'])){ echo $_GET['error']; }else{ echo ""; }  ?> </div>

<form action="CalculadoraController.php">
   <div> 
        <label > Numero 1</label>
        <input type="number" name="num1"> 
   </div> 

   <div> 
        <label > Numero 2</label>
        <input type="number" name="num2"> 
   </div> 

    <div>
        <label > Operacion </label>
        <select name="operacion" >
            <option value="s"> Sumar </option>
            <option value="r"> Restar </option>
            <option value="d"> Dividir </option>
            <option value="m"> Multiplicar </option>
        </select>
    </div>

<button type="submit">Calcular</button>
</form>
    
</body>
</html>