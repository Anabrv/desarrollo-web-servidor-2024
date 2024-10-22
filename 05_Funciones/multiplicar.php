<?php
function tablaMultiplicar($numero){
    $result = 0;
    ?>
    <table>
        <thead>
            <tr>
                <th>Número</th>
                <th>Resultado</th>
                
            </tr>
        </thead>
        <tbody>

<?php
    for ($i=1; $i <= 10; $i++) { 
        $result= $numero * $i;
        echo "<tr>";
        echo "<td>$numero x $i = </td>";
        echo "<td> $result </td>";
        echo "</tr>";
    }
   
}



?>

