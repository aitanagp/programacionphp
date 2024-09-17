<?php
//. Escribir un programa que calcule la suma de N términos de las siguientes series:
// 18.a) 1 + 1/2 + 1/3 + … + 1/N
// 18.b) 1 + 4 + 9 + 16 + … + N2
// 18.c) 1/2 + 1/4 + 1/8 + 1/16 + 1/32 + … + 1/2N 
// 18.d) 1/2 + 2/22 + 3/23 + ... + N/2N

$n=10;
    $a=0;
    for($i=1;$i<=$n;$i++){
        $a+=1/$i;
    }
    echo "a) 1 + 1/2 + 1/3 + … + 1/N = $a <br>";

    $b=0;
    for($i=1;$i<=$n;$i++){
        $b+=$i**2;
    }
    echo "b) 1 + 4 + 9 + 16 + … + N^2 = $b <br>";

    $c=0;
    for($i=1;$i<=$n;$i++){
        $c+=$i/pow(2, $n);
    }
    echo "c) 1/2 + 1/4 + 1/8 + 1/16 + 1/32 + … + 1/2^N = $c <br>";

    $d=1;
    for($i=1;$i<=$n;$i++){
        $d+=$d/pow(2, $d);
    }
    echo "d) 1/2 + 2/22 + 3/23 + ... + N/2N = $d <br>";
