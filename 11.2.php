<html>

  <body>

        <?php

session_start();

    ?>
    <form action="11.2.php" method="get">
    Introduzca numeros: <input type="text" name="numero">
                        <input type="submit">
    </form>

    <?php

    $_SESSION["numero"] .= $_GET["numero"] ."#" ;
    echo "Su numero de sesion es: " . $_SESSION["numero"];

?>

    </body>

</html>
