<html>
    <meta charset="utf-8" />
    <title>Departamentos</title>
    <link rel="stylesheet" href="style.css">
    <body>
        <form action="insertarDepartamento.php" method="post">
            <h1>Departamento</h1>
            <fieldset>
                <h2>Introduzca los datos:</h2>

                <label for="id">Id:</label>
                <input name="id" type="text" readonly><br/>

                <label for="departamento">Nombre departamento:</label>
                <input name="departamento" type="text"><br/>

                <label for="observaciones">Observaciones:</label>
                <input name="observaciones" type="text"><br/>

                <input type="submit" value="Grabar" />

            </fieldset>
</form>
</body>

</html>