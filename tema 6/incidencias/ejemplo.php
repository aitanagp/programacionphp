<?php

function dividir($n1, $n2){
    if($n2==0){
        throw new Exception ("división por cero");
    }else{
        $resultado=$n1/$n2;
        return $resultado;
    }
}

try{
    echo dividir(5, 2), "<br>";
    echo dividir(5, 0), "<br>"; 
}catch (Exception $ex){
    echo "Excepción capturada: ", $ex->getMessage(), "<br>";
}