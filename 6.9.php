<html>


<?php


$cadena = "direccion@ieslasenia";
$check = "";

if(strstr($cadena,".com")){

 $check = strstr($cadena,".com");

 if($check == ".com"){

    echo "La direccion  es valida ";

    
 } else{

    echo "La direccion no es valida. No termina en .com";
 }

}else{

    echo "La direccion no contiene .com";
}


?>

</html>