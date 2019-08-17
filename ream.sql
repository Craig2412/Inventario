-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-08-2019 a las 18:28:48
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ream`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignacion`
--

CREATE TABLE `asignacion` (
  `id_asignacion` int(11) NOT NULL,
  `asignacion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `asignacion`
--

INSERT INTO `asignacion` (`id_asignacion`, `asignacion`) VALUES
(1, 'Asignado'),
(2, 'No asignado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo`
--

CREATE TABLE `cargo` (
  `id_cargo` int(11) NOT NULL,
  `cargo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cargo`
--

INSERT INTO `cargo` (`id_cargo`, `cargo`) VALUES
(1, 'Director de linea'),
(2, 'Coordinador'),
(3, 'Consultor jurídico');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dependencia`
--

CREATE TABLE `dependencia` (
  `id_dependencia` int(11) NOT NULL,
  `dependencia` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `dependencia`
--

INSERT INTO `dependencia` (`id_dependencia`, `dependencia`) VALUES
(1, 'Auditoria interna'),
(2, 'Atención al ciudadano'),
(3, 'Apoyo profesional'),
(4, 'Bienestar social'),
(5, 'Consultoria jurídica'),
(6, 'Dirección general de bienes raíces'),
(7, 'Dirección general del despacho'),
(8, 'Dirección general de la cultura del agua'),
(9, 'Dirección general de transferencia revolucionaria del servicio de agua al poder popular  '),
(10, 'Dirección general de servicio de infraestructura  '),
(11, 'Gestión administrativa'),
(12, 'Oficina de gestión comunicacional '),
(13, 'Oficina de planificación y presupuesto  '),
(14, 'Oficina de gestión humana '),
(15, 'Oficina de tecnologías de información y la comunicación '),
(16, 'Oficina estratégica de seguimiento y evaluación de políticas publicas  '),
(17, 'Viceministerio de administración de cuentas hidrográficas   '),
(18, 'Viceministerio para la gestión popular del agua ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario_movil`
--

CREATE TABLE `inventario_movil` (
  `id` varchar(8) NOT NULL,
  `id_asignacion` int(11) NOT NULL,
  `funcionario` text NOT NULL,
  `cargo` text NOT NULL,
  `cedula` int(11) NOT NULL,
  `telefono` varchar(17) NOT NULL,
  `piso` varchar(2) NOT NULL,
  `dependecia` text NOT NULL,
  `imei` varchar(50) NOT NULL,
  `serial` varchar(50) NOT NULL,
  `bien nacional` varchar(50) NOT NULL,
  `marca` text NOT NULL,
  `modelo` varchar(50) NOT NULL,
  `accesorios` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario_pc`
--

CREATE TABLE `inventario_pc` (
  `id` varchar(8) NOT NULL,
  `id_asignacion` int(11) NOT NULL,
  `funcionario` text NOT NULL,
  `id_cargo` int(11) NOT NULL,
  `cedula` int(8) NOT NULL,
  `telefono` varchar(17) NOT NULL,
  `piso` varchar(2) NOT NULL,
  `id_dependencia` int(11) NOT NULL,
  `marca1` text NOT NULL,
  `serie1` varchar(20) NOT NULL,
  `mac` varchar(17) NOT NULL,
  `marca2` text NOT NULL,
  `serie2` varchar(20) NOT NULL,
  `marca3` text NOT NULL,
  `serie3` varchar(20) NOT NULL,
  `marca4` text NOT NULL,
  `serie4` varchar(20) NOT NULL,
  `cargador` varchar(20) NOT NULL,
  `usuario` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `inventario_pc`
--

INSERT INTO `inventario_pc` (`id`, `id_asignacion`, `funcionario`, `id_cargo`, `cedula`, `telefono`, `piso`, `id_dependencia`, `marca1`, `serie1`, `mac`, `marca2`, `serie2`, `marca3`, `serie3`, `marca4`, `serie4`, `cargador`, `usuario`) VALUES
('PC-50581', 1, 'Ely', 3, 27038431, '4162124839', 'PB', 4, 'vit', '123541W', '123.0.0.1', 'vit', '1238456W', 'Vit', '234567D', 'Vit', '642135A', '21317S84F', 'Ely1006'),
('PC-85544', 1, 'Alexander', 2, 10379275, '04241702314', 'PB', 3, '', '', '', '', '', '', '', '', '', '', 'alexander1515');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `idrol` int(11) NOT NULL,
  `rol` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`idrol`, `rol`) VALUES
(1, 'Administrador'),
(2, 'Analista'),
(3, 'Usuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `correo` varchar(40) NOT NULL,
  `usuario` varchar(15) NOT NULL,
  `clave` varchar(100) NOT NULL,
  `rol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idusuario`, `nombre`, `correo`, `usuario`, `clave`, `rol`) VALUES
(1, 'Alexander', 'aularalexander55@gmail.com', 'admin', 'c9f699d50342c17bcc4488c06498d5fa', 1),
(2, 'Ely', 'Elychirivella10@gmail.com', 'Ely1006', 'aa144e834f5817d4b03302a00647d3c4', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asignacion`
--
ALTER TABLE `asignacion`
  ADD PRIMARY KEY (`id_asignacion`);

--
-- Indices de la tabla `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`id_cargo`);

--
-- Indices de la tabla `dependencia`
--
ALTER TABLE `dependencia`
  ADD PRIMARY KEY (`id_dependencia`);

--
-- Indices de la tabla `inventario_movil`
--
ALTER TABLE `inventario_movil`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `inventario_pc`
--
ALTER TABLE `inventario_pc`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuario` (`usuario`),
  ADD KEY `id_asignacion` (`id_asignacion`),
  ADD KEY `id_cargo` (`id_cargo`),
  ADD KEY `id_dependencia` (`id_dependencia`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`idrol`),
  ADD KEY `idrol` (`idrol`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`),
  ADD KEY `rol` (`rol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asignacion`
--
ALTER TABLE `asignacion`
  MODIFY `id_asignacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `cargo`
--
ALTER TABLE `cargo`
  MODIFY `id_cargo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `dependencia`
--
ALTER TABLE `dependencia`
  MODIFY `id_dependencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `idrol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `inventario_pc`
--
ALTER TABLE `inventario_pc`
  ADD CONSTRAINT `inventario_pc_ibfk_2` FOREIGN KEY (`id_cargo`) REFERENCES `cargo` (`id_cargo`),
  ADD CONSTRAINT `inventario_pc_ibfk_3` FOREIGN KEY (`id_dependencia`) REFERENCES `dependencia` (`id_dependencia`),
  ADD CONSTRAINT `inventario_pc_ibfk_4` FOREIGN KEY (`id_asignacion`) REFERENCES `asignacion` (`id_asignacion`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`rol`) REFERENCES `rol` (`idrol`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
