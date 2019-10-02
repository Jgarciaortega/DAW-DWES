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

        $num1 = 5;
        $num2 = 5;

      
        echo 'Comparacion antes de incremento '. ($num1 == $num2). '<br>';
        echo 'Incremento con $num1++ y da igual ' .($num1++ == $num2). '<br>';
        
        echo 'Incremento con ++$num1 y no da igual ' .(++$num1 == $num2). '<br>';
       
    


    ?>


    
</body>
</html>