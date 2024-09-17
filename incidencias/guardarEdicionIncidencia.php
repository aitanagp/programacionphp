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
        $fecha = $_POST["fecha"];
        $prioridad = $_POST["prioridad"];
        $incidencia = $_POST["incidencia"];
        $resolucion = $_POST["resolucion"];

        $consulta = "UPDATE $dbTabla SET
                        inc_fecha = :fecha,
                        inc_prioridad = :prioridad,
                        inc_incidencia = :incidencia,
                        inc_resolucion = :resolucion
                     WHERE inc_id = :id";

        try {
            $result = $dbcon->prepare($consulta);
            $result->execute([
                ":id" => $id,
                ":fecha" => $fecha,
                ":prioridad" => $prioridad,
                ":incidencia" => $incidencia,
                ":resolucion" => $resolucion
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

