<html>

    <head>
    
    </head>

    <body>
        
        <?php

            $cadena1 = "Esto es una cadena de texto";

            for ($i=0; $i < strlen($cadena1); $i++) { 
           
                if($cadena1[$i] == "a"){

                    $cadena1[$i] = "e";
                }
            }

            echo($cadena1);

        ?>


    </body>

</html>
