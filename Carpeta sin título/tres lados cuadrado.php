
    <p>Cada vez que actualices esta página, se calcularán tres cuadrados y se determinará cuál es el mayor:</p>
    
    <?php
    $lado1 = rand(1, 10);
    $lado2 = rand(1, 10);
    $lado3 = rand(1, 10);
    
    $area1 = $lado1 * $lado1;
    $area2 = $lado2 * $lado2;
    $area3 = $lado3 * $lado3;
    
    echo "<p>Lado Cuadrado 1: $lado1, Área: $area1</p>";
    echo "<p>Lado Cuadrado 2: $lado2, Área: $area2</p>";
    echo "<p>Lado Cuadrado 3: $lado3, Área: $area3</p>";
    
    $ladoMayor = max($lado1, $lado2, $lado3);
    
    echo "<p>El cuadrado con el lado más grande es el cuadrado $ladoMayor.</p>";
    ?>

