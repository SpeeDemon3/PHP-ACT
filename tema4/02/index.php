<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include("car.php");
    
        $car1 = new Car(5, "2.0", "white", "Seat", "Leon", "gasoline");
        echo $car1;
    
    ?>

</body>
</html>