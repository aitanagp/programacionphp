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

function sumaPrimos($n) {
    $suma = 0;
    $contador = 0;
    $numero = 2;

    while ($contador < $n) {
        if (esPrimo($numero)) {
            $suma += $numero;
            $contador++;
        }
        $numero++;
    }

    return $suma;
}

// Solicitar un número N
$N = intval(readline("Ingrese un número N: "));

// Calcular y mostrar la suma de los primeros N números primos
$resultado = sumaPrimos($N);
echo "La suma de los primeros $N números primos es: $resultado\n";
?>
