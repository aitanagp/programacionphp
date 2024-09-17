<form method="post">
    <label>Año bisiesto</label>
    <input type="text" name="ano"><br><br>

    <input type="submit" name="enviar">
</form>

<?php
/*  Bisiesto.php → Calcular si un año es bisiesto. La regla completa para saber si un año es bisiesto, 
es que sea divisible por 4, excepto que si es divisible por 100 lo sea también por 400. Realizar la comprobación 
mediante una sola operación lógica e imprima en la pantalla un mensaje con el resultado. 
Para saber si un año es bisiesto podemos utiliza una de las siguientes: 
• EsABisiesto = ($ano % 4) == 0 and (($ano % 100) != 0 or ($ano % 400) == 0) 
• EsABisiesto = ($ano%4==0 && $ano%100!=0) || $ano%400==0 */

if($_REQUEST){
    $ano=$_REQUEST["ano"];
    
    if(($ano % 4) == 0 and (($ano % 100) != 0 or ($ano % 400) == 0)){
        echo "el año es bisiesto <br><br>";
    }else{
        echo "el año no es bisiesto <br><br>";
    }
}