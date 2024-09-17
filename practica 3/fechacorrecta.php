<form method="post">
    <label>introduce un día: </label>
    <input type="text" name="dia">

    <label>introduce un mes: </label>
    <input type="text" name="mes">

    <label>introduce un año: </label>
    <input type="text" name="ano">

    <input type="submit" name="enter">
</form>

<?php
//Fechacorrecta.php → Dado tres número decir si forman una fecha exacta (no tenemos en cuenta los años bisiestos). 
//Al no tener en cuenta si el año es bisiesto o no, solo tendremos en cuenta el día y el mes para comprobar si la fecha es correcta.

if($_REQUEST){
    $dia=$_REQUEST["dia"];
    $mes=$_REQUEST["mes"];

    if($mes>=1 && $mes<=12){
        if($dia>=1 & $dia<=31){
            if($mes==2 || $mes==4 || $mes==6 || $mes==9 || $mes==11)
        }
    }
}
