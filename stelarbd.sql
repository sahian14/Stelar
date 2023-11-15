-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-11-2023 a las 14:18:51
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `stelarbd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `chat`
--

CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `chat`
--

INSERT INTO `chat` (`id`, `name`, `message`, `created_on`) VALUES
(2, 'Diana Patricia Mosquera Diaz', 'Buenos días, la media técnica para los chicos\r\n', '2023-11-15 03:26:18'),
(3, 'Diana Patricia Mosquera Diaz', 'queda para mañana 15/11 de 8 a 12 a.m', '2023-11-15 03:27:15'),
(4, 'Diana Patricia Mosquera Diaz', 'Muchas gracias', '2023-11-15 03:28:02'),
(5, 'Sahian Salome Gutierrez Ossa', 'Ok. Gracias', '2023-11-15 03:29:43'),
(6, 'Ana Luisa Isaza Tangarife', 'Gracias. Feliz día', '2023-11-15 03:31:34');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(80) NOT NULL,
  `type` varchar(255) NOT NULL,
  `modified_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `register`
--

INSERT INTO `register` (`id`, `name`, `email`, `password`, `type`, `modified_on`) VALUES
(8, 'chiskis', 'chiskis@gmail.com', '$2y$10$BlF5J20IuB63szdHYFOaVOOxI1uqMhm7aRbhsIi0ATYSz4BbutCS2', 'Estudiante', '2023-11-13 17:20:39'),
(11, 'Diana Patricia Mosquera Diaz', 'mediatecnicajavieralond@gmail.com', '$2y$10$x/V36Zx79r0zqMvF0KCz6.DFpacUUqsFiJHZLhs2fhJQMeC5ik0ba', 'Docente o directivo', '2023-11-15 03:25:31'),
(12, 'Sahian Salome Gutierrez Ossa', 'sahiansalome2007@gmail.com', '$2y$10$4slm6RRY7eFrEBGq8esWwuh6E1QGEgMebIKvoMhZG5DURQj.VknlO', 'Estudiante', '2023-11-15 03:29:34'),
(13, 'Ana Luisa Isaza Tangarife', 'analuisaisaza@gmail.com', '$2y$10$hqDEshQgDQY4BZ4HNRjXLuOhSzgrwwysNAWONagJgwUgP5VJ2LcCS', 'Estudiante', '2023-11-15 03:31:13'),
(14, 'Mayerly Andrea Cartagena Gallo', 'mayerlycartagena1@gmail.com', '$2y$10$kLgeqldIrzraX0l8I7EdAOhIocCkpk1kmpW4Z.hp71stq3gDJItWa', 'Estudiante', '2023-11-15 03:41:46'),
(15, 'Laura Camila Cetre Cetre', 'lcetrecetre@gmail.com', '$2y$10$uSG3FDgjoMSisDUrlMS9yuV2ef0BKjvP0oXBL8eRhTTi1ZBlJFzPa', 'Estudiante', '2023-11-15 03:42:29'),
(16, 'Sahian Bianyeli Moreno Moreno', 'sahianbianyeli@gmail.com', '$2y$10$PNsj/ooQAFOsrNileglVMui1Jc1DKKsEKO00UAcqXhzwuLhSmLJJe', 'Estudiante', '2023-11-15 03:43:43');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
