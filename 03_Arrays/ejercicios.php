<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php 
        error_reporting(E_ALL);
        ini_set("display_errors", 1);
    ?>
    <link href="estilos.css" rel="stylesheet" type="text/css">
</head>
<body>
    <!-- EJERCICIO 1
        clave                                 contenido
        Desarrollo web en entorno servidor => Alejandra
        Desarollo web en entorno cliente => Jose Miguel
        Diseño de interfaces web => Jaime
        Empresa e iniciativa emprendedora => Andrea
        Inglés => Virginia

        MOSTRARLO EN UNA TABLA
    
    
    -->
    <?php 
        $profesores= [
            "Desarrollo web en entorno servidor" => "Alejandra",
            "Desarrollo web en entorno cliente" => "Jose Miguel",
            "Diseño de interfaces web" => "Jaime",
            "Empresa e iniciativa emprendedora" => "Andrea",
            "Inglés" => "Virginia",

        ];
    ?>
    <table>
        <thead>
            <tr>
                <th>ASIGNATURA</th>
                <th>PROFESOR</th>
            </tr>
        </thead>
        <tbody>
            <?php
            //sort ordena no asociativamente 
            // asort ordena de forma asociativa
            //ksort
            krsort($profesores);
                foreach($profesores as $asignatura => $profesor) {
                    echo "<tr>";
                    echo "<td>$asignatura</td>";
                    echo "<td>$profesor </td>";
                    echo "</tr>";
             } ?>
        </tbody>
    </table>
        <!-- EJERCICIO 2
         Francisco => 3
         Daniel => 5
         Aurora => 10
         Luis => 7
         Samuel => 9

         MOSTRAR EN UNA TABLA CON COLUMNAS
         -COLUMNA 1: ALUMNO
         -COLUMNA 2 : NOTA
         -COLUMNA 3: SI NOTA < 5 , SUSPENSO , ELSE, APROBADO

        -->
         <br><br>
        <?php 
            $alumnos =[
                "Francisco" => "3",
                "Daniel" => "5",
                "Aurora" => "10",
                "Luis" => "7",
                "Samuel" => "9",
            ];
        ?>
        <table class="tabla">
        <thead>
            <tr>
                <th>ALUMNO</th>
                <th>NOTA</th>
                <th>CALIFICACIÓN</th>
            </tr>
        </thead>
        <tbody>
        
        <?php
            
                foreach($alumnos as $nombre => $nota) { 

                   /*  if($nota < 5) echo "<tr class='suspenso >";
                    else echo "<tr class='aprobado'>"; */

                    ?>
                    <tr class ="<?php 
                    if($nota < 5) echo "suspenso"; else echo "aprobado"; ?>">
                    
                     
                    
                    <td><?php echo $nombre?></td>
                    <td><?php echo $nota?></td>
                        <td>
                            <?php
                            if($nota < 5) echo "Supenso";
                            else echo "Aprobado";

                            ?>
                        </td>
                    </tr>
                    <?php } ?>

        </tbody>
    </table>
</body>
</html>


<!-- Insertar dos nuevos estudiantes. con notas aleatorias entre 0 y 10
 
    borrar un estudiante (el que peor os caiga) por la clave
    
    Mostrar en una nueva tabla todo ordenado por los nombres en orden alfabeticamente inverso
    
    Mostrar en una nueva tabla toso ordenado por la nota de 10 a 0 (orden inverso)-->

    <?php
    //INSERTAR DOS ESTUDIANTES

        $alumnos["Paula"] = rand(0,10);
        $alumnos["Waluis"] = rand(0,10);

//BORRAR ESTUDIANTE

        unset($alumnos["Vicente"]); 
    
        krsort($alumnos); //Por clave

    ?>
    <table>
        <caption>Estudiantes ordenados por el nombre al revés</caption>
        <thead>
            <tr>
                <th>Estudiante</th>
                <th>Nota</th>
            </tr>

            <tbody>
        
        <?php
            
                foreach($alumnos as $nombre => $nota) { 

                   /*  if($nota < 5) echo "<tr class='suspenso >";
                    else echo "<tr class='aprobado'>"; */

                    ?>
                    <tr class ="<?php 
                    if($nota < 5) echo "suspenso"; else echo "aprobado"; ?>">
                    
                     
                    
                    <td><?php echo $nombre?></td>
                    <td><?php echo $nota?></td>
                        <td>
                            <?php
                            if($nota < 5) echo "Supenso";
                            else echo "Aprobado";

                            ?>
                        </td>
                    </tr>
                    <?php } ?>

        </tbody>
        </thead>
    </table> 