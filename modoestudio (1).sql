-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-11-2026 a las 19:55:14
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `modoestudio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ejercicios`
--

CREATE TABLE `ejercicios` (
  `id_ejercicios` int(11) NOT NULL,
  `materia` varchar(30) NOT NULL,
  `tipo` varchar(30) NOT NULL,
  `resumen` tinytext NOT NULL,
  `ejemplos` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ejercicios`
--

INSERT INTO `ejercicios` (`id_ejercicios`, `materia`, `tipo`, `resumen`, `ejemplos`) VALUES
(1, 'Matemáticas', 'Polinomios', 'Un polinomio es una expresión matemática formada por la suma o resta de términos finitos (monomios). Cada término se compone de un coeficiente numérico y una variable elevada a una potencia entera no negativa.', 'Ejemplo: $P(x) = 3x^3 - 5x^2 + 2x - 7'),
(2, 'Lengua', 'Gramática', 'La gramática es el conjunto de reglas y principios que regulan el uso de una lengua, permitiéndonos organizar las palabras para construir oraciones con sentido claro y preciso. Se divide en varias ramas fundamentales.', 'Ejercicio: Corrige el error de concordancia en la siguiente oración: El grupo de estudiantes aprobaron el examen. Respuesta: El grupo de estudiantes aprobó el examen. (El sujeto principal es el grupo, sustantivo en singular).'),
(3, 'Historia', 'La dictadura 76', 'El 24 de marzo de 1976 las Fuerzas Armadas derrocaron al gobierno constitucional en Argentina. Esta dictadura cívico-militar impuso el terrorismo de Estado, la censura y la desaparición de miles de personas. Tras la Guerra de Malvinas, el régimen cayó', 'Ejercicio: Completa el espacio en blanco con la opción correcta:\r\nLa dictadura militar iniciada en 1976 finalizó en el año 1983, permitiendo la vuelta de la democracia tras la elección del presidente ____.\r\nA) Arturo Illia\r\nB) Raúl Alfonsín\r\nC) Juan'),
(4, 'Geografía', 'Capitales', 'Las capitales son las ciudades donde se concentran la sede de gobierno y las instituciones principales de un país. Suelen ser centros políticos, culturales y económicos clave, aunque no siempre coinciden con la ciudad más poblada del territorio. (250 ', 'Ejercicio: ¿Cuál es la capital de Australia?\r\nA) Sídney\r\nB) Canberra\r\nC) Melbourne\r\nRespuesta: B) Canberra. Sídney es la ciudad más conocida y poblada, pero la capital oficial del país es Canberra desde 1913. (237 caracteres)');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `contraseña` varchar(20) NOT NULL,
  `edad` date NOT NULL,
  `pais` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `mail`, `contraseña`, `edad`, `pais`) VALUES
(1, 'juan', 'jua@gmail.com', 'sffsf', '0000-00-00', 'argentina'),
(2, 'martina', 'mm@gmail.com', 'si', '0000-00-00', 'argentina'),
(3, 'dgdeg', 'ggre@gmail.com', 'sfsg', '0000-00-00', 'argentina'),
(4, 'dgdeg', 'ggre@gmail.com', 'sfsg', '0000-00-00', 'argentina'),
(5, 'dgdeg', 'ggre@gmail.com', 'sfsg', '0000-00-00', 'argentina'),
(6, 'dgdeg', 'ggre@gmail.com', 'sfsg', '2018-02-07', 'argentina'),
(7, 'dgdeg', 'ggre@gmail.com', 'sfsg', '2018-02-07', 'argentina'),
(8, 'martina', 'juaninguanzo007@gmail.com', 'sdf', '2026-09-01', 'argentina'),
(9, 'martina', 'juaninguanzo007@gmail.com', 'sdf', '2026-09-01', 'argentina'),
(10, 'martina', 'juaninguanzo007@gmail.com', 'sdf', '2026-09-01', 'argentina'),
(11, 'martina', 'juaninguanzo007@gmail.com', 'sdf', '2026-09-01', 'argentina'),
(12, 'juan', 'juajuan@gmail.com', 'sisi', '2026-10-01', 'argentina'),
(13, '', '', '', '0000-00-00', ''),
(14, '', '', '$2y$10$5JWZyttO8U7dC', '0000-00-00', ''),
(15, '', '', '$2y$10$JptiCA8bddKuw', '0000-00-00', ''),
(16, '', '', '$2y$10$yWTFrsuG2o8Lz', '0000-00-00', ''),
(17, 'juan', 'juaninguanzo007@gmail.com', 'Maxmax1956', '2026-11-05', 'Argentina'),
(18, 'juan', 'juaninguanzo007@gmail.com', 'Maxmax1956', '2026-11-05', 'Argentina'),
(19, '', '', '$2y$10$fUhJ2L1vU7Ldf', '0000-00-00', ''),
(20, '', '', '$2y$10$qzRXa5odd2Fy6', '0000-00-00', ''),
(21, 'juan', 'juaninguanzo007@gmail.com', 'okokokoko', '2026-11-06', 'Argentina');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ejercicios`
--
ALTER TABLE `ejercicios`
  ADD PRIMARY KEY (`id_ejercicios`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ejercicios`
--
ALTER TABLE `ejercicios`
  MODIFY `id_ejercicios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
