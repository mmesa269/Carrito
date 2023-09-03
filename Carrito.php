<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ingresa los datos para tu calculadora</h1>
    <form method="post" action="<?php $_SERVER['PHP_SELF'];?>">
        Valor en pesos:
        <input type="text" name="mon" required>
        <br>
        <h1>Seleciona la moneda a la que quieras pasar</h1>
        <select name="Cambio">
            <option value="Dolar">Dolar</option>
            <option value="Euro">Euro</option>
            <option value="Rupia India">Rupia India</option>
        </select> 
        <br>
        <h1>Esta pagina esa los siguientes valores</h1>
        <br>
        <h1>1 Dolar = 4063.06 Pesos</h1>
        <br>
        <h1>1 Euro = 4426.09 Pesos</h1>
        <br>
        <h1>1 Rupia India = 48.89 Pesos</h1>
        <br>
        <input type="submit" name="sumbit" value="Enviar">
    </form>
    <h2> El resultado en tu moneda escogida es: </h2>
    <?php
    require_once('DatosCarrito.php');
    if(isset($_POST['sumbit'])){
        $mon = $_POST['mon'];
        $Cambio = $_POST['Cambio'];
        $resultado = 0;
        if ($Cambio=="Dolar"){
            $resultado = $mon/4063.06;
        }else if($Cambio=="Euro"){
            $resultado = $mon/4426.09;
        }else{
            $resultado = $mon/48.89;
    }
    echo($resultado);
    }
    ?>
</body>
</html>
