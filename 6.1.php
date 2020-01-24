<html>

    <head>
    
    </head>

    <body>
        
        <?php

            $anyo = 2016;

            if(strlen($anyo) == 4){
                
                echo($anyo % 4 == 0 && 100 != 0) || ($anyo % 400 == 0)? "ES AÑO BISIESTO":"NO ES AÑO BISIESTO" ;

            }else{

                echo("El año introducido es distinto de 4");
            }

        ?>


    </body>

</html>
