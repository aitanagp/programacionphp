<?php
//Igual al ejercicio anterior, pero colorear las filas alternando gris y blanco. Además, el tamaño será una constante:
//define(TAM, 10)

define('TAM', 10);

echo "<table border='1'>";

$num = 1;

for($i = 1; $i <= TAM; $i++){
    if($i%2==0){
        echo "<tr style='background-color: gray'>";
    }
    for($j = 1; $j <= TAM; $j++){
        echo "<td>" . $num . "</td>";
        $num++;
    }
    echo "</tr>";
}

echo "</table>";

?>