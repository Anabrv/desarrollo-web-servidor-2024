<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
        error_reporting(E_ALL);
        ini_set("display_errors",1);


        define("GENERAL", 1.21);
        define("REDUCIDO", 1.1);
        define("SUPERREDUCIDO", 0.4);
    ?>
</head>
<body>
<form action="" method ="get">
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
<?php
     //$isset (is set) devuelve true si la variable existe
    
    if(isset($_GET["precio"]) and isset($_GET["iva"])){
        //El get se ejecuta automaticamente, por eso debemos preguntarle 
       $PRECIO = $_POST["precio"];
       $iva = $_POST["iva"];

        /*  var_dump($PRECIO);
         var_dump($iva); */

        if($PRECIO != ''and $iva !=''){ // si precio es diferene a vacio y iva es diferente a vacio , ejecuta

       /* lo almacena en pvp */
       $pvp = match($iva){
           "general"  => $PRECIO * GENERAL,
           "reducido" => $PRECIO * REDUCIDO,
           "superreducido" => $PRECIO * SUPERREDUCIDO,
       };
       echo "<p>El PVP es $pvp</p>";

        }   
        else {
       echo"<p>te falta un dato</p>";
        }
    }
   
    


?>
</form>
</body>
</html>