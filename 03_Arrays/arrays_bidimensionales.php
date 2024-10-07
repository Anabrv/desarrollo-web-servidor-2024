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
    <?php
        /* $array = [1,2,3,4]; */
        //["Nombre", "tipo", "precio]
        //En php un array no tiene por qué ser simétrico
        $videojuegos= [
            ["Disco Elysium", "RPG", 9.99],
            ["Dragon Ball Z Kakarot", "Acción", 59.99],
            ["Persona 3", "RPG", 24.99],
            ["Commando 2","Estrategia", 4.99],
            ["Hollow knigth", "Metroidvania", 9.99],
            ["Stardew Valley","Gestión de recursos", 7.99]
        ];


        array_push($videojuegos,["Dota 2","MOBA",0]);
        array_push($videojuegos,["Fall Guys", "Plataforma", 0]);
        array_push($videojuegos, ["Rocket Leage", "Deporte",0]);
        array_push($videojuegos, ["Lego Fornite","Acción",0]); 

        //AÑADIR A LA MATRIZ

         //Primera forma
        $nuevo_videojuego = ["Octopath Traveler", "RPG",20];
        array_push($videojuegos, $nuevo_videojuego);

        //Segunda forma
        array_push($videojuegos, ["Ender Lilies", "Metroidvania", 9.95]);
        


        //BORRAR DE LA MATRIZ
        /* unset($videojuegos[3]);
        $videojuegos = array_values($videojuegos); */



        //ORDENAR MATRICES
        //variable auxiliar (_titulo) para no pisarla con el titulo principal
        //Descomponemos el array el columnas . SOLO SE PUEDE USAR UNA 
       
        //SORT_ASC : Ascendente
        $_titulo = array_column($videojuegos,0);
        array_multisort($_titulo, SORT_ASC, $videojuegos);
        //si fuera descendente , SORT_DESC

        $_categoria = array_column($videojuegos , 1);

        //De esta forma se puede ordenador por varios tipos
        $_precio = array_column($videojuegos, 2);
        array_multisort($_categoria, SORT_ASC,
            $_precio, SORT_DESC,
            $_titulo, SORT_DESC,
            $videojuegos);





        //AÑADIR COLUMNA
        //count = length
        for($i = 0 ; $i < count($videojuegos); $i++){

            //$videojuegos[$i][3] = "X";

            // Si la posición de precio[$i][2] es 0 , se escribe en la columna gratis / pago 
            if ($videojuegos[$i][2] == 0) {
                $videojuegos[$i][3] = "Gratis";
            }
            else{
                $videojuegos[$i][3] = "Pago";
            }
        }
    ?>

    <table>
        <thead>
            <tr>
                <th>
                    Videojuego
                </th>
                <th>
                    Categoría
                </th>
                <th>
                    Precio
                </th>
                <th> Pagos </th> <!--Cuando añadimos una columna con el for, debemos escribirlo manualmente en la tabla-->
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($videojuegos as $videojuego){
                //print_r($videojuego);
               /*  echo $videojuego[0]; // Accedemos solo al titulo , que es la clave 0

                echo "<br><br>"; */
                list($titulo,$categoria,$precio,$pago) = $videojuego;
                //list: descompone un array en varias variables. SOLO CON ARRAY CONSISTENTE, ( que tenga todos los valores)

                echo "<tr>";
                echo "<td>$titulo</td>";
                echo"<td>$categoria</td>";
                echo "<td>$precio</td>";
                //nueva columna añadida
                echo "<td>$pago</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>