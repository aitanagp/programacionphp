<?php
//Mostrar en pantalla una tabla de 10 por 10 con los números del 1 al 100

echo "<table border='1'>";

$num = 1;

for($i = 1; $i <= 10; $i++){
    echo "<tr>";
    for($j = 1; $j <= 10; $j++){
        echo "<td> $num </td>";
        $num++;
    }
    echo "</tr>";
}

echo "</table>";
