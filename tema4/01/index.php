<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>01</title>
    <link rel='stylesheet' href='css/style.css'>
</head>
<body>
    <?php
        echo "<h1>Insert your name</h1>";
        echo "<form action='pages/intermediate.php' method='post'>";
        echo "<lable for='name'>Name: </label>";
        echo "<input type='text' name='name' id='name'>";
        echo "<input type='submit' value='Send'>";
        echo "</form>";
    ?>
</body>
</html>