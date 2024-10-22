<?php
    function conversorMonedas($dinero,$divisaEntrada,$divisaSalida){
        
        $result = match([$divisaEntrada,$divisaSalida]){
            ["euro","dolar"] => $dinero *= 1.09,
            ["euro","yen"] => $dinero *= 163.38,
            ["dolar","euro"] => $dinero *= 0.92,
            ["dolar","yen"] => $dinero *= 149.67,
            ["yen","euro"] => $dinero *= 0.0061,
            ["yen","dolar"] => $dinero *= 0.0067,
        };

        echo"<p>$result</p>";
    }



    

?>