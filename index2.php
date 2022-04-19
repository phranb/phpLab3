<?php
    for ($tabla=2; $tabla <=4 ; $tabla++){
        echo"<table border=1>";
            echo "<thead>";
                echo "<tr>";
                    echo"<th colspan=5>Tabla del $tabla</th>";
                echo"</tr>";
            echo"</thead>";
            echo"<tbody>";      
                for($multiplicador=1; $multiplicador <=10 ; $multiplicador++){
                    echo"<tr>";
                    echo"<td>$tabla x $multiplicador</td>";
                    echo"<td>";
                    echo ' '.$tabla*$multiplicador.'  ';
                    echo"</td>";
                    echo"</tr>";
                }
            echo"</tbody>";
            echo"<tfoot>";
                echo"<tr>";
                    echo"<th>Multiplicacion</th>";
                    echo"<th>Resultado</th>";
                echo"</tr>";
            echo"</tfoot>";
        echo"</table>";
    }
?>