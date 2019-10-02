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
$color = "";

echo "<table>";

do {

    echo "<tr>";

    do {

        switch($num2){

            case 0:  $color = "gray"; break;
            case 1:  $color = "blue"; break;
            case 2:  $color = "yellow"; break;
            case 3:  $color = "red"; break;
            case 4:  $color = "green"; break;
            case 5:  $color = "brown"; break;
            case 6:  $color = "pink"; break;
            case 7:  $color = "lightgray"; break;
            case 8:  $color = "lightblue"; break;
            case 9:  $color = "purple"; break;
            case 10: $color = "orange"; break;
    
        }
    

        if ($num1 == 0 && $num2 < 10) {

            echo "<th>";
            echo "Tabla del " . ($num2 + 1);
            echo "</th>";

        }

        if ($num1 > 0) {

            echo "<td style='background: $color'>";
            echo $num2 * $num3;
            echo "</td>";
        }

        $num2++;

    }while ($num2 < 11);


    $num1++;
    $num2 =1;
    $num3++;

    echo "</tr>";

}while ($num1 < 10);

echo "</table";

?>


</html>