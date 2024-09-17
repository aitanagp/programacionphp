<?php
$matriz = array();
for ($i = 0; $i < 10; $i++) {
    for ($j = 0; $j < 10; $j++) {
        if ($i === $j) {
            $matriz[$i][$j] = 1; // Establecer 1 en la diagonal principal
        } else {
            $matriz[$i][$j] = 0; // Establecer 0 en el resto de posiciones
        }
    }
}

echo "Matriz generada:<br>";
for ($i = 0; $i < 10; $i++) {
    for ($j = 0; $j < 10; $j++) {
        echo $matriz[$i][$j] . " ";
    }
    echo "<br>";
}
