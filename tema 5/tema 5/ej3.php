<?php

function primos($matriz){
    for($i=0;$i<5;$i++){
        for($j=0;$j<5;$j++){
           if($matriz[$i][$j]){
               return false;
           }
           
        }
    }

}

function crearMatriz(){
    for($i=0;$i<5;$i++){
        for($j=0;$j<5;$j++){
            $matriz[$i][$j]=rand(1,100);
        }
    }

    return $matriz;
}

$matriz=crearMatriz();

print_r($mostrar);
