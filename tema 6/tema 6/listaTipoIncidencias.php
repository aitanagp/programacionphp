<?php
require_once "funciones.php";
$ruta=obtenerdirseg();
require_once $ruta."conectaDB.php";

$dbName="incidencias";
$dbcon= conectaDB ($dbName);

if (isset ($dbcon)) { 
    $dbTabla = "tipoIncidencias";

    $consulta = "SELECT * FROM $dbTabla ORDER BY tin_nombre";
    echo $consulta, "<br><br>";

    try {
        $result = $dbcon->query($consulta);

        if ($result) {
            echo "<table>";
            echo "<tr><th>Código</th><th>Tipo de incidencia</th><th>Notas</th></tr>";

            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                echo "<tr>";
                echo "<td>" . $row["tin_id"] . "</td>";
                echo "<td>" . $row["tin_nombre"] . "</td>";
                echo "<td>" . $row["tin_nota"] . "</td>";
                echo "<td><input type=\"radio\" name=\"id\" value=\"row[id]\"><td>";
                echo "</tr>";
            }

            echo "</table>";
            echo "<input type=\"submit\" value=\"modificar\">";
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