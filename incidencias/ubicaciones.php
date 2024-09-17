<html>
    <meta charset="utf-8" />
    <title>Ubicaciones</title>
    <link rel="stylesheet" href="style.css">
    <body>
        <form action="insertaUbicaciones.php" method="post">
            <h1>Ubicaciones</h1>
            <fieldset>
                <h2>Introduzca los datos:</h2>

                <label for="id">Id:</label>
                <input name="id" type="text" readonly><br/>

                <label for="nombre">Ubicaciones:</label>
                <input name="nombre" type="text"><br/>

                <label for="nota">Notas:</label>
                <input name="nota" type="text"><br/>

                <input type="submit" value="Grabar" />

            </fieldset>
</form>
</body>

</html>