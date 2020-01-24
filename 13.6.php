public function<html>
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

class Paloma
{

    public $x;
    public $y;

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function restarPalomaX()
    {

        $this->x -= 1;

    }

    public function sumarPalomaX()
    {

        $this->x += 1;
    }

    public function restarPalomaY()
    {

        $this->y -= 1;
    }

    public function sumarPalomaY()
    {

        $this->y += 1;

    }

    public function getX()
    {

        return $this->x;
    }

    public function getY()
    {

        return $this->y;
    }

}

$tamañoMapa = 10;

# Posicionar la paloma

$casaX = rand(0, $tamañoMapa - 1);
$casaY = rand(0, $tamañoMapa - 1);
$x = rand(0, $tamañoMapa - 1);
$y = rand(0, $tamañoMapa - 1);

$paloma = new Paloma($x, $y);

do {

    $palomaX = $paloma->getX();
    $palomaY = $paloma->getY();

    #Acercar la paloma a su casa
    if ($palomaX < $casaX) {
        $paloma->sumarPalomaX();
    } elseif ($palomaX > $casaX) {
        $paloma->restarPalomaX();
    }

    if ($palomaY < $casaY) {
        $paloma->sumarPalomaY();
    } elseif ($palomaY > $casaY) {
        $paloma->restarPalomaY();
    }

    #Mostrar el mapa actual
    echo '<div class="map" style="width: ' . $tamañoMapa . 'em;"><pre>';
    # Recuérdese que con la etiqueta <pre> los saltos de línea que haya se reflejan en la pantalla

    for ($y = 0; $y < $tamañoMapa; $y++) {
        for ($x = 0; $x < $tamañoMapa; $x++) {
            if ($x == $casaX && $y == $casaY) {
                echo '<span class="casa">+</span>'; //Casa
            } elseif ($x == $palomaX && $y == $palomaY) {
                echo '<span class="paloma">%</span>'; #Paloma
            } else {
                echo '<span class="aire">.</span>'; #Aire
            }

            echo ($x != $tamañoMapa - 1) ? " " : ""; #siempre se añade un carácter de espacio en cada celda, salvo al final.
        }

        echo "\n"; #Salto de línea. como se está dentro de un <pre>, se reflejará en la pantalla.
    }

    echo "</pre>palomax=$palomaX palomaY=$palomaY</div>\n";
} while ($palomaX != $casaX || $palomaY != $casaY);

?>

        </h1>

    </body>

</html>

