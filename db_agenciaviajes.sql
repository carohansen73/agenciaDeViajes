-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-10-2020 a las 16:47:16
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
(1, 'Litoral', 'Misiones, Corrientes, Entre rios'),
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
(9, 'Cataratas del Iguazú, 4 dias 3 noches', 'Traslado en bus\r\nalojamiento hotel Pousada Caroline (Brasil) incluye media pensión\r\ntraslados a excursiones', 'dia 1:\r\nLlegada a la localidad de San Ignacio, donde se Visitaran las minas de Wanda.\r\nContinuación del viaje, y llegada al hotel en Foz do Iguacu en Brasil, resto del dia libre, Alojamiento.\r\n\r\ndia 2:\r\nRecorrido por las cataratas, lado Brasil.\r\n\r\ndia 3:\r\nvisita al parque de aves y cena show Musical.', 20000, 1),
(10, 'Cataratas del Iguazu 7 dias, 6 noches', 'Traslado en bus alojamiento hotel Pousada Caroline 3* (Brasil)\r\nincluye media pensión \r\nTraslados a excursiones', 'dia 1: Llegada a la localidad de San Ignacio, donde se Visitaran las minas de Wanda. Continuación del viaje, y llegada al hotel en Foz do Iguacu en Brasil, resto del dia libre, Alojamiento.\r\n \r\ndia 2: Recorrido por las cataratas, lado Brasil. \r\n\r\ndia 3: visita al parque de aves y cena show Musical.\r\n\r\ndia 4: Recorrido y paseo de comprar pos Ciudad del Este, paraguay\r\n\r\ndia 5:salida hacia Cataratas lado argentino, donde se podra visitar en sus circuitos superior e inferior los famosos saltos, San Martín, Dos Hermanas, Bozetti. Por la tarde se abordará el tren que lleva a la imponente Garganta del Diablo, donde se contemplara un espectáculo natural estremecedor y único en el mundo.\r\n\r\ndia 6:Desayuno y dia libre para realizar excursiones o paseos de compras opcionales.\r\n\r\ndia 7: viaje de regreso\r\n', 40000, 1),
(11, 'Esteros del Ibera con saltos de Moconá. 6 dias, 5 noches.', '•	Traslado bus, servicio a bordo\r\n•	Coordinador+guía Cobertura medica\r\n•	3 noches alojamiento Dos de Mayo (Misiones) y 2 noches Concepción del Yaguareté Corá (Corrientes)\r\n•	Traslado y entrada a excursiones\r\n', '•	Dia 1:  Llegada a Corrientes y city tour guiado en Concepción.\r\n•	Dia 2: Visita al Parque Nacional Esteros del Ibera, ingresando por el Portal Carambola con navegación.\r\n•	Dia 3: Traslado a Misiones, resto del dia libre\r\n•	Dia 4: Traslado al parque Saltos del Moconá.\r\n•	Dia 5:  Visita al Centro de Interpretación y al Museo Histórico, Museo del Campo y Museo La Pilarcita.\r\n•	Dia 6: Viaje de regreso y Visita a la Estancia Las Marías (en viaje de regreso).', 30000, 1),
(12, 'Bariloche 4 noches, 5 dias', '• Aereo\r\n• Alojamiento Hotel Villa Huinid Pioneros, 3*. Incluye desayuno (habitacion standard) \r\n• Traslados\r\n• Excursiones ', '• Dia 1: Llegada a Bariloche, traslado al hotel, resto del dia libre\r\n• Dia 2: Vista a lago Nahuel Huapi.\r\n• Dia 3: Recorrido al Circuito Chico \r\n• Dia 4: Visita al Cerro Catedral(Sólo en las salidas 19/01,06/02,13/03,13/04)\r\n• Dia 5: Vuelo de regreso.\r\n', 50000, 4),
(13, 'Bariloche, 12 noches ', '• 12 noches de alojamiento, hoteles 4*, media pension.\r\n• trasados\r\n• Excursiones', '• Dia 1: Llegada a Neuquen, recorrido de la ciudad.\r\n\r\n• Dia 2: Villa el Chocon\r\n \r\n• Dia 3:Piedra del Aguila,\r\n \r\n• Dia 4:Collon Cura\r\n\r\n• Dia 5: Junin de los Andes\r\n\r\n• Dia 6 :San Martin de los Andes.\r\n\r\n• Dia 7: Ruta de los 7 lagos.\r\n\r\n• Dia 8: Villa Traful.\r\n\r\n• Dia 9: Villa la Angostura.\r\n\r\n• Dia 10: Bariloche.\r\n\r\n• Dia 11: circuito chico y valle encantado\r\n\r\n• Dia 12: Confluencia\r\n\r\n', 100000, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `password`) VALUES
(1, 'admin@demo.com', '$2y$10$8vYZB/lVsbIFWPUNcRnxkul1K5oOkxHOUTW.9kfGyMMWreWp59quO');

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
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `region`
--
ALTER TABLE `region`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT de la tabla `tour`
--
ALTER TABLE `tour`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tour`
--
ALTER TABLE `tour`
  ADD CONSTRAINT `tour_ibfk_1` FOREIGN KEY (`id_region`) REFERENCES `region` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
