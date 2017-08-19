-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-08-2017 a las 01:32:47
-- Versión del servidor: 10.1.9-MariaDB
-- Versión de PHP: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `crud`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alquiler`
--

CREATE TABLE `alquiler` (
  `id` int(11) NOT NULL,
  `name` date NOT NULL,
  `address` varchar(40) NOT NULL,
  `campo1` varchar(40) NOT NULL,
  `campo2` varchar(40) NOT NULL,
  `campo3` varchar(20) NOT NULL,
  `campo4` varchar(249) NOT NULL,
  `total` varchar(249) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `alquiler`
--

INSERT INTO `alquiler` (`id`, `name`, `address`, `campo1`, `campo2`, `campo3`, `campo4`, `total`) VALUES
(17, '2017-08-04', 'Carlos Caro', '987654', '1', 'B', '1000000', '1000000'),
(19, '2017-08-05', 'Yuyu', '2345678', '12', 'D', '3', '36'),
(20, '2017-08-12', 'Yurley', '123', '5', 'E', '15000', '75000'),
(22, '2017-08-11', 'Tatiana', '12346', '1', 'D', '20000', '20000');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cancha`
--

CREATE TABLE `cancha` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `address` varchar(40) NOT NULL,
  `campo1` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cancha`
--

INSERT INTO `cancha` (`id`, `name`, `address`, `campo1`) VALUES
(5, 'A', 'Activo', 'Futbol 5'),
(6, 'B', 'Activo', 'Futbol 8'),
(7, 'C', 'Activo', 'Futbol 5'),
(8, 'D', 'Activo', 'Futbol 8'),
(9, 'E', 'Activo', 'Futbol 5'),
(10, 'F', 'Activo', 'Futbol 8'),
(11, 'G', 'Activo', 'Futbol 5'),
(12, 'Karen', 'Desactivar', 'Futbol 5'),
(13, 'Camilo', 'Activar', 'Futbol 5');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `canchas`
--

CREATE TABLE `canchas` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `address` varchar(40) NOT NULL,
  `campo1` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `info`
--

CREATE TABLE `info` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `address` varchar(45) NOT NULL,
  `campo1` varchar(40) NOT NULL,
  `campo2` varchar(40) NOT NULL,
  `total` bigint(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `info`
--

INSERT INTO `info` (`id`, `name`, `address`, `campo1`, `campo2`, `total`) VALUES
(25, '2017-08-05', 'Yurley', '12', '150000', 1200000),
(26, '2017-08-04', 'algo2', '55', '10000', 550000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario`
--

CREATE TABLE `inventario` (
  `id` int(11) NOT NULL,
  `name` date NOT NULL,
  `address` varchar(40) NOT NULL,
  `campo1` varchar(40) NOT NULL,
  `campo2` varchar(40) NOT NULL,
  `campo3` varchar(40) NOT NULL,
  `campo4` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `inventario`
--

INSERT INTO `inventario` (`id`, `name`, `address`, `campo1`, `campo2`, `campo3`, `campo4`) VALUES
(4, '2017-08-04', 'Nevera', '5', 'Gat', 'Ana', 'Instructor'),
(6, '2017-08-04', 'Balon', '55', 'Golty', 'MIlena', 'programador'),
(7, '2017-08-04', 'Balon', '5', 'Golty', 'Carlos', 'Instructor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pago`
--

CREATE TABLE `pago` (
  `id` int(11) NOT NULL,
  `name` date NOT NULL,
  `address` varchar(40) NOT NULL,
  `campo1` varchar(40) NOT NULL,
  `campo2` varchar(40) NOT NULL,
  `campo3` varchar(40) NOT NULL,
  `campo4` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pago`
--

INSERT INTO `pago` (`id`, `name`, `address`, `campo1`, `campo2`, `campo3`, `campo4`) VALUES
(1, '2017-07-12', '99091408240', 'Brayan Alejandro', 'Alba Angarita', 'Programador', '1000000'),
(2, '2017-08-04', '345765', 'Milena', 'Rincon', 'Arbitro', '1000000'),
(3, '2017-08-04', '3456789', 'Carlos', 'Algo', 'programador', '10000000'),
(4, '2017-08-04', '456789', 'Junior', 'MontaÃ±a', 'programador', '1000000'),
(5, '2017-08-04', '234567890', 'Sebastian', 'Cardenas', 'programador', '1000000'),
(6, '2017-08-04', '2345', 'Milena', 'Merchan', 'programador', '1000000');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal`
--

CREATE TABLE `personal` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `address` varchar(40) NOT NULL,
  `campo1` varchar(40) NOT NULL,
  `campo2` varchar(40) NOT NULL,
  `campo3` varchar(40) NOT NULL,
  `campo4` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `personal`
--

INSERT INTO `personal` (`id`, `name`, `address`, `campo1`, `campo2`, `campo3`, `campo4`) VALUES
(12, '2017-08-12', '0384845', 'Julian', 'Rodirgo', 'descarga.jpg', '120000'),
(13, '2017-08-24', '1234', 'Yurley', 'Amaya', 'FB_IMG_1494041557234.jpg', '1500000');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `address` varchar(40) NOT NULL,
  `campo1` varchar(40) NOT NULL,
  `campo2` varchar(40) NOT NULL,
  `campo3` varchar(40) NOT NULL,
  `campo4` varchar(40) NOT NULL,
  `campo5` varchar(40) NOT NULL,
  `tipo` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `name`, `address`, `campo1`, `campo2`, `campo3`, `campo4`, `campo5`, `tipo`) VALUES
(1, '99091408240', 'Brayan', 'Alba', 'Hombre', 'descarga.jpg', '123', '', ''),
(2, '99091408240', 'Brayan', 'Alba', 'Hombre', 'descarga.jpg', '123', '', ''),
(3, '99091408240', 'Brayan', 'Alba', 'Hombre', 'descarga.jpg', 'bbb', '123', 'admin'),
(4, '99091408240', 'Brayan', 'Alba', 'Hombre', 'descarga.jpg', 'aaa', '123', 'prop');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventaproductos`
--

CREATE TABLE `ventaproductos` (
  `id` int(11) NOT NULL,
  `name` varchar(40) DEFAULT NULL,
  `address` varchar(40) DEFAULT NULL,
  `campo1` varchar(40) DEFAULT NULL,
  `campo2` varchar(40) DEFAULT NULL,
  `total` int(249) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ventaproductos`
--

INSERT INTO `ventaproductos` (`id`, `name`, `address`, `campo1`, `campo2`, `total`) VALUES
(4, '2017-08-04', 'pollospppp', '10', '1000', 10000),
(6, '2017-08-04', 'Cerveza', '5', '2000', 10000),
(7, '2017-08-04', 'Papas', '5', '1200', 3600),
(8, '2017-08-02', 'Gaseosa', '3', '50', 150);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alquiler`
--
ALTER TABLE `alquiler`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cancha`
--
ALTER TABLE `cancha`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `canchas`
--
ALTER TABLE `canchas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `inventario`
--
ALTER TABLE `inventario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pago`
--
ALTER TABLE `pago`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ventaproductos`
--
ALTER TABLE `ventaproductos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alquiler`
--
ALTER TABLE `alquiler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT de la tabla `cancha`
--
ALTER TABLE `cancha`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `canchas`
--
ALTER TABLE `canchas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `info`
--
ALTER TABLE `info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT de la tabla `inventario`
--
ALTER TABLE `inventario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `pago`
--
ALTER TABLE `pago`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `personal`
--
ALTER TABLE `personal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `ventaproductos`
--
ALTER TABLE `ventaproductos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
