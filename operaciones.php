<form method="post">
    <label>Numero 1: </label>
    <input type="text" name="numero1">

    <label>Numero 2: </label>
    <input type="text" name="numero2">

    <input type="submit" name="calcular">
</form>

<?php
    //Operaciones.php → Programa que dados 2 números calcule la suma, resta, multiplicación, división, y modulo.
    if($_REQUEST){
        $n1=$_REQUEST["numero1"];
        $n2=$_REQUEST["numero2"];

        $suma=$n1+$n2;
        $resta=$n1-$n2;
        $mult=$n1*$n2;
        $div=$n1/$n2;
        $mod=$n1%$n2;

        echo "Suma: $suma <br>";
        echo "Resta: $resta <br>";
        echo "Multiplicación: $mult <br>";
        echo "División: $div <br>";
        echo "Modulo: $mod <br>";
    }
?>