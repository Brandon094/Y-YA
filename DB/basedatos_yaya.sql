-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-02-2026 a las 01:36:31
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `basedatos_yaya`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calificacionesservicios`
--

CREATE TABLE `calificacionesservicios` (
  `id` int(11) NOT NULL,
  `idSolicitud` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `puntuacion` int(11) NOT NULL,
  `comentario` text NOT NULL,
  `fechaCalificacion` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoriasofertaservicios`
--

CREATE TABLE `categoriasofertaservicios` (
  `id` int(11) NOT NULL,
  `nombreCategoria` varchar(100) NOT NULL,
  `descripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactos`
--

CREATE TABLE `contactos` (
  `id` int(11) NOT NULL,
  `telfono` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `otros` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `credenciales`
--

CREATE TABLE `credenciales` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contraseña` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallesofertaservicios`
--

CREATE TABLE `detallesofertaservicios` (
  `idDetalle` int(11) NOT NULL,
  `idOferta` int(11) NOT NULL,
  `notasAdicionales` varchar(255) NOT NULL,
  `tiempoEstimado` varchar(50) NOT NULL,
  `materialesIncluidos` enum('Si','No') NOT NULL,
  `costoExtra` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallessolicitudempleador`
--

CREATE TABLE `detallessolicitudempleador` (
  `id` int(11) NOT NULL,
  `idEmpleadores` int(11) NOT NULL,
  `descripcionResidencias` int(11) NOT NULL,
  `numeroCuartos` int(11) NOT NULL,
  `tamañoResidencia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `direcciones`
--

CREATE TABLE `direcciones` (
  `id` int(11) NOT NULL,
  `direcciones` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `disponibilidadprestador`
--

CREATE TABLE `disponibilidadprestador` (
  `id` int(11) NOT NULL,
  `idPrestador` int(11) NOT NULL,
  `dia` int(11) NOT NULL,
  `horaInicio` int(11) NOT NULL,
  `horaFin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ofertaservicios`
--

CREATE TABLE `ofertaservicios` (
  `id` int(11) NOT NULL,
  `nombreServicio` varchar(100) NOT NULL,
  `descripcionServicio` text NOT NULL,
  `idPrestador` int(11) NOT NULL,
  `idCategoria` int(11) NOT NULL,
  `precioServicio` decimal(10,2) NOT NULL,
  `disponibilidad` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `nombreRol` enum('empleador','prestador','administrador','') NOT NULL,
  `idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitudes`
--

CREATE TABLE `solicitudes` (
  `id` int(11) NOT NULL,
  `idEmpleador` int(11) NOT NULL,
  `idPrestador` int(11) NOT NULL,
  `idOfertaServicio` int(11) NOT NULL,
  `fechaSolicitud` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `fechaReserva` datetime NOT NULL,
  `estado` enum('pendiente','aceptado','finalizado','cancelado') NOT NULL,
  `direccionServicio` varchar(50) NOT NULL,
  `idDetallesSolicitudEmpleador` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombreUsuario` varchar(150) NOT NULL,
  `apellido` varchar(150) NOT NULL,
  `numeroCedula` text NOT NULL,
  `fechaNacimiento` date NOT NULL,
  `fechaRegistro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `rol` int(11) NOT NULL,
  `idCredencial` int(11) NOT NULL,
  `idContactos` int(11) NOT NULL,
  `idDirecciones` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `calificacionesservicios`
--
ALTER TABLE `calificacionesservicios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idSolicitud` (`idSolicitud`),
  ADD KEY `idUsuario` (`idUsuario`);

--
-- Indices de la tabla `categoriasofertaservicios`
--
ALTER TABLE `categoriasofertaservicios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `contactos`
--
ALTER TABLE `contactos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `credenciales`
--
ALTER TABLE `credenciales`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`);

--
-- Indices de la tabla `detallesofertaservicios`
--
ALTER TABLE `detallesofertaservicios`
  ADD PRIMARY KEY (`idDetalle`),
  ADD KEY `idSolicitud` (`idOferta`);

--
-- Indices de la tabla `detallessolicitudempleador`
--
ALTER TABLE `detallessolicitudempleador`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idEmpleadores` (`idEmpleadores`);

--
-- Indices de la tabla `direcciones`
--
ALTER TABLE `direcciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `disponibilidadprestador`
--
ALTER TABLE `disponibilidadprestador`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idPrestador` (`idPrestador`);

--
-- Indices de la tabla `ofertaservicios`
--
ALTER TABLE `ofertaservicios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idPrestador` (`idPrestador`),
  ADD KEY `idCategoria` (`idCategoria`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nombre` (`nombreRol`),
  ADD KEY `idUsuario` (`idUsuario`);

--
-- Indices de la tabla `solicitudes`
--
ALTER TABLE `solicitudes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idEmpleador` (`idEmpleador`),
  ADD KEY `idPrestador` (`idPrestador`),
  ADD KEY `idOfertaServicio` (`idOfertaServicio`),
  ADD KEY `idDetallesSolicitudEmpleador` (`idDetallesSolicitudEmpleador`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `numeroCedula` (`numeroCedula`) USING HASH,
  ADD KEY `rol` (`rol`),
  ADD KEY `idEmail` (`idCredencial`),
  ADD KEY `idContactos` (`idContactos`),
  ADD KEY `idDirecciones` (`idDirecciones`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `calificacionesservicios`
--
ALTER TABLE `calificacionesservicios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `categoriasofertaservicios`
--
ALTER TABLE `categoriasofertaservicios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `contactos`
--
ALTER TABLE `contactos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `credenciales`
--
ALTER TABLE `credenciales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detallesofertaservicios`
--
ALTER TABLE `detallesofertaservicios`
  MODIFY `idDetalle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `detallessolicitudempleador`
--
ALTER TABLE `detallessolicitudempleador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `direcciones`
--
ALTER TABLE `direcciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `disponibilidadprestador`
--
ALTER TABLE `disponibilidadprestador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ofertaservicios`
--
ALTER TABLE `ofertaservicios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `solicitudes`
--
ALTER TABLE `solicitudes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `calificacionesservicios`
--
ALTER TABLE `calificacionesservicios`
  ADD CONSTRAINT `calificacionesservicios_ibfk_1` FOREIGN KEY (`idSolicitud`) REFERENCES `solicitudes` (`id`);

--
-- Filtros para la tabla `detallesofertaservicios`
--
ALTER TABLE `detallesofertaservicios`
  ADD CONSTRAINT `detallesofertaservicios_ibfk_1` FOREIGN KEY (`idOferta`) REFERENCES `ofertaservicios` (`id`);

--
-- Filtros para la tabla `detallessolicitudempleador`
--
ALTER TABLE `detallessolicitudempleador`
  ADD CONSTRAINT `detallessolicitudempleador_ibfk_1` FOREIGN KEY (`idEmpleadores`) REFERENCES `usuarios` (`id`);

--
-- Filtros para la tabla `disponibilidadprestador`
--
ALTER TABLE `disponibilidadprestador`
  ADD CONSTRAINT `disponibilidadprestador_ibfk_1` FOREIGN KEY (`idPrestador`) REFERENCES `usuarios` (`id`);

--
-- Filtros para la tabla `ofertaservicios`
--
ALTER TABLE `ofertaservicios`
  ADD CONSTRAINT `ofertaservicios_ibfk_1` FOREIGN KEY (`idPrestador`) REFERENCES `usuarios` (`id`),
  ADD CONSTRAINT `ofertaservicios_ibfk_2` FOREIGN KEY (`idCategoria`) REFERENCES `categoriasofertaservicios` (`id`);

--
-- Filtros para la tabla `roles`
--
ALTER TABLE `roles`
  ADD CONSTRAINT `roles_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`id`);

--
-- Filtros para la tabla `solicitudes`
--
ALTER TABLE `solicitudes`
  ADD CONSTRAINT `solicitudes_ibfk_3` FOREIGN KEY (`idOfertaServicio`) REFERENCES `ofertaservicios` (`id`),
  ADD CONSTRAINT `solicitudes_ibfk_4` FOREIGN KEY (`idEmpleador`) REFERENCES `usuarios` (`id`),
  ADD CONSTRAINT `solicitudes_ibfk_5` FOREIGN KEY (`idPrestador`) REFERENCES `usuarios` (`id`),
  ADD CONSTRAINT `solicitudes_ibfk_6` FOREIGN KEY (`idDetallesSolicitudEmpleador`) REFERENCES `detallessolicitudempleador` (`id`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`idCredencial`) REFERENCES `credenciales` (`id`),
  ADD CONSTRAINT `usuarios_ibfk_2` FOREIGN KEY (`idContactos`) REFERENCES `contactos` (`id`),
  ADD CONSTRAINT `usuarios_ibfk_3` FOREIGN KEY (`idDirecciones`) REFERENCES `direcciones` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
