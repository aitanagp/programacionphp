<form method="post">
    <label>Di un número del 1 al 7: </label>
    <input type="text" name="numero">

    <input type="submit" name="enviar">

</from>

<?php
//Diasemana.php → Dado un número del 1 al 7 indique a que día de la semana corresponde

if($_REQUEST){
    $dia=$_REQUEST["numero"];
    
    switch ($dia) {
        case 1:
            echo "Lunes";
            break;
        case 2:
            echo "Martes";
            break;
        case 3:
            echo "Miercoles";
            break;
        case 4:
            echo "Jueves";
            break;
        case 5:
            echo "Viernes";
            break;
        case 6:
            echo "Sábado";
            break;
        case 7:
            echo "Domingo";
            break;
        default:
            echo "ese dia no existe";
            break;
    }
}