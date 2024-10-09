<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="estilos.css" rel="stylesheet" type="text/css">
    <?php
        error_reporting(E_ALL);
        ini_set("display_errors",1);
    ?>
</head>
<body>

<form action="" method="post"> 
    <label for="base">Base</label> <!--El for se linkea con el id -->
    <input type="text" name="base" id="base" placeholder="Introduzca la base>" > <br>
    <label for="Exponente">Exponente</label>
    <input type= "text" name="exponente" id="exponente" placeholder="Introduzca el exponente">

    <input type="submit" value="Calcular"> <!-- -->
</form>

    <?php 
    /* CREAR UN FORMULARIO QUE RECIBA DOS PARÁMETROS = BASE Y EXPONENTE
    CUANDO SE ENVÍE EL FORMULARIO , SE CALCULARÁ EL RESULTADO DE ELEVAR LA BASE AL EXPONENTE 
    EJEMPLOS:
    2 ELEVADO A 2 = 8 => 2X2X2 = 8
    3 ELEVADO A 2 = 9  => 3X3 = 9 
    2 ELEVADO A 1 = 2 
    3 ELEVADO A 0= 1 */
    if($_SERVER["REQUEST_METHOD"] == "POST"){
       /*  echo"Entramos al formulario" si hay errores , probamos esto para ver si entra */
        $base= $_POST["base"];
        $exponente = $_POST["exponente"];
        $resultado = 1;
        for ($i=0; $i < $exponente; $i++) { 
           $resultado= $resultado *$base;
           /* si el resultado es 0 no entra en el for
           
           2 elevado a 3
           resultado = 1x2 = 2
           resultado = 2x2 = 4
           resultado = 4x2 = 8*/
        }
    }

    ?>
</body>
</html>