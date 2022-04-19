<!DOCTYPE html>
<html>
    <head>
        <title>Ejercicio 4</title> 
    </head>
    
    <body>
        <h1>Tablas de multiplicar</h1>

        <h3>Escribe tres numeros del 1 al 10 y vas a ver las tablas de multiplicar de cada uno</h3>

        <form action="#" method="post">
            <p>Escribe aquí el primer número: <input type="text" name="primerNumero" maxlength="2" size="2" required></p>


            <p>Escribe aquí el segundo número: <input type="text" name="segundoNumero" maxlength="2" size="2" required></p>


            <p>Escribe aquí el tercer número: <input type="text" name="tercerNumero" maxlength="2" size="2" required></p>

            <p><input type="submit" value="Ver tabla de multiplicar" /></p>
        </form>

        
        <?php  
            $n=$_POST['primerNumero'];
            if ($n<1 or $n>10) {
                echo "Ingrese un numero entre el 1 y el 10.";
                }
            else {
                echo "<h4>Tabla del $n:</h4>";
                $i=1;
                while ($i<=10) {
                    echo "$n x $i = ".$n*$i."<br/>";
                    $i++;
                } 
            }

            $n=$_POST['segundoNumero'];
            if ($n<1 or $n>10) {
                echo "Ingrese un numero entre el 1 y el 10.";
                }
            else {
                echo "<h4>Tabla del $n:</h4>";
                $i=1;
                while ($i<=10) {
                    echo "$n x $i = ".$n*$i."<br/>";
                    $i++;
                } 
            }

            $n=$_POST['tercerNumero'];
            if ($n<1 or $n>10) {
                echo "Ingrese un numero entre el 1 y el 10.";
                }
            else {
                echo "<h4>Tabla del $n:</h4>";
                $i=1;
                while ($i<=10) {
                    echo "$n x $i = ".$n*$i."<br/>";
                    $i++;
                } 
            }
        ?>


    </body>
</html>