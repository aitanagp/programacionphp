<form method="post">
    <label>Introduce un número: </label>
    <input type="text" name="n1">

    <label>Introduce el segundo número: </label>
    <input type="text" name="n2">

    <label>Introduce el tercer número: </label>
    <input type="text" name="n3">

    <input type="submite" name="enviar">
</form>

<?php
/*1. Crea un programa que pida tres números enteros. Utilizando caracteres producto (*) el programa
ha de dibujar una serie de rectángulos (ver imagen). La longitud de la base viene dada por el
valor del primer número y la de la altura por el valor del segundo, el número de rectángulos lo
da el tercer número.*/

if($_REQUEST){
    $n1=$_REQUEST["n1"];
    $n2=$_REQUEST["n2"];
    $n3=$_REQUEST["n3"];

    for($i=0;$i<$n3;$i++){
        for($j=0;$j<$n2;$j++){
            for($m=0;$m<$n3;$m++){
                echo "*";
            }
            echo " ";
        }
        echo "<br>";
    }
}
