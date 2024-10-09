<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo</title>

    <link href="estilos.css" rel="stylesheet" type="text/css">
    <?php
        error_reporting(E_ALL);
        ini_set("display_errors",1);
    ?>
</head>
<body>
    <form action="" method="post"> 

        <input type="text" name="mensaje"> <!-- -->
        <input type="text" name="veces">
        <input type="submit" value="Enviar"> <!-- -->
    </form>

    <?php 
    /* $_SERVER es un array y debe ir en mayúscula */

        if($_SERVER["REQUEST_METHOD"] == "POST"){  /*debe ir en mayus*/
            /* Este codigo se ejecuta cuando el servidor reciba una petición guest*/
            $mensaje = $_POST["mensaje"];
            $veces = $_POST["veces"];

//añadir al formulario un campo de texto adicional para introducir el numero
//Mostrar el mensaje tantas veces como indique el numero
            for ($i = 0 ; $i < $veces ; $i++){
                echo"<h1>$mensaje</h1>";
            }

        }

    /* Este formulario se envia siempre que se recargue la página. */
        
    ?>
</body>
</html>