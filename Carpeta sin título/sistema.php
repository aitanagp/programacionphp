<form mothod="post">
    <label>Numero 1: </label>
    <input type="text" name="numero1"><br><br>
    
    <label>Numero 2: </label>
    <input type = "text" name= "numero2"><br><br>

    <label>Numero 3: </label>
    <input type = "text" name= "numero3"><br><br>

    <label>Numero 4: </label>
    <input type = "text" name= "numero4"><br><br>

    <label>Numero 5: </label>
    <input type = "text" name= "numero5"><br><br>

    <label>Numero 6: </label>
    <input type = "text" name= "numero6"><br><br>
    <input type="submit" value="resolver x, y"><br><br>
</form>
<?php

if($_REQUEST){
    $n1 = $_REQUEST["numero1"];
    $n2 = $_REQUEST["numero2"];
    $n3 = $_REQUEST["numero3"];
    $n4 = $_REQUEST["numero4"];
    $n5 = $_REQUEST["numero5"];
    $n6 = $_REQUEST["numero6"];

    $x = (($n3 * $n5) - ($n2 * $n6)) / (($n1 * $n5) - ($n2 * $n4));
    $y = (($n1 * $n6) - ($n3 * $n4)) / (($n1 * $n5) - ($n2 * $n4));
    echo "el resultado es $x y $y";
}

?>