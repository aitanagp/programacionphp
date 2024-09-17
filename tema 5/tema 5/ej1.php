<?php

function esPrimo($n) {
    if ($n <= 1) {
        return false;
    } elseif ($n == 2) {
        return true;
    } elseif ($n % 2 == 0) {
        return false;
    } else {
        $limite = sqrt($n) + 1;
        for ($i = 3; $i < $limite; $i += 2) {
            if ($n % $i == 0) {
                return false;
            }
        }
        return true;
    }
}

function calcularPrimosHasta($numero) {
    $primos = [];
    for ($i = 1; $i <= $numero; $i++) {
        if (esPrimo($i)) {
            $primos[] = $i;
        }
    }
    return $primos;
}

// Valor predeterminado para el número
$numeroDado = 20;

$primosEncontrados = calcularPrimosHasta($numeroDado);

echo "Números primos hasta $numeroDado: ";
print_r($primosEncontrados);

?>


