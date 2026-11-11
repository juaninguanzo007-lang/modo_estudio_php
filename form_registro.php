<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    <section class="contenedor">
    <div class="caja_registro">
        <form action="recibirdatos.php" method="POST" >
            <ul>
                <li>
                    <label for="nombre">Nombre</label>
            <input class="form-control" type="text" name="nombre" placeholder="Ingrese su nombre" >
                </li>
                <li>
                    <label for="link">Mail</label>
            <input class="form-control" type="email" name="email" placeholder="Ingrese un mail">
                </li>
                <li>
                    <label for="contraseña">Contraseña</label>
            <input  class="form-control"type="password" name="contraseña" placeholder="Ingrese una contraseña">
                </li>
                <li>
                    <label for="edad">Fecha de nacimiento</label>
            <input class="form-control" type="date" name="edad" placeholder="Ingrese su fecha de nacimiento">
                </li>
                <li>
                <label for="pais">País</label>
            <input class="form-control" type="text" name="pais" placeholder="Ingrese su pais"> 
                </li>
            </ul>
            <button>Enviar</button>
        
        </form>
    </div>

</section>
</body>
</html>