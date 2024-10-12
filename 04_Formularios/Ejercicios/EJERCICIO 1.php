<!-- Realiza un formulario que reciba 3 números y devuelva el mayor de ellos -->
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
        <label for="numero1">1er Número</label>
        <input type="text" name="numero1" id="numero1" placeholder="Introduzca número">
        <label for="numero2">2do Número</label>
        <input type="text" name="numero2" id="numero2" placeholder="Introduzca segundo número">
        <label for="numero3">·3er Número</label>
        <input type="text" name="numero3" id="numero3" placeholder="Introduzca tercer número">

    </form>
<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $numero1 = $_POST["numero1"];
        $numero2 = $_POST["numero2"];
        $numero3 = $_POST["numero3"];
        $numeros = $_POST["numeros"];

        $numeros = match(true){

            $numero1 > $numero2 and $numero1 > $numero3 => "primer",
            $numero2 > $numero1 and $numero2 > $numero3 => "segundo",
            $numero3 > $numero1 and $numero3 > $numero2 => "tercer"

        };
        echo "<p>El $numeros es mayor";


        




    }







?>
</body>
</html>


