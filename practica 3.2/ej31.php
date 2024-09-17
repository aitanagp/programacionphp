<?php
/*Realizar un programa que dibuje la siguiente figura introduciendo el ancho:
Ancho: 7
       *
     * * *
   * * * * *
* * * * * * * */

$ancho = 7;

for ($i = 1; $i <= $ancho; $i++) {
    for ($j = 1; $j <= $ancho - $i; $j++) {
        echo "&nbsp &nbsp"; // Espacio en lugar de asterisco
    }

    for ($j = 1; $j <= (2 * $i) - 1; $j++) {
        echo '* ';
    }

    echo "<br>";

    if ((2 * $i - 1) >= $ancho) {
        break;
    }
}

?>

