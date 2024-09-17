<?php
$cadena = "programa";
$apariciones = array();

// Contar las apariciones de cada carácter
for ($i = 0; $i < strlen($cadena); $i++) {
    $caracter = $cadena[$i];
    if (isset($apariciones[$caracter])) {
        $apariciones[$caracter]++;
    } else {
        $apariciones[$caracter] = 1;
    }
}

// Mostrar las apariciones de cada carácter
foreach ($apariciones as $caracter => $veces) {
    echo "El carácter '$caracter' ha aparecido: $veces veces<br>";
}

// Encontrar el carácter con más apariciones
$maximoApariciones = max($apariciones);
$caracterMaximo = array_search($maximoApariciones, $apariciones);

echo "<br>El carácter con más apariciones es: '$caracterMaximo' con $maximoApariciones veces";
