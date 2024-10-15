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
        include_once("vehicle.php");


        echo Car::getWheels();
        echo "<br>";
        $vehicle1 = new Vehicle("Audi", "TT", "225CV");
        echo $vehicle1;
        echo "<br>";
        $car1 = new Car("Tesla", "Model 3", 224, 3, "electric", "black", "electricity");
        echo $car1;
    
    ?>

</body>
</html>