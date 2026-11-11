<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$nombre = $_POST['nombre'] ?? '';
$email = $_POST['email'] ?? '';
$password_plana = $_POST['contraseña'] ?? '';
$edad = $_POST['edad'] ?? '';
$pais = $_POST['pais'] ?? '';

$contraseña_encriptada = password_hash($password_plana, PASSWORD_DEFAULT);

include("conexion.php");

$query1 = "INSERT INTO usuarios VALUES (0, '$nombre', '$email', '$contraseña_encriptada', '$edad', '$pais')";

$consulta = mysqli_query($conexion, $query1) or die("Hubo un error en la consulta. <br>" . mysqli_error($conexion));

mysqli_close($conexion);

if ($consulta == true) {
    echo "<p class='alert alert-success'>¡Registro exitoso! Ya puedes iniciar sesión.</p>";
    echo "<br><a href='form_login.php'>Ir a Iniciar Sesión</a>";
} else {
    echo "<p class='alert alert-danger'>Hubo un error en la carga de datos.</p>";
}
?>
</body>
</html>