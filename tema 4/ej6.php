<?php
// Vectores S y T de 10 elementos cada uno
$S = [1, 3, 5, 7, 9, 11, 13, 15, 17, 19];
$T = [2, 4, 6, 8, 10, 11, 13, 15, 17, 19];

// Función para calcular la unión (S U T)
function union($array1, $array2) {
    $result = $array1;

    for ($i = 0; $i < count($array2); $i++) {
        if (!in_array($array2[$i], $result)) {
            $result[] = $array2[$i];
        }
    }

    return $result;
}

// Función para calcular la intersección (S ∩ T)
function intersection($array1, $array2) {
    $result = [];

    for ($i = 0; $i < count($array1); $i++) {
        if (in_array($array1[$i], $array2)) {
            $result[] = $array1[$i];
        }
    }

    return $result;
}

// Función para calcular la diferencia (S - T)
function difference($array1, $array2) {
    $result = [];

    for ($i = 0; $i < count($array1); $i++) {
        if (!in_array($array1[$i], $array2)) {
            $result[] = $array1[$i];
        }
    }

    return $result;
}

// Calcular y mostrar los resultados
echo "Unión (S U T): ";
print_r(union($S, $T));
echo "<br>";

echo "Intersección (S ∩ T): ";
print_r(intersection($S, $T));
echo "<br>";

echo "Diferencia (S - T): ";
print_r(difference($S, $T));
?>

