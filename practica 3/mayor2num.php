<form method = "post">
    <label> Numero 1: </label>
    <input type="text" name="numero1"><br><br>

    <label> Numero 2: </label>
    <input type="text" name="numero2"><br><br>

    <input type = "submit" value = "comparar">
</form>
    

<?php
//Mayor2num.php → Dados dos números ($a y $b) mostrar un mensaje diciendo cual de ellos es mayor

if($_REQUEST){
    $a=$_REQUEST["numero1"];
    $b=$_REQUEST["numero2"];

    if($a>$b){
        echo "$a es mayor que $b";
    }
}