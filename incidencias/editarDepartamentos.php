<?php
require_once "funciones.php";
$ruta = obtenerdirseg();
require_once $ruta . "conectaDB.php";

$dbName = "incidencias";
$dbcon = conectaDB($dbName);

if (isset($dbcon)) {
    $dbTabla = "departamentos";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["id"])) {
            $id = $_POST["id"];

            // Obtén los datos existentes de la base de datos
            $consulta = "SELECT * FROM $dbTabla WHERE dep_id = :id";
            $stmt = $dbcon->prepare($consulta);
            $stmt->execute([":id" => $id]);
            $datos_departamento = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($datos_departamento) {
                // Muestra el formulario de edición con los datos existentes
                echo "<form action='guardarEdicionDepartamento.php' method='post'>";
                echo "<label for='id'>Id:</label>";
                echo "<input name='id' type='text' value='" . $datos_departamento["dep_id"] . "' readonly><br/>";

                echo "<label for='nombre'>Departamento:</label>";
                echo "<input name='nombre' type='text' value='" . $datos_departamento["dep_nombre"] . "'><br/>";

                echo "<label for='nota'>Notas:</label>";
                echo "<input name='nota' type='text' value='" . $datos_departamento["dep_nota"] . "'><br/>";

                echo "<input type='submit' value='Guardar'>";
                echo "</form>";
            } else {
                echo "<p>No se encontró el departamento con ID $id.</p>";
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
