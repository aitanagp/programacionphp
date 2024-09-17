<?php
require_once "funciones.php";
$ruta=obtenerdirseg();
require_once $ruta."conectaDB.php";

$dbName="incidencias";
$dbcon= conectaDB ($dbName);


if (isset ($dbcon)) { 
    $dbTabla = "ubicaciones";

    $consulta = "SELECT * FROM $dbTabla ORDER BY ubi_nombre";
    echo $consulta, "<br><br>";

    try {
        $result = $dbcon->query($consulta);

        if ($result) {
            echo "<form action='editarUbicaciones.php' method='post'>";
            echo "<table>";
            echo "<tr><th>Código</th><th>Ubicación</th><th>Notas</th></tr>";

            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                echo "<tr>";
                echo "<td>" . $row["ubi_id"] . "</td>";
                echo "<td>" . $row["ubi_nombre"] . "</td>";
                echo "<td>" . $row["ubi_nota"] . "</td>";
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