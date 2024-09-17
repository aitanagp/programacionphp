<?php
/*BuscarEnArray.php → Generar un array de 10 elementos con valores aleatorios entre 1 y 10. Pedir un número y mostrar el
número de veces que aparece en el array. Ejemplo el 2: */

    $numerobuscar=3;
    $contador=0;
    $arraysnumeros = array();

    //en este for se asigna un número aleatorio a cada posicion del array
    for($i=0;$i<10;$i++){
        $numerosaleatorios = rand(1,10);

        $arraysnumeros[] = $numerosaleatorios;
    }
//contamos la longitud del array para recorrerlo
    $longitud= count($arraysnumeros);

    for($i=0;$i<$longitud;$i++){
        if($numerobuscar==$arraysnumeros[$i]){//comparamos el número a buscar con cada posicion del array
            $contador++;
        }
    }

    print_r($arraysnumeros);
    echo "<br> el número $numerobuscar se encuentra $contador veces <br>";