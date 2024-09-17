<?php
$row = 4;
$col = 5;
$matriz = array();

for ($i = 0; $i < $row; $i++) {
    for ($j = 0; $j < $col; $j++) {
        $matriz[$i][$j] = rand(0, 100);
    }
}

// Encontrar el mayor número y su posición en la matriz
$mayor = $matriz[0][0]; // Suponemos que el primer elemento es el mayor
$filaMayor = 0;
$columnaMayor = 0;

for ($i = 0; $i < $row; $i++) {
    for ($j = 0; $j < $col; $j++) {
        if ($matriz[$i][$j] > $mayor) {
            $mayor = $matriz[$i][$j];
            $filaMayor = $i;
            $columnaMayor = $j;
        }
    }
}

echo "Matriz generada:<br>";
for ($i = 0; $i < $row; $i++) {
    for ($j = 0; $j < $col; $j++) {
        echo $matriz[$i][$j] . " ";
    }
    echo "<br>";
}
echo "<br>El número mayor es $mayor y se encuentra en la posición fila: " . ($filaMayor + 1) . " columna: " . ($columnaMayor + 1);
