<html>
  
    <body>
        <?php
         
          class Vehiculo
          {
            public $ruedas;
            public $color;
            public $km;
           
            public function __construct($ruedas,$color,$km) # Método constructor
            {
                $this->ruedas=$ruedas;
                $this->color=$color;
                $this->km=$km;
            }

            public function incrementarKm($km) 
            {
                $this->km+=$km; 
            }

            public function obtenerKm(){
                return $this->km;
            }
          }

          class Coche extends Vehiculo
          {

            public function incrementarKm($km){

                $this->km-=$km;
                parent::incrementarKm();
            }

         
          }


          $miCoche = new Coche(4,'rojo',100);
          $miCoche->incrementarKm(0);
          echo $miCoche->obtenerKm();

        ?>
       
    </body>
   
</html>