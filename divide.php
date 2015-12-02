<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php

        function es_entero($valor) {
            if (is_numeric($valor) && (floatval($valor) == intval($valor)) ) {
                return true;
            }
            return false ;
        }
        # check parameters
        if (! isset($_REQUEST["envia"])) {
                    echo <<< EOF
        <form method ="post">
            Dividendo:<br>
            <input type="text" name="dividendo">
            <br>
            Divisor:<br>
            <input type="text" name="divisor">
            <input type="submit" value="envia" name="envia" />
         </form> 
EOF;
        } else if (isset($_REQUEST['dividendo']) && isset($_REQUEST['divisor'])) {
            $dividendo = $_REQUEST['dividendo'];
            $divisor = $_REQUEST['divisor'];
            if (! es_entero($dividendo) ) {

                echo "ERROR: El divisor no es entero";

            } else if (! es_entero($divisor) ) {

                 echo "ERROR: El divisor no es entero";

            } else if ($divisor == 0) {

                 echo "ERROR: El divisor es 0";

            } else {

                # Todo parece correcto, hagamos la division
                #convertimos a enteros
                $dividendo = intval($dividendo);
                $divisor= intval($divisor);
                $cociente = intval ($dividendo / $divisor);
                $resto = $dividendo % $divisor;
                echo "El cociente es ".$cociente;
                echo "<br>El resto es ".$resto;
            }
            
        } else {
            echo "ERROR: No se encuentran los valores correspondientes a dividendo y/o divisor";
        }
        ?>
    </body>
</html>
