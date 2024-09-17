<?php
//incremento
    $a=10;
    $b=$a++;

    echo "a=$a y b= $b. <br>";

    //post
    $c=10;
    $d=++$c;

    echo "c=$c y d= $d. <br>";
//elevar
    $n=pow(2,7);
    $num=2**7;
    echo $n;
    echo "<br>";
    echo $num;
    echo "<br>";

   /* //redondear
    define("PI", 3.1416);
    echo "El valor de pi es ", round(PI,2);*/

    //numeros aleatorios
    echo "numeros aleatorios: <br>";
    for($i=0;$i<9;$i++){
        $nu[$i]=rand(1,10);
        echo "$nu[$i]<br>";
    }
?>
