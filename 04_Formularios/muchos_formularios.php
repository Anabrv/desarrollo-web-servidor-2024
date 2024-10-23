<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muchos Formularios</title>
    <?php
        error_reporting(E_ALL);
        ini_set("display_errors",1);

        //Importamos las funciones
        require('../05_Funciones/potencias.php');
        require('../05_Funciones/multiplicar.php');
        require('../05_Funciones/economia.php');
        require('../05_Funciones/conversor.php');
    ?>
</head>
<body>
    <h1>Formulario potencias</h1>
    <form action="" method="post"> 
    <label for="base">Base</label> 
    <input type="text" name="base" id="base" placeholder="Introduzca la base" > <br>
    <label for="exponente">Exponente</label>
    <input type= "text" name="exponente" id="exponente" placeholder="Introduzca el exponente">
    <input type="hidden" name="accion" value="formulario_potencias">
    <br>
    <input type="submit" value="Calcular"> 

</form>
<?php
/* Formulario potencias */
if($_SERVER["REQUEST_METHOD"] == "POST"){

    if($_POST["accion"] == "formulario_potencias"){
        $base=$_POST["base"];
        $exponente=$_POST["exponente"];

        calcularPotencia($base, $exponente);
    }
 }

?>
<!-- Formulario table multiplicar -->
<h1>Formulario tabla de multiplicar</h1>
<form action="" method="post"> 
        <label for="numero"></label> 
        <input type="text" name="numero" id="numero" placeholder="Introduzca un número"> <br><br>
        <input type="hidden" name="accion" value="formulario_multiplicar">
        <input type="submit" value="Calcular"> 
    </form>
<?php

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        if($_POST["accion"] == "formulario_multiplicar"){
            $numero = $_POST["numero"];

            tablaMultiplicar($numero);
        }
       
    }
?>

<!-- Formulario irpf -->
<h1>Formulario IRPF</h1>
<form action="" method="post">
        <label for="salario">Salario</label>
        <input type="text" name="salario" id="salario" placeholder="Salario">
        <input type="hidden" name="accion" value="formulario_irpf">
        <input type="submit" value="Calcular salario bruto">
</form>
<?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        
        if($_POST["accion"] == "formulario_irpf"){
            $tmp_salario = $_POST["salario"];

           if($tmp_salario == ''){
            echo "Introduzca un valor";
           }else{
            if(filter_var($tmp_salario,FILTER_VALIDATE_FLOAT) === FALSE){
                echo"<p>El salario debe ser un numero</p>";
            }else{
                if($tmp_salario < 0){
                    echo"<p>El salario debe ser mayor a 0</p>";
                }else{
                    $salio= $tmp_salario;
                }
            }
           }
           if(isset($salario)){
            $resultado = calcularIrpf($salario);
            echo"<p>El resultado es $resultado</p>";
        } 
        }
        
    }
?>





<!-- Formulario conversor -->
<h1>Formulario Conversor</h1>
<form action="" method="post">
        <label for ="dinero">Dinero</label>
        <input type="texto" name="dinero" id="dinero">
        <br>
        <select name="divisaEntrada">
            <option value="euro">Euro</option>
            <option value="dolar">Dolar</option>
            <option value="yen">Yenes</option>
        </select>
        <select name="divisaSalida">
            <option value="euro">Euro</option>
            <option value="dolar">Dolar</option>
            <option value="yen">Yenes</option>
        </select>
        <br>
        <input type="hidden" name="accion" value="formulario_conversor">
        <input type="submit" value="Convertir">
    </form>
<?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        
        if($_POST["accion"] == "formulario_conversor"){
            $dinero = $_POST["dinero"];
            $divisaEntrada = $_POST["divisaEntrada"];
            $divisaSalida = $_POST["divisaSalida"]; 
            conversorMonedas($dinero,$divisaSalida,$divisaEntrada);
        }
            

    }
    
?>
<h1>Formulario IVA</h1>
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
    <input type="hidden" name="accion" value="formulario_iva">
    <input type="submit" value="Calcular">
    </form>
    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST") {
        
            if($_POST["accion"] == "formulario_iva"){
                $tmp_precio = $_POST["precio"];
                $tmp_iva = $_POST["iva"];

                if($_POST["accion"] == "formulario_irpf"){
                    $tmp_precio = $_POST["salario"];
        
                   if($tmp_precio == ''){
                    echo "Introduzca un valor";
                   }else{
                    if(filter_var($tmp_precio,FILTER_VALIDATE_FLOAT) === FALSE){
                        echo"<p>El salario debe ser un numero</p>";
                    }else{
                        if($tmp_precio < 0){
                            echo"<p>El salario debe ser mayor a 0</p>";
                        }else{
                            $salio= $tmp_precio;
                        }
                    }
                   }
                   if($tmp_iva ==''){
                    echo"<p>El IVA es obigatorio</p>";

                   }else{
                        $valores_validos_iva=["general","reducido","superreducido"];
                        /* Esta funcion solo sirve si hay un select, radiobutton.. algo que tenga número finito. */
                        if(in_array($tmp_iva,$valores_validos_iva)){
                            echo"<p>El iva solo puede ser G, R, SP</p>";
                        }else{
                            $iva = $tmp_iva;
                        }
                    }    

                }
                
                if(isset($precio)){
                    $resultado = calcularIrpf($precio,$iva);
                    echo"<p>El resultado es $resultado</p>";
                    } 
            }
                
    
        }
    
    
    ?>

</body>
</html>