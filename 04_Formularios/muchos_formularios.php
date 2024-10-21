<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muchos Formularios</title>
    <?php
        error_reporting(E_ALL);
        ini_set("display_errors",1);
    ?>
</head>
<body>
    <h1>Formulario potencias</h1>
    <form action="" method="post"> 
    <label for="base">Base</label> 
    <input type="text" name="base" id="base" placeholder="Introduzca la base>" > <br>
    <label for="Exponente">Exponente</label>
    <input type= "text" name="exponente" id="exponente" placeholder="Introduzca el exponente">
    <input type="hidden" name="accion" value="formulario_potencias">
    <input type="submit" value="Calcular"> 
</form>
<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    /*  echo"Entramos al formulario" si hay errores , probamos esto para ver si entra */
     $base= $_POST["base"];
     $exponente = $_POST["exponente"];
     calcularPotencia($base, $exponente);
    
 }

?>

<h1>Formulario tabla de multiplicar</h1>
<form action="" method="post"> 
        <label for="numero"></label> 
        <input type="text" name="numero" id="base" placeholder="Introduzca un número"> <br><br>
        <input type="hidden" name="accion" value="formulario_multiplicar">
        <input type="submit" value="Calcular"> 
    </form>
<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $numero = $_POST["numero"];
        tablaMultiplicar($numero);
    }
?>
</body>
</html>