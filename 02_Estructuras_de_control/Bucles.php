<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //WHILE

    $i = 1;

     echo "<ul>";
    while($i <= 10){
        echo "<li>$i</li>";
        $i++;        
    }
    echo "</ul>";
    ?>

    <h1>Lista con WHILE alternativa</h1>
    <?php
        echo "<ul>";
        while($i <= 10):
            echo "<li>$i</li>";
            $i++;        
        endwhile;
        echo "</ul>";
    ?>

        <h1>LISTA CON FOR</h1>
        <?php
        
        echo "<ul>";
        for ($i = 1; $i <= 10; $i++):
            echo "<li>$i</li>";
        endfor;

        echo"</ul>";
    
        ?>
        <h3>For con break cursed</h3>
        <?php
        echo "<ul>";
        for($i= 1; ; $i++){ // (; ;) otra opción   , código ofuscado , se utiliza para hacer virus
            if($i > 10){
                break;
            }
            echo "<li>$i</li>";
        }
        echo "</ul>";
        
        ?>

</body>
</html>