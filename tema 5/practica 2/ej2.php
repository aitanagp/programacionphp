<?php

function contarImparesDiagonalPrincipal($matriz) {
    $impares = array();
    $dimension = count($matriz);

    for ($i = 0; $i < $dimension; $i++) {
        if ($matriz[$i][$i] % 2 != 0) {
            $impares[] = $matriz[$i][$i];
        }
    }

    return $impares;
}

function contarImparesDiagonalSecundaria($matriz) {
    $impares = array();
    $dimension = count($matriz);

    for ($i = 0; $i < $dimension; $i++) {
        if ($matriz[$i][$dimension - 1 - $i] % 2 != 0) {
            $impares[] = $matriz[$i][$dimension - 1 - $i];
        }
    }

    return $impares;
}

// Generar una matriz cuadrada de dimensión 5 con números aleatorios entre 1 y 1000
$matriz = array();
for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j < 5; $j++) {
        $matriz[$i][$j] = rand(1, 1000);
    }
}

// Mostrar la matriz
for ($i = 0; $i < 5; $i++) {
    echo implode(" ", $matriz[$i]) . "\n";
}

// Calcular impares en ambas diagonales
$imparesDiagonalPrincipal = contarImparesDiagonalPrincipal($matriz);
$imparesDiagonalSecundaria = contarImparesDiagonalSecundaria($matriz);

// Mostrar resultados
echo "\nImpares de la diagonal principal: " . count($imparesDiagonalPrincipal) . "\n";
print_r($imparesDiagonalPrincipal);

echo "Impares de la diagonal secundaria: " . count($imparesDiagonalSecundaria) . "\n";
print_r($imparesDiagonalSecundaria);

$totalImparesDiagonalPrincipal = count($imparesDiagonalPrincipal);
$totalImparesDiagonalSecundaria = count($imparesDiagonalSecundaria);
$totalImparesDiagonales = $totalImparesDiagonalPrincipal + $totalImparesDiagonalSecundaria;

echo "\nTotal de impares en Diagonal principal: $totalImparesDiagonalPrincipal\n";
echo "Total de impares en Diagonal Secundaria: $totalImparesDiagonalSecundaria\n";
echo "Total de impares en Diagonales: $totalImparesDiagonales\n";
?>
