<?php
require_once "funciones.php";
$ruta = obtenerdirseg();
require_once $ruta . "conectaDB.php";

$dbName = "incidencias";
$dbcon = conectaDB($dbName);

if (isset($dbcon)) {
    $dbTabla = "profesores";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = $_POST["id"];
        $nombre = $_POST["nombre"];
        $apellidos = $_POST["apellidos"];
        $email = $_POST["email"];
        $dep_id = $_POST["dep_id"];

        $consulta = "UPDATE $dbTabla SET
                        pro_nombre = :nombre,
                        pro_apellidos = :apellidos,
                        pro_email = :email,
                        pro_dep_id = :dep_id
                     WHERE pro_id = :id";

        try {
            $result = $dbcon->prepare($consulta);
            $result->execute([
                ":id" => $id,
                ":nombre" => $nombre,
                ":apellidos" => $apellidos,
                ":email" => $email,
                ":dep_id" => $dep_id
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
