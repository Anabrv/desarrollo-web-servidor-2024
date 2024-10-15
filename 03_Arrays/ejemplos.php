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
    
/* 
*TODOS LOS ARRAYS EN PHP SON ASOCIATIVOS, COMO LOS MAP DE JAVA 
*
*TIENEN PARES CLAVES-VALOR
*/

$numeros = [5,10,9,8,6,7,4]; // ambas opciones sirven
$numero = array (6,10,9,4,3);

print_r($numeros); // PRINT RELATIONAL , para mprimir un array
echo "<br><br>";


    //$animales = ["Perro", "Gato", "Ornitorrinco", "Libélula", "Capibara"];
    
    $animales= [ //Para que salga con un índice , sol se puede usar string y enteros
        "Perro",
        "Gato",
        "Ornitorrinco",
        "Suricato",
        "Capibara",
    ];
    //print_r($animales);

    /* echo "<p>". $animales["A03"] . "</p>"; // */
    $animales[2]= "Koala";
    $animales[6] = "Iguana";
    $animales["A01"] = "Elefante";
    array_push($animales, "Morsa","Foca"); //añadir valores sin clave, si hay huecos de por medio NO LOS RELLENA
    $animales[]= "Ganso"; //Sin corchetes es igual que el array push, añade sin clve.
    unset($animales[1]); //Eliminamos al gato 

    
    $animales = array_values($animales); //Devuelve todos los valores de un array
    $cantidad_animales = count($animales); // cuenta los animales que hay en el array, no cuenta las posiciones vacías
    echo "<h3>Hay $cantidad_animales animales </h3>";
    //print_r($animales); //Para imprimir un array 

    //RECORRER EL ARRAY
    echo "<h3>RECORRER ARRAY CON FOR</h3>";
    echo"<ol>";
    for ($i=0; $i < count($animales); $i++) {  //El count equivale al length
        echo"<li>".$animales[$i] ."</li>";
    } 
    echo "</ol>";


    //RECORRERLO CON WHILE
    echo "<h3>RECORRER ARRAY CON WHILE</h3>";
    $i = 0; //el array empieza en 0
    echo "<ol>";
    while($i < count($animales)){
        echo "<li>". $animales[$i] ."</li>";
        $i++;
    }

    echo "</ol>";


    echo "<br><br>";





/*
    CREAR EL ARRAY CON 3 COCHES
    AÑADIR 2 COCHES CON SUS MATRÍCULAS
    AÑADIR 1 COCHE SIN MATRÍCULA
    BORRAR EL COCHE SIN MATRÍCULA
    RESETEAR LAS CLAVES T ALMACENAR EN OTRO ARRAY

*/
    $coches = [
        "4312 TDZ" => "Audi TT",
        "1122 FFF" => "Mercedes CLR",
        "4531 HTJ" => "Fiat Bravo",
    ];
    $coches["666 KKK"] = "Seat Ibiza"; // en la clave [ 666 kkk] = se mete el valor Seat Ibiza
    $coches["7129 YHT"] = "Fiat Multipla";
    $coches[] = "Peugeot"; //tambien se puede hacer array push
    unset($coches["0"]); // Es cero porque es el valor que tiene el peugeot en mi array
    $vehiculos= array_values($coches); //nombre de nuevo array = array value (numbre antiguo array)


    //print_r($coches)
    //print_r($vehiculos);
    echo "<h3>FOR EACH </h3>";
    //El for each recorre el array dando un valor, es más corto usar el for each .
    echo "<ol>";
    foreach($coches as $coche){ //el alias se puede llamar como quieras , pero que tenga coherencia 
        echo "<li>$coche</li>";
    }
    echo "</ol>";

    echo "<h3>FOR EACH CON CLAVE</H3>";
    echo"<ol>";
    foreach ($coches as $matricula => $coche) {   // matricula es variable que se crea para la clave y seniala => a al valor
       echo "<li>$matricula, $coche</li>";
    }
    echo "</ol>";
    ?>
    <h3>TABLAS</h3>
    <table>
        <caption>Coches</caption>
        <thead>
            <tr>
                <th>Matrícula</th>
                <th>Coche</th>
            </tr>
        </thead>
        <tbody> <!-- El for each va en la parte dinámica-->
            <?php
                foreach($coches as $matricula => $coche){
                    echo "<tr>";
                    echo "<td>$matricula</td>";
                    echo "<td>$coche</td>";
                    echo "</tr>";
                }
            ?>     
        </tbody>
    </table>
    <h3>FORMA ALTERNATIVA, recomendado BBDD</h3>
    <table>
        <caption>Coches</caption>
        <thead>
            <tr>
                <th>Matrícula</th>
                <th>Coche</th>
            </tr>
        </thead>
        <tbody> <!-- El for each va en la parte dinámica-->
            <?php
                foreach($coches as $matricula => $coche) {  ?> 
                    <tr>
                        <td><?php echo $matricula ?></td>
                        <td><?php echo $coche ?></td>
                    </tr>  
               <?php } ?>
            
        </tbody>
    </table>
</body>
</html>