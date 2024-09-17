<?php

$alto = 5;

for ($i = 1; $i <= $alto; $i++) {
    for ($j = 1; $j <= $alto - $i; $j++) {
        echo "* " ;
    }

    for ($j = 1; $j <= ($i - 1) * 2; $j++) {
        echo "&nbsp &nbsp";
    }

    for ($j = 1; $j <= $alto - $i; $j++) {
        echo "* ";
    }

    echo "<br>";
}

?>
