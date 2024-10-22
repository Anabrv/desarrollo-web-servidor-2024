<?php

    

    
    function conversorIva($precio,$iva){
        define("GENERAL", 1.21);
        define("REDUCIDO", 1.1);
        define("SUPERREDUCIDO", 0.4);
        
        /* lo almacena en pvp */
        $pvp = match($iva){
            "general"  => $precio * GENERAL,
            "reducido" => $precio * REDUCIDO,
            "superreducido" => $precio * SUPERREDUCIDO,
        };
        echo "<p>El PVP es $pvp</p>";
    
    

}



