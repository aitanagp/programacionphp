
<form method="post">
    <label> Altura: </label>
    <input type="text" name="altura"><br><br>

    <label> Base: </label>
    <input type="text" name="base"><br><br>

    <input type="submit" value="area"><br><br>
</form>

<?php
//Triangulo.php → Programa en PHP que calcula el área de un triangulo cuya formula es a=(b*h)/2.
    if($_REQUEST){
        $base=$_REQUEST["base"];
        $altura=$_REQUEST["altura"];
        $area=($base*$altura)/2;
    }

    echo "El área del triángulo es: $area <br><br>";
?>