<form method="post">
    <label>Numero: </label>
    <input type="text" name="n">

    <input type="submit" name="enviar">
</form>

<?php

// Escribir un programa que calcule la suma de los N primeros números naturales
if($_REQUEST){
    $n=$_REQUEST["n"];

    $suma=0;

    for($i=1;$i<=$n;$i++){
        $suma=$suma+$i;
    }

    echo "la suma de los primeros numeros naturales es: $suma";
}

?>