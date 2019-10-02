<html>

<?php

$num1 = 1;
$num2 = 0;
$num3 = 0;

    for($i = 0; $i < 10; $i++){

     $num2 = $num3;
     $num3 = $num1 + $num3;
     $num1 = $num2;
    
     if($i != 9) echo $num1."-";

     else echo $num1;

    }

?>

</html>