<form method="post">
    <label>Numero: </label>
        <input type="text" name="n">

        <input type="submit" name="enviar">

</form>

<?php
// Escribir un programa que muestre los N primeros números naturales pares
if($_REQUEST){
    $n=$_REQUEST["n"];

    echo "utilizando for: <br>";

    for($i=1;$i<=$n;$i++){
        if($i%2==0){
            echo "$i <br>";
        }
    }

    echo "utilizando while: <br>";

    $j=1;

    while($j<=$n){
        if($j%2==0){
            echo "$j <br>";
        }
        
        $j++;
    }
}

?>