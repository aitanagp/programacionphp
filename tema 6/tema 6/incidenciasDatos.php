<html>
    <meta charset="utf-8" />
    <title>Incidencias</title>
    <link rel="stylesheet" href="style.css">
    <body>
        <form action="insertaIncidencia.php" method="post">
            <h1>Incidencias</h1>
            <fieldset>
                <h2>Introduzca los datos:</h2>

                <label for="id">Id incidencia:</label>
                <input name="id" type="text" ></br>

                <label for="pro_id">Id profesor incidencia:</label>
                <input name="pro_id" type="text" ></br>

                <label for="pro_email">Email profesor:</label>
                <input name="pro_email" type="text"></br>

                <label for="ubi_id">Ubicación incidencia:</label>
                <input name="ubi_id" type="text"></br>

                <label for="fecha">fecha incidencia:</label>
                <input name="fecha" type="text" ></br>

                <label for="prio">prioridad incidencia:</label>
                <input name="prio" type="text" ></br>

                <label for="incidencia">incidencia:</label>
                <input name="incidencia" type="text" ></br>

                <label for="resol">resolución incidencia:</label>
                <input name="resol" type="text" ></br>

                <label for="tin_id">Tipo incidencia:</label>
                <input name="tin_id" type="text" ></br>

                <input type="submit" value="Grabar" />

            </fieldset>
</form>
</body>

</html>