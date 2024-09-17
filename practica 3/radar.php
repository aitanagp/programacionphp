<form method="post">
    <label>Velocidad máxima permitida: </label> 
    <input type="text" name="permitida"><br><br>

    <label>Velocidad del conductor: </label>
    <input type="text" name="conductor"><br><br>

    <input type="submit" name="enviar">
</form>

<?php
//Radar.php → En la nueva normativa de tráfico una velocidad superior al 50% a la permitida, siempre que el exceso sea
//mayor a 30 km /h, supone la retirada del carnet de conducir. Escribir un programa que dada la velocidad máxima permitida y
//la velocidad de circulación muestre si se debe retirar el carnet.

if($_REQUEST){
    $permitida=$_REQUEST["permitida"];
    $conductor=$_REQUEST["conductor"];

    if(($conductor-30) == ($permitida+1)){
        echo "Supera la velocidad máxima de circulación!!!!!";
    }else{
        echo "no supera la velocidad máxima de circulación :)";
    }
}