
    <form method="post" action="">
        Radio (r): <input type="number" name="radio" step="0.01" required><br>
        Altura (h): <input type="number" name="altura" step="0.01" required><br>
        <input type="submit" name="calcular" value="Calcular">
    </form>

    <?php
if ($_REQUEST) {
    $radio = $_REQUEST['radio'];
    $altura = $_REQUEST['altura'];

    $areaCirculoBase = 2 * M_PI * $radio * $radio;
    $areaLateral = 2 * M_PI * $radio * $altura;
    $areaTotal = $areaCirculoBase + $areaLateral;

    $volumen = M_PI * $radio * $radio * $altura;

    echo "<h3>Resultados:</h3>";
    echo "Área Total del Cilindro: " . $areaTotal . " unidades cuadradas<br>";
    echo "Volumen del Cilindro: " . $volumen . " unidades cúbicas";
}
?>

</body>
</html>
