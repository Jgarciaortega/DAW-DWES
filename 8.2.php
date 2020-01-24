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

$consulta = "INSERT INTO empleados2 (DNI,nombre,sueldo) SELECT * FROM empleados;";
$result = mysqli_query($conn, $consulta);
# Como no se trata de un SELECT, mysqli_query devuelve TRUE
# si se ha hecho correctamente y FALSE si ha habido error.
if ($result == true) {
    echo "Se han clonado correctamente las tablas <br>";
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