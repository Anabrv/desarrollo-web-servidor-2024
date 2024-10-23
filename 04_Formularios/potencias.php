<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="estilos.css" rel="stylesheet" type="text/css">
    <?php
        error_reporting(E_ALL);
        ini_set("display_errors",1);

        require('../05_Funciones/potencias.php');
    ?>
</head>
<body>

<form action="" method="post"> 
    <label for="base">Base</label> <!--El for se linkea con el id -->
    <input type="text" name="base" id="base" placeholder="Introduzca la base>" > <br>
    <label for="Exponente">Exponente</label>
    <input type= "text" name="exponente" id="exponente" placeholder="Introduzca el exponente">

    <input type="submit" value="Calcular"> <!-- -->
</form>

    <?php 
    /* CREAR UN FORMULARIO QUE RECIBA DOS PARÁMETROS = BASE Y EXPONENTE
    CUANDO SE ENVÍE EL FORMULARIO , SE CALCULARÁ EL RESULTADO DE ELEVAR LA BASE AL EXPONENTE 
    EJEMPLOS:
    2 ELEVADO A 2 = 8 => 2X2X2 = 8
    3 ELEVADO A 2 = 9  => 3X3 = 9 
    2 ELEVADO A 1 = 2 
    3 ELEVADO A 0= 1 */
    if($_SERVER["REQUEST_METHOD"] == "POST"){
      
       /* variables temporales tmp */ 
        $tmp_base= $_POST["base"];
        $tmp_exponente = $_POST["exponente"];
        

        /* /* /* Validación de la base 
        if($tmp_base !=''){
           /* !== -> no es idéntico 
            if(filter_var($tmp_exponente,FILTER_VALIDATE_INT)!== FALSE){
               $base= $tmp_base;
            }else{
                echo"<p>La base debe ser un numero</p>";
            }
        }else{
            echo"<p>La base es obligatoria</p>";
        } */

/* forma limpia de hacerlo */
        if($tmp_base == ''){
            echo"<p>La base es obligatoria</p>";
        }else{
            if(filter_var($tmp_base,FILTER_VALIDATE_INT) === FALSE){
                echo"<p>La base debe ser un número</p>";
            }else{
                $base= $tmp_base;
            }
        }

        /* if($tmp_exponente !=''){
            /* filtra por número entero 
            if(filter_var($tmp_exponente,FILTER_VALIDATE_INT)!== FALSE) {
               /* El exponente no puede ser 0 
               if($tmp_exponente >= 0){
                $exponente= $tmp_exponente;
               }else{
                echo"<p>El exponenete deber ser mayor o = a o</p>";
               }
            }else{
                echo"<p>La base debe ser un numero</p>";
            }
        }else{
            echo"<p>La base es obligatoria</p>";
        }
 */
/* Forma limpia de hacerlo */
        if($tmp_exponente == ''){
            echo"<p>El exponente es obligatorio</p>";
        }else{
            if(filter_var($tmp_exponente,FILTER_VALIDATE_INT) === FALSE){
                echo"<p>El exponente debe ser un número</p>";
            }else{
                $exponente= $tmp_exponente;
            }
        }
                
        /* El isset te dice si una variable está definida o no */
        if(isset($base) && isset($exponente)){
            $resultado = calcularPotencia($base,$exponente);
            echo"<p>El resultado es $resultado</p>";
        } 

        


          
        
    }

    ?>
</body>
</html>