<form method="post">
    <label>Numero: </label>
    <input type="text" name="n">

    <input type="submit" name="enviar">

</form>

<?php
// Escribir un programa que muestre los N primeros números naturales

if($_REQUEST){
    $n=$_REQUEST["n"];

    echo "utilizando for: <br>";
    for($i=1;$i<=$n;$i++){
        echo "$i <br>";
    }

    echo "utilizando while: <br>";

    $j=1;

    while($j<=$n){
        echo "$j <br>";
        $j++;
    }
}

?>
