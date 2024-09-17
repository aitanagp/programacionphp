<?php

$alto = 4;
$ancho = 6;

for ($i = 1; $i <= $alto; $i++) {
    for ($j = 1; $j <= $ancho; $j++) {
        if ($i == 1 || $i == $alto || $j == 1 || $j == $ancho) {
            echo '* ';
        } else {
            echo "&nbsp &nbsp";
        }
    }
    echo "<br>";
}

?>
