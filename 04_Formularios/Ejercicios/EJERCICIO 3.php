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
           
            for($i = $num1 ; $i <= $num2 ; $i++){
                if($num % $i == 0){
                    break;
                }
            }
            echo "<p>Los numeros primos son $num</p>";
            
        }
    
    
    ?>
</body>
</html>