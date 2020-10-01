-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-10-2020 a las 16:14:04
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_agenciaviajes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `region`
--

CREATE TABLE `region` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `informacion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Volcado de datos para la tabla `region`
--

INSERT INTO `region` (`id`, `nombre`, `informacion`) VALUES
(1, 'Litoral', 'Misiones, Corrientes, Entre Rios'),
(2, 'Norte', 'Salta, Jujuy, Tucuman y Santiago del Estero'),
(3, 'Cuyo', 'Mendoza, San Juan y San Luis'),
(4, 'Patagonia', 'Neuquen, Rio Negro y Tierra del Fuego'),
(5, 'Cordoba', 'Cordoba Capital, Villa Carlos Paz, Calamuchita, Traslasierra, Valle de Punilla, Villa Gral. Belgrano y Cosquin.'),
(6, 'CABA', 'San Telmo, La Boca, Caminito, Palermo, Recoleta, Puerto Madero, La plata.\r\n'),
(7, 'Buenos Aires Provincia', 'Mar del Plata, Mirama, Necochea, Monte Hermoso, Villa Gesell, Carilo.\r\nTandil y Sierra de la Venta.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tour`
--

CREATE TABLE `tour` (
  `id` int(11) NOT NULL,
  `destinos` varchar(200) NOT NULL,
  `paquete` text NOT NULL,
  `itinerario` text NOT NULL,
  `precio` int(11) NOT NULL,
  `id_region` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tour`
--

INSERT INTO `tour` (`id`, `destinos`, `paquete`, `itinerario`, `precio`, `id_region`) VALUES
(1, 'cataratas', '4 dias 3 noches\r\nhotel 3*', 'excursiones, paseos, visitas', 20000, 1),
(3, 'Mendoza', 'Aereo, 3 noches de alojamiento segun regimen de comidas, traslados y excursiones.', '*City Tour por la ciudad\r\n*Caminos del vino\r\n*Alta montaña', 25000, 3),
(4, 'Norte(Tucuman, Cafayate y Salta).', 'Incluye: Aereos, 1 noche de alojamiento en Tucuman, 1 noche de alojamiento en Cafayate, 4 noches de alojamiento en Salta.', 'Excursiones:\r\n*City Tour en Tucuman\r\n*Recorrido por la Quebrada de Sosa(Tucuman).\r\n*Tafi del Valle.\r\n*Ruinas de Quilmes.\r\n*Cafayate(bodegas).\r\n*Quebrada de Humahuaca, Purmamarca Tilcara,Humahuaca.\r\n*City Tour en Salta.', 40000, 2),
(6, 'Cordoba, Calamuchita, Valle de Punilla', 'Aereo, 3 noches de alojamiento segun regimen de comidas, traslados y excursiones.', '*City Tour por ciudad de Cordoba\r\n*Recorrido por calumuchita\r\n*Recorrido por Valle de Punilla\r\n\r\n', 50000, 5);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `region`
--
ALTER TABLE `region`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tour`
--
ALTER TABLE `tour`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_region` (`id_region`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `region`
--
ALTER TABLE `region`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `tour`
--
ALTER TABLE `tour`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tour`
--
ALTER TABLE `tour`
  ADD CONSTRAINT `tour_ibfk_1` FOREIGN KEY (`id_region`) REFERENCES `region` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
