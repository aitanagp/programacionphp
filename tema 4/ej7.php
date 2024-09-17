<?php
function generarmatriz($fila, $col){
    for($i=0;$i<$fila;$i++){
        for($j=0;$j<$col;$j++){
            $matriz[$i][$j]=rand(0,100);
        }
    }

    return $matriz;
}

function mostrarfilas($matriz){
    $fila = count($matriz);
    $col = count($matriz[0]);

    for ($i = 0; $i < $fila; $i++) {
        for ($j = 0; $j < $col; $j++) {
            echo $matriz[$i][$j] ." ";
        }
        echo "<br>";
    }
}

function mostrarcolumnas($matriz){
    $fila = count($matriz);
    $col = count($matriz[0]);

    for ($i = 0; $i < $col; $i++) {
        for ($j = 0; $j < $fila; $j++) {
            echo $matriz[$j][$i] ." ";
        }
        echo "<br>";
    }
}

$matriz= generarmatriz(4, 5);

echo "mostrar por filas: <br>";
mostrarfilas($matriz);

echo "mostrar por columnas: <br>";
mostrarcolumnas($matriz);
?>

