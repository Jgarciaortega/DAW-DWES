<html>
<head>

    <style>

        td{

            border: 1px solid black;
        }

    </style>

</head>

    <?php

$num1 = 0;
$num2 = 0;
$num3 = 0;

echo "<table>";

while ($num1 < 10) {

    echo "<tr>";

    while ($num2 < 11) {

        if ($num1 == 0 && $num2 < 10) {

            echo "<th>";
            echo "Tabla del " . ($num2 + 1);
            echo "</th>";

        }

        if ($num1 > 0) {

            echo "<td>";
            echo $num2 * $num3;
            echo "</td>";
        }

        $num2++;

    }
    $num1++;
    $num2 =1;
    $num3++;

    echo "</tr>";
}

echo "</table";

?>


</html>