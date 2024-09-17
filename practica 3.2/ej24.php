<?php
    //definiendo las expresiones del bucle for
    for($i=1;$i<=10;$i++){
        echo "$i \n";
    }
    echo "<br>";

    //utilizando dos expresiones y la sentencia break
    for($i=1;;$i++){
        if($i>10){
            break;
        }
        echo "$i \n";
    }

    echo "<br>";

    //sin expresiones(vacias) y la sentencia break
    $i=1;

    for(;;){
        if($i>10){
            break;
        }
        echo "$i \n";
        $i++;
    }

    //¿podrias realizar el ejerciio sin ninguna sentencia fuera de la declaracion del bucle?
    //no, porque si se declara dentro la sentencia daria error