<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modo estudio</title>
    <link rel="stylesheet" href="../css/stylesheet.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<body>
    <?php
    include ("conexion.php")
    $sql = "SELECT * FROM ejercicios";

    $busqueda = $_GET['busqueda_ia'] ?? '';
    $sql .= WHERE nombre LIKE '%busqueda%' OR 

