<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        "AO1" => "Perro",
        "A02" => "Gato",
        "A03" => "Ornitorrinco",
        "AO4" => "Suricato",
        "A05" => "Capibara",
    ];
    //print_r($animales);

    echo "<p>". $animales["A03"] . "</p>";
    ?>
</body>
</html>