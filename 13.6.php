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

class Casa
{

    public $x;
    public $y;

    public function __construct($x, $y)
    {

        $this->x = $x;
        $this->y = $y;

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

$cX = rand(0, $tamañoMapa - 1);
$cY = rand(0, $tamañoMapa - 1);
$x = rand(0, $tamañoMapa - 1);
$y = rand(0, $tamañoMapa - 1);
$x2 = rand(0, $tamañoMapa - 1);
$y2 = rand(0, $tamañoMapa - 1);

$paloma1 = new Paloma($x, $y);
$paloma2 = new Paloma($x2 , $y2);
$casa = new Casa($cX, $cY);
$llegaPaloma1 = false;
$llegaPaloma2 = false;

do {

    $palomaX = $paloma1->getX();
    $palomaY = $paloma1->getY();

    $paloma2X = $paloma2->getX();
    $paloma2Y = $paloma2->getY();

    $casaX = $casa->getX();
    $casaY = $casa->getY();

    #Acercar la paloma 1 a  casa
    if ($palomaX < $casaX) {
        $paloma1->sumarPalomaX();
    } elseif ($palomaX > $casaX) {
        $paloma1->restarPalomaX();
    }

    if ($palomaY < $casaY) {
        $paloma1->sumarPalomaY();
    } elseif ($palomaY > $casaY) {
        $paloma1->restarPalomaY();
    }

     #Acercar la paloma 2 a casa
     if ($paloma2X < $casaX) {
        $paloma2->sumarPalomaX();
    } elseif ($paloma2X > $casaX) {
        $paloma2->restarPalomaX();
    }

    if ($paloma2Y < $casaY) {
        $paloma2->sumarPalomaY();
    } elseif ($paloma2Y > $casaY) {
        $paloma2->restarPalomaY();
    }

    #Mostrar el mapa actual
    echo '<div class="map" style="width: ' . $tamañoMapa . 'em;"><pre>';
    # Recuérdese que con la etiqueta <pre> los saltos de línea que haya se reflejan en la pantalla

    for ($y = 0; $y < $tamañoMapa; $y++) {
        for ($x = 0; $x < $tamañoMapa; $x++) {
            if ($x == $casaX && $y == $casaY) {
                echo '<span class="casa">+</span>'; //Casa
            } elseif ($x == $palomaX && $y == $palomaY) {
                echo '<span class="paloma">%</span>'; #Paloma1
            } elseif ($x == $paloma2X && $y == $paloma2Y){
                echo '<span class="paloma">*</span>'; #Paloma2
            }else {
                echo '<span class="aire">.</span>'; #Aire
            }
            
            echo ($x != $tamañoMapa - 1) ? " " : ""; #siempre se añade un carácter de espacio en cada celda, salvo al final.
        }

        echo "\n"; #Salto de línea. como se está dentro de un <pre>, se reflejará en la pantalla.
    }

    echo "</pre>paloma1=x:$palomaX y:$palomaY\n";
    echo "</pre>paloma2=x:$paloma2X y:$paloma2Y\n";
    echo "</pre>casa=x:$casaX y:$casaY</div>\n";

    if($palomaX  == $casaX && $palomaY  == $casaY) $llegaPaloma1 = true;
    if($paloma2X == $casaX && $paloma2Y == $casaY) $llegaPaloma2 = true;
    
} while ($llegaPaloma1 == false || $llegaPaloma2 == false);

?>

        </h1>

    </body>

</html>

