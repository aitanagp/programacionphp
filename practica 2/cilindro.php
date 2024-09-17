<form mothod="post">
    <label>Altura del cilindro </label>
    <input type="text" name="altura"><br><br>
    
    <label>Radio del cilindro: </label>
    <input type = "text" name= "radio"><br><br>
    <input type="submit" value="sumar"><br><br>
</form>
<?php 

if($_REQUEST){
    $n1 = $_REQUEST["altura"];
    $n2 = $_REQUEST["radio"];

    $area = 2 * M_PI * pow($n2, 2) + 2 * M_PI * $n2 * $n1;
    $volumen = M_PI * pow($n2, 2) * $n1;

    echo "esta es el area $area y el volumen $volumen";
}

?>