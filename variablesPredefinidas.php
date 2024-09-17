<form method="post">
    <label>Numero 1: </label>
    <input type="text" name = "numero_uno"><br><br>

    <label>Numero 2: </label>
    <input type="text" name = "numero_dos"><br><br>

    <input type="submit" value="SUMAR"><br><br>
</form>

<?php
    if($_REQUEST){
        $n1 = $_REQUEST["numero_uno"];
        $n2 = $_REQUEST["numero_dos"];
        $suma = $n1 + $n2;
        echo "La suma de $n1 y $n2 es: $suma";
    }
 ?>