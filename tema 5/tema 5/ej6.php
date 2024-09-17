<?php

function esPrimo($num) {
    if ($num < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}

function generarMatrizAleatoria($dimension) {
    $matriz = array();

    for ($i = 0; $i < $dimension; $i++) {
        for ($j = 0; $j < $dimension; $j++) {
            $matriz[$i][$j] = rand(1, 100);
        }
    }

    return $matriz;
}

function aplicarReglaPrimos($matriz) {
    $dimension = count($matriz);

    for ($i = 0; $i < $dimension; $i++) {
        for ($j = 0; $j < $dimension; $j++) {
            if (esPrimo($matriz[$i][$j])) {
                $matriz[$i][$j] = $matriz[$i][$j];
            } else {
                $matriz[$i][$j] = 0;
            }
        }
    }

    return $matriz;
}

function imprimirMatriz($matriz, $mensaje) {
    echo "$mensaje:\n";
    foreach ($matriz as $fila) {
        echo implode(" ", $fila) . "\n";
    }
    echo "\n";
}

$dimension = intval(readline("Ingrese la dimensión de la matriz (N x N): "));
$matrizOriginal = generarMatrizAleatoria($dimension);

imprimirMatriz($matrizOriginal, "Matriz Original");

$matrizResultado = aplicarReglaPrimos($matrizOriginal);
imprimirMatriz($matrizResultado, "Matriz Resultado (Primos o 0)");

?>
