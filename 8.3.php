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

$result = mysqli_query($conn, $consulta);

$insercion = "UPDATE empleados SET plus=10000";

$resultado = mysqli_query($conn, $insercion);

# Como no se trata de un SELECT, mysqli_query devuelve TRUE
# si se ha hecho correctamente y FALSE si ha habido error.
if ($resultado == true) {

    echo "Se ha modificado correctamente la tabla sueldo <br>";
} else {

    # La siguiente función muestra el último error, en caso
    # de haberlo.
    echo mysqli_error($conn);
    die("Hubo un error");
}

# Como no se trata de un SELECT, no hace falta el
# mysqli_free_result($result)

mysqli_close($conn);

?>

    </body>

</html>