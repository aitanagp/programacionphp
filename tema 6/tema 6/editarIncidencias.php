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
            $consulta = "SELECT * FROM $dbTabla WHERE inc_id = :id";
            $stmt = $dbcon->prepare($consulta);
            $stmt->execute([":id" => $id]);
            $datos_incidencia = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($datos_incidencia) {
                echo "<form action='guardarEdicionIncidencia.php' method='post'>";
                echo "<label for='id'>Código:</label>";
                echo "<input name='id' type='text' value='" . $datos_incidencia["inc_id"] . "' readonly><br/>";

                echo "<label for='descripcion'>Descripción:</label>";
                echo "<input name='descripcion' type='text' value='" . $datos_incidencia["inc_incidencia"] . "'><br/>";

                echo "<label for='resolucion'>Resolución:</label>";
                echo "<input name='resolucion' type='text' value='" . $datos_incidencia["inc_resolucion"] . "'><br/>";

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
