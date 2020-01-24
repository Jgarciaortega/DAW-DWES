<html>

    <head>
    
    </head>

    <body>
        
        <?php

            $cadena1 = "concatenar";
            $cadena2 = "";


            for ($i=strlen($cadena1); $i >= 0; $i--) { 
                
                $cadena2 .= $cadena1[$i]; 

            }

            echo($cadena2);
        ?>


    </body>

</html>
