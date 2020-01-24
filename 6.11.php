
<html>

    <head>



    </head>

    <body>

    <?php

$cadena1 = "el cuando el coche es de el ";
$cadena2 = "";
$indice1 = -1;
$indice2 = -1;
$cont = 0;
$arrayIndices = [];
$encontrado = false;

for ($i = 0; $i < strlen($cadena1); $i++) {

    $indice1 = strpos($cadena1, "el", $i);

    if ($indice1 != $indice2) {

        $indice2 = $indice1;

        array_push($arrayIndices, $indice1);

    }
}


for ($i = 0; $i < strlen($cadena1); $i++) {

    if($arrayIndices[$cont] == $i){

        $cadena2 .= "the";
        $cont++;
        $encontrado = true;

    }else{

        if($encontrado == false){

            $cadena2 .= substr($cadena1,$i,1);

        }
        $encontrado = false;
        
    }
}

echo $cadena2;

?>



    </body>



</html>