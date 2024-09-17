<?php
// Función para generar una matriz de tamaño $rows x $cols con valores aleatorios entre 0 y 10
function generarMatriz($rows, $cols) {
    $matriz = [];

    for ($i = 0; $i < $rows; $i++) {
        for ($j = 0; $j < $cols; $j++) {
            $matriz[$i][$j] = rand(0, 10);
        }
    }

    return $matriz;
}

// Función para mostrar la matriz
function mostrarMatriz($matriz) {
    $rows = count($matriz);
    $cols = count($matriz[0]);

    for ($i = 0; $i < $rows; $i++) {
        for ($j = 0; $j < $cols; $j++) {
            echo $matriz[$i][$j] . " ";
        }
        echo "<br>";
    }
}

// Función para obtener la suma de todos los elementos de la matriz
function sumaMatriz($matriz) {
    $suma = 0;
    $rows = count($matriz);
    $cols = count($matriz[0]);

    for ($i = 0; $i < $rows; $i++) {
        for ($j = 0; $j < $cols; $j++) {
            $suma += $matriz[$i][$j];
        }
    }

    return $suma;
}

// Generar una matriz de 5x6 con valores aleatorios entre 0 y 10
$matriz = generarMatriz(5, 6);

// Mostrar la matriz
echo "Matriz:<br>";
mostrarMatriz($matriz);

// Calcular la suma de todos los elementos de la matriz
$suma = sumaMatriz($matriz);

// Mostrar la suma de todos los elementos
echo "<br>La suma de todos los elementos de la matriz es: $suma";
?>

