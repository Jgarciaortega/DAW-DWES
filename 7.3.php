<html>

<body>

    <?php
  
            if (empty($_GET["nombre"]))  {       
                        
        ?>

    <form action="7.3.php" method="get">

        Nombre:
        <br>
        <input type="text" name="nombre">
        <br>
        <input type="submit" value="enviar">

    </form>

    
    <?php
            }
        else{


            echo 'El nombre introducido es ' .$_GET["nombre"];
        }

        ?>
</body>

</html>