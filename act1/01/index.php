<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>01</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <h2>Check if you are old enough to work</h2>
    </header>
    <section>
        <form action="pages/checking.php" method="post">
            <label for="name">Name: </label>
            <input type='text' name='name' id="name" required>
            <label for="age">Age: </label>
            <input type='text' name="age" id="age" required>
            <input type='submit' value="send">
        </form>
    </section>
</body>
</html>