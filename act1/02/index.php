<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>02</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <h1>Number of desk</h1>
    </header>
    <section>
        <form action="" method="post">
            <label for="number">Number of desk: </label>
            <input type="text" name="number" id="number" placeholder="Enter a number...." required>
            <input type="submit" value="Send">
        </form>
        <div id="information">
            <?php
                require_once("tools/tools.php");
                if (isset($_POST['number']) && !empty($_POST['number'])) {
                    $numberUser = (int) $_POST['number'];
            
                    if (is_numeric($numberUser)) {
                        define("STUDENTPERDESK", 2);
                        define("CLASSROOM", 3);
                        desksNeeded (CLASSROOM, $numberUser, STUDENTPERDESK);
                    }
            
                } else {
                    echo "<h4 style='color: red; font-size: bold;'>You have to enter a valid numerical value.</h4>";
                }
                
            ?>
        </div>
    </section>
</body>
</html>