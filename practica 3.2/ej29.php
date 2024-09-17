<?php
/*Realizar un programa que dibuje la siguiente figura introduciendo el ancho:
Para Ancho=5
*
* *
* * *
* * * *
* * * * *
* * * *
* * *
* *
*
*/

$n=5;

for($i=1;$i<=$n;$i++){
    for($j=0;$j<2*$i-1;$j++){
        echo "*";
    }
    echo "<br>";
}
for ($i=$n-1;$i>=1;$i--) {
    for ($j=1;$j<=2*$i-1;$j++) {
        echo '*';
    }
    echo "<br>";
}