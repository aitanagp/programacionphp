<html>
    <meta charset="utf-8" />
    <title>Profesores</title>
    <link rel="stylesheet" href="style.css">
    <body>
        <form action="insertaProfesores.php" method="post">
            <h1>Ubicaciones</h1>
            <fieldset>
                <h2>Introduzca los datos:</h2>

                <label for="id">Id:</label>
                <input name="id" type="text" readonly><br/>

                <label for="nombre">Nombre:</label>
                <input name="nombre" type="text"><br/>

                <label for="apellidos">Apellidos:</label>
                <input name="apellidos" type="text"><br/>

                <label for="email">email:</label>
                <input name="email" type="text"><br/>

                <label for="dep_id">Departamento ID:</label>
                <input name="dep_id" type="text"><br/>

                <input type="submit" value="Grabar" />

            </fieldset>
</form>
</body>

</html>