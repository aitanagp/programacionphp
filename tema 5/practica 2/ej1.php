<?php

function generarNumerosAleatorios($cantidad) {
    $numeros = array();
    for ($i = 0; $i < $cantidad; $i++) {
        $numeros[] = rand(1, 1000);
    }
    return $numeros;
}

function mostrarImparesYSuma($numeros) {
    $impares = array_filter($numeros, function ($numero) {
        return $numero % 2 !== 0;
    });

    echo "Los 10 números impares son: " . implode(", ", array_slice($impares, 0, 10)) . "\n";
    echo "La suma de los 10 números impares es: " . array_sum(array_slice($impares, 0, 10)) . "\n";
}

// Solicitar la cantidad de números aleatorios a generar
$cantidadNumeros = intval(readline("Ingrese la cantidad de números aleatorios a generar: "));

// Generar números aleatorios
$numerosAleatorios = generarNumerosAleatorios($cantidadNumeros);

// Mostrar los 10 números impares y su suma
mostrarImparesYSuma($numerosAleatorios);
?>
