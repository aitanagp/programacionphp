<form method="post">
    <label>X: </label>
    <input type="text" name="x">

    <input type="submit" name="enviar">
</form>

<?php

if($_REQUEST){
    $x=$_REQUEST["x"];

    if($x > 0){
        $resultado = $x ** 3 - $x ** 2 + 6;
        echo "$x^3-$x^2+6 = $resultado";
    }else if(x < 0){
        $resultado = sqrt(abs($x ** 3 - $x));
    }else if(x == 0){
        echo "-5";
    }
}
?>