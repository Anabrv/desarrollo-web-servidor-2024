<!-- Realiza un formulario que reciba 3 números a b y c . Se mostrarán en una lista los múltiplos de c , que se encuentran entre a y b  -->
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
    <form>
        <label for="a">Número 1</label>
        <input type="text" name="a" id="a" placeholder="a">
        <br><br>
        <label for="b">Número 2</label>
        <input type="text" name="b" id="b" placeholder="b">
        <br><br>
        <label for="c">Número 3</label>
        <input type="text" name="c" id="c" placeholder="c">
    </form>

    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $a = $_POST["a"];
            $b = $_POST["b"];
            $c = $_POST["c"];
            $result = "";

        for($i= $a; $i <= $b ; $i++){
            if($i % $c == 0){
                $result .= $i.",";
            }
         }
         echo "<p>$result<p>";
        }
    ?>
    
</body>
</html>