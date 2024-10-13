<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saludo</title>
</head>
<body>
    <?php
    include("tools.php");
        $name = $_POST['name'];
        $age = $_POST['age']; 
        $email = $_POST['email'];

        $postContent = [];

        foreach($_POST as $field => $value) {
            echo "$field = $value </br>";
            $postContent[$field] = [$value];
        } 

        var_dump($postContent);

        // Si no esta vacio y su valor es distinto de null
        if (isNotFormEmpty($postContent)) {
            echo "<h3>Hi " . $name . ":</h3>";
            echo "</br>";
            echo "<h3>You are " . $age . " years old.</h3>";
        } else {
            echo "<p>Faltan valores por rellenar en el formulario.</p>";
        }




    ?>
</body>
</html>