<html>
    <head>
        <title>
            Simulador de paloma mensajera
        </title>
        <link rel="stylesheet" type="text/css" href="common.css" />
        <style type="text/css">
            div.map {
                float:left;
                text-align: center;
                border: 1px solid #666;
                background-color: #fcfcfc;
                margin: 5px;
                padding: 1em;
            }
            span.casa, span.paloma {
                font-weight: bold;
                color: red;
            }
            span.aire {
                color: blue;
            }

        </style>
    </head>
    <body>

        <h1>
            <?php

$tamañoMapa = 10;
$contRebotes = 0;

$derecha1 = true;
$izquierda1 = false;
$arriba1 = true;
$abajo1 = true;

$derecha2 = true;
$izquierda2 = false;
$arriba2 = true;
$abajo2 = true;

$derecha3 = true;
$izquierda3 = false;
$arriba3 = true;
$abajo3 = true;

$barraDer = true;
$barraIzq = false;

# Pelota 1

$pelota1X = rand(0, $tamañoMapa - 1);
$pelota1Y = rand(0, $tamañoMapa - 1);

# Pelota 2

$pelota2X = rand(0, $tamañoMapa - 1);
$pelota2Y = rand(0, $tamañoMapa - 1);

# Pelota 3

$pelota3X = rand(0, $tamañoMapa - 1);
$pelota3Y = rand(0, $tamañoMapa - 1);

# Posicion barra

$barra1X = 0;
$barra1Y = 6;

$barra2X = 1;
$barra2Y = 6;

$barra3X = 2;
$barra3Y = 6;

$barra4X = 3;
$barra4Y = 6;

# Movimiento pelota 1

if ($pelota1X < 9) {

    $derecha1 = true;
    $izquierda1 = false;

} else {

    $derecha1 = false;
    $izquierda1 = true;
}

if ($pelota1Y < 9) {

    $abajo1 = true;
    $arriba1 = false;

} else {

    $abajo1 = false;
    $arriba1 = true;
}

# Movimiento pelota 2

if ($pelota2X < 9) {

    $derecha2 = true;
    $izquierda2 = false;

} else {

    $derecha2 = false;
    $izquierda2 = true;
}

if ($pelota2Y < 9) {

    $abajo2 = true;
    $arriba2 = false;

} else {

    $abajo2 = false;
    $arriba2 = true;
}

# Movimiento pelota 3

if ($pelota3X < 9) {

    $derecha3 = true;
    $izquierda3 = false;

} else {

    $derecha3 = false;
    $izquierda3 = true;
}

if ($pelota3Y < 9) {

    $abajo3 = true;
    $arriba3 = false;

} else {

    $abajo3 = false;
    $arriba3 = true;
}

