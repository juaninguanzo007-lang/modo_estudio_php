# Modo Estudio

Proyecto web académico desarrollado con PHP y MySQL para acompañar a estudiantes en la organización de sus estudios. La interfaz reúne distintas secciones —calendario, modo estudio, perfil, progreso y recomendaciones— y permite consultar contenidos y ejercicios almacenados en una base de datos.

**Repositorio:** https://github.com/juaninguanzo007-lang/modo_estudio_php

## Tecnologías utilizadas

- **PHP:** procesamiento de formularios y consultas al servidor.
- **MySQL / MariaDB:** almacenamiento de usuarios y ejercicios.
- **HTML5:** estructura de las vistas.
- **CSS3:** estilos propios definidos en `css/stylesheet.css`.
- **Bootstrap:** componentes y recursos de diseño incluidos mediante CDN.
- **Google Fonts:** tipografía Poppins.

## Estructura del proyecto

```text
modo_estudio_php/
├── css/
│   └── stylesheet.css
├── images/
│   ├── logo.png.png
│   └── imágenes utilizadas por la interfaz
├── pages/
│   ├── calendario.php
│   ├── modo_estudio.php
│   ├── perfil.php
│   ├── progreso.php
│   └── recomendaciones.php
├── conexion.php
├── detalle.php
├── form_login.php
├── form_registro.php
├── index.php
├── login.php
├── recibirconsultaia.php
├── recibirdatos.php
├── salir.php
└── modoestudio (1).sql
```

## Instalación y configuración local

1. Instalar un entorno local que incluya Apache, PHP y MySQL/MariaDB, por ejemplo XAMPP.
2. Clonar o descargar este repositorio dentro de la carpeta pública del servidor local (por ejemplo, `htdocs` en XAMPP).
3. Iniciar los servicios de Apache y MySQL desde el panel de control.
4. Abrir phpMyAdmin y crear una base de datos llamada `modoestudio`.
5. Seleccionar esa base de datos e importar el archivo `modoestudio (1).sql` incluido en el proyecto.
6. Revisar `conexion.php` y adaptar los datos de conexión (`host`, `user`, `pass` y `database`) a la configuración del servidor local.
7. Abrir el proyecto desde el navegador, por ejemplo:

   `http://localhost/modo_estudio_php-main/`

> La configuración incluida en `conexion.php` utiliza `localhost`, el usuario `root`, contraseña vacía y la base `modoestudio`. Estos valores corresponden a una configuración local de ejemplo y pueden necesitar cambios según el entorno.

## Base de datos

El proyecto utiliza la base de datos **`modoestudio`**, compuesta por dos tablas:

### Tabla `usuarios`

Almacena los datos ingresados en el formulario de registro.

| Campo | Tipo | Descripción |
|---|---|---|
| `id_usuario` | `int(11)` | Identificador del usuario y clave primaria autoincremental. |
| `nombre` | `varchar(30)` | Nombre. |
| `mail` | `varchar(50)` | Correo electrónico. |
| `contraseña` | `varchar(20)` | Contraseña almacenada por el código actual. |
| `edad` | `date` | Fecha de nacimiento. |
| `pais` | `varchar(20)` | País. |

### Tabla `ejercicios`

Contiene material de estudio que se puede consultar desde la sección Modo estudio.

| Campo | Tipo | Descripción |
|---|---|---|
| `id_ejercicios` | `int(11)` | Identificador del ejercicio y clave primaria autoincremental. |
| `materia` | `varchar(30)` | Materia a la que pertenece el contenido. |
| `tipo` | `varchar(30)` | Tema o tipo de ejercicio. |
| `resumen` | `tinytext` | Explicación o resumen del tema. |
| `ejemplos` | `tinytext` | Ejemplo o consigna relacionada. |

El archivo SQL incluye la estructura de ambas tablas y registros de prueba para poder recrear la base de datos en un entorno local.

## Navegación por el sitio

La navegación principal se encuentra en el encabezado y permite acceder a las siguientes vistas:

- **Home (`index.php`):** presenta el objetivo general de Modo Estudio y accesos a otras secciones.
- **Calendario (`pages/calendario.php`):** muestra una vista mensual de calendario.
- **Modo estudio (`pages/modo_estudio.php`):** contiene un campo de texto para ingresar un tema o concepto que se quiera buscar.
- **Perfil (`pages/perfil.php`):** presenta información y estadísticas de ejemplo del estudiante.
- **Progreso (`pages/progreso.php`):** muestra indicadores visuales de clases, horas y ejercicios.
- **Recomendaciones (`pages/recomendaciones.php`):** presenta sugerencias y alertas de estudio de ejemplo.
- **Registro (`form_registro.php`):** permite completar los datos personales para enviar el formulario.
- **Inicio de sesión (`form_login.php`):** presenta los campos de correo y contraseña.

Las vistas de calendario, perfil, progreso y recomendaciones contienen actualmente información de muestra definida en el propio código; no se encuentran conectadas a registros de actividad del usuario en la base de datos.

## Envío de formularios y consultas

### Registro

1. Ingresar a **Registrate** desde el menú.
2. Completar nombre, correo, contraseña, fecha de nacimiento y país.
3. Enviar el formulario.
4. El formulario está configurado para enviar los datos mediante el método `POST` a `recibirdatos.php`.
5. `recibirdatos.php` recibe los valores y ejecuta una consulta `INSERT` sobre la tabla `usuarios`.

### Búsqueda de contenidos

1. Entrar en **Modo estudio**.
2. Escribir una palabra o tema en el campo de consulta.
3. Presionar **Buscar**.
4. El formulario envía el texto mediante `GET` a `recibirconsultaia.php`.
5. El archivo realiza una búsqueda en la tabla `ejercicios`, comparando el texto con los campos `tipo`, `materia` y `resumen`.
6. Los resultados muestran el tema, la materia, el resumen y el ejemplo. El enlace de cada resultado abre `detalle.php` con el identificador del ejercicio para consultar su información.

> En la versión actual, esta búsqueda consulta los contenidos guardados en la base de datos. Aunque la interfaz menciona una respuesta de IA, el código incluido no realiza una conexión con un servicio externo de inteligencia artificial.

## Sesiones y acceso

El proyecto incluye `salir.php`, que ejecuta `session_start()`, destruye la sesión con `session_destroy()` y redirige a `form_login.php`.

**Estado de la implementación:** en los archivos actuales no se observa la creación de una sesión al validar el inicio de sesión ni controles de sesión que restrinjan el acceso a las páginas. Además, el formulario de inicio de sesión envía correo y contraseña a `login.php`, pero ese archivo procesa campos de registro (`nombre`, `email`, `contraseña`, `edad` y `pais`) e intenta insertar un usuario. Por lo tanto, el inicio de sesión y la zona segura mediante sesiones todavía no están implementados de forma funcional en esta versión.

## Capturas de pantalla

Agregar las capturas dentro de una carpeta `docs/capturas/` y actualizar los nombres de archivo de los ejemplos siguientes:

| Captura | Archivo sugerido |
|---|---|
| Página principal | `docs/capturas/inicio.png` |
| Vista Modo estudio | `docs/capturas/modo-estudio.png` |
| Formularios de registro e inicio de sesión | `docs/capturas/registro-login.png` |
| Estructura de la base de datos en phpMyAdmin | `docs/capturas/base-datos.png` |

Cuando las imágenes estén subidas al repositorio, se pueden mostrar en esta sección con Markdown, por ejemplo:

```markdown
![Página principal](docs/capturas/inicio.png)
![Modo estudio](docs/capturas/modo-estudio.png)
![Base de datos](docs/capturas/base-datos.png)
```

## Autor

Proyecto académico desarrollado por **Juan Inguanzo**.

---

## Observaciones técnicas

La documentación describe el comportamiento de los archivos incluidos en el repositorio. Antes de utilizar el proyecto fuera de un entorno de prueba, conviene revisar algunos aspectos:

- El formulario de inicio de sesión y su archivo receptor (`form_login.php` y `login.php`) no coinciden en los datos que envían y reciben.
- El formulario de registro envía los datos a `recibirdatos.php`, que guarda la contraseña sin cifrar. El archivo `login.php` contiene otro procedimiento de inserción que utiliza `password_hash()`, pero no corresponde al flujo del formulario actual.
- En el SQL, el campo `contraseña` está definido como `varchar(20)`, una longitud insuficiente para almacenar hashes generados por `password_hash()`.
- Las consultas que reciben datos del usuario deberían migrarse a consultas preparadas para evitar inyección SQL y validar los datos antes de guardarlos o mostrarlos.
- Para cumplir con un acceso privado mediante sesiones, hace falta validar las credenciales, crear la sesión al iniciar sesión y comprobarla en cada página que deba estar protegida.
