<?php

//TresCuadrados.php → Escriba un programa que cada vez que se ejecute calcule tres cuadrados y nos muestre el valor de su
//lado, su área y nos diga qué cuadrado es el mayor (función max()).

    $cuadrado1 = rand(1,100);
    $cuadrado2 = rand(1,100);
    $cuadrado3 = rand(1,100);

    $area1=$cuadrado1*$cuadrado1;

    echo "El lado del primer cuadrado es: $cuadrado1 y su área es: $area1 <br>";

    $area2=$cuadrado2*$cuadrado2;

    echo "El lado del segundo cuadrado es: $cuadrado2 y su área es: $area2 <br>";

    $area3=$cuadrado3*$cuadrado3;

    echo "El lado del tercer cuadrado es: $cuadrado3 y su área es: $area3 <br>";
    
    $mayor = max($cuadrado1, $cuadrado2, $cuadrado3);

    echo "El mayor de todos es: $mayor";


?>