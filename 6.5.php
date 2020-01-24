<html>

<?php

$cadena = "aeiou";

for ($i=0; $i < strlen($cadena); $i++) { 
    
    if($cadena[$i] == "a"){

        $cadena[$i] = "e";

    }elseif($cadena[$i] == "e"){

        $cadena[$i] = "i";

    }elseif($cadena[$i] == "i"){

        $cadena[$i] = "o";

    }elseif($cadena[$i] == "o"){
  
        $cadena[$i] = "u";

    }elseif($cadena[$i] == "u"){

        $cadena[$i] = "a";
    }
}

echo "Cadena invertida :" .$cadena. "<br>";

for ($i=0; $i < strlen($cadena); $i++) { 
          
    if($cadena[$i] == "e"){

        $cadena[$i] = "a";

    }elseif($cadena[$i] == "i"){

        $cadena[$i] = "e";

    }elseif($cadena[$i] == "o"){

        $cadena[$i] = "i";

    }elseif($cadena[$i] == "u"){
  
        $cadena[$i] = "o";

    }elseif($cadena[$i] == "a"){

        $cadena[$i] = "u";
    }

}

echo "Cadena desencriptada :" .$cadena;


?>

</html>