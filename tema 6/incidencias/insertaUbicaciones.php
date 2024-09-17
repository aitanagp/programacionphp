<?php

require_once "funciones.php";
$ruta=obtenerdirseg();
require_once $ruta."conectaDB.php";

$dbName="incidencias";
$dbcon=conectaDB($dbName);

if(isset($dbcon)) {
    $dbTabla="ubicaciones";
    if($_REQUEST){
        $id=$_REQUEST["id"];
        $nombre=$_REQUEST["nombre"];
        $nota=$_REQUEST["nota"];
    }
    

    $consulta = "INSERT INTO $dbTabla (ubi_id, ubi_nombre, ubi_nota)
                                            VALUES ('$id', '$nombre', '$nota')";

    echo $consulta, "<br><br>";

    $result=$dbcon->query($consulta);
    if($result) {
        echo "<p>Registro creado correctamente.</p>";
    }else {
        echo "<p>Error al crear el registro.</p>";
    }
}

$dbcon= null;