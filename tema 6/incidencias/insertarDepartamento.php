<?php
require_once "funciones.php";
$ruta=obtenerdirseg();
require_once $ruta."conectaDB.php";

$dbName="incidencias";
$dbcon=conectaDB($dbName);

if(isset($dbcon)) {
    $dbTabla="departamentos";
    if($_REQUEST){
        $id=$_REQUEST["id"];
        $departamento=$_REQUEST["departamento"];
        $observ=$_REQUEST["observaciones"];
    }
    

    $consulta = "INSERT INTO $dbTabla (dep_id, dep_nombre, dep_nota)
                                            VALUES ('$id', '$departamento', '$observ')";

    echo $consulta, "<br><br>";

    $result=$dbcon->query($consulta);
    if($result) {
        echo "<p>Registro creado correctamente.</p>";
    }else {
        echo "<p>Error al crear el registro.</p>";
    }
}

$dbcon= null;