<?php

//ejercicio1a
echo "hola mundo <br>";

//ejercicio1b
$palabra = "hola mundo";
echo "esto es $palabra con variable<br>";

//ejercicio2
$nombre ="Aitana";

$mensaje = "Bienvenida, ";

echo $mensaje, $nombre, "<br>";


//ejercicio3
$num1 = 88;
$num2 = 12;
$suma = $num1 + $num2;
echo "la suma de $num1 + $num2 es $suma <br>";

//ejercicio 4
$base = "17";
$altura = "35";

$area = ($base * $altura)/2;

echo "El área del triangulo de base $base y altura $altura es $area";
echo "<br>";


//ejercicio 5

$array= array(1,2,3,4,5,6,7,8,9,10);

foreach($array as $clave=>$valor){
    echo "$valor";
    echo "<br>";
}


//ejercicio 6

$colores = array("púrpura", "azul", "magenta", "amarillo", "verde", "rojo", "negro");

foreach($colores as $clave=>$valor){
    echo "$valor <br>";   
}




?>