<?php
require_once "funciones.php";
$ruta=obtenerdirseg();
require_once $ruta."conectaDB.php";

$dbName="incidencias";
$dbcon= conectaDB ($dbName);

if (isset ($dbcon)) { 
    $dbTabla = "profesores";

    $consulta = "SELECT * FROM $dbTabla ORDER BY pro_apellidos, pro_nombre";
    echo $consulta, "<br><br>";

    try {
        $result = $dbcon->query($consulta);

        if ($result) {
            echo "<table>";
            echo "<tr><th>Código</th><th>Nombre</th><th>Apellidos</th><th>Email</th><th>Departamento</th></tr>";

            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                echo "<tr>";
                echo "<td>" . $row["pro_id"] . "</td>";
                echo "<td>" . $row["pro_nombre"] . "</td>";
                echo "<td>" . $row["pro_apellidos"] . "</td>";
                echo "<td>" . $row["pro_email"] . "</td>";
                echo "<td>" . $row["pro_dep_id"] . "</td>";
                echo "</tr>";
            }

            echo "</table>";
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