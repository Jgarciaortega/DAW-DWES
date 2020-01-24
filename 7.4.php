<html>

<body>

    <form action="7.4.php" method="get">

        <span><input type="number" name="input1"> </span>
        <select name="operador">
                <option >+</option>
                <option >-</option>
                <option >*</option>
                <option >/</option>
        </select>
        <span><input type="number" name="input2"> </span>
        <br>
        <input type="submit" value="enviar">

    </form>
    <?php
    
        $resultado;
        $op1 = $_GET['input1'];
        $op2 = $_GET['input2'];
        $operador = $_GET['operador'];

        switch($operador){

            case("+"): $resultado = $op1 + $op2; break;
            case("-"): $resultado = $op1 - $op2; break;
            case("*"): $resultado = $op1 * $op2; break;
            case("/"): $resultado = $op1 / $op2; break;

        }
        
         echo "El resultado es : " .$resultado;

    ?>

       
    
      
</body>

</html>