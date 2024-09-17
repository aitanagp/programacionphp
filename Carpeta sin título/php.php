<?php 
echo "hola mundo <br>";
print "adan mas feo que un pie ";
#variable numerica
$numero = 5;
echo "esto es una variable numerica con: $numero <br>";

#variable string
$palabra = "palabra";
echo "esto es una variable numerica con : $palabra <br>";

#variable array
$colores = array("rojo", "verde", "azul");
echo "esto es una variable array: $colores[0]<br>";

#array con propiedades
$verduras = array("verduras1" => "lechuga", "verdura2" => "cebollita");
echo "esto es una variable array: $verduras[verdura2]<br>";

?>



<?php
// Forma 1:  la variable
$nombre = "Jesus"; 
$mensaje = "¡Bienvenido, " . $nombre . "!<br>";
echo $mensaje; 
?>

<?php
// Forma 2:  variable dentro de la cadena
$nombre = "Jesus"; 
$mensaje = "¡Bienvenido, $nombre!<br>"; 
echo $mensaje; 
?>




<?php
// Crear dos variables
$numero1 = 10;
$numero2 = 5;

// Sumar las dos variables
$suma = $numero1 + $numero2;


echo "El resultado de la suma es: <br>" . $suma;
?>





<?php
$base = 17;
$altura = 35;

$area = ($base * $altura) / 2;

echo "El área del triángulo de base $base y altura $altura es $area.<br>";
?>




