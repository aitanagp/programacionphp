<?php
require_once "funciones.php";
$ruta = obtenerdirseg();
require_once $ruta . "conectaDB.php";

$dbName = "incidencias";
$dbcon = conectaDB($dbName);

if (isset($dbcon)) {
    $dbTabla = "incidencias";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = $_POST["id"];

        $consulta = "DELETE FROM $dbTabla WHERE inc_id = :id";

        try {
            $result = $dbcon->prepare($consulta);
            if ($result->execute([
                ":id" => $id,
            ])) {
                echo "<p>Registro eliminado correctamente.</p>";
            } else {
                echo "<p>Error al eliminar el registro.</p>";
            }
        } catch (PDOException $e) {
            echo "<p>Excepción: Error al ejecutar la consulta.</p>";
            echo "<p>Error: " . $e->getMessage() . "</p>";
        }
    } else {
        echo "<p>Error: Método no permitido.</p>";
    }

    $dbcon = null;
}
?>