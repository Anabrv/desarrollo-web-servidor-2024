<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Multiplicar</title>
    <link href="estilos.css" rel="stylesheet" type="text/css">
    <?php
        error_reporting(E_ALL);
        ini_set("display_errors",1);
    ?>
</head>
<body>
<form action="" method="post"> 
        <label for="numero"></label> 
        <input type="text" name="numero" id="base" placeholder="Introduzca un número"> <br><br>
        <input type="submit" value="Calcular"> <!-- -->
    </form>

   <!--  NO PONER DOS FORMULARIOS EN EL MISMO FICHERO
      CREAR UN FORMULARIO QUE RECIBA UN NÚMERO 
      SE MOSTRARÁ LA TABLA DE MULTIPLICAR DE ESE NÚMERO EN UNA TABLA HTML
      2 X 1 = 1
      2 X 2 = 4
      ...
      -->
      <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $numero = $_POST["numero"];
            $result = 0;
            ?>
            <table>
                <thead>
                    <tr>
                        <th>Número</th>
                        <th>x</th>
                        <th>Número</th>
                        <th>Resultado</th>
                    </tr>
                </thead>
                <tbody>
    
    <?php
            for ($i=1; $i <= 10; $i++) { 
                $result= $numero * $i;
                echo "<tr>";
                echo "<td>$numero x $i = $result </td>";
                echo "</td>";
            }
           
        }
      
      
      
      ?>
                </tbody>
        </table>

</body>
</html>