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
    <!-- EJERCICIOS 1 : CALCULAR LA SUMA DE TODOS LOS NÚMEROS PARES DEL 1 AL 20 -->

    <!-- EJERCICIO 2: MONSTRAR LA FECHA ACTUAL CON EL SIGUIENTE FORMATO:
        Viernes 27 de Septiembre de 2024 
        UTILIZAR LAS ESTRUCTURAS DE CONTROL NECESARIAS -->
    <?php
        $dia = date("l");
        $dia_espanol=null;
        $mes= date("n");


        $dia= match($dia) { 
            "Monday" => "Lunes",
            "Tuesday" => "Martes",
            "Wednesday" => "Miércoles",
            "Thursday" => "Jueves",
            "Friday" => "Viernes",
            "Saturday" => "Sábado",
            "Sunday" => "Domingo"
        };
        
        
        $mes = match($mes){
            "1" => "Enero",
            "2" => "Febrero",
            "3" => "Marzo",
            "4" => "Abril",
            "5"=> "Mayo",
            "6" => "Junio",
            "7 "=> "Julio",
           " 8" => "Agosto",
            "9" => "Septiembre",
            "10" => "Octubre",
            "11" => "Noviembre",
            "12" => "Diciembre"
        };

        $dia_n = date("j");
        $anyo = date("Y");
        echo "<h1> $dia $dia_n de $mes del $anyo</h1>";
    
    ?>
     <!-- EJERCICIO 2: MOSTRAR EN UNA LISTA LOS NUMEROS PARES ENTRE 1 Y 20 USANDO WHILE E IF 
     
        EJERCICIO 2: CALCULAR LA SUMA DE LOS PARES ENTRE 1 Y 20

        EJERCICIO 4: CALCULAR LA FACTORIAL DE 6 CON WHILE
    -->
</body>
</html>