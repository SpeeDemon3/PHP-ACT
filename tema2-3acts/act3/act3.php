<html>
    <head>
        <title>ACT3</title>
    </head>
    <body>
        <?php
            /**
             * VERSIÓN IMPRIMIBLE ALUMNO LINKIAFP
             * Crea una aplicación web usando PHP en la que se declare una función suma con dos
             * parámetros, a y b, éste último con el valor 24 por defecto. La función sumará el valor de los
             * dos parámetros y devolverá el resultado. Haz una llamada a la función suma pasándole dos
             * valores, y otra pasándole sólo uno. ¿Qué devolverá cada llamada?
             */

             function suma($a, $b = 24) {
                $result = $a + $b;
                echo $result . "</br>";
                return $result;
             }

            suma(3, 101);
            suma(27);

        ?>
    </body>
</html>