<html>


<?php


$cadena = "direccion@ieslasenia.com";
$check = "";

if(strpos($cadena,"@")){

    echo substr($cadena,strpos($cadena,"@")+1, strlen($cadena)-strpos($cadena,"@"))."<br>";
    echo substr($cadena, 0 , strpos($cadena,"@"));
}else{

    echo "La direccion no contiene @";
}


?>

</html>