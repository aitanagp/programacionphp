<?php
/*Letranif.php → Realizar un programa que dado un número de NIF calcule su letra correspondiente.
La letra se obtiene calculando el resto de la división del número del DNI por 23. A cada resultado le corresponde una letra:
0=T; 1=R; 2=W; 3=A; 4=G; 5=M; 6=Y; 7=F; 8=P; 9=D; 10=X; 11=B; 12=N; 13=J; 14=Z; 15=S; 16=Q; 17=V; 18=H; 19=L;
20=C; 21=K; 22=E. */

$numerodni = 20522589;

$letras = array('T', 'R', 'W', 'A', 'G', 'M', 'Y', 'F', 'P', 'D', 'X', 'B', 'N', 'J', 'Z', 'S', 'Q', 'V', 'H', 'L', 'C', 'K', 'E');

$letradni= $numerodni % 23;


echo "Número de DNI: $numerodni";
echo "<br>";
echo "Letra DNI correspondiente: $letras[$letradni]";

?>
