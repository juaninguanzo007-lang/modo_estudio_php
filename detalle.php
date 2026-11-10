<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle del Ejercicio</title>
    <link rel="stylesheet" href="css/stylesheet.css">
</head>
<body>
    <?php
    include("conexion.php");

    $id = $_GET['id'] ?? '';

    $consulta = "SELECT * FROM ejercicios WHERE id_ejercicios = $id";
    $resultado = mysqli_query($conexion, $consulta) or die("Hubo un error en la consulta. <br>" . mysqli_error($conexion));
    
    $ejercicio = mysqli_fetch_assoc($resultado);
    ?>

    <h1>Materia: <?php echo $ejercicio['materia']; ?></h1>
    <h3>Tema: <?php echo $ejercicio['tipo']; ?></h3>
    <p><strong>Resumen:</strong> <?php echo $ejercicio['resumen']; ?></p>
    <p><strong>Ejemplo:</strong> <?php echo $ejercicio['ejemplos']; ?></p>

    <br>
    <a href="pages/modo_estudio.php">Volver a Modo Estudio</a>
</body>
</html>