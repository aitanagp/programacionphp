<?php
$row = 4;
$col = 5;
$matriz = array();

for ($i = 0; $i < $row; $i++) {
    for ($j = 0; $j < $col; $j++) {
        $matriz[$i][$j] = rand(0, 100);
    }
}

$mayorSuma = 0;
$columnaMayorSuma = 0;

for ($j = 0; $j < $col; $j++) {
    $sumaColumna = 0;
    for ($i = 0; $i < $row; $i++) {
        $sumaColumna += $matriz[$i][$j];
    }
    if ($sumaColumna > $mayorSuma) {
        $mayorSuma = $sumaColumna;
        $columnaMayorSuma = $j;
    }
}

echo "Matriz generada:<br>";
for ($i = 0; $i < $row; $i++) {
    for ($j = 0; $j < $col; $j++) {
        echo $matriz[$i][$j] . " ";
    }
    echo "<br>";
}

echo "<br>La columna con la mayor suma es la columna: " . ($columnaMayorSuma + 1) . " y su suma es: " . $mayorSuma;
