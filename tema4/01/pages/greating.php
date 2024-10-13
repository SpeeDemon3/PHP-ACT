<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Greating</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <?php
        if (isset($_SESSION['session-a']) && !empty($_SESSION['session-a'])) {
            $name = $_SESSION['session-a'];
            echo "<h2>Welcome $name</h2>";
        } else {
            echo "You should introduce your name before.";
            header("refresh:3; Location:../index.php");
            exit();
        }
    ?>
</body>
</html>