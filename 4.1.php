<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <?php
$horaActual = date("H:i:s ");
echo "Hora actual : " . $horaActual . '<br>';

if ($horaActual > "12:00:00" && $horaActual < "20:00:00") {

    echo "Buenas tardes";
}

if ($horaActual > "20:00:00" && $horaActual < "6:00:00") {
    echo "Buenas noches";
}

if ($horaActual > "6:00:00" && $horaActual < "12:00:00") {
    echo "Buenos dias";
}

?>


</body>
</html>