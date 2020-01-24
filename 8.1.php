<html>

  <head>

    <style>

            table, td{

                border:1px solid black;
            }


    </style>
  </head>
    <body>
        <?php
$servidor = "localhost"; # Puede ser una IP o un nombre DNS
$username = "miusuario";
$password = "mipassword";
$basedatos = "bdprueba";

# Crear conexión. Opcionalmente se puede poner como quinto parámetro
# el puerto
$conn = mysqli_connect($servidor, $username, $password, $basedatos);

# Comprobar conexión
if (!$conn) {
    die("Conexi&ocacuten fallida: " . mysqli_connect_error());
}
echo "Conexi&oacuten con &eacutexito <br><br>";

# A continuación se usa un "SELECT", pero igualmente podría ser
#  INSERT, DELETE o UPDATE. El código PHP sería idéntico.
$consulta = "SELECT * FROM empleados";

# A continuación se ejecuta la consulta y se devuelve el resultado
# en el caso de que se trate de un SELECT. En otro caso devuelve
# TRUE. Salvo si hay fallo, en cuyo caso devuelve FALSE.
$result = mysqli_query($conn, $consulta);

echo "<table>";
echo '<tr>';
echo '<th>';
echo 'NOMBRE';
echo '</th>';
echo '<th>';
echo 'DNI';
echo '</th>';
echo '</tr>';

# Es preciso iterar para extrar una a una las filas del resultado
while ($fila = mysqli_fetch_array($result)) {

    echo '<tr>';
    echo '<td>';
    echo $fila[0];
    echo '</td>';
    echo '<td>';
    echo $fila[1];
    echo '</td>';
    echo '</tr>';
    $cont++;

}

echo "</table>";

mysqli_close($conn);

?>

    </body>

</html>