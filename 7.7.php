<html>
    <body>
        <?php
           
            if (empty ($_GET["nombre"]))
            {
                
                header ( "Location: 7.7.html");
                exit;
            }
           
            else
            {
               header("Location: 7.7(Agradecimiento).html") ;
            }   
           
           
        ?>
    </body>
</html>