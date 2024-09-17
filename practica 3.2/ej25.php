<?php
// a0=0
// a1=1
// ai=ai−1 + 2∗ai−2 para i≥2

$i = 0;
$a0 = 0;
$a1 = 1;

    while($a1 < 2000) {
        if($i >= 2) {
            $ai = $a1 + 2 * $a0;
        }

        $a0 = $a1;
        $a1 = $ai;
        $i++;
    }
    echo "El primer término cuyo valor es mayor o igual a 2000 es a$i, con un valor de $a1";
?>

