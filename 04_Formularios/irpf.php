<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="salario">Salario</label>
        <input type="text" name="salario" id="salario" placeholder="Introduzca su salario">
        <br>

    </form>
    <?php
    
    if($_SERVER["REQUEST METHOD" == "POST"]){
        $salario = $_POST["salario"] ;
/* 
        if($salario <= 12400){
            $tramo1= $salario * 0.19; //12.400
        }
        elseif ($salario >12400 && $salario <= 20199 ) {
            $tramo2 = $salario * 24 /100;
            $neto =$salario - $tramo2;

        }elseif($salario > 20199 && $salario <=35199 ){
            $tramo3= $salario * 30 / 100;
        }elseif($salario > 35199)
 */
    }
    
    /* poner los tramos */
    ?>
</body>
</html>