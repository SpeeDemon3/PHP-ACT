<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACT 1 TEMA 3</title>
</head>
<body>
    <?php
        echo "<form action='saludo.php' method='get>";
        echo "<label for='name'>Nombre: </label>";
        echo "<input type='text' name='name'>";
        echo "<label for='lastname'>Apellido: </label>";
        echo "<input type='text' name='lastname'>";
        echo "<input type='submit'>";
        echo "</form>";
    ?>
</body>
</html>