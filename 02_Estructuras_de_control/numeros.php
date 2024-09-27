<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //Existen tres formas de sintaxis de if
        $numero= 0;

        if($numero > 0){
            echo "<p>1 El numero $numero es mayor que cero</p>";
        }

        if($numero > 0) echo "<p> 2 El número $numero es mayor que cero </p>";

        if($numero > 0):
            echo "<p>3 El número $numero es mayor que cero </p>";
        endif;
        
    //if else
//1
    if($numero > 0){
        echo "<p>1 El numero $numero es mayor que cero</p>";
    }
    elseif($numero == 0){
        echo "<p>El número $numero es cero";
    }
    else {
        echo "<p>El numero $numero es menor que cero";
    }
//2
    if($numero > 0) echo "<p>2 El número $numero es mayor que cero </p>";
    elseif($numero == 0) echo "<p>El número $numero es igual a cero";
    else echo "<p> El numero $numero es menor que cero";

//3
    if($numero > 0):
        echo "<p>3 El número $numero es mayor que cero </p>";
    elseif($numero > 0):
        echo "<p>El número $numero es igual que cero <p/>";
    else:
        echo "<p>El numero $numero es menor que cero </p>";
    endif;


    ?>


    <?php
    # Rangos [-10,0] , [0,10] 

    $num = -7;

    // and o && para l conjunción

    if($num >= -10 and $num <= 0){
        echo "<p>El número $num está en el rango [-10,0)</p";
    } elseif($num >= 0 && $num <=10){
        echo "<p>El número $num está en el rango [0,10]</p>";
    } elseif($num >=10 and $num <= 20){
        echo "<p>El número $num está en el rango [10,20]</p>";
    }else{
        echo "<p>El número $num está fuera del rango</p>";
    }
    

    //2 forma
    if($num >= -10 and $num <= 0) echo "<p>El número $num está en el rango [-10,0)</p>";
    elseif($num >= 0 and $num <= 10) echo "<p>El número $num está en el rango [0,10]</p>";
    elseif($num >= 10 and $num <=20) echo "<p>El número $num está en el rango (10,20]</p>";
    else echo "<p>El número $num está fuera de rango";
    
    //3 forma
    if ($num >= -10 and $num <0):
        echo "<p>El número $num está en el rango [0,10]</p>";
    elseif($num >= 0 && $num <=10):
        echo "<p>El número $num está en el rango [0,10]</p>";
    elseif($num >= 10 and $num <=20):
        echo "<p>El número $num está en el rango (10,20]</p>";
    else:
        echo "<p>El número $num está fuera de rango";
    endif;
        /*
        COMPROBAR DE TRES FORMAS DIFERENTES , CON LA ESTRUCTURA IF , SI EL NÚMERO ALEATORIO TIENE 1, 2 O 3 DÍGITOS
        */
        
    $num_aleatorio = rand(1,200);
    $digitos = null; //Creamos una variable que nos diga si tiene uno , dos o tres dígitos, para que el código sea más eficiente
    if($num_aleatorio > 0 and $num_aleatorio < 10) {
        $digitos= 1;
    }elseif($num_aleatorio < 100 and $num_aleatorio > 9) {
        $digitos= 2;
    }elseif($num_aleatorio < 1000 and $num_aleatorio > 99){
        $digitos = 3;
    }else {
        $digitos= "Error";
    }
    $digitos_texto= "digitos";
    if($digitos_texto == 1) $digitos_texto = "dígito";

    echo "<p>El número $numero_aleatorio tiene $digitos digitos</p>";

    //VERSION CON MATCH
    $digitos = match (true){ //
        $num_aleatorio >= 1 && $num_aleatorio <=9 =>1,
        $num_aleatorio >= 10 && $num_aleatorio <=99 => 2,
        $num_aleatorio >= 100 && $num_aleatorio <= 999 => 3,
        default => "ERROR"
    };
    echo "<h1>El numero tiene $digitos digitos</h3>";
        $n= rand(1,3);

        switch($n){  //Hay que poner siempre el break, porque puede entrar en la primera opción , aunque no lo coja
            case 1:
                echo "El número es 1";
                break;
            case 2:
                echo "El número es 2";
                break;
            default:
            echo " El número es 3";

        }
        
        $resultado = match($n){
            1 => "El número es 1",
            2 => "El número es 2",
            3 => "El número es 3"
        };
        echo "<h3>$resultado</h3>";

    ?>
</body>
</html>