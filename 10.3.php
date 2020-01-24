<html>

    <body>
        <?php

$servidor = "localhost";
$username = "miusuario";
$password = "mipassword";
$basedatos = "bdprueba";

# Crear conexión
$conn = mysqli_connect($servidor, $username, $password, $basedatos);
# Comprobar conexión
if (!$conn) {
    die("Conexi&ocacuten fallida: " . mysqli_connect_error());
}
echo "Conexi&oacuten con &eacutexito <br><br>";

//Si en el navegador hay alguna cookie...
if (isset($_COOKIE["miGalleta"])) {
    ?>

<form action="10.3.php" method="post">
    <input type="submit" value="Delete cookie" name="delete">
</form>

<?php

    if ($_POST['delete'] == 'Delete cookie') {

        setcookie("miGalleta", 0, time() - 3600, "", "", false, true);
        echo "<p>Cookie borrada</p>";

    }

//...si no hay ninguna cookie se crea y se registra al usuario en la bbdd
} else {

    ?>
        <form action="10.3.php" method="post">
            INTRODUZCA SU NOMBRE: <input type="text" name="nombre">
            <input type="submit">
        </form>

        <?php

    $nombre = $_POST["nombre"];
    //Averiguamos primero el siguiente id de usuario
    $consulta = "SELECT MAX(id) from usuarios;";
    $resultado = mysqli_query($conn, $consulta);

    $fila = mysqli_fetch_array($resultado);

    $id = $fila["MAX(id)"];
    $id++;

    $insercion = "INSERT INTO usuarios VALUES (" . $id . ", '" . $nombre . "');";
    $resultado2 = mysqli_query($conn, $insercion);

    $name = "miGalleta";
    $value = $id; # Podría ser una cadena de texto
    $expires = time() + 60; # 60 segundos después del momento actual
    $path = "/";
    $domain = "";
    $secure = false;
    $HttpOnly = true;

    # Es preciso asegurarse de llamar a setcookie() antes de enviar
    # ninguna otra salida al navegador
    setcookie($name, $value, $expires, $path, $domain, $secure, $HttpeOnly);

}

mysqli_close($conn);

?>
</body>


</html>