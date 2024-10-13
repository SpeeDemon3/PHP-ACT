<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACT4</title>
</head>
<body>
    <!--
        * Crea una aplicación web usando PHP que conste de las siguientes páginas:
        * • La primera contendrá un formulario en HTML que mostrará un campo de texto
        * donde el usuario podrá escribir su nombre, y un botón de tipo submit. El formulario
        * deberá ser de tipo POST.
        * • La segunda mostrará el texto “BIENVENID@” acompañado del nombre que haya
        * escrito el usuario en la página anterior.
    -->
    
    <div>
        <form action="saludo.php" method="post">
            <label>Name:</label>
            <input type="text" name="name">
            <label>Age:</labe>
            <input type="number" name="age">
            <label for="">Email</label>
            <input type="email" name = "email">
            <input type="submit" name="send">
        </form>
    </div>

</body>
</html>