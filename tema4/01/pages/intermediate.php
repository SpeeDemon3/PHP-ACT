<?php
    session_start();
        $name = $_POST['name'];
        $_SESSION['session-a'] = $name;

        header("Location: greating.php");
        exit();
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intermediate</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <!--
    el nombre se guardará en la
    sesión y automáticamente se nos redirigirá a una tercera página
    -->
    <?php

    ?>
</body>
</html>