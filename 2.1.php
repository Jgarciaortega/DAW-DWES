<html>
  <head>
    <title></title>
    <meta content="">
    <style>
    
    h1{
    
      font-size: 200;
    }
    
    </style>
  </head>
  
    <body>
       
        <h1>
            <?php

            $horaActual = date ("g:i:s a");
            // "g, i, s" indican que la salida sea en horas, minutos y segundos, y "a" indica que se muestre am o pm
           
            echo "La hora actual es $horaActual";
           
            ?>   
           
        </h1>
       
    </body>

</html>

