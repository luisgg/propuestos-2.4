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
        # check parameters
        
        if (isset($_REQUEST['dividendo']) && isset($_REQUEST['divisor'])) {
            $dividendo = $_REQUEST['dividendo'];
            $divisor = $_REQUEST['divisor'];
            if (is_numeric($dividendo)) {
                if (floatval($dividendo) == intval($dividendo)) {
                    if (is_numeric($divisor)) {
                        if (floatval($divisor) == intval($divisor)) {
                            if ($divisor != 0) {
                                #convertimos a enteros
                                $dividendo = intval($dividendo);
                                $divisor= intval($divisor);
                                $cociente = intval ($dividendo / $divisor);
                                $resto = $dividendo % $divisor;
                                echo "El cociente es ".$cociente;
                                echo "<br>El resto es ".$resto;
                                
                            } else {
                                echo "ERROR: El divisor es 0";
                            }
                        } else {
                            echo "ERROR: El divisor no es entero";
                        }
                    } else {
                        echo "ERROR: El divisor no es un numero";
                    }
                }  else {
                    echo "ERROR: El dividendo no es entero";
                }
            } else {
                echo "ERROR: El dividendo no es un número";
            }
            
        } else {
            echo "ERROR: No se encuentran los valores correspondientes a dividendo y/o divisor";
        }
        // put your code here
        ?>
    </body>
</html>
