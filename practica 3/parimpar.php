<form method = "post">
    <label> Numero: </label>
    <input type = "text" name = "numero"><br><br>
</form>

<?php
//Parimpar.php → Dado un número entero positivo determine si es par o impar.

if($_REQUEST){
    $numero = $_REQUEST["numero"];

    if($numero%2==0){
        echo "el número es par";
    }else{
        echo "el número no es par";
    }
}