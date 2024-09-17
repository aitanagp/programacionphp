
<form method= "post">
    <label>area : </label>
    <input type="type" name = "base"><br><br>

    <label> base : </label>
    <input type="type" name = "altura"><br><br>


    <input type= "submit" value = "Area de un triangulo"><br><br>
</Form>
<?php

if($_REQUEST){

    $base = $_REQUEST["base"];
    $altura = $_REQUEST["altura"];
        $area = ($base * $altura) / 2;
        echo "El area del triangulo es: $area ";

}
