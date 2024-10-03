<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    <!-- EJERCICIO 1
     
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
                foreach($profesores as $asignatura => $profesor) {?>
                <tr>
                    <td><?php echo $asignatura ?></td>
                    <td><?php echo $profesor ?></td>
            <?php } ?>
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
        <?php 
            $alumnos =[
                "Francisco" => "3",
                "Daniel" => "5",
                "Aurora" => "10",
                "Luis" => "7",
                "Samuel" => "9",
            ];
        ?>
        <table>
        <thead>
            <tr>
                <th>ALUMNO</th>
                <th>NOTA</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($alumnos as $nombre => $notas) { ?>

                   <?php if($notas < 5){ ?>
                        <td class="rojo"><?php echo "Suspenso" ?></td>
                   <?php }
                        else if($notas >= 5 and $notas <= 6){ ?>
                        <td class="verde"><?php echo "Aprobado" ?></td>
                        <?php } 
                        else if($notas > 6 and $notas <= 8) { ?>
                        <td class="verde"><?php echo "Notable"?></td>
                    <?php }
                        else{ ?>
                        <td class="dorado"><?php echo "Sobresaliente"?></td>
                   <?php }?>

                    
                <tr>
                    
            <?php } ?>
        </tbody>
    </table>
</body>
</html>