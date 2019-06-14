-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-06-2019 a las 01:56:43
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 5.6.38

-- SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
-- SET AUTOCOMMIT = 0;
-- START TRANSACTION;
-- SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dbs_cobranza`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_deudas`
--

CREATE TABLE `tbl_deudas` (
  `fld_id` int(3) NOT NULL,
  `fld_cantidad` int(20) DEFAULT NULL,
  `fld_concepto` varchar(255) DEFAULT NULL,
  `fld_id_usuario` int(3) DEFAULT NULL,
  `fld_fecha` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Estructura de tabla para la tabla `tbl_pagos`
--

CREATE TABLE `tbl_pagos` (
  `fld_id` int(3) NOT NULL,
  `fld_fecha` datetime DEFAULT CURRENT_TIMESTAMP,
  `fld_cantidad` int(20) DEFAULT NULL,
  `fld_id_usuario` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `fld_id` int(3) NOT NULL,
  `fld_nombre` varchar(20) DEFAULT NULL,
  `fld_telefono` bigint(100) DEFAULT NULL,
  `fld_correo` varchar(40) DEFAULT NULL,
  `fld_password` varchar(25) DEFAULT NULL,
  `fld_propietario` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`fld_id`, `fld_nombre`, `fld_telefono`, `fld_correo`, `fld_password`, `fld_propietario`) VALUES
(1, 'Roberto', 1234554321, 'robermancera@gmail.com', 'qweRty789', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_deudas`
--
ALTER TABLE `tbl_deudas`
  ADD PRIMARY KEY (`fld_id`);

--
-- Indices de la tabla `tbl_pagos`
--
ALTER TABLE `tbl_pagos`
  ADD PRIMARY KEY (`fld_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`fld_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_deudas`
--
ALTER TABLE `tbl_deudas`
  MODIFY `fld_id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_pagos`
--
ALTER TABLE `tbl_pagos`
  MODIFY `fld_id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `fld_id` int(3) NOT NULL AUTO_INCREMENT;


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;