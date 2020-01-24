<html>


<?php

$miarray=array("nombre" => "Javier", "apellido1" => "Garcia", "apellido2" => "Ortega"  );

for ($i=0; $i < count($miarray) ; $i++) { 
    
    if($i == 0){

        echo end($miarray);

    }else{

        echo prev($miarray);
    }
    
}



?>

</html>