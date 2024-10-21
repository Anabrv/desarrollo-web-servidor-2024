<?php
   /*  /* Funciones para realizar las operaciones 
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
        } */

        //Funcion para crear una funcion que reciba la temperatura, la unidad inicila
        //y la final y devuelva la temp final
        function convertirTemperatura($temperaturaInicial,$unidadInicial, $unidadFinal){
            $temperaturaFinal = $temperaturaInicial;

            if($unidadInicial == "celsius"){
                if($unidadFinal == "Kelvin"){
                    $temperaturaFinal = $temperaturaInicial + 273.15;
                }
                elseif($unidadFinal == "farenheit"){
                    $temperaturaFinal = ($temperaturaInicial * (9/5)) + 32;
                }
                elseif($unidadFinal == "kelvin"){
                    $temperaturaFinal = ($temperaturaInicial * (9/5)) + 32;
                }

            } elseif($unidadInicial == "kelvin") {
                if($unidadFinal == "celsius") {
        
                } elseif($unidadFinal == "farenheit") {
        
                }
            } elseif($unidadInicial == "farenheit") {
                if($unidadFinal == "celsius") {
                    
                } elseif($unidadFinal == "kelvin") {
        
                }
            }
            echo "<p>$temperaturaFinal</p>";
        }
    
     //en otro fichero nuevo , poner todos los demás formularios y hacerlos con funciones 
    ?>