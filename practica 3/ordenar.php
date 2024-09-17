<?php
//Ordenar3num.php → Dados 3 números aleatorios mostradlos en orden ascendent

$n1=rand(1,50);
$n2=rand(1,50);
$n3=rand(1,50);

if($n1<$n2 && $n1<$n3){
    if($n2<$n3){
        echo "1º: $n1, 2º: $n2, 3º: $n3";
    }else{
        echo "1º: $n1, 2º: $n3, 3º: $n2";
    }
}if($n2<$n1 && $n2<$n1){
    if($n1<$n3){
        echo "1º: $n2, 2º: $n1, 3º: $n3";
    }else{
        echo "1º: $n2, 2º: $n3, 3º: $n1";
    }
}else{
    if($n1<$n2){
        echo "1º: $n3, 2º: $n1, 3º: $n2";
    }else{
        echo "1º: $n3, 2º: $n2, 3º: $n1";
    }
}

?>