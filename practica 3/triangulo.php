<form method="post">
    <label>Lado 1: </label>
    <input type="text" name="lado1"><br><br>

    <label>Lado 2: </label>
    <input type="text" name="lado2"><br><br>

    <label>Lado 3: </label>
    <input type="text" name="lado3"><br><br>

    <input type="submit" name="enviar">

</form>

<?php
//triangulo.php

if($_REQUEST){
    $lado1=$_REQUEST["lado1"];
    $lado2=$_REQUEST["lado2"];
    $lado3=$_REQUEST["lado3"];

    if(($lado1 + $lado2 > $lado3) && ($lado1 + $lado3 > $lado2) && ($lado3 + $lado2 > $lado1)){
        if($lado1 == $lado2 && $lado2 == $lado3){
            echo "Es un triángulo equilátero";
        }else if($lado1 == $lado2 && $lado2 == $lado3 && $lado1 == $lado3){
            echo "Es un triángulo isósceles";
        }else{
            echo "Es un triángulo escaleno";
        }
    }else{
        echo "no forma ningún triángulo";
    }
}

?>