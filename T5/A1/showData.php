<?php

    /**
     * Realiza una aplicación que se conecte a la base de datos Escuela y recorra todos los datos
     * de la tabla Alumno (dni, nombre, apellidos, nota_media) mostrándolos por pantalla.
     */

    $host = 'localhost';
    $username = 'root';
    $password = '';
    $db = 'PHPT5A1';

    $con = mysqli_connect($host, $username, $password, $db) or die ("Internal server error");

    if (!$con) {
        echo "Error -> " . mysqli_error($con);
    } else {
        echo "Connection successfully!!! <br>";

        $query = "SELECT * FROM school";

        $result = mysqli_query($con, $query) or die ("Query Error.");

        while ($row = mysqli_fetch_array($result)) {
            extract($row);

            echo "Student: $name, Last Name: $lastName DNI: $dni <br>";
        }

    }




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Data</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
</body>
</html>