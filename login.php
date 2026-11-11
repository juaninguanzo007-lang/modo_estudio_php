<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modo estudio</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-B/GM4XqrwHnWXNOWMbloTmrYXZg10cakYGmpfsR/bbzQ6JAJI4ihuyADKLnBgrCe" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/stylesheet.css">
</head>
<body class="color-scheme-light">
    <header class="header container-fluid">
        <div class="container">
            <div class="row align-items-center">
                <div class="col">
                    <div class="logo">
                        <img src="./images/logo.png.png" alt="Logo">
                        <h1>MODO<br>ESTUDIO</h1>
                    </div>
                </div>   
                <div class="col">
                    <nav class="menu_paginas">
                        <ul>
                            <li class="pasaje"><a href="index.php">Home</a></li>
                            <li class="pasaje"><a href="pages/calendario.php">Calendario</a></li>
                            <li class="pasaje"><a href="pages/modo_estudio.php">Modo estudio</a></li>
                            <li class="pasaje"><a href="pages/perfil.php">Perfíl</a></li>
                            <li class="pasaje"><a href="pages/progreso.php">Progreso</a></li>
                            <li class="pasaje"><a href="pages/recomendaciones.php">Recomendaciones</a></li>
                            <li class="pasaje"><a href="form_login.php">Inicia sesion</a></li>
                            <li class="pasaje"><a href="form_registro.php">Registrate</a></li>
                    </nav>
                </div>
            </div>
        </div>
    </header>
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
    echo "<p class='alert alert-success'>Registrado correctamenre.</p>";
    echo "<br><a href='index.php'>Ir al comienzo</a>";
} else {
    echo "<p class='alert alert-danger'>Hubo un error en la carga de datos.</p>";
}
?>
</body>
</html>