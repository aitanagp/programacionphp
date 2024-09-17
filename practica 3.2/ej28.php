<?php
//Escribir un script que dado un valor n muestre por pantalla la siguiente figura (para n=5):
$n=5;

for($i=1;$i<=$n;$i++){
    for($j=0;$j<2*$i-1;$j++){
        echo "*";
    }
    echo "<br>";
}