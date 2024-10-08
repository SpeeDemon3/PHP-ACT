<?php
include_once "tools.php";
echo "tools.php incluido correctamente";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saludo</title>
</head>
<body>
    <?php
        $name = $_GET['name'];
        $lastName = $_GET['lastname'];

        $validateForm = validateInputs($name, $lastName);

        if ($validateForm) {
            echo "<h2>Hola $name $lastName.</h2>";
        }
    ?>
</body>
</html>