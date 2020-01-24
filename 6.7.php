<html>

<head>

<style>

table{

    border: 1px solid black;
}

td{

    border: 1px solid black;
}

</style>
</head>

<?php

$letras = array("a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "ñ", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z");
$cadena = "esto es una cadena de prueba";
$cont = 0;

echo "<table>";


for ($i = 0; $i < count($letras); $i++) {

    for ($j = 0; $j < strlen($cadena); $j++) {

        if ($letras[$i] == $cadena[$j]) {

            $cont++;
        }

    }

    echo "<tr>";

    echo "<td>";

    echo $letras[$i];

    echo "</td>";

    echo "<td>";

    echo $cont;

    echo "</td>";

    echo "</tr>";

   

    $cont = 0;

}

echo "</table>";

?>

</html>