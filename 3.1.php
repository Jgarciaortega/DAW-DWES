<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <?php

    $num1 = 5.5;
    $num2 = 8;
    $num3 ="no es un numero";

    if(is_int($num1)) echo "num1 es un entero";   

    else echo "num1 no es un entero"; 

    if(is_int($num2)) echo " num2 es un entero"; 

    else echo " num2 no es un entero"; 

    if(is_int($num3)) echo " num3 es un entero"; 

    else echo " num3 no es un entero"; 
    

    ?>
    
</body>
</html>