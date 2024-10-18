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
    <?php
    /* Array vacío */
        $array1= [];
        $array2 = [];
        $array3 = [];
        
        for ($i=0; $i < count($array1); $i++) { 
            array_push($array1[$i] = rand(1,5));
           
        }
        for ($i=0; $i < count(); $i++) { 
            array_push($array1[$i] = rand(10,100));
        }
       
    ?>
</body>
</html>