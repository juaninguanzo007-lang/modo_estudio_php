<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modo estudio - Resultados</title>
    <!-- La ruta del CSS sube un nivel porque está en css/ -->
    <link rel="stylesheet" href="css/stylesheet.css">
</head>
<body>
    <?php
    include("conexion.php");

    $busqueda = $_GET['busqueda_ia'] ?? '';

    $sql = "SELECT * FROM ejercicios WHERE tipo LIKE '%$busqueda%' OR materia LIKE '%$busqueda%' OR resumen LIKE '%$busqueda%'";

    $resultado = mysqli_query($conexion, $sql) or die("Hubo un error en la consulta. <br>" . mysqli_error($conexion));
    
    echo "<h2>Cantidad de resultados encontrados: " . mysqli_num_rows($resultado) . "</h2>";

    echo "<ul>";
    while ($fila = mysqli_fetch_assoc($resultado)) {
        echo "<li><a href='detalle.php?id=" . $fila['id_ejercicios'] . "'>" . $fila['tipo'] . " (" . $fila['materia'] . ")</a></li>";
    }
    echo "</ul>";

    mysqli_close($conexion);
    ?>
</body>
</html>
