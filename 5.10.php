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
$derecha = true;
$izquierda = false;
$arriba = true;
$abajo = true;

# Posicionar pelota

$pelotaX = rand(0, $tamañoMapa - 1);
$pelotaY = rand(0, $tamañoMapa - 1);
   
if ($pelotaX < 9){

    $derecha = true;
    $izquierda = false;

}else{

    $derecha = false;
    $izquierda = true;
}

if ($pelotaY < 9){

    $abajo = true;
    $arriba = false;

}else{

    $abajo = false;
    $arriba = true;
}

do {

if (($derecha) && ($pelotaX < 9)){

    $pelotaX++;

}

if (($izquierda) && ($pelotaX > 0)){

    $pelotaX--;
} 

if (($abajo) && ($pelotaY < 9)){

    $pelotaY++;
}

if (($arriba) && ($pelotaY > 0)){

    $pelotaY--;
}

if($pelotaX == 9){

    $derecha = false;
    $izquierda = true;
    $contRebotes++;
}

if($pelotaX == 0){

    $derecha = true;
    $izquierda = false;
    $contRebotes++;
}

if($pelotaY == 9){

    $abajo = false;
    $arriba = true;
    $contRebotes++;
}

if($pelotaY == 0){

    $abajo = true;
    $arriba = false;
    $contRebotes++;

}

    #Mostrar el mapa actual
    echo '<div class="map" style="width: ' . $tamañoMapa . 'em;"><pre>';
    # Recuérdese que con la etiqueta <pre> los saltos de línea que haya se reflejan en la pantalla

    for ($y = 0; $y < $tamañoMapa; $y++) {

        for ($x = 0; $x < $tamañoMapa; $x++) {
             
            if ($x == $pelotaX && $y == $pelotaY) {

                echo '<span class="paloma">O</span>'; #Paloma

            }else {
                
                echo '<span class="aire">.</span>'; #Aire
            }

            echo ($x != $tamañoMapa - 1) ? " " : ""; #siempre se añade un carácter de espacio en cada celda, salvo al final.

        }

        echo "\n"; #Salto de línea. como se está dentro de un <pre>, se reflejará en la pantalla.
    }

    echo "</pre>palomax=$pelotaX palomaY=$pelotaY </div>\n";
    
} while ($contRebotes < 6);


?>

        </h1>

    </body>

</html>