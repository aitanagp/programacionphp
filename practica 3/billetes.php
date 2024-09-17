<form method="post">
    <label>Introduce una cantidad de dinero: </label>
    <input type="text" name="dinero"><br><br>

    <input type="submit" name="enviar">
</form>

<?php
// Billetes.php → Escribe un programa que determine el menor número de billetes y monedas de curso legal (euros) 
//equivalente a cierta cantidad de dinero (1, 2, 5, 10, 20, 50, 100, 200, 500 euros)

if($_REQUEST){
    $dinero=$_REQUEST["dinero"];

    if($dinero/500){
        $resto=$dinero%500;
        $de500=floor($dinero/500);
        echo "billetes de 500 usados: $de500<br>";
        $dinero=$resto;
    }
    if($dinero/200){
        $resto=$dinero%200;
        $de200=floor($dinero/200);
        echo "billetes de 200 usados: $de200<br>";
        $dinero=$resto;
    }
    if($dinero/100){
        $resto=$dinero%100;
        $de100=floor($dinero/100);
        echo "billetes de 100 usados: $de100<br>";
        $dinero=$resto;
    }else if($dinero/50){
        $resto=$dinero%50;
        $de50=floor($dinero/50);
        echo "billetes de 50 usados: $de50<br>";
        $dinero=$resto;
    }
    if($dinero/20){
        $resto=$dinero%20;
        $de20=floor($dinero/20);
        echo "billetes de 20 usados: $de20<br>";
        $dinero=$resto;
    }
    if($dinero/10){
        $resto=$dinero%10;
        $de10=floor($dinero/10);
        echo "billetes de 10 usados: $de10<br>";
        $dinero=$resto;
    }
    if($dinero/5){
        $resto=$dinero%200;
        $de5=floor($dinero/5);
        echo "billetes de 5 usados: $de5<br>";
        $dinero=$resto;
    }
    if($dinero/2){
        $resto=$dinero%2;
        $de2=floor($dinero/2);
        echo "billetes de 2 usados: $de2<br>";
        $dinero=$resto;
    }
    if($dinero/1){
        $resto=$dinero%1;
        $de1=floor($dinero/1);
        echo "billetes de 1 usados: $de1<br>";
        $dinero=$resto;
    }
}