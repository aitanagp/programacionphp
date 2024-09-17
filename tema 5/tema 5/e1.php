<?php
function esPrimo($n){
    if ($n < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            return false;  // Si es divisible, entonces no es primo
        }
    }
    return true;  // Si no es divisible por ningún número, entonces es primo
}

$numero = 7;
echo "$numero <br>";

if (esPrimo($numero)) {
    echo "El número es primo";
} else {
    echo "El número no es primo";
}
?>


