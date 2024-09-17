<?php
<?php

function sumaDigitos($numero) {
    $suma = 0;
    while ($numero > 0) {
        $digito = $numero % 10;
        $suma += $digito;
        $numero = ($numero / 10);
    }
    return $suma;
}

$numero = 3913;
$resultado = sumaDigitos($numero);
echo "La suma de los dígitos de $numero es $resultado\n";

?>

