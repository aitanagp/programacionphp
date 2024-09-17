<form method="post">
    <label> NOMBRE: </label>
    <input type="text" name="nombre"><br><br>

    <label> Nota 1: </label>
    <input type="text" name="nota1"><br><br>

    <label> Nota 2: </label>
    <input type="text" name="nota2"><br><br>

    <label> Nota 3: </label>
    <input type="text" name="nota3"><br><br>

    <input type="submit" value="MEDIA"><br><br>
</form>
    
<?php
    if($_REQUEST){
        $nombre = $_REQUEST["nombre"];
        $n1 = $_REQUEST["nota1"];
        $n2 = $_REQUEST["nota2"];
        $n3 = $_REQUEST["nota3"];

        $media = ($n1 + $n2 + $n3)/3;

        echo "$nombre tu media es: $media <br><br>";
    }

    define("PI", 3.1416);
    echo "El valor de pi es ", PI;

    print "<pre>";
    print_r (get_defined_constants());
    print "</pre>";
?>