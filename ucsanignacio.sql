-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-05-2024 a las 23:59:00
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
-- Base de datos: `ucsanignacio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `id_admin` int(11) NOT NULL,
  `nombre_admin` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`id_admin`, `nombre_admin`, `password`, `fecha_creacion`) VALUES
(1, 'admin02', '$2y$10$lG4rjEDlywrxW9.hFBDp0uSRLiE4KWbREei/LwO4ut4PVyPUIMtWC', '2024-04-30 15:07:47'),
(2, 'admin02', '$2y$10$8IXKnOVELV2GPAXrNj3xU.6aLH8Cfyig1de5l5WCjEOqe7L0XapB2', '2024-04-30 15:08:54'),
(3, 'admin3', '$2y$10$QNeTGHIg4L5nHftrsjMOc.MmrRgu1Z2a2hYv/I74f2iaj2fnwXaqm', '2024-04-30 15:09:37'),
(4, 'admin4', '$2y$10$XIId8qzOCPpMicukBVprxu6zisJpG3UiSW7XHAx92P0m7jPTlEdMe', '2024-04-30 15:11:01'),
(5, 'admin4', '$2y$10$TBEUQsOwdyqXceXh7ZTxteBpbthjnEIhv8P11s08ngLaaMLBwlpim', '2024-04-30 15:11:56'),
(6, 'admin4', '$2y$10$Df68Cd8rBO0xpkHnFlpc6e26YSuwg4qcFAw2/UZIqJYEL9jkcyUcS', '2024-04-30 15:13:10'),
(7, 'admin3', '$2y$10$k/leBxQQxK5mioJLVCBQVOZxId/XzgwdD/aHgYRVUGV3NwxAAGTOm', '2024-04-30 15:13:20'),
(8, 'admin3', '$2y$10$NQFWYe3xCSFStX3aGRJuFOT6aKJsD1SnnF8KllGExKwbwYmpbFGhG', '2024-04-30 15:13:44'),
(9, 'admin3', '$2y$10$6MSpngsD98AJHXS5KSR4wOVp7Flmtt8sXmENXTfxMsJZpc.ssFUzS', '2024-04-30 15:13:59'),
(10, 'admin3', '$2y$10$1UEfXmNvis3LWllO1E4SwOf0W93KrJcqga/Ljlb8Ra6cqmnrSFmyS', '2024-04-30 15:14:40'),
(11, 'admin2', '$2y$10$5YxbDWoZXSa.oAFMgqMsReoRdlRywaYm33Mpq50TKXLGccAplk.wy', '2024-04-30 15:14:47'),
(12, 'admin2', '$2y$10$HNWTLKlAIOkgccb92rATtOLOLkyXbrBTsk6ydfLo4EEzSxCiV8A4C', '2024-04-30 15:15:38'),
(13, 'admin2', '$2y$10$fEoSO.JLxFFOWCPGqMMrXOQ/o5JS5aAukqO8BqOIpDZt33eoVvdVq', '2024-04-30 15:15:46'),
(14, 'admin2', '$2y$10$84f/aX/oATKLO/iU6OiAW.4a3qN5gnadeLp92Kqr5iO8FaZ.xSaL6', '2024-04-30 15:16:37'),
(15, 'admin12', '$2y$10$L2UqGvCg/F2f4lpNwgvt3.jgigoepI.x1V/OSr7a6L1x0fj8.RdLC', '2024-04-30 15:19:52'),
(16, 'admin', '$2y$10$0QbsASCc7e.1Qm13aH37dO0aEx9Hxxw50iQOw.Vlyuo5CstGlgI/y', '2024-05-01 23:23:15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carreras`
--

CREATE TABLE `carreras` (
  `id_carreras` int(11) NOT NULL,
  `nombre_carrera` varchar(250) NOT NULL,
  `informacion` varchar(255) NOT NULL,
  `imagen` varchar(200) NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `carreras`
--

INSERT INTO `carreras` (`id_carreras`, `nombre_carrera`, `informacion`, `imagen`, `fecha_creacion`) VALUES
(1, 'Ingenieria Informatica', 'Ciencias y Tecnologia', 'informatica.jpg', '2024-05-01 22:15:28'),
(3, 'Administracion de Empresas', 'Empresariales', 'administracion.jpg', '2024-05-03 16:07:37');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicaciones`
--

CREATE TABLE `publicaciones` (
  `id_post` int(11) NOT NULL,
  `titulo` varchar(250) NOT NULL,
  `publicacion` varchar(500) NOT NULL,
  `imagen` varchar(250) NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `publicaciones`
--

INSERT INTO `publicaciones` (`id_post`, `titulo`, `publicacion`, `imagen`, `fecha_creacion`) VALUES
(5, 'Juegos UCSI', 'Noche Inaugural Juegos UCSI 2023, desfile de delegaciones 🎉', '404568888_878498047177715_8512348781048701052_n.jpg', '2024-05-01 23:26:12'),
(6, 'Peña Folclórica', 'Peña Folclórica Competencia de Canto y Baile 🎤🎉', '405226485_671207581801109_5735601387929760698_n.jpg', '2024-05-01 23:28:59'),
(12, 'Seminario Tecnologico', 'Simon: La IA: Heroe o villano?', '441142799_1373402296677056_3159131442089051493_n.webp', '2024-05-03 15:05:46');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `repositorio`
--

CREATE TABLE `repositorio` (
  `id_repositorio` int(11) NOT NULL,
  `titulo` text NOT NULL,
  `autor` varchar(255) NOT NULL,
  `fecha` date NOT NULL,
  `abstract` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `repositorio`
--

INSERT INTO `repositorio` (`id_repositorio`, `titulo`, `autor`, `fecha`, `abstract`) VALUES
(5, 'Análisis de experiencias turísticas de usuarios de red social Instagram en Paraguay utilizando Minería de Datos e Inteligencia Artificial', 'Manolo Lamas', '2024-04-24', 'Tesis.pdf'),
(6, 'Análisis de experiencias turísticas de usuarios de red social Instagram en Paraguay utilizando Minería de Datos e Inteligencia Artificial', 'Manolo Lamas', '2024-04-24', 'Tesis.pdf'),
(7, 'Aplicación de redes neuronales a datos académicos históricos de Universidad Católica Campus Itapúa en el periodo 2010-2020 para la predicción del abandono universitario\r\n', 'Lourdes Rocío Careaga Ojeda', '2024-04-17', 'Tesis.pdf');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indices de la tabla `carreras`
--
ALTER TABLE `carreras`
  ADD PRIMARY KEY (`id_carreras`);

--
-- Indices de la tabla `publicaciones`
--
ALTER TABLE `publicaciones`
  ADD PRIMARY KEY (`id_post`);

--
-- Indices de la tabla `repositorio`
--
ALTER TABLE `repositorio`
  ADD PRIMARY KEY (`id_repositorio`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `carreras`
--
ALTER TABLE `carreras`
  MODIFY `id_carreras` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `publicaciones`
--
ALTER TABLE `publicaciones`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `repositorio`
--
ALTER TABLE `repositorio`
  MODIFY `id_repositorio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
