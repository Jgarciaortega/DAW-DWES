<html>
    <body>
        <?php
            echo "Su password es :";
            echo $_POST["password"] ."<br>";

            if( $_POST["jubilado"]){

                echo "Usted esta jubilado <br>";

            }else{

                echo("Usted no esta jubilado <br>");

            }

            echo "La opcion elegida es => " .$_POST["combo"] ."<br>";

            if($_POST["checkbox"]){


                echo "El checkbox esta activo";

            }else{

                echo "El checkbox no esta activo";

            }

            echo "El texto añadido es : " .$_POST["texto"];
            
           
        ?>
    </body>
</html>