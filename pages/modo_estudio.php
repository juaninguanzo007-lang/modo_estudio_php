<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modo estudio</title>
    <link rel="stylesheet" href="../css/stylesheet.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet">
</head>
<body>
    <header class="header">
        <div class="logo">
        <img src="../images/logo.png.png" alt="Logo">
        <h1>MODO<br>ESTUDIO</h1>
    </div>
        <nav class="menu">
            <ul>
                <li class="pasaje"><a href="../index.php">Home</a></li>
                <li class="pasaje"><a href="./calendario.php">Calendario</a></li>
                <li class="pasaje"><a href="./modo_estudio.php">Modo estudio</a></li>
                <li class="pasaje"><a href="./perfil.php">Perfíl</a></li>
                <li class="pasaje"><a href="./progreso.php">Progreso</a></li>
                <li class="pasaje"><a href="./recomendaciones.php">Recomendaciones</a></li>
            </ul>
    </header>
    <section class="titulo-pagina">
    <h2>Modo estudio</h2>
    </section>
    <section class="modo-estudio">

    <div class="subir-archivo">

        <p>➕ Sube tus archivos y dinos qué necesitas...</p>

    </div>

    <div class="consulta-ia">

        <label for="consulta">¿Qué necesitas estudiar?</label>

        <textarea
            id="consulta"
            placeholder="Ej: Explícame polinomios y crea 5 ejercicios para practicar">
        </textarea>

        <div class="acciones-ia">

            <button>Explicar</button>
            <button>Resumir</button>
            <button>Ejercicios</button>
            <button>Examen</button>

        </div>

    </div>

    <div class="respuesta-ia">

        <h3>Respuesta de la IA</h3>

        <p>
            Aquí aparecerá la explicación, resumen o ejercicios
            generados para el estudiante.
        </p>

    </div>

    </section>
    <footer>

    <div class="footer-links">

        <a href="#">Términos y condiciones</a>
        <a href="#">Política de privacidad</a>
        <a href="#">Sobre nosotros</a>
        <a href="#">Ayuda y soporte</a>

    </div>

    <hr>

    <div class="redes">

        <p>Encuéntranos en</p>

        <div class="iconos">

            <a href="#">WhatsApp</a>
            <a href="#">TikTok</a>
            <a href="#">X</a>
            <a href="#">Instagram</a>

        </div>

    </div>

</footer>
</body>    