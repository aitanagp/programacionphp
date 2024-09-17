<?php

/*5.c) Programa nos calcule un vector S de 10 elementos de la forma:
S(1) = T(1)
S(2) = T(1) + T(2)
………………..
S(10) = T(1) + T(2) + … + T(10) */

$t=[];
$s=[];
$t=[];
//repetirmos hasta que el array tiene 10 números
while(count($t)<10){
    $numero=rand(1,10);
    //creamos una variable booleana que compruebe si se encuentra repetido un número
    $repetido=false;

    $longitud=count($t);

    for($j=0;$j<$longitud;$j++){
        //si esta repetido, sale del bucle
        if($t[$j]==$numero){
            $repetido=true;
        }
    }
    //si no esta repetido se guarda el número
    if(!$repetido){
        $t[]=$numero;
        $suma+=$numero;
        $s[]=$suma;
    }
}


print_r($t);
print_r($s);