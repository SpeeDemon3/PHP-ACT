<?php
    header("refresh: 4; url=../showData.php");
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'PHPT5A1';

    $connection = mysqli_connect($host, $username, $password, $dbname, 3306) or die ('Error connecting to the database.');

    // Comprobar la conexión
    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    } else {
        echo "Connection successful!";
    }

    $dni = $name = $lastName = $avarageGrade = '';

    if (isset($_POST['dni']) && !empty($_POST['dni'])) {
        $dni = $_POST['dni'];
    }

    if (isset($_POST['name']) && !empty($_POST['name'])) {
        $name = $_POST['name'];
    }

    if (isset($_POST['lastName']) && !empty($_POST['lastName'])) {
        $lastName = $_POST['lastName'];
    }

    if (isset($_POST['avarageGrade']) && !empty($_POST['avarageGrade'])) {
        $avarageGrade = $_POST['avarageGrade'];
    }


    if (isset($connection)) {
        $query = "INSERT INTO school (dni, name, lastName, avarageGrade)
                VALUES ('$dni', '$name', '$lastName', '$avarageGrade')";

        $result = mysqli_query($connection, $query) or die ("Error inserting into database.");

        mysqli_close($connection);

        echo "<h3>Insert successfully.</h3>";
    }


?>