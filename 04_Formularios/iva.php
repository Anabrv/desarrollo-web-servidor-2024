<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
        error_reporting(E_ALL);
        ini_set("display_errors",1);
/* Para declarar las constantes siempre en el head*/
        define("GENERAL", 1.21);
        define("REDUCIDO", 1.1);
        define("SUPERREDUCIDO", 0.4);
    ?>
</head>
<body>
<!--
GENERAL = 21%
REDUCIDO = 10%
SUPERREDUCIDO = 4%

10€ IVA = GENERAL , PVP = 12,1   = PVP = precio *1.21
10€ IVA = REDUCIDO , PVP = 11€ PVP = precio *1.1-->

<form action="" method ="post">
    <label for = "precio">Precio</label>
    <input type = "text" name="precio" id="precio">
    <br><br>
    <select name = "iva">
        <!-- Con estas variables accedemos al iva -->
        <option value="general">General</option>
        <option value="reducido">Reducido</option>
        <option value ="superreducido">Superreducido</option>
    </select>
    <br><br>
    <input type="submit" value="Calcular">
    </form>
<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $PRECIO = $_POST["precio"];
        $iva = $_POST["iva"];

        if($PRECIO != '' and $iva != ''){
        /* lo almacena en pvp */
        $pvp = match($iva){
            "general"  => $PRECIO * GENERAL,
            "reducido" => $PRECIO * REDUCIDO,
            "superreducido" => $PRECIO * SUPERREDUCIDO,
        };
        echo "<p>El PVP es $pvp</p>";
    }else {
        echo"te falta php";
    }

    }

//CREAR UNA COPIA DE IRPF.PHP CON GET EN VEZ DE POST Y CONTROLAR LOS ERRORES DE ENVIAR FORMULARIO VACIO
 //CONTROLAR EN TODOS LOS DEMAS FORMULARIOS CON POST , QUE SI SE MANDAN UN MENSAJE VACIO SE MUESTRE UN MENSAJE

?>

</body>
</html>