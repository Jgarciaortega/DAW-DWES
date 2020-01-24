<?php
$servidor = "localhost";
$username = "miusuario";
$password = "mipassword";
$basedatos = "bdprueba";
$mysqli = mysqli_connect($servidor, $username, $password, $basedatos);
?>
<!DOCTYPE html>
<html>
<head>
  <title>Demo de menú desplegable</title>
  <meta charset=utf-8" />
</head>
<body>

    <p>Seleccione un trabajador:</p>
    <form action="12.2.php" method="get">
      <select name="trabajador">
        <?php

function createSelect($mysql)
{

    $query = $mysql->query("SELECT nombre FROM empleados;");
    while ($valores = mysqli_fetch_array($query)) {

        echo '<option>' . $valores[nombre] . '</option>';

    }

}
createSelect($mysqli);
?>
      </select>
      <input type="submit" value="borrar">

    </form>

    <?php


function result($mysql){

    $delete = "DELETE from empleados WHERE nombre='" . $_GET["trabajador"] . "';";
    $result = mysqli_query($mysql, $delete);

    if ($result == true) {
        echo "Empleado borrado!! <br>";
    } else {
        # La siguiente función muestra el último error, en caso
        # de haberlo.
        echo mysqli_error($mysql);
        die("Hubo un error");
    }
    # Como no se trata de un SELECT, no hace falta el
    # mysqli_free_result($result)

}

if (isset($_GET["trabajador"])) {

    result($mysqli);

   
}

mysqli_close($mysqli);
?>

</body>

</html>