<html>
    <head>
        <title>ACT 1 Temario 2</title>
    </head>
    <body>
    <!--
        Crea una aplicación web usando PHP que muestre una página con una tabla de 5x5. Las
        casillas contiguas irán alternando su color de fondo entre gris y blanco. El contenido de
        cada casilla será un número, teniendo el 1 la primera casilla, el 2 la siguiente, y así
        sucesivamente. Se debe hacer uso de construcciones condicionales e iterativas para
        construir la tabla.
    -->
        <?php
            $numbers = [
                [1, 2, 3, 4, 5],
                [6, 7, 8, 9, 10],
                [11, 12, 13, 14, 15],
                [16, 17, 18, 19, 20],
                [21, 22, 23, 24, 25]
            ];

            echo "<table border='1'>";

            for ($i = 0; $i < count($numbers); $i++) {

                echo "<tr>";

                for ($j = 0; $j < count($numbers[$i]); $j++) {
                    if ($numbers[$i][$j] % 2 != 0) {
                        echo "<td style='background-color:grey;'>" . $numbers[$i][$j] . "</td>";
                    } else {
                        echo "<td>" . $numbers[$i][$j] . "</td>";
                    }
                }

                echo "</tr>";

            }

            echo "</table>";


            /**
             * Crea una aplicación web usando PHP que tenga un array de tres posiciones con el siguiente
             * texto en cada posición: hola, cómo, estás. A continuación usa un bucle para recorrer el
             * array y mostrar su contenido.
             */

            $saludo = ["hola", "cómo", "estás"];
            
            foreach($saludo as $palabra) {
                echo $palabra . " ";
            }


        ?>
    </body>
</html>