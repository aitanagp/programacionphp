<?php

function DecimalBinario($num) {
    return decbin($num);
}

function DecimalOctal($num) {
    return decoct($num);
}

function DecimalHexadecimal($num) {
    return dechex($num);
}

function DecimalA($num) {
    $resultados = array(
        'Binario' => DecimalBinario($num),
        'Octal' => DecimalOctal($num),
        'Hexadecimal' => DecimalHexadecimal($num)
    );

    return $resultados;
}

// Solicitar un número decimal
$num1 = intval(readline("Ingrese un número decimal: "));

// Calcular y mostrar las conversiones
$resultados = DecimalA($num1);

echo "Número Decimal: $num1\n";
echo "Número Binario: {$resultados['Binario']}\n";
echo "Número Octal: {$resultados['Octal']}\n";
echo "Número Hexadecimal: {$resultados['Hexadecimal']}\n";
?>
