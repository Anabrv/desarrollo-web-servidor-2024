<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="num">Grados</label>
        <input type="text" name="num" id="num" placeholder="Introduzca los grados">
        <br>
        <select name = "options1">
        <option value="celsius">Celsius</option>
        <option value="fahrenheit">Fahrenheit</option>
        <option value ="kelvin">Kelvin</option>
        </select>
        
        <select name = "options2">
        <option value="celsius2">Celsius</option>
        <option value="fahrenheit2">Fahrenheit</option>
        <option value ="kelvin2">Kelvin</option>
        </select>
        <input type="submit" value="Convertir">
    </form>

    <?php
        if($_REQUEST["REQUESTED_METHOD"] == "POST"){
            $num = $_POST["num"];
            

        }
    
    
    ?>
</body>
</html>