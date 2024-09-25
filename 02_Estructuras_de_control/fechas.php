<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $numero= "2";

    if($numerp === 2){  //El === significa idéntico , compara que sean el mismo número y el mismo tipo , si fuese "2" == 2 saldría true, porque no compara tipo
        echo "<p>Exito>/p>";
    } else {
        echo "<p>No exito</p>";
    }

    /*
        "2" == 2  "2" es igual a 2  
        "2" !== 2 "2" no es idéntico a 2
        2 === 2 2 si es idéntico a 2
        2 !== 2.2  2 no es idéntico a 2.0 
    */

    $hora= date("G"); 
    //var_dump($hora);
    /*
    Si $hora ENTRE 6 y 11 es MAÑANA
    Si $hora ENTRE 12 y 14 es MEDIODIA
    Si $hora ENTRE 15 y 20 es TARDE
    Si $hora ENTRE 20 y 24 en NOCHE
    sI $HORA ENTRE 1 y 5 , es MADRUGADA
    */
    $hora_exacta= date("H:i:s");
    $tiempos= "";
        if($hora >= 6 and $hora <= 11) {
            $tiempo= "Es Mañana";
        } 

        $dia = date("l");

        echo "<h2>Hoy es $dia</h2>";
    
    /* TENEMOS CLASE LUNES, MIÉRCOLES Y VIERNES NO TENEMOS CLASE EL RESTO 
    HACER UN SWITCH QUE DIGA SI HOY TENEMOS CLASE*/

     //forma larga 
    switch($dia){
        case "Monday":
            echo "<p>Hoy es $dia y tenemos clase </p>";
            break;
        case "Wednesday": 
            echo "<p>Hoy es $dia y tenemos clase </p>";
            break;
        case "Friday":
            echo "<p>Hoy es $dia y tenemos clase</p>";
            break;
        default:
            echo "<p>Hoy es  $dia y no hay clase</p>";
    }
    //forma corta 
    switch($dia){
        case "Monday":  
            break;
        case "Wednesday":
            break;
        case "Friday":
            break;
        default:
            echo "<p>Hoy es  $dia y no hay clase</p>";
    }
    ?>
       
        
</body>
</html>