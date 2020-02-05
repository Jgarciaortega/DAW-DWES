<?php

    $ciudades = array("Valencia","Sevilla", "Cordoba");

    for ($i=0; $i < count($ciudades) ; $i++) { 
       
    $APIKEY="5e9c88fcc50fe62a697baa8427742e5b"; //¡¡Ojo!! Su "Key" será otra.
    $url="http://api.openweathermap.org/data/2.5/weather?q=".$ciudades[$i]."&mode=xml&APPID=".$APIKEY;
   
    $respuesta= file_get_contents($url);

    $xml=simplexml_load_string($respuesta) or die("Error: no se puede crear");
 
    $pais=$xml->city[name];
    $temperatura=$xml->temperature[value];
    echo "<br><br>";

    echo "Pais: ".$pais."<br>";
    echo "Temperatura: ".$temperatura."<br>";
   
}
   

?>

