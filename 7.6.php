<html>
    <body>
        <?php
  
            mkdir($_POST["nombre"],0777);
            
            # Con la siguiente instrucción movemos el archivo desde su ubicación
            # temporal a la que se requiera. Si el archivo ya existe, se
            # sorbreescribe
            move_uploaded_file ( $_FILES["archivo1"]["tmp_name"], "./".$_POST["nombre"]."/".$_FILES["archivo1"]["name"]);
                         
        ?>
    </body>
</html>