<html>


<?php

echo"<table>";

    for ($i = 1; $i < 10 ; $i++) {   

        echo "<tr>";
            echo "<td>";
                   echo $i;   
            echo "</td>";

            echo "<td>";
                    echo ($i % 2 == 0)? " Es numero par.": " Es numero impar.";
            echo "</td";

            echo "<td>";
                        
                    if($i > 1){

                        $y = 2;
            
                            while($i % $y !=0){

                              $y++;
                            
                           }

                           echo ($y == $i)? " Es primo.": " No es primo.";
                  
                    }else{

                        echo" No es primo";
                    }

            echo "</td>";

        echo "</tr>";
    }

echo"</table>";


?>


</html>