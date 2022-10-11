<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Calculadora basica </title>
</head>
<body>
    <form class="caja" action="calculadora.php" method="POST">
    <h1>Calculadora</h1>
    <label for=""></label>
    <input type="text" name="numero1" value="" placeholder="ingrese un numero">
        <label for=""></label>
    <input type="text" name="numero2" value="" placeholder="ingrese otro numero">
    <input type="submit" name="" value="respuesta"> 
    <output type="number" name="">
    </form>
</body>
</html>
<?php
if(isset($_POST['numero1']) && isset($_POST['numero2']) && is_numeric ($_POST['numero1']) && 
is_numeric ($_POST['numero1']));
{
    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];
    echo $numero1 + $numero2;       
}
?>