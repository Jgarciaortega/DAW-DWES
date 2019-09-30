<html>

    <?php

    echo"<table>";

    $cont = 0;

        while($cont < 10){

            $cont++;

            echo "<tr>";

                echo "<td>";
                       echo $cont;   
                echo "</td>";

                echo "<td>";
                        echo ($cont % 2 == 0)? "Es numero par": "Es numero impar";
                echo "</td";

                echo "<td>";
                            
                        if($cont > 1){

                            $y = 2;
                
                                while($cont % $y !=0){

                                  $y++;
                                
                               }

                               echo ($y == $cont)? " Es primo": " No es primo";
                      
                        }else{

                            echo" No es primo";
                        }

                echo "</td>";

            echo "</tr>";




        }



    echo"</table";



?>




</html>