do {

    #BARRA

    if (($barraDer) && ($barra4X < 9)) {

        $barra1X++;
        $barra2X++;
        $barra3X++;
        $barra4X++;

    }

    if (($barraIzq) && ($barra1X > 0)) {

        $barra1X--;
        $barra2X--;
        $barra3X--;
        $barra4X--;
    }

    if ($barra4X == 9) {

        $barraDer = false;
        $barraIzq = true;

    }

    if ($barra1X == 0) {

        $barraDer = true;
        $barraIzq = false;

    }

//PELOTA 1
    if (($derecha1) && ($pelota1X < 9)) {

        $pelota1X++;

    }

    if (($izquierda1) && ($pelota1X > 0)) {

        $pelota1X--;
    }

    if (($abajo1) && ($pelota1Y < 9)) {

        $pelota1Y++;
    }

    if (($arriba1) && ($pelota1Y > 0)) {

        $pelota1Y--;
    }

    if ($pelota1X == 9) {

        $derecha1 = false;
        $izquierda1 = true;
        $contRebotes++;
    }

    if ($pelota1X == 0) {

        $derecha1 = true;
        $izquierda1 = false;
        $contRebotes++;
    }

    if ($pelota1Y == 9) {

        $abajo1 = false;
        $arriba1 = true;
        $contRebotes++;
    }

    if ($pelota1Y == 0) {

        $abajo1 = true;
        $arriba1 = false;
        $contRebotes++;

    }

    if ($pelota1Y == 6) {

        if (($pelota1X == $barra1X) || ($pelota1X == $barra2X) || ($pelota1X == $barra3X) || ($pelota1X == $barra4X)) {

            if($abajo1){

                $abajo1 = false;
                $arriba1 = true;

            }else{

                $abajo1 = true;
                $arriba1 = false;

            }
        }
    }

# PELOTA 2
    if (($derecha2) && ($pelota2X < 9)) {

        $pelota2X++;

    }

    if (($izquierda2) && ($pelota2X > 0)) {

        $pelota2X--;
    }

    if (($abajo2) && ($pelota2Y < 9)) {

        $pelota2Y++;
    }

    if (($arriba2) && ($pelota2Y > 0)) {

        $pelota2Y--;
    }

    if ($pelota2X == 9) {

        $derecha2 = false;
        $izquierda2 = true;
        $contRebotes++;
    }

    if ($pelota2X == 0) {

        $derecha2 = true;
        $izquierda2 = false;
        $contRebotes++;
    }

    if ($pelota2Y == 9) {

        $abajo2 = false;
        $arriba2 = true;
        $contRebotes++;
    }

    if ($pelota2Y == 0) {

        $abajo2 = true;
        $arriba2 = false;
        $contRebotes++;

    }

    if ($pelota2Y == 6) {

        if (($pelota2X == $barra1X) || ($pelota2X == $barra2X) || ($pelota2X == $barra3X) || ($pelota2X == $barra4X)) {

            if($abajo2){

                $abajo2 = false;
                $arriba2 = true;

            }else{

                $abajo2 = true;
                $arriba2 = false;

            }

        }
    }

# PELOTA 3
    if (($derecha3) && ($pelota3X < 9)) {

        $pelota3X++;

    }

    if (($izquierda3) && ($pelota3X > 0)) {

        $pelota3X--;
    }

    if (($abajo3) && ($pelota3Y < 9)) {

        $pelota3Y++;
    }

    if (($arriba3) && ($pelota3Y > 0)) {

        $pelota3Y--;
    }

    if ($pelota3X == 9) {

        $derecha3 = false;
        $izquierda3 = true;
        $contRebotes++;
    }

    if ($pelota3X == 0) {

        $derecha3 = true;
        $izquierda3 = false;
        $contRebotes++;
    }

    if ($pelota3Y == 9) {

        $abajo3 = false;
        $arriba3 = true;
        $contRebotes++;
    }

    if ($pelota3Y == 0) {

        $abajo3 = true;
        $arriba3 = false;
        $contRebotes++;

    }

    if ($pelota3Y == 6) {

        if (($pelota3X == $barra1X) || ($pelota3X == $barra2X) || ($pelota3X == $barra3X) || ($pelota3X == $barra4X)) {

            if($abajo3){

                $abajo3 = false;
                $arriba3 = true;

            }else{

                $abajo3 = true;
                $arriba3 = false;

            }

        }
    }

    #Mostrar el mapa actual
    echo '<div class="map" style="width: ' . $tamañoMapa . 'em;"><pre>';
    # Recuérdese que con la etiqueta <pre> los saltos de línea que haya se reflejan en la pantalla

    for ($y = 0; $y < $tamañoMapa; $y++) {

        for ($x = 0; $x < $tamañoMapa; $x++) {

            if ($x == $pelota1X && $y == $pelota1Y) {

                echo '<span class="paloma">1</span>';

            } elseif ($x == $pelota2X && $y == $pelota2Y) {

                echo '<span class="paloma">2</span>';

            } elseif ($x == $pelota3X && $y == $pelota3Y) {

                echo '<span class="paloma">3</span>';

            } elseif ($x == $barra1X && $y == $barra1Y) {

                echo '<span class="paloma">_</span>';

            } elseif ($x == $barra2X && $y == $barra2Y) {

                echo '<span class="paloma">_</span>';

            } elseif ($x == $barra3X && $y == $barra3Y) {

                echo '<span class="paloma">_</span>';

            } elseif ($x == $barra4X && $y == $barra4Y) {

                echo '<span class="paloma">_</span>';

            } else {

                echo '<span class="aire">.</span>';

            }

            echo ($x != $tamañoMapa - 1) ? " " : ""; #siempre se añade un carácter de espacio en cada celda, salvo al final.

        }

        echo "\n"; #Salto de línea. como se está dentro de un <pre>, se reflejará en la pantalla.
    }

    echo "</pre></div>\n";

} while ($contRebotes < 22);

?>

        </h1>

    </body>

</html>