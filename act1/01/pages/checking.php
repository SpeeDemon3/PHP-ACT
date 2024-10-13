<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checking Age</title>
    <link rel='stylesheet' href="../css/style.css">
</head>
<body>
    <?php
        require_once("../tools/tools.php");

        $name = $_POST['name'];
        $age = (int) $_POST['age'];

        echo "<h4>Hi $name:</h4>";

        if (isset($name) && !empty($name)) {
            if (isset($age) && !empty($age) && is_numeric($age)) {
                checkAge($age);
            }
        }

    ?>
</body>
</html>