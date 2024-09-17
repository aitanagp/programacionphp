<?php
/*4. Realizar en un vector T de 10 elementos:
4.a) Inicializar los elementos de un vector T con los números pares del 2 al 20
4.b) Calcula la suma de los elementos del vector
4.c) Calcula la media de los elementos del vector*/

//inicia el vector del 2 al 20 sumando 2 cada vez
$vector_t=range(2, 20, 2);

//muestra el vector T
echo "Vector T: ";
print_r($vector_t);
echo "<br>";

//suma de los elementos del vector
$suma = array_sum($vector_t);
echo "Suma de los elementos del vector: $suma";
echo "<br>";

//media de los elementos del vector
$media = array_sum($vector_t) / count($vector_t);
echo "Media de los elementos del vector: $media";
?>