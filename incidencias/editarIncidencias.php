<?php
require_once "funciones.php";
$ruta = obtenerdirseg();
require_once $ruta . "conectaDB.php";

$dbName = "incidencias";
$dbcon = conectaDB($dbName);

if (isset($dbcon)) {
    $dbTabla = "incidencias";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["id"])) {
            $id = $_POST["id"];

            // Obtén los datos existentes de la base de datos
            $consulta = "SELECT * FROM $dbTabla i
                         INNER JOIN profesores p ON i.inc_pro_id = p.pro_id
                         INNER JOIN ubicaciones u ON i.inc_ubi_id = u.ubi_id
                         INNER JOIN tipoIncidencias t ON i.inc_tin_id = t.tin_id
                         WHERE inc_id = :id";
            $stmt = $dbcon->prepare($consulta);
            $stmt->execute([":id" => $id]);
            $datos_incidencia = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($datos_incidencia) {
                // Muestra el formulario de edición con los datos existentes
                echo "<form action='guardarEdicionIncidencia.php' method='post'>";
                echo "<label for='id'>Código:</label>";
                echo "<input name='id' type='text' value='" . $datos_incidencia["inc_id"] . "' readonly><br/>";

                echo "<label for='fecha'>Fecha:</label>";
                echo "<input name='fecha' type='date' value='" . $datos_incidencia["inc_fecha"] . "'><br/>";

                echo "<label for='prioridad'>Prioridad:</label>";
                echo "<input name='prioridad' type='text' value='" . $datos_incidencia["inc_prioridad"] . "'><br/>";

                echo "<label for='incidencia'>Incidencia:</label>";
                echo "<textarea name='incidencia'>" . $datos_incidencia["inc_incidencia"] . "</textarea><br/>";

                echo "<label for='resolucion'>Resolución:</label>";
                echo "<textarea name='resolucion'>" . $datos_incidencia["inc_resolucion"] . "</textarea><br/>";

                echo "<input type='submit' value='Guardar'>";
                echo "</form>";
            } else {
                echo "<p>No se encontró la incidencia con ID $id.</p>";
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




