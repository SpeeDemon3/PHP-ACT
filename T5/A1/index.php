<?php

    /**
     * 
     * Realiza una aplicación web en la que, mediante un formulario, se pidan los datos para dar
     * de alta a un nuevo alumno en la base de datos Escuela. Haz una página con el formulario y
     * otra con las operaciones en PHP que inserten un nuevo registro en la tabla Alumno con los
     * datos del formulario.
     */


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Arya Ruiz Luengo</h1>
    <form action="process/processIndex.php" method="post">
        <label for="dni">DNI</label>
        <input type="text" name="dni" id="dni">
        <label for="name">Name</label>
        <input type="text" name="name" id="name">
        <label for="lastName">Last Name</label>
        <input type="text" name="lastName" id="lastName">
        <label for="avarageGrade">Avarage Grade</label>
        <input type="text" name="avarageGrade" id="avarageGrade">
        <input type="submit" value="ADD">
    </form>
</body>
</html>