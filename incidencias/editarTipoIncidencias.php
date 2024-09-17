<?php
require_once "funciones.php";
$ruta = obtenerdirseg();
require_once $ruta . "conectaDB.php";

$dbName = "incidencias";
$dbcon = conectaDB($dbName);

if (isset($dbcon)) {
    $dbTabla = "tipoIncidencias";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["id"])) {
            $id = $_POST["id"];

            // Obtén los datos existentes de la base de datos
            $consulta = "SELECT * FROM $dbTabla WHERE tin_id = :id";
            $stmt = $dbcon->prepare($consulta);
            $stmt->execute([":id" => $id]);
            $datos_tipo_incidencia = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($datos_tipo_incidencia) {
                // Muestra el formulario de edición con los datos existentes
                echo "<form action='guardarEdicionTipoIncidencias.php' method='post'>";
                echo "<table>";
                echo "<tr>";

                echo "<td><label for='id'>Código:</label></td>";
                echo "<td><input name='id' type='text' value='" . $datos_tipo_incidencia["tin_id"] . "' readonly></td></tr>";

                echo "<tr><td><label for='nombre'>Tipo de incidencia:</label></td>";
                echo "<td><input name='nombre' type='text' value='" . $datos_tipo_incidencia["tin_nombre"] . "'></td></tr>";

                echo "<tr><td><label for='nota'>Notas:</label></td>";
                echo "<td><textarea name='nota'>" . $datos_tipo_incidencia["tin_nota"] . "</textarea></td></tr>";

                echo "</table>";
                echo "<input type='submit' value='Guardar'>";
                echo "</form>";
            } else {
                echo "<p>No se encontró el tipo de incidencia con ID $id.</p>";
            }
        } else {
            echo "<p>Error: No se recibió el ID para editar.</p>";
        }
    } else {
        echo "<p>Error: Método no permitido.</p>";
    }

    $dbcon = null;
}
?>
