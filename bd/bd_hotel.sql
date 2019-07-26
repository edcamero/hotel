-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-07-2019 a las 23:53:44
-- Versión del servidor: 10.3.16-MariaDB
-- Versión de PHP: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `hotel2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `persona_id` varchar(15) NOT NULL,
  `tipo_cliente_id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id`, `persona_id`, `tipo_cliente_id`, `usuario_id`) VALUES
(11111, '11111', 1, 11111);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `id` int(11) NOT NULL,
  `persona_id` varchar(15) NOT NULL,
  `tipo_empleado_id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `habitacion`
--

CREATE TABLE `habitacion` (
  `id` varchar(3) NOT NULL,
  `tipo_habitacion_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hab_reserva`
--

CREATE TABLE `hab_reserva` (
  `habitacion_id` varchar(3) NOT NULL,
  `reserva_id` int(11) NOT NULL,
  `reserva_id1` int(11) NOT NULL,
  `reserva_empleado_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagen`
--

CREATE TABLE `imagen` (
  `id` int(11) NOT NULL,
  `id_tipo_hab` int(11) NOT NULL,
  `nombre_imagen` varchar(30) NOT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `ruta_img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `id` varchar(15) NOT NULL,
  `nombres` varchar(30) NOT NULL,
  `apellidos` varchar(30) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `tipo_docu_id` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`id`, `nombres`, `apellidos`, `direccion`, `correo`, `tipo_docu_id`) VALUES
('11111', 'Enyerson Darwin', 'Camero Correa', 'ssssss', 'blade_liger3@hotmail.com', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserva`
--

CREATE TABLE `reserva` (
  `id` int(11) NOT NULL,
  `fecha_entrada` date NOT NULL,
  `fecha_salida` date NOT NULL,
  `total` int(11) DEFAULT NULL,
  `descuento` float DEFAULT NULL,
  `subtotal` int(11) DEFAULT NULL,
  `cliente_id` int(11) NOT NULL,
  `empleado_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `telefonos`
--

CREATE TABLE `telefonos` (
  `id` int(11) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `persona_id` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_cliente`
--

CREATE TABLE `tipo_cliente` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `descuento` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_cliente`
--

INSERT INTO `tipo_cliente` (`id`, `nombre`, `descuento`) VALUES
(1, 'habitual', 0.25),
(2, 'esporadico', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_docu`
--

CREATE TABLE `tipo_docu` (
  `id` int(2) NOT NULL,
  `nombre` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_docu`
--

INSERT INTO `tipo_docu` (`id`, `nombre`) VALUES
(1, 'cedula'),
(2, 'tarjeta identid'),
(3, 'pasaporte');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_empleado`
--

CREATE TABLE `tipo_empleado` (
  `id` int(11) NOT NULL,
  `nombre` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_habitacion`
--

CREATE TABLE `tipo_habitacion` (
  `id` int(11) NOT NULL,
  `nombre_tipo` varchar(30) NOT NULL,
  `precio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombre_user` varchar(30) NOT NULL,
  `password` varchar(32) NOT NULL,
  `rol` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre_user`, `password`, `rol`) VALUES
(11, 'paquito', 'qwrqwr25q25q25q25h235h125', 3),
(1092, 'poala', 'e10adc3949ba59abbe56e057f20f883e', 3),
(11111, 'enyer', 'e10adc3949ba59abbe56e057f20f883e', 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cliente__idx` (`usuario_id`),
  ADD UNIQUE KEY `cliente__idxv1` (`persona_id`),
  ADD KEY `cliente_tipo_cliente_fk` (`tipo_cliente_id`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `empleado__idx` (`persona_id`),
  ADD UNIQUE KEY `empleado__idxv1` (`usuario_id`),
  ADD KEY `empleado_tipo_empleado_fk` (`tipo_empleado_id`);

--
-- Indices de la tabla `habitacion`
--
ALTER TABLE `habitacion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `habitacion_tipo_habitacion_fk` (`tipo_habitacion_id`);

--
-- Indices de la tabla `hab_reserva`
--
ALTER TABLE `hab_reserva`
  ADD PRIMARY KEY (`habitacion_id`,`reserva_id`,`reserva_id1`,`reserva_empleado_id`),
  ADD KEY `hab_reserva_reserva_fk` (`reserva_id`,`reserva_id1`,`reserva_empleado_id`);

--
-- Indices de la tabla `imagen`
--
ALTER TABLE `imagen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `imagen_tipo_hab` (`id_tipo_hab`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`id`),
  ADD KEY `persona__idx` (`tipo_docu_id`) USING BTREE;

--
-- Indices de la tabla `reserva`
--
ALTER TABLE `reserva`
  ADD PRIMARY KEY (`id`,`cliente_id`,`empleado_id`),
  ADD KEY `reserva_cliente_fk` (`cliente_id`),
  ADD KEY `reserva_empleado_fk` (`empleado_id`);

--
-- Indices de la tabla `telefonos`
--
ALTER TABLE `telefonos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `telefonos_persona_fk` (`persona_id`);

--
-- Indices de la tabla `tipo_cliente`
--
ALTER TABLE `tipo_cliente`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo_docu`
--
ALTER TABLE `tipo_docu`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo_empleado`
--
ALTER TABLE `tipo_empleado`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo_habitacion`
--
ALTER TABLE `tipo_habitacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nombre_user` (`nombre_user`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `cliente_persona_fk` FOREIGN KEY (`persona_id`) REFERENCES `persona` (`id`),
  ADD CONSTRAINT `cliente_tipo_cliente_fk` FOREIGN KEY (`tipo_cliente_id`) REFERENCES `tipo_cliente` (`id`),
  ADD CONSTRAINT `cliente_usuario_fk` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`);

--
-- Filtros para la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD CONSTRAINT `empleado_persona_fk` FOREIGN KEY (`persona_id`) REFERENCES `persona` (`id`),
  ADD CONSTRAINT `empleado_tipo_empleado_fk` FOREIGN KEY (`tipo_empleado_id`) REFERENCES `tipo_empleado` (`id`),
  ADD CONSTRAINT `empleado_usuario_fk` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`);

--
-- Filtros para la tabla `habitacion`
--
ALTER TABLE `habitacion`
  ADD CONSTRAINT `habitacion_tipo_habitacion_fk` FOREIGN KEY (`tipo_habitacion_id`) REFERENCES `tipo_habitacion` (`id`);

--
-- Filtros para la tabla `hab_reserva`
--
ALTER TABLE `hab_reserva`
  ADD CONSTRAINT `hab_reserva_habitacion_fk` FOREIGN KEY (`habitacion_id`) REFERENCES `habitacion` (`id`),
  ADD CONSTRAINT `hab_reserva_reserva_fk` FOREIGN KEY (`reserva_id`,`reserva_id1`,`reserva_empleado_id`) REFERENCES `reserva` (`id`, `cliente_id`, `empleado_id`);

--
-- Filtros para la tabla `imagen`
--
ALTER TABLE `imagen`
  ADD CONSTRAINT `imagen_tipo_hab` FOREIGN KEY (`id_tipo_hab`) REFERENCES `tipo_habitacion` (`id`);

--
-- Filtros para la tabla `persona`
--
ALTER TABLE `persona`
  ADD CONSTRAINT `persona_tipo_docu_fk` FOREIGN KEY (`tipo_docu_id`) REFERENCES `tipo_docu` (`id`);

--
-- Filtros para la tabla `reserva`
--
ALTER TABLE `reserva`
  ADD CONSTRAINT `reserva_cliente_fk` FOREIGN KEY (`cliente_id`) REFERENCES `cliente` (`id`),
  ADD CONSTRAINT `reserva_empleado_fk` FOREIGN KEY (`empleado_id`) REFERENCES `empleado` (`id`);

--
-- Filtros para la tabla `telefonos`
--
ALTER TABLE `telefonos`
  ADD CONSTRAINT `telefonos_persona_fk` FOREIGN KEY (`persona_id`) REFERENCES `persona` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
