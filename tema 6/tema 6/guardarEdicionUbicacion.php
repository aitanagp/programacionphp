<?php
require_once "funciones.php";
$ruta = obtenerdirseg();
require_once $ruta . "conectaDB.php";

$dbName = "incidencias";
$dbcon = conectaDB($dbName);

if (isset($dbcon)) {
    $dbTabla = "ubicaciones";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = $_POST["id"];
        $nombre = $_POST["nombre"];
        $nota = $_POST["nota"];

        $consulta = "UPDATE $dbTabla SET
                        ubi_nombre = :nombre,
                        ubi_nota = :nota
                     WHERE ubi_id = :id";

        try {
            $result = $dbcon->prepare($consulta);
            $result->bindParam(":id", $id);
            $result->bindParam(":nombre", $nombre);
            $result->bindParam(":nota", $nota);

            if ($result->execute()) {
                echo "<p>Registro modificado correctamente. </p>";
            } else {
                echo "<p>No se pudo ejecutar la actualización correctamente. </p>";
            }
        } catch (PDOException $e) {
            echo "<p>Excepción: Error al modificar el registro. </p>";
            echo "<p>Error: " . $e->getMessage() . "</p>";
        }
    } else {
        echo "<p>Error: Método no permitido. </p>";
    }

    $dbcon = null;
}
?>
