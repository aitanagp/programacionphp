<?php
require_once "funciones.php";
$ruta = obtenerdirseg();
require_once $ruta . "conectaDB.php";

$dbName = "incidencias";
$dbcon = conectaDB($dbName);

if (isset($dbcon)) {
    $dbTabla = "departamentos";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = $_POST["id"];
        $nombre = $_POST["nombre"];
        $nota = $_POST["nota"];

        $consulta = "UPDATE $dbTabla SET
                        dep_nombre = :nombre,
                        dep_nota = :nota
                     WHERE dep_id = :id";

        try {
            $result = $dbcon->prepare($consulta);
            $result->execute([
                ":id" => $id,
                ":nombre" => $nombre,
                ":nota" => $nota
            ]);

            echo "<p>Registro modificado correctamente. </p>";
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
