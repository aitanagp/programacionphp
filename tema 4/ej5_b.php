<?php
$t=[];
$s=[];
//repetirmos hasta que el array tiene 10 números
while(count($t)<10){
    $numero=rand(1,10);
    //creamos una variable booleana que compruebe si se encuentra repetido un número
    $repetido=false;

    $longitud=count($t);

    for($j=0;$j<$longitud;$j++){
        //si esta repetido, sale del bucle
        if($t[$j]==$numero){
            $repetido=true;
            $s[]=$numero;
        }
    }
    //si no esta repetido se guarda el número
    if(!$repetido){
        $t[]=$numero;
    }
}
print_r($t);
echo "<br>";
print_r($s);