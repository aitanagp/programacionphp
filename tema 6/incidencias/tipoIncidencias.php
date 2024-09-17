<html>
    <meta charset="utf-8" />
    <title>Tipo de Incidencias</title>
    <link rel="stylesheet" href="style.css">
    <body>
        <form action="insertarTiposIncidencias.php" method="post">
            <h1>Tipo de Incidencias</h1>
            <fieldset>
                <h2>Introduzca los datos:</h2>

                <label for="id">Id:</label>
                <input name="id" type="text" readonly><br/>

                <label for="nombre">Tipo de incidencia:</label>
                <input name="nombre" type="text"><br/>

                <label for="nota">Observaciones:</label>
                <input name="nota" type="text"><br/>

                <input type="submit" value="Grabar" />

            </fieldset>
</form>
</body>

</html>