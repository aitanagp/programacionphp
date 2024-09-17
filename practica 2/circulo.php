<form method = "post">
    <label> R: </label>
    <input type = "text" name = "R"><br><br>

    <input type = "submit" value = "Área">
</form>

<?php
//Circulo.php → Programa que calcula el área de un círculo (Área =π*R*R) y la longitud de su circunferencia (Circunferencia
//= 2*π*R) . La función pi() nos devuelve el valor de π
//define = ("PI", 3.1416);
if($_REQUEST){
    $r = $_REQUEST["R"];
    $area = M_PI*$r*$r;
    $longitud = 2*pi()*$r;
    echo "El área de un círculo es: $area <br><br>";
    echo "la longitud de circunferencia es: $longitud";
}

?>