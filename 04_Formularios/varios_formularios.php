<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Varios Formularios</title>
    <?php
        error_reporting(E_ALL);
        ini_set("display_errors",1);

        //importamos el código encuentra la parte lógica . los .. es para volver atrás , para ir a la carpeta
        require('../05_Funciones/temperaturas.php'); 
        require('../05_Funciones/edades.php');
    ?>
</head>
<body>
    <h1>Formulario de temperatura</h1>
    <form action="" method="post">
        <label for="grados">Grados</label>
        <input type="text" name="grados" id="grados" placeholder="Introduzca los grados">
        <br>
        <select name = "salida1">
            <option value="celsius">Celsius</option>
            <option value="farenheit">Farenheit</option>
            <option value ="kelvin">Kelvin</option>
        </select>
        
        <select name = "salida2">
            <option value="celsius">Celsius</option>
            <option value="farenheit">Farenheit</option>
            <option value ="kelvin">Kelvin</option>
        </select>
        <br>
        <input type="hidden" name="accion" value="formulario_temperaturas">
        <input type="submit" value="Convertir">
        
    </form>
    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
          
            //Formulario de temperaturas
            if($_POST["accion"] == "formulario_temperaturas"){
                $grados= $_POST["grados"];
                $salida1 = $_POST["salida1"];
                $salida2 = $_POST["salida2"];

                convertirTemperatura($grados,$salida1,$salida2);
            }
        }
    ?>
     <br><br>
     <h1>Formulario edades</h1>
     <form action="" method="post"> 
        <label for="nombre">Nombre</label> <!--El for se linkea con el id -->
        <input type="text" name="nombre" id="base" placeholder="Introduzca su nombre"> <br><br>
        <label for="edad">Edad</label>
        <input type= "text" name="edad" id="exponente" placeholder="Introduzca su edad"> <br><br>
        <input type="hidden" name="accion" value="formulario_edades">

        <input type="submit" value="Enviar"> 
    </form>
     
    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
           /*  
            Formulario de edades
             */
            if($_POST["accion"] == "formulario_edades"){
                $nombre = $_POST["nombre"];
                $edad = $_POST["edad"];
                comprobarEdad($nombre, $edad);
            }
        }
    
    
    ?>
</body>
</html>