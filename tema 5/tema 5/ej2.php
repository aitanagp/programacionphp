<?php
function aleatorios() {
    $numeros = [];
    for ($i = 0; $i < 10; $i++) {
        $numeros[] = rand(1, 100);
    }

    return $numeros;
}

function esPrimo($n) {
    if ($n < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}

function menorN($numeros) {
    $menorP = null;
    foreach ($numeros as $n) {
        if (esPrimo($n) && ($menorP == null || $n < $menorP)) {
            $menorP = $n;
        }
    }

    return $menorP;
}

$arrayAleatorio = aleatorios();
print_r($arrayAleatorio);

$menorEncontrado = menorN($arrayAleatorio);

echo "<br>";
echo "El número primo menor es $menorEncontrado";
?>

