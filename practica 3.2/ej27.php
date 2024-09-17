<?php
//Escribir un script que dado un valor de n (igual a 5 en la figura) muestre por pantalla la siguiente figura (para n=5):

$n=5;

for($i=0;$i<=$n;$i++){
    for($j=0;$j<=$i;$i++){
        echo "*";
    }
}