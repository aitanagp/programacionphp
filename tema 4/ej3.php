<?php
/*Realizar un script en PHP llamado frecuencia.php que realice lo siguiente: Generar 1000 números aleatorios entre 1 y 100.
Mostrar el número de veces que aparece un cada número, el número con más apariciones y el total de esas apariciones; */

    //$arraysnumeros = array();

    //en este for se asigna un número aleatorio a cada posicion del array
    for($i=0;$i<1000;$i++){
        $arraysnumeros[] = rand(1,100);
    }
    //contamos la longitud del array para recorrerlo
   $suma=0;
    for($j=0;$j<=100;$j++){
        $contador=0;
        for($i=0;$i<count($arraysnumeros);$i++){
            if($j==$arraysnumeros[$i]){//comparamos el número a buscar con cada posicion del array
                $contador++;
 
            }
        }
        $suma+=$contador;
        echo "el número $j ha aparecido $contador veces <br>";
    }
echo "$suma <br>";
     
    