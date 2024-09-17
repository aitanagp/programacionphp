
<form method= "post">
    <label for="radio">Radio del círculo:</label>
    <input type="text" name="radio" ><br><br>
    

    <input type= "submit" value = "Area de un circulo"><br><br>
</Form>


<?php
If ($_REQUEST){

$radio = $_REQUEST["radio"];
        
$area = pi() * $radio * $radio;
$circunferencia = 2 * pi() * $radio;

echo "<h2>Resultados:</h2>";
echo "Área del círculo: $area<br>";
echo "Circunferencia del círculo: $circunferencia";
}
?>


