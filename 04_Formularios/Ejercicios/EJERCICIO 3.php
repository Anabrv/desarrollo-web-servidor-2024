<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="num1">Número 1</label>
        <input type="text" name="num1" id="num1" placeholder="Introduzca número">
        <br>
        <label for="num2">Número 2</label>
        <input type="text" name="num2" id="num2" placeholder="Introduce número">
        <br>
        <input type="submit" value="Calcular">
    </form>
    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            
        $num= 2; // empieza en 2 porque 1 no puede ser un numero primo
        
        echo "<ul>";
        
       for ($i = $num1 ; $i <= $num2 ; $i++){    
            $esPrimo= true;
            for ($j=2; $j < $i/2; $j++) {  // Se pone el /2 para que haga menos comparaciones ya que si el resultado de la division es menor de 2 no es primo
                if ($num % $j==0) { //Si el numero al dividirlo entre los cocientes de i da 0
                     $esPrimo = false;
                     break; 
                } 
                /*  */
             } 
             if ($esPrimo) {
               
                echo "<li>$num</li>";
             }
            
        } 
        echo"</ul>";
        }
    
    
    ?>
</body>
</html>