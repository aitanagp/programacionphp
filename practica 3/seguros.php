<form method="post">
    <label>Edad: </label>
    <input type="text" name="edad"><br><br>

    <label>Estado de salud(sano/enfermo): </label>
    <input type="text" name="estado"><br><br>

    <input type="submit" name="enviar">
</form>

<?php
//Seguros.php → Dada la siguiente tabla de precios de una compañía aseguradora,
//Escribir un programa que pida edad y estado de Salud (S/E) y nos devuelva el importe de la póliza.

if($_REQUEST){
    $edad=$_REQUEST["edad"];
    $estado=$_REQUEST["estado"];

    if($edad<=28){
        if($estado=="sano"){
            echo "La poliza de joven sano es 100€";
        }else{
            echo "La poliza de joven enfermo es 120€";
        }
    }else if($edad>28 && $edad<=50){
        if($estado=="sano"){
            echo "La poliza de edad media sano es 120€";
        }else{
            echo "La poliza de edad media enfermo es 140€";
        }
    }else if($edad>50){
        if($estado=="sano"){
            echo "La poliza de edad avanzada sano es 140€";
        }else{
            echo "No hay poliza para gente de edad avanzada enfermo";
        }
    }

}