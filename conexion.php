<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     $conexion = mysqli_connect($host, $user, $pass, $database);
        if ($conexion === false) {
            die("Hubo un error. <br>" . mysqli_connect_error());
        }
        ?>
</body>
</html>