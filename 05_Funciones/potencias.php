<?php
function calcularPotencia(){
    $resultado = 1;
    for ($i=0; $i < $exponente; $i++) { 
               $resultado= $resultado *$base;
              
            } 
            echo "<p>$resultado</p>";
}

    ?>