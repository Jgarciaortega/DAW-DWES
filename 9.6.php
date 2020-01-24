<html>
    <body>
        <?php

$id = $_POST["ID"];
$nombre = $_POST["nombre"];
$sueldo = $_POST["sueldo"];

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

//Averiguamos primero el max dni
$consulta = "SELECT MAX(DNI) from empleados;";
$resultado = mysqli_query($conn, $consulta);

while ($fila = mysqli_fetch_array($resultado)) {
             
    $id = $fila[0];
    $id++;
}
 $insercion = "INSERT INTO empleados VALUES (".$id.", '" .$nombre."', ".$sueldo.", 0);";
 $resultado2 = mysqli_query($conn, $insercion);

if ($resultado2 == true) {
    echo "Se ha añadido correctamente el nuevo cliente <br>";
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