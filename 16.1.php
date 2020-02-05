<html>
    <head>
        <title>Prueba</title>
    </head>

    <body>

        <?php

            $xml=simplexml_load_file("http://estaticos.elmundo.es/elmundo/rss/valencia.xml");
 
            foreach ($xml->channel->item as $noticia) {

                echo "<h3>" .$noticia->title . "</h3>";
                echo "<p>" .$noticia->link . "</p>";
            }

        ?>
    </body>
</html>