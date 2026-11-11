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
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>

        <main>
    <section class="contenedor">
        <div class="caja_registro">
            <h1 class="mb-4 text-center">Iniciar Sesión</h1>

            <!-- Formulario con la misma estructura visual que el registro -->
            <form action="login.php" method="POST">
                <ul>
                    <li>
                        <label for="mail">Correo Electrónico</label>
                        <input class="form-control" type="email" id="mail" name="mail" placeholder="Ingrese su mail" required>
                    </li>
                    <li>
                        <label for="contraseña">Contraseña</label>
                        <input class="form-control" type="password" id="contraseña" name="contraseña" placeholder="Ingrese su contraseña" required>
                    </li>
                </ul>

                <div class="botonesdelform text-center mt-3">
                    <button type="submit" class="btn btn-primary">Iniciar sesión</button>
                    <a href="form_registro.php" class="btn btn-outline-primary ms-2">Registrarse</a>
                    <a href="salir.php" class="btn btn-outline-danger ms-2">Cerrar sesión</a>
                </div>
            </form>
        </div>
    </section>
</main>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>