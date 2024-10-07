<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="estilos.css" rel="stylesheet" type="text/css">
    <?php 
        error_reporting(E_ALL);
        ini_set("display_errors", 1);
    ?>
    
</head>
<body>
    <?php

        $peliculas = [
            ["Kárate a muerte en Torremolinos","Acción", 1970],
            ["Sharknado 1-5", "Acción", 2015],
            ["Princesa por sorpresa 2 ", "Comedia", 2008],
            ["Temblores 4", "Terror", 2018],
            ["Cariño, he encogido a los niños", "Aventuras",2001],
            ["Stuart Little", "Infantil", 2000]
        ];





        /*1. AÑADIR CON UN RAND , LA DURACIÓN DE CADA PELÍCULA. LA DURACIÓN SERÁ UN NÚMERO ALEATORIO ENTRE 30 Y 240 
        2. AÑADIR COMO UNA NUEVA COLUMNA, EL TIPO DE PELÍCULA. EL TIPO SERÁ:
        - CORTOMETRAJE ( SI LA DURACIÓN ES MENOR QUE 60)
        - LARGOMETRAJE ( SI LA DURACIÓN ES MAYOR O IGUAL QUE 60)
        3. MOSTRAR EN OTRA TABLA, TODAS LAS COLUMNAS Y ORDENAR ADEMÁS EN ESTE ORDEN:
        - 1 GÉNERO
        - 2 AÑO
        - 3 TÍTULO (TODO ALFABÉTICAMENTE, Y EL AÑO DE MÁS RECIENTE A MÁS ANTIGUO)
        
        */
    ?>
    <table>
        <caption>
            Peliculas
        </caption>
        <thead>
            <tr>
                <th>Título</th>
                <th>Género</th>
                <th>Estreno</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($peliculas as $pelicula){
                    //es un array del array 
                    list($titulo,$genero,$estreno) = $pelicula; ?>
                    <tr>
                        <td><?php echo $titulo?></td>
                        <td><?php echo $genero?></td>
                        <td><?php echo $estreno?></td>
                    </tr>
                   <!-- /*  echo "<tr>";
                    echo "<td>$titulo</td>";
                    echo "<td>$genero</td>";
                    echo "<td>$estreno</td>";
                    echo"</tr>"; */ -->

              <?php  } ?>
            
            
        </tbody>
    </table>

</body>
</html>

