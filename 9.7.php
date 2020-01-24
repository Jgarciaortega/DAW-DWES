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
    <form action="9.7.php" method="get">
      <select name="trabajador">
        <?php
    $query = $mysqli->query("SELECT nombre FROM empleados;");
    while ($valores = mysqli_fetch_array($query)) {

    echo '<option>' . $valores[nombre] . '</option>';
}
?>
      </select>
      <input type="submit" value="borrar">

    </form>

    <?php

    if(isset ($_GET["trabajador"])){

        $delete = "DELETE from empleados WHERE nombre='".$_GET["trabajador"]."';";
        $result = mysqli_query($mysqli, $delete);

        if ($result == true) {
            echo "Empleado borrado!! <br>";
            } else {
            # La siguiente función muestra el último error, en caso
            # de haberlo.
            echo mysqli_error($mysqli);
            die("Hubo un error");
            }
            # Como no se trata de un SELECT, no hace falta el
            # mysqli_free_result($result)
    }
   
    mysqli_close($mysqli);
?>

</body>

</html>