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
     <!-- CREAR UN FORMULARIO QUE RECIBA EL NOMBRE Y LA EDAD DE UNA PERSONA
      SI LA EDAD ES MENOR QUE 18, SE MOSTRARÁ EL NOMBRE
      SI LA EDAD ESTÁ ENTRE 18 Y 65 , SE MOSTRARÁ EL NOMBRE Y QUE ES MAYOR DE EDAD
      SI LA EDAD ES MÁS DE 65, SE MOSTRARÁ EL NOMBRE Y QUE SE HA JUBILADO -->

    <form action="" method="post"> 
        <label for="nombre">Nombre</label> <!--El for se linkea con el id -->
        <input type="text" name="nombre" id="base" placeholder="Introduzca su nombre"> <br><br>
        <label for="edad">Edad</label>
        <input type= "text" name="edad" id="exponente" placeholder="Introduzca su edad"> <br><br>

        <input type="submit" value="Enviar"> <!-- -->
    </form>
     
    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $nombre = $_POST["nombre"];
            $edad = $_POST["edad"];

            /* if ($edad < 18 ){
                echo "<h2>$nombre</h2>";
            }
            elseif($edad >= 18 and $edad <= 65){
                echo "<h2>$nombre es mayor de edad</h2>";

            }
            elseif($edad > 65) {
                echo "<h2>$nombre se ha jubilado</h2>";
            } */

            /*Almacena el resultado en la variable*/ 
           $resultado = match(true){
            $edad < 18 => "es menor de edad",
            $edad >=18 and $edad <= 65 => "es mayor de edad",
            $edad > 65 => "se ha jubilado"
           };
           echo "<h1>$nombre $resultado</h1>";
        }
    
    
    ?>
   

</body>
</html>