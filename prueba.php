<html>

<?php

$libro1=array(
    "titulo"=>"Don Quijote",
    "autor"=>"Cervantes",
    "fecha"=>1615);
$libro2=array(
    "titulo"=>"El hobbit",
    "autor"=>"Tolkien",
    "fecha"=>1937);

$biblioteca=array("lib1"=>$libro1,"lib2"=>$libro2);

// Imprimir solo el libro de 1615


foreach ($biblioteca as $libro) {

    echo key($biblioteca);

    foreach ($libro as $key => $value) {

        if ($value == 1615) {
            // echo "yes";
        } else {
            // echo "not";
        }
        
    }



}


// Imprimir solo el libro2



// 

?>







</html>