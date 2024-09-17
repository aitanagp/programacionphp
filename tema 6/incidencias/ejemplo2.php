<?php

function lados($l){

    if($l<0){
        throw new Exception("hay un lado negativo, introduce uno positivo");
    }else{
        $resultado=$l*$l;
        return $resultado;
    } 
}
$n=array(3, -2, 5);
$longitud=count($n);

for($i=0;$i<$longitud;$i++){
    try {
        echo lados($n[$i]), "<br>";
        
    } catch (Exception $ex) {
        echo "Excepción capturada: ", $ex->getMessage(), "<br>";
    }
}