<?php
// Dado un número n, mostrar por pantalla n filas con los números de 1 a n: 

$n=5;

for($i=1;$i<=$n;$i++){
    for($j=1;$j<=$n;$j++){
        echo "$j";
    }
    echo "<br>";
}