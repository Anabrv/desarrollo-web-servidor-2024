<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
        error_reporting(E_ALL);
        ini_set("display_errors",1);
    ?>
</head>
<body>
    <?php
    /* Creamos matriz */
        $animes = [
            ["Oyasumi PunPun","Slice of life"],
            ["Jujutsu Kaisen","Shonen"]
        ];
    /* Añadimos */
    array_push($animes,["Nana","Josei"]);
    array_push($animes,["Uzumaki","Terror"]);

    /* Borramos */
    unset($animes[0]);
    $animes = array_values($animes);

    /* Añadimos tercera columna , estreno*/
    for ($i=0; $i < count($animes); $i++) { 
        $animes[$i][2] = rand(1990,2030);
    }
     /* Añadimos cuarta columna nº episodios */
     for ($i=0; $i < count($animes); $i++) { 
        $animes[$i][3] = rand(1,99);
    }
    /* Añadimos quinta columna , estrenado o no */
    for ($i=0; $i < count($animes); $i++) { 
        $animes[$i][4]= "";
        if($animes[$i][4] <= 2024){
            $animes[$i][4]= "Ya disponible";

        }else{
            $animes[$i][4] = "Próximamente";
        }
    }
    /* Ordenar*/
   $_genero= array_column($animes,1);
    $_titulo= array_column($animes,0);
    $_estreno= array_column($animes,2);
    
    array_multisort($_genero,SORT_ASC,
        $_estreno,SORT_DESC,
        $_titulo,SORT_DESC,
        $animes); 

    /* Mostrar información */
    
    ?>
    <table border ="1">
        <thead>
            <tr>
                <th>Título</th>
                <th>Género</th>
                <th>Estreno</th>
                <th>Episodios</th> 
                <th>Emisión</th> 
            </tr>
        </thead>
        <tbody>
            <?php

            foreach($animes as $anime){

                list($titulo,$genero,$estreno,$episodios,$emision) = $anime;
                echo "<tr>";
                echo "<td>$titulo</td>";
                echo "<td>$genero</td>";
                echo "<td>$estreno</td>";
                echo "<td>$episodios</td>";
                echo "<td>$emision</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>