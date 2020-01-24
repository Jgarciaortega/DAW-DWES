
<body>

<?php


  
  if(empty ($_GET['paso'])){

?>
    <form action="7.5.php" method="get">
    <p>Indique su nombre:<input type="text" name="nombre"> </p>
    <input type="hidden"  name="paso" value="1">
    <input type="submit" value="enviar">
    </form>

<?php

}  else if($_GET['paso'] == "1"){

?>
    <form action="7.5.php" method="get">
    <p>Indique su coche:<input type="text" name="coche"> </p>
    <input type="hidden" name="paso" value="2">
    <input type="hidden" name="datos" value=<?php echo $_GET['nombre']?>>
    <input type="submit" value="enviar">
    </form>

<?php

}  else if($_GET['paso'] == "2"){
    
    echo "Su nombre es :". $_GET['datos'] ."y su coche es " .$_GET['coche'];

}
?> 

</body>

</html>