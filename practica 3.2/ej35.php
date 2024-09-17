<?php
/*Realizar un programa que dado un número de filas muestre el siguiente triángulo, por ejemplo para filas = 11. (observar los
números mayores de 9):
  1
  232
 34543
 4567654
 567898765
 67890109876
 7890123540987
 890123454321098
 90123456765432109
 0123456789876543210
123456789010987654321
 */


function imprimirPiramide($filas) {
    for ($i = 1; $i <= $filas; $i++) {
        for ($j = $filas - $i; $j >= 1; $j--) {
            echo " &nbsp";
        }
        for ($j = 1; $j <= $i; $j++) {
            echo (($j + $i - 1) % 10);
        }
        for ($j = $i - 1; $j >= 1; $j--) {
            echo (($j + $i - 1) % 10);
        }
        echo "<br>";
    }
}

$filas = 11;
imprimirPiramide($filas);

?>

