<html>

<head>
    <style>
        td{
            border: 1px solid black;
        }
    </style>
</head>
    <?php


$num2 = 0;
$num3 = 0;
$color = "";

echo "<table>";

for($i = 0; $i < 10; $i++){

    echo "<tr>";

    for($y = 1; $y < 10; $y++){

        switch($y){

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
    

        if ($i == 0 && $y < 10) {

            echo "<th>";
            echo "Tabla del " . ($y + 1);
            echo "</th>";

        }

        if ($i > 0) {

            echo "<td style='background: $color'>";
            echo $y * $num3;
            echo "</td>";
        }

    }

    $num3++;

    echo "</tr>";

}

echo "</table";

?>




</html>