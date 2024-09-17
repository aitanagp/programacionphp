<form method="post">

    <label>Numero 1: </label>
    <input type="text" name = "numero1"><br><br>

    <label>Numero 2: </label>
    <input type="text" name = "numero2"><br><br>

    <input type= "submit" value ="resultado"><br><br>
</form>

<?php
    if($_REQUEST){
        $n1 = $_REQUEST["numero1"];
        $n2 = $_REQUEST["numero2"];
        $suma = ($n1+$n2);
        $resta = ($n1-$n2);
        $multiplicacion = ($n1*$n2);
        $division = ($n1/$n2);
        $modulo = ($n1%$n2);
        echo "La suma es $suma la resta es $resta la multiplicacion es $multiplicacion la division es $division y el modulo es $modulo <br>";
    }