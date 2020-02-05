<html>
    <head>
        <title>Prueba</title>
    </head>

    <body>

        <?php

$xml = simplexml_load_file("http://estaticos.elmundo.es/elmundo/rss/valencia.xml");

echo "<h1>NOTICIAS</h1>";

for ($i=0; $i < 3; $i++) { 
    
    echo "<div style='border:1px solid black'>";
    echo "<h3>" .$xml->channel->item[$i]->title ."</h3>";
    echo "<p>" . $xml->channel->item[$i]->link ."</p>";
    echo "</div>";
}

?>
    </body>
</html>