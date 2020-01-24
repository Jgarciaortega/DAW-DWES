<html>
<body>
<?php
session_start();
if (!isset($_SESSION["nombre"])) {
    ?>
<form action="11.1.php" method="get">
Indique su nombre: <input type="text" name="nombre">
<input type="submit">
</form>

<?php
$_SESSION["nombre"] = $_GET["nombre"];
} else {
    echo "Hola de nuevo " . $_SESSION["nombre"];
}
?>
</body>
</html>