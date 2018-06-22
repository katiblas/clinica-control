-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 19-04-2018 a las 03:38:19
-- Versión del servidor: 5.7.17-log
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `clinica_bd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `analisis`
--

CREATE TABLE `analisis` (
  `num_a` varchar(255) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `analisis`
--

INSERT INTO `analisis` (`num_a`, `fecha`) VALUES
('10-Examen1', '2018-04-15'),
('11-ExamenJ', '2018-04-10'),
('11-ExamenV', '2018-04-10'),
('28-Examen5', '2018-04-13'),
('31-ExamenC', '2018-04-12'),
('38-Examen6', '2018-03-16'),
('39-Examen6', '2018-04-04'),
('8-Examen9', '2018-04-12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consultas`
--

CREATE TABLE `consultas` (
  `cod_c` int(2) NOT NULL,
  `fecha` date NOT NULL,
  `diagnostico` varchar(100) NOT NULL,
  `tratamiento` varchar(100) NOT NULL,
  `ci_m` int(10) NOT NULL,
  `ci_p` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `consultas`
--

INSERT INTO `consultas` (`cod_c`, `fecha`, `diagnostico`, `tratamiento`, `ci_m`, `ci_p`) VALUES
(27, '2018-03-27', 'hola', 'hola', 5666554, 65434565),
(28, '2018-04-10', 'dolor', 'hola', 5666554, 65434565),
(29, '2018-04-12', 'diarrea', 'loperan', 5666554, 25162192),
(30, '2018-04-10', 'd', 'd', 25162192, 25162192),
(31, '2018-04-14', 'dolor en la espalda', 'placas', 5666554, 23232323);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `enfermedades`
--

CREATE TABLE `enfermedades` (
  `cod_enf` int(2) NOT NULL,
  `nombre_enf` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `enfermedades`
--

INSERT INTO `enfermedades` (`cod_enf`, `nombre_enf`) VALUES
(1, 'Trastorno Menstrual'),
(2, 'Trastorno Hipertenso'),
(3, 'Trastorno Cardiaco'),
(4, 'Bebedor'),
(5, 'Fumador'),
(6, 'Osteoporosis'),
(7, 'Dolencias en la Prostata'),
(8, 'No tiene');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especialidad`
--

CREATE TABLE `especialidad` (
  `cod_esp` int(2) NOT NULL,
  `nombre` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `especialidad`
--

INSERT INTO `especialidad` (`cod_esp`, `nombre`) VALUES
(1, 'Cardiologo'),
(2, 'ginecologo'),
(3, 'traumatologo'),
(74, 'Neurologo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medicos`
--

CREATE TABLE `medicos` (
  `ci_m` int(10) NOT NULL,
  `nombre_m` varchar(20) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `cod_esp` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `medicos`
--

INSERT INTO `medicos` (`ci_m`, `nombre_m`, `apellido`, `cod_esp`) VALUES
(5666554, 'Marcos', 'Torrealba', 3),
(9009876, 'Mario', 'Vazquez', 2),
(21334554, 'Ricardo', 'Gonzalez', 2),
(25162192, 'johan alexander', 'pinilla ruiz', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paciente`
--

CREATE TABLE `paciente` (
  `ci_p` int(10) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(20) NOT NULL,
  `edad` int(2) NOT NULL,
  `direccion` varchar(40) NOT NULL,
  `sexo` varchar(15) NOT NULL,
  `cod_enf` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `paciente`
--

INSERT INTO `paciente` (`ci_p`, `nombre`, `apellido`, `edad`, `direccion`, `sexo`, `cod_enf`) VALUES
(4, 'manuel', 'miranda', 21, 'funda guanare', 'Masculino', 5),
(21, 'o', 'o', 23, 'o', 'Femenino', 3),
(23232323, 'juann', 'perez', 32, 'calle 34 ', 'Masculino', 7),
(25162192, 'johan', 'pinilla', 23, 'edificio', 'Masculino', 8),
(65434565, 'maria', 'velazque', 34, 'calle 2', 'Femenino', 3),
(99999999, 'k', 'k', 73, 'ko', 'Masculino', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `cod_r` int(2) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `ci_p` int(10) NOT NULL,
  `num_a` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`cod_r`, `descripcion`, `ci_p`, `num_a`) VALUES
(35, 'huesos', 65434565, '38-Examen6'),
(36, 'prueba1', 4, '11-ExamenV'),
(37, 'prueba2', 4, '11-ExamenJ'),
(38, 'no se', 25162192, '31-ExamenC'),
(39, 'para1', 25162192, '8-Examen9'),
(40, 'se Observo desgaste en un disco', 23232323, '10-Examen1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usu` int(2) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `clave` varchar(255) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `cedula` varchar(10) NOT NULL,
  `nivel` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usu`, `usuario`, `clave`, `nombre`, `apellido`, `cedula`, `nivel`) VALUES
(1, 'ester', '1234', 'Ester', 'parra', '24688373', 'usuario'),
(65, 'marian', '1234', 'Marian', 'Perdomo', '25315610', 'Administrador'),
(71, 'kati', '1234', 'katherin', 'valderrama', '25652058', 'Administrador');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `analisis`
--
ALTER TABLE `analisis`
  ADD PRIMARY KEY (`num_a`);

--
-- Indices de la tabla `consultas`
--
ALTER TABLE `consultas`
  ADD PRIMARY KEY (`cod_c`),
  ADD KEY `ci_m` (`ci_m`),
  ADD KEY `ci_p` (`ci_p`);

--
-- Indices de la tabla `enfermedades`
--
ALTER TABLE `enfermedades`
  ADD PRIMARY KEY (`cod_enf`);

--
-- Indices de la tabla `especialidad`
--
ALTER TABLE `especialidad`
  ADD PRIMARY KEY (`cod_esp`);

--
-- Indices de la tabla `medicos`
--
ALTER TABLE `medicos`
  ADD PRIMARY KEY (`ci_m`),
  ADD KEY `cod_esp` (`cod_esp`);

--
-- Indices de la tabla `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`ci_p`),
  ADD KEY `Cod_enf` (`cod_enf`);

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`cod_r`),
  ADD KEY `ci_p` (`ci_p`),
  ADD KEY `num_a` (`num_a`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usu`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `consultas`
--
ALTER TABLE `consultas`
  MODIFY `cod_c` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT de la tabla `enfermedades`
--
ALTER TABLE `enfermedades`
  MODIFY `cod_enf` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `especialidad`
--
ALTER TABLE `especialidad`
  MODIFY `cod_esp` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;
--
-- AUTO_INCREMENT de la tabla `medicos`
--
ALTER TABLE `medicos`
  MODIFY `cod_esp` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `cod_r` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usu` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `consultas`
--
ALTER TABLE `consultas`
  ADD CONSTRAINT `consultas_ibfk_1` FOREIGN KEY (`ci_m`) REFERENCES `medicos` (`ci_m`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `consultas_ibfk_2` FOREIGN KEY (`ci_p`) REFERENCES `paciente` (`ci_p`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `medicos`
--
ALTER TABLE `medicos`
  ADD CONSTRAINT `medicos_ibfk_2` FOREIGN KEY (`cod_esp`) REFERENCES `especialidad` (`cod_esp`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `paciente`
--
ALTER TABLE `paciente`
  ADD CONSTRAINT `paciente_ibfk_1` FOREIGN KEY (`cod_enf`) REFERENCES `enfermedades` (`cod_enf`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `registro`
--
ALTER TABLE `registro`
  ADD CONSTRAINT `registro_ibfk_2` FOREIGN KEY (`ci_p`) REFERENCES `paciente` (`ci_p`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `registro_ibfk_3` FOREIGN KEY (`num_a`) REFERENCES `analisis` (`num_a`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
