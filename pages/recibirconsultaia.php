<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modo estudio - Resultados</title>
    <link rel="stylesheet" href="../css/stylesheet.css">
</head>
<body>
    <?php
    include("conexion.php");

    // Recogemos lo que el usuario escribió en el buscador (asegurate que tu input se llame 'busqueda_ia')
    $busqueda = $_GET['busqueda_ia'] ?? '';

    // Armamos la consulta buscando en tipo, materia o resumen
    $sql = "SELECT * FROM ejercicios WHERE tipo LIKE '%$busqueda%' OR materia LIKE '%$busqueda%' OR resumen LIKE '%$busqueda%'";

    $resultado = mysqli_query($conexion, $sql) or die("Hubo un error en la consulta. <br>" . mysqli_error($conexion));
    
    echo "<h2>Cantidad de resultados encontrados: " . mysqli_num_rows($resultado) . "</h2>";

    echo "<ul>";
    while ($fila = mysqli_fetch_assoc($resultado)) {
        // En vez de 'id', usamos 'id_ejercicios' que es como se llama en tu tabla
        // Mostramos el 'tipo' y la 'materia' como enlace hacia el detalle
        echo "<li><a href='detalle.php?id=" . $fila['id_ejercicios'] . "'>" . $fila['tipo'] . " (" . $fila['materia'] . ")</a></li>";
    }
    echo "</ul>";

    mysqli_close($conexion);
    ?>
</body>
</html>
