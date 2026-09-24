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
    <section class="hero">
         <div class="texto-hero">
            <h2>Tu plan de estudio, pensado para vos</h2>
        </div>
    </section>

<article class="registro_usuario">



    <form action="recibirdatos.php" method="POST" >
        <ul>
            <li>
                <label for="nombre">Nombre</label>
        <input type="text" name="nombre" placeholder="Ingrese su nombre" >
            </li>
            <li>
                <label for="link">Mail</label>
        <input type="email" name="email" placeholder="Ingrese un mail">
            </li>
            <li>
                <label for="contraseña">Contraseña</label>
        <input type="password" name="contraseña" placeholder="Ingrese una contraseña">
            </li>
            <li>
                <label for="edad">Fecha de nacimiento</label>
        <input type="date" name="edad" placeholder="Ingrese su fecha de nacimiento">
            </li>
            <li>
            <label for="pais">país</label>
        <input type="text" name="pais" placeholder="Ingrese su pais"> 
            </li>
        </ul>
        <button>Enviar</button>
    
    </form>

</article>

   
<section class="info-web">

    <div class="imagen-info">

        <img src="./images/ChatGPT Image 10 may 2026, 04_35_40 p.m..png" alt="imagen estudio">

    </div>

    <div class="texto-info">

        <h2>¿Qué hace nuestra página web?</h2>
        <p>
            Nuestra página proporciona ayuda a estudiantes
            que no encuentran la manera de estudiar y organizarse.
            Los ayudamos a enfocarse y mejorar su rendimiento
            a través de ejercicios fáciles y adaptados a cada estudiante.
        </p>

    </div>

</section>

 <section class="progreso">

        <div class="caja-progreso">

            <h3>Progreso Actual</h3>

            <article class="contenido-progreso">
                <p class="texto-home">Clase del día</p>
                <p class="texto-home">Matemática</p>
                <p class="texto-home">45 min</p>
                <p class="texto-home">Progreso 0%</p>

                  <a href="./pages/modo_estudio.html" class="btn-flecha">
                  →
                  </a>
            </article>

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
</html>