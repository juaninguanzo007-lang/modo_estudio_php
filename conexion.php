<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <?php
$host = "localhost";
$user = "root";
$pass = "";
$database = "modoestudio";

$conexion = mysqli_connect($host, $user, $pass, $database);

if (!$conexion) {
    die("Fallo en la conexión: " . mysqli_connect_error());
}
?>
</body>
</html>