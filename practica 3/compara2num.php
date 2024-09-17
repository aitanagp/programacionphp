<form method = "post">
    <label> Numero 1: </label>
    <input type="text" name="numero1"><br><br>

    <label> Numero 2: </label>
    <input type="text" name="numero2"><br><br>

    <input type = "submit" value = "comparar">
</form>
    

<?php
//Compara2num.php → Dados dos números ($a y $b) mostrar un mensaje diciendo si a es mayor, menor o igual a b

if($_REQUEST){
    $a=$_REQUEST["numero1"];
    $b=$_REQUEST["numero2"];

    if($a>$b){
        echo "$a es mayor que $b";
    }else if($a<$b){
        echo "$b es mayor que $a";
    }else{
        echo "$a y $b son iguales";
    }
}