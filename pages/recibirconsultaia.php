<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modo estudio</title>
    <link rel="stylesheet" href="../css/stylesheet.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
</head>

<body>
    <?php 
        include ("conexion.php")

        $sql = "SELECT * FROM ejercicios";

        $consulta_ia = $_GET['consulta'] ?? '';
        $sql .= WHERE materia LIKE ['consulta'] OR tipo LIKE ['consulta'];

        $resultado = mysqli_query($conexion, $sql) or die("Lo sentimos, la IA no puede responder esta consulta en este momento. <br>".mysqli_error($conexion));