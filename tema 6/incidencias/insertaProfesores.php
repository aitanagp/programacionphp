<?php

require_once "funciones.php";
$ruta=obtenerdirseg();
require_once $ruta."conectaDB.php";

$dbName="incidencias";
$dbcon=conectaDB($dbName);

if(isset($dbcon)) {
    $dbTabla="profesores";
    if($_REQUEST){
        $id=$_REQUEST["id"];
        $nombre=$_REQUEST["nombre"];
        $apellidos=$_REQUEST["apellidos"];
        $email=$_REQUEST["email"];
        $dep_id=$_REQUEST["dep_id"];
    }
    

    $consulta = "INSERT INTO $dbTabla (pro_id, pro_nombre, pro_apellidos, pro_email, pro_dep_id)
                                            VALUES ('$id', '$nombre', '$apellidos', '$email', '$dep_id')";

    echo $consulta, "<br><br>";

    $result=$dbcon->query($consulta);
    if($result) {
        echo "<p>Registro creado correctamente.</p>";
    }else {
        echo "<p>Error al crear el registro.</p>";
    }
}

$dbcon= null;