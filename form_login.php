<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&display=swap" rel="stylesheet">
        <!-- Como estamos en la carpeta pages, subimos un nivel para buscar el icono y el css -->
        <link rel="icon" href="../images/icono.ico">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <link rel="stylesheet" href="../css/stylesheet.css">
        <title>Iniciar Sesión - Modo Estudio</title>
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
                            <li class="pasaje"><a href="../index.php">Home</a></li>
                            <li class="pasaje"><a href="./calendario.php">Calendario</a></li>
                            <li class="pasaje"><a href="./modo_estudio.php">Modo estudio</a></li>
                            <li class="pasaje"><a href="./perfil.php">Perfíl</a></li>
                            <li class="pasaje"><a href="./progreso.php">Progreso</a></li>
                            <li class="pasaje"><a href="./recomendaciones.php">Recomendaciones</a></li>
                            <li class="pasaje"><a href="../form_login.php">Inicia sesion</a></li>
                            <li class="pasaje"><a href="../form_registro.php">Registrate</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>

        <main class="maindelform container my-5">
            <div class="contenedordelform">
                <h1>Iniciar Sesión</h1>

                <form action="../login.php" method="POST">

                    <div class="campodelform mb-3">
                        <label for="mail" class="form-label">Correo Electrónico:</label>
                        <input type="email" id="mail" name="mail" placeholder="Juan@gmail.com" required class="form-control inputcampos">
                    </div>

                    <div class="campodelform mb-3">
                        <label for="contraseña" class="form-label">Contraseña:</label>
                        <input type="password" id="contraseña" name="contraseña" required class="form-control inputcampos">
                    </div>

                    <div class="botonesdelform mb-3">
                        <input type="submit" value="Iniciar sesión" class="btn btn-primary">
                        <input type="reset" class="btn btn-secondary">
                    </div>

                    <div class="botonesdelform d-flex gap-2">
                        <a href="form_registro.php" class="btn btn-outline-primary btn-sm px-3 py-2">Registrarse</a>
                        <a href="salir.php" class="btn btn-outline-danger btn-sm px-3 py-2">Cerrar sesión</a>
                    </div>
                </form>
            </div>
        </main>

        <footer class="footer container-fluid py-4 text-center">
            <p class="mb-0 textodefooter">©2026 Desarrollado por Martina Fekonja Casiña & Ezequiel López Mic</p>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>