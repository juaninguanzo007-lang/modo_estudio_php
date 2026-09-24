<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modo estudio</title>
    <link rel="stylesheet" href="./css/stylesheet.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet">
</head>
<body>
    <header class="header">
       <div class="logo">
            <img src="./images/logo.png.png" alt="Logo">
            <h1>MODO<br>ESTUDIO</h1>
        </div>
        <nav class="menu">
            <ul>
                <li class="pasaje"><a href="./index.php">Home</a></li>
                <li class="pasaje"><a href="./pages/calendario.php">Calendario</a></li>
                <li class="pasaje"><a href="./pages/modo_estudio.php">Modo estudio</a></li>
                <li class="pasaje"><a href="./pages/perfil.php">Perfíl</a></li>
                <li class="pasaje"><a href="./pages/progreso.php">Progreso</a></li>
                <li class="pasaje"><a href="./pages/recomendaciones.php">Recomendaciones</a></li>
            </ul>
        </nav>
    </header>
<?php
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $contraseña = $_POST['contraseña'];
        $edad = $_POST['edad'];
        $pais = $_POST['pais'];

        $host="localhost";
        $user="root";
        $pass="";
        $database="modoestudio";

        $conexion = mysqli_connect($host, $user, $pass, $database);
        if ($conexion === false) {
            die("Hubo un error. <br>" . mysqli_connect_error());
        }

        $query1="INSERT INTO usuarios VALUES(0,'$nombre','$email','$contraseña','$edad','$pais')";

         $consulta = mysqli_query($conexion,$query1) or die("Hubo un error en la consulta. <br>".mysqli_error($conexion));
        mysqli_close($conexion); 

         if($consulta==true){
            echo "<p class='alert alert-success'>Datos guardados correctamente</p>";    
        }else{
            echo "<p class='alert alert-danger'>Hubo un error en la carga de datos</p>";
        }


 ?>