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

/* Se puede poner para evitar un if largo */
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
    -->
        <ul>
     <?php
        $i = 1;
    
        while($i <= 100):
            if($i % 3 == 0):
            echo "<li>$i</li>";
            endif;
            $i++;
        endwhile;
        
     ?>
     </ul>
     <h3>Ejercicio 3</h3>
<!-- EJERCICIO 2: CALCULAR LA SUMA DE LOS PARES ENTRE 1 Y 20 -->
     <?php
        $i = 1;
        while($i <= 20){
            if($i %2 == 0){
                $suma += $i;     //$suma= $suma + $i
            }
            $i++;
        }
     
        echo "<p>Solución es $suma</p>";
     
     ?>
         

        <!-- EJERCICIO 4: CALCULAR LA FACTORIAL DE 6 CON WHILE ( multiplicar un numero por el numeo que sea)
         3! = 1x2x3
         4! = 1x2x3x4
            -->

        <h3>Ejercicio 4</h3>

        <?php

        $i = 1;
        $factorial = 1;
        $resultado= 1; 

        while( $i <= $factorial){
            $resultdo *= $i;
            $i++;
        }
        echo ""
        
        ?>
        <h3>EJERCICIO 5</3>
        <p>MUESTRA POR PANTALLA LOS 5O PRIMEROS NÚMEROS PRIMOS</p>
        <?php
        /* Un numero primo, es un numero que quitando 1 y el mismo, de 0
        * 4 % 1 = 0 No es primo
        * 4 % 3 = 1
        *
        *5% 2 = 1
        *5 % 3 = 2
        * BUCLE DE 2 A -1

        $n= 7 ejemplo
        Primero sacar si un número es primo o no
        desde 2 hasta n  $n-1
            comprombar si $n tiene divisores que den resto 0
            else devolver true
        fin 
        */
        $num= 2;
        $numeroPrimos = 0;
        echo "<ul>";
        
        while($numeroPrimos < 50){    
            $esPrimo= true;
            for ($i=2; $i < $num; $i++) {      //la i vuelve a ser 2 porque se reinicia en el while 
                if ($num % $i==0) { //Si el numero al dividirlo entre los cocientes de i da 0
                     $esPrimo = false;
                     break; //porque ya sabemos 
                } 
                
             } 
             if ($esPrimo) {
                $numeroPrimos++;
                echo "<li>$num</li>";
             }
             $num++;
        } 
        echo"</ul>";
       

        //
        //var_dump($check); 

        //Printeamos si es primo o no 
       /*  $res = "";
        if($check){
            $res = " es primo";
        }
        else{
            $res = " no es primo";
        }
        echo "<p>$num $res</p>"; */
        
        ?>
    </body>
</html>