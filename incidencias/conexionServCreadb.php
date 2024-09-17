<?php
define("MYSQL_HOST", "mysql:host=localhost"); // Nombre de host MYSQL
define("MYSQL_USER", "root"); // Nombre de usuario de MySQL
define("MYSQL_PASSWORD", ""); // Contraseña de usuario de MySQL

function conectaSerDB() {
    try {
        $tmp = new PDO(MYSQL_HOST, MYSQL_USER, MYSQL_PASSWORD);
        $tmp->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true);
        $tmp->exec("set names utf8mb4");
        return $tmp;
    } catch (PDOException $e) {
        echo "<p>Error: No puede conectarse con la base de datos.</p>";
        echo "<p>Error: " . $e->getMessage() . "</p>";
        exit();
    }
}

$dbcon = conectaSerDB();

if (isset($dbcon)) {

    $dbname = "incidencias";//nombre de la bd

    $consultaCreaDB = "CREATE DATABASE $dbname
        CHARACTER SET utf8mb4
        COLLATE utf8mb4_unicode_ci";


    try {
        $dbcon->query($consultaCreaDB);
        print "<p>Base de datos '$dbname' creada correctamente.</p>\n";
    } catch (PDOException $e) {
        print "<p>Error al crear la base de datos '$dbname'.</p>\n";
        echo "Código de error: ", $dbcon->errorCode(), "<br>";
        echo "Mensaje de error: ", $e->getMessage();
    }
} 
?>
