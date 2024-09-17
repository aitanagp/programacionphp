<?php

require_once "funciones.php";
$ruta=obtenerdirseg();
require_once $ruta."conectaDB.php";

$dbName="incidencias";
$dbcon=conectaDB($dbName);

if(isset($dbcon)) {
    $dbTabla="Incidencias";
    if($_REQUEST){
        $id=$_REQUEST["id"];
        $pro_id=$_REQUEST["pro_id"];
        $email=$_REQUEST["pro_email"];
        $ubi_id=$_REQUEST["ubi_id"];
        $fecha=$_REQUEST["fecha"];
        $prio=$_REQUEST["prio"];
        $inci=$_REQUEST["incidencia"];
        $resol=$_REQUEST["resol"];
        $tin_id=$_REQUEST["tin_id"];
    }
    

    $consulta = "INSERT INTO $dbTabla (inc_id, inc_pro_id, inc_pro_email, inc_ubi_id, inc_fecha, inc_prioridad, inc_incidencia, inc_resolucion, inc_tin_id)
                                            VALUES ('$id', '$pro_id', '$email', '$ubi_id', '$fecha', '$prio', '$inci', '$resol', '$tin_id')";

    echo $consulta, "<br><br>";

    $result=$dbcon->query($consulta);
    if($result) {
        echo "<p>Registro creado correctamente.</p>";
    }else {
        echo "<p>Error al crear el registro.</p>";
    }
}

$dbcon= null;