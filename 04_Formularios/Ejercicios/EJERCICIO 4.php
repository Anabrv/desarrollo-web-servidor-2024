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
    <form action="" method="post">
        <label for="grados">Grados</label>
        <input type="text" name="grados" id="grados" placeholder="Introduzca los grados">
        <br>
        <select name = "salida1">
            <option value="celsius">Celsius</option>
            <option value="farenheit">Farenheit</option>
            <option value ="kelvin">Kelvin</option>
        </select>
        
        <select name = "salida2">
            <option value="celsius">Celsius</option>
            <option value="farenheit">Farenheit</option>
            <option value ="kelvin">Kelvin</option>
        </select>
        <br>
        <input type="submit" value="Convertir">
    </form>

    <?php
    /* Funciones para realizar las operaciones */
        function cel_a_far($num){
            $num = ($num * 1.8 ) + 32;
            return $num;
        }
        function far_a_cel($num){
            $num = ($num -32) * 5 / 9;
            return $num;
        }
        function cel_a_kel($num){
            $num = $num + 273.15;
            return $num;
        }
        function kel_a_cel($num){
            $num = $num - 273.15;
            return $num;
        }
        function kel_a_far($num){
            $num = ($num -273.15)* 9/5 + 32 ;
            return $num;
        }
        function far_a_kel($num){
            $num = ($num - 32) * 5/9 +273.15;
            return $num;
        }

        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $grados = $_POST["grados"];
            $salida1 = $_POST["salida1"];
            $salida2 = $_POST["salida2"];

            /* Comparacion */
            $result = match([$salida1,$salida2]) {
                ["celsius","farenheit"] => cel_a_far($grados),
                ["farenheit","celsius"] => far_a_cel($grados),
                ["celsius","kelvin"] => cel_a_kel($grados),
                ["kelvin","celsius"] => kel_a_cel($grados),
                ["farenheit","kelvin"] => far_a_kel($grados),
                ["kelvin","farenheit"] => kel_a_far($grados)
            };
            
            echo "<p>La temperatura es $result</p>";

       /*  $gradosFinal= $grados; //si no entra en ingún caso se queda igual
        if($salida1 == "Celsius"){
            if($salida1== "Kelvin" ){
        
            }elseif($fsalida2 =="Farenheit"){
            
            }
        elseif ($salida1 == "Kelvin"){
            if($salida2 == "Celsius"){

            }
            elseif($salida == "Farenheit"){

            }
        }elseif($salida1 == "Farenheit"){
            if($salida2 == "Celsius"){

            }
            elseif($salida2 == "Kelvin"){

            
            }
        
    }  */
        }
    
    
    ?>
</body>
</html>