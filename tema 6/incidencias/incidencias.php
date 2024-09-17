<?php
require_once "funciones.php";
$ruta=obtenerdirseg();
require_once $ruta."conectaDB.php";

$dbName="incidencias";
$dbcon=conectaDB($dbName);

if(isset($dbcon)) {
    $dbTabla="departamentos";
    $consulta = "CREATE TABLE IF NOT EXISTS $dbTabla (
        dep_id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
        dep_nombre VARCHAR(100),
        dep_nota VARCHAR(100),
        PRIMARY KEY(dep_id)
    )";
    creatabla($dbcon, $dbTabla, $consulta);

    $dbTabla="ubicaciones";
    $consulta="CREATE TABLE IF NOT EXISTS $dbTabla(
        ubi_id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
        ubi_nombre VARCHAR(100),
        ubi_nota VARCHAR(200),
        PRIMARY KEY(ubi_id)
    )";
    creatabla($dbcon, $dbTabla, $consulta);

    $dbTabla="profesores";
    $consulta="CREATE TABLE IF NOT EXISTS $dbTabla (
        pro_id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
        pro_nombre VARCHAR(50),
        pro_apellidos VARCHAR(100),
        pro_email VARCHAR(100) NOT NULL,
        pro_dep_id INTEGER UNSIGNED NOT NULL,
        PRIMARY KEY(pro_id),
        FOREIGN KEY(pro_dep_id) REFERENCES departamentos(dep_id)
        ON UPDATE CASCADE
    )";
    creatabla($dbcon, $dbTabla, $consulta);

    $dbTabla="tipoIncidencias";
    $consulta="CREATE TABLE IF NOT EXISTS $dbTabla (
        tin_id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
        tin_nombre VARCHAR(100),
        tin_nota VARCHAR(100),
        PRIMARY KEY(tin_id)
    )";
    creatabla($dbcon, $dbTabla, $consulta);

    $dbTabla="incidencias";
    $consulta="CREATE TABLE IF NOT EXISTS $dbTabla (
        inc_id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
        inc_pro_id INTEGER UNSIGNED NOT NULL,
        inc_pro_email VARCHAR(100),
        inc_ubi_id INTEGER UNSIGNED NOT NULL,
        inc_fecha DATE,
        inc_prioridad INTEGER,
        inc_incidencia TEXT,
        inc_resolucion TEXT,
        inc_tin_id INTEGER UNSIGNED,
        PRIMARY KEY(inc_id),
        FOREIGN KEY(inc_pro_id) REFERENCES profesores(pro_id)
        ON UPDATE CASCADE,
        FOREIGN KEY(inc_ubi_id) REFERENCES ubicaciones(ubi_id)
        ON UPDATE CASCADE
        )";

        creatabla($dbcon, $dbTabla, $consulta);

}
$dbcon=null;

