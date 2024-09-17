<?php

    $cuadrado1 = rand(1,100);
    $cuadrado2 = rand(1,100);
    $cuadrado3 = rand(1,100);

    $area1=$cuadrado1*$cuadrado1;

    echo "El lado del primer cuadrado es: $cuadrado1 y su área es: $area1 <br>";

    $area2=$cuadrado2*$cuadrado2;

    echo "El lado del segundo cuadrado es: $cuadrado2 y su área es: $area2 <br>";

    $area3=$cuadrado3*$cuadrado3;

    echo "El lado del tercer cuadrado es: $cuadrado3 y su área es: $area3 <br>";
    
    if($cuadrado1>$cuadrado2 && $cuadrado1>$cuadrado3){
        echo "El cuadrado mayor es el $cuadrado1";

    }else if($cuadrado2>$cuadrado1 && $cuadrado2>$cuadrado3){
        echo "El cuadrado mayor es el $cuadrado2";

    }else{
        echo "el cuadrado mayor es el $cuadrado3";
    }

?>