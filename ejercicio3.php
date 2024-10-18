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
    <label for ="numero">Número</label>
        <input type="texto" name="numero" id="numero" placeholder="Introduzca número">
        <br>
        <select name="opciones">
            <option value="sumatorio">Sumatorio</option>
            <option value="factorial">Factorial</option>
        </select>
        <br>
        <input type="submit" value="Calcular">
    </form>
    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
          $numero = $_POST["numero"];
          $opciones = $_POST["opciones"];
          $result= 1;
           /* factorial */
          for ($i= 1; $i <= $numero ; $i++) { 
            $result *= $i ;

          }
         
          /* sumatorio */
          for ($i= 1; $i < $numero ; $i++) { 
            $result += $i ;

          }

          $operaciones = match($opciones) {
             "sumatorio"=> $result,
             "factorial"=> $result,
          };
          
          echo"<p>$operaciones</p>";
        }
    
    
    ?>

</body>
</html>