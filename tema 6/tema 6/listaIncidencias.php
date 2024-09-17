<?php
require_once "funciones.php";
$ruta = obtenerdirseg();
require_once $ruta . "conectaDB.php";

$dbName = "incidencias";
$dbcon = conectaDB($dbName);

if (isset($dbcon)) {
    $dbTabla = "incidencias";

    $consulta = "SELECT * FROM $dbTabla i
                 INNER JOIN profesores p ON i.inc_pro_id = p.pro_id
                 INNER JOIN ubicaciones u ON i.inc_ubi_id = u.ubi_id
                 INNER JOIN tipoIncidencias t ON i.inc_tin_id = t.tin_id
                 ORDER BY i.inc_fecha DESC";

    try {
        $result = $dbcon->query($consulta);

        if ($result) {
            echo "<form action='editarIncidencias.php' method='post'>";
            echo "<table>";
            echo "<tr><th>Código</th><th>Profesor</th><th>Ubicación</th><th>Fecha</th><th>Prioridad</th><th>Tipo</th><th>Incidencia</th><th>Resolución</th><th>Editar</th></tr>";

            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                echo "<tr>";
                echo "<td>" . $row["inc_id"] . "</td>";
                echo "<td>" . $row["pro_nombre"] . " " . $row["pro_apellidos"] . "</td>";
                echo "<td>" . $row["ubi_nombre"] . "</td>";
                echo "<td>" . $row["inc_fecha"] . "</td>";
                echo "<td>" . $row["inc_prioridad"] . "</td>";
                echo "<td>" . $row["tin_nombre"] . "</td>";
                echo "<td>" . $row["inc_incidencia"] . "</td>";
                echo "<td>" . $row["inc_resolucion"] . "</td>";
                echo "<td><input type='radio' name='id' value='" . $row["inc_id"] . "'></td>";
                echo "</tr>";
            }

            echo "</table>";
            echo "<input type='submit' value='Editar'>";
            echo "</form>";
        } else {
            echo "<p>No se encontraron registros.</p>";
        }
    } catch (PDOException $e) {
        echo "<p>Excepción: Error al recuperar registros.</p>";
        echo "<p>Error: " . $e->getMessage() . "</p>";
    }

    $dbcon = null;
}
?>
