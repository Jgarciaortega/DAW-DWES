<html>

    <body>
        <?php

if (isset($_COOKIE["miGalleta"])) {
    
    echo "Hola " .$_GET["nombre"];

} else {

    $name = "miGalleta";
    $value = 7; # Podría ser una cadena de texto
    $expires = time() + 60; # 60 segundos después del momento actual
    $path = "/";
    $domain = "";
    $secure = false;
    $HttpOnly = true;

    # Es preciso asegurarse de llamar a setcookie() antes de enviar
    # ninguna otra salida al navegador
    setcookie($name, $value, $expires, $path, $domain, $secure, $HttpeOnly);

    ?>
        <form action="10.1.php" method="get">
            INTRODUZCA SU NOMBRE: <input type="text" name="nombre">
            <input type="submit">
        </form>

        <?php       
}
?>
</body>

    
</html>