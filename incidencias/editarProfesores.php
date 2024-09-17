<?php
require_once "funciones.php";
$ruta = obtenerdirseg();
require_once $ruta . "conectaDB.php";

$dbName = "incidencias";
$dbcon = conectaDB($dbName);

if (isset($dbcon)) {
    $dbTabla = "profesores";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["id"])) {
            $id = $_POST["id"];

            $consulta = "SELECT * FROM $dbTabla WHERE pro_id = :id";
            $stmt = $dbcon->prepare($consulta);
            $stmt->execute([":id" => $id]);
            $datos_profesor = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($datos_profesor) {
                // Muestra el formulario de edición con los datos existentes
                echo "<form action='guardarEdicionProfesores.php' method='post'>";
                echo "<table>";
                echo "<tr>";
                
                echo "<td><label for='id'>Código:</label></td>";
                echo "<td><input name='id' type='text' value='" . $datos_profesor["pro_id"] . "' readonly></td></tr>";
                
                echo "<tr><td><label for='nombre'>Nombre:</label></td>";
                echo "<td><input name='nombre' type='text' value='" . $datos_profesor["pro_nombre"] . "'></td></tr>";
                
                echo "<tr><td><label for='apellidos'>Apellidos:</label></td>";
                echo "<td><input name='apellidos' type='text' value='" . $datos_profesor["pro_apellidos"] . "'></td></tr>";
                
                echo "<tr><td><label for='email'>Email:</label></td>";
                echo "<td><input name='email' type='text' value='" . $datos_profesor["pro_email"] . "'></td></tr>";
                
                echo "<tr><td><label for='dep_id'>ID del Departamento:</label></td>";
                echo "<td><input name='dep_id' type='text' value='" . $datos_profesor["pro_dep_id"] . "'></td></tr>";

                echo "</table>";
                echo "<input type='submit' value='Guardar'>";
                echo "</form>";
            } else {
                echo "<p>No se encontró el profesor con ID $id.</p>";
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
