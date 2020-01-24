<html>


<?php

$cadena1 = "holatupade";
$cadena2 = "";


for ($i=strlen($cadena1); $i >=0 ; $i-=2) { 
       
    $cadena2 .= substr($cadena1, $i , 2);
}

echo $cadena2;

?>

</html>