-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-11-2020 a las 21:01:44
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
-- Estructura de tabla para la tabla `comentario`
--

CREATE TABLE `comentario` (
  `id` int(11) NOT NULL,
  `texto` text NOT NULL,
  `calificacion` int(6) NOT NULL,
  `id_tour` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `comentario`
--

INSERT INTO `comentario` (`id`, `texto`, `calificacion`, `id_tour`) VALUES
(3, 'buen viaje', 4, 9),
(4, 'tremendo viaje, muy buena onda los guias, hermosos destinos, la pase de 10!!', 5, 10),
(5, 'espcetacular viaje', 3, 10),
(6, 'espcetacular viaje, muy buena atencion!', 4, 10),
(7, 'nos encanto el viaje, muy lindos paisajes y disfrutamos del recorrido por los viñedos', 4, 18),
(8, 'espcetacular viaje, muy buena atencion!', 4, 10),
(9, 'espcetacular viaje, muy buena atencion!', 4, 10),
(10, 'espcetacular viaje, muy buena atencion!', 4, 10),
(11, 'espcetacular viaje, muy buena atencion!', 4, 10),
(12, 'espcetacular viaje, muy buena atencion!', 4, 10),
(13, 'espcetacular viaje, muy buena atencion!', 4, 10),
(14, 'espcetacular viaje, muy buena atencion!', 4, 10),
(15, 'espcetacular viaje, muy buena atencion!', 4, 10),
(16, 'espcetacular viaje, muy buena atencion!', 4, 10),
(17, 'nos encanto el viaje, muy lindos paisajes y disfrutamoos', 4, 18),
(18, 'espcetacular viaje, muy buena atencion!', 4, 10),
(19, 'espcetacular viaje, muy buena atencion!', 4, 10),
(20, 'espcetacular viaje, muy buena atencion!', 4, 10),
(21, 'nos encanto el viaje, muy lindos paisajes y disfrutamoos', 4, 18),
(22, 'nos encanto el viaje, muy lindos paisajes y disfrutamoos', 4, 18),
(23, 'hermoso viaje, muy buena atencion!', 5, 18),
(24, 'llalala', 0, 18),
(25, 'AKASJAKSK', 4, 18),
(26, 'jjjjjjjjj', 0, 18),
(27, 'jnjknj', 0, 18),
(28, 'hhhh', 0, 18),
(29, 'sdmksla', 0, 18),
(30, 'xkaxsk', 0, 18),
(31, '', 0, 18),
(32, 'mnxm', 0, 18),
(33, 'sns', 4, 18),
(34, 'lala', 2, 18),
(35, 'lala', 1, 18),
(36, 'comentario vue', 5, 18),
(37, 'comentario vue 2', 2, 18),
(38, 'OTRO', 3, 18),
(39, 'OTROOOO', 4, 18),
(40, 'comentarioo', 4, 18);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `region`
--

CREATE TABLE `region` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `informacion` text NOT NULL,
  `imagen` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Volcado de datos para la tabla `region`
--

INSERT INTO `region` (`id`, `nombre`, `informacion`, `imagen`) VALUES
(1, 'Litoral', 'Misiones, Corrientes, Entre Rios', 'img/5fbd59d9f2e6a4.77253237.jpg'),
(2, 'Norte', 'Salta, Jujuy, Tucuman y Santiago del Estero', 'img/5fbd5a06e36a59.71096471.jpg'),
(3, 'Cuyo', 'Mendoza, San Juan y San Luis', 'img/5fbd5a60517263.20664686.jpg'),
(4, 'Patagonia', 'Neuquen, Rio Negro y Tierra del Fuego', 'img/5fbd526e7214c9.62778848.jpg'),
(5, 'Cordoba', 'Cordoba Capital, Villa Carlos Paz, Calamuchita, Traslasierra, Valle de Punilla, Villa Gral. Belgrano y Cosquin.', 'img/5fbd5b3d387492.76281869.jpg'),
(6, 'CABA', 'San Telmo, La Boca, Caminito, Palermo, Recoleta, Puerto Madero, La plata.\r\n', 'img/5fbd5afd002372.15628628.jpg'),
(7, 'Buenos Aires Provincia', 'Mar del Plata, Mirama, Necochea, Monte Hermoso, Villa Gesell, Carilo. Tandil y Sierra de la Venta.', 'img/5fbd5b0f7268f2.93083086.jpg');

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
  `id_region` int(11) NOT NULL,
  `imagen` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tour`
--

INSERT INTO `tour` (`id`, `destinos`, `paquete`, `itinerario`, `precio`, `id_region`, `imagen`) VALUES
(9, 'Cataratas del Iguazú, 4 dias 3 noches', 'Traslado en bus | \r\nalojamiento hotel Pousada Caroline (Brasil) incluye media pensión | \r\ntraslados a excursiones', 'dia 1:\r\nLlegada a la localidad de San Ignacio, donde se Visitaran las minas de Wanda.\r\nContinuación del viaje, y llegada al hotel en Foz do Iguacu en Brasil, resto del dia libre, Alojamiento.\r\n\r\ndia 2:\r\nRecorrido por las cataratas, lado Brasil.\r\n\r\ndia 3:\r\nvisita al parque de aves y cena show Musical.', 20000, 1, NULL),
(10, 'Cataratas del Iguazu 7 dias, 6 noches', 'Traslado en bus alojamiento hotel Pousada Caroline 3* (Brasil)\r\nincluye media pensión \r\nTraslados a excursiones', 'dia 1: Llegada a la localidad de San Ignacio, donde se Visitaran las minas de Wanda. Continuación del viaje, y llegada al hotel en Foz do Iguacu en Brasil, resto del dia libre, Alojamiento.\r\n \r\ndia 2: Recorrido por las cataratas, lado Brasil. \r\n\r\ndia 3: visita al parque de aves y cena show Musical.\r\n\r\ndia 4: Recorrido y paseo de comprar pos Ciudad del Este, paraguay\r\n\r\ndia 5:salida hacia Cataratas lado argentino, donde se podra visitar en sus circuitos superior e inferior los famosos saltos, San Martín, Dos Hermanas, Bozetti. Por la tarde se abordará el tren que lleva a la imponente Garganta del Diablo, donde se contemplara un espectáculo natural estremecedor y único en el mundo.\r\n\r\ndia 6:Desayuno y dia libre para realizar excursiones o paseos de compras opcionales.\r\n\r\ndia 7: viaje de regreso\r\n', 40000, 1, NULL),
(11, 'Esteros del Ibera con saltos de Moconá. 6 dias, 5 noches.', '•	Traslado bus, servicio a bordo\r\n•	Coordinador+guía Cobertura medica\r\n•	3 noches alojamiento Dos de Mayo (Misiones) y 2 noches Concepción del Yaguareté Corá (Corrientes)\r\n•	Traslado y entrada a excursiones\r\n', '•	Dia 1:  Llegada a Corrientes y city tour guiado en Concepción.\r\n•	Dia 2: Visita al Parque Nacional Esteros del Ibera, ingresando por el Portal Carambola con navegación.\r\n•	Dia 3: Traslado a Misiones, resto del dia libre\r\n•	Dia 4: Traslado al parque Saltos del Moconá.\r\n•	Dia 5:  Visita al Centro de Interpretación y al Museo Histórico, Museo del Campo y Museo La Pilarcita.\r\n•	Dia 6: Viaje de regreso y Visita a la Estancia Las Marías (en viaje de regreso).', 30000, 1, NULL),
(12, 'Bariloche 4 noches, 5 dias', '• Aereo\r\n• Alojamiento Hotel Villa Huinid Pioneros, 3*. Incluye desayuno (habitacion standard) \r\n• Traslados\r\n• Excursiones ', '• Dia 1: Llegada a Bariloche, traslado al hotel, resto del dia libre\r\n• Dia 2: Vista a lago Nahuel Huapi.\r\n• Dia 3: Recorrido al Circuito Chico \r\n• Dia 4: Visita al Cerro Catedral(Sólo en las salidas 19/01,06/02,13/03,13/04)\r\n• Dia 5: Vuelo de regreso.\r\n', 50000, 4, NULL),
(13, 'Bariloche, 12 noches ', '• 12 noches de alojamiento, hoteles 4*, media pension.\r\n• trasados\r\n• Excursiones', '• Dia 1: Llegada a Neuquen, recorrido de la ciudad.\r\n\r\n• Dia 2: Villa el Chocon\r\n \r\n• Dia 3:Piedra del Aguila,\r\n \r\n• Dia 4:Collon Cura\r\n\r\n• Dia 5: Junin de los Andes\r\n\r\n• Dia 6 :San Martin de los Andes.\r\n\r\n• Dia 7: Ruta de los 7 lagos.\r\n\r\n• Dia 8: Villa Traful.\r\n\r\n• Dia 9: Villa la Angostura.\r\n\r\n• Dia 10: Bariloche.\r\n\r\n• Dia 11: circuito chico y valle encantado\r\n\r\n• Dia 12: Confluencia\r\n\r\n', 100000, 4, NULL),
(14, 'Tucuman, Cafayate y Salta', 'Incluye: Aereos, 1 noche de alojamiento en Tucuman, 1 noche de alojamiento en Cafayate, 4 noches de alojamiento en Salta.', 'Excursiones:\r\n*City Tour en Tucuman\r\n*Recorrido por la Quebrada de Sosa(Tucuman).\r\n*Tafi del Valle.\r\n*Ruinas de Quilmes.\r\n*Cafayate(bodegas).\r\n*Quebrada de Humahuaca, Purmamarca Tilcara,Humahuaca.\r\n*City Tour en Salta.', 40000, 2, NULL),
(15, 'Mendoza', 'Aereo, 3 noches de alojamiento segun regimen de comidas, traslados y excursiones.', '•City Tour por la ciudad\r\n•Caminos del vino\r\n•Alta montaña', 25000, 3, NULL),
(16, 'Cordoba, Calamuchita, Valle de Punilla', 'Aereo, 3 noches de alojamiento segun regimen de comidas, traslados y excursiones.', '*City Tour por ciudad de Cordoba\r\n*Recorrido por calumuchita\r\n*Recorrido por Valle de Punilla', 50000, 5, NULL),
(17, 'Ciudad de Buenos Aires', 'Traslado en colectivo, incluye media pension.', 'Horarios de salida: De Lunes a Domingo de 9:00hs. a 17:45hs. Incluyendo feriados. los pasajeros pueden ascender y descender de los buses en cualquiera de las paradas que deseen. Es fundamental que el pax cuide su ticket debido a que si lo extravía, no podrá continuar el recorrido. Los tickets no tienen cambio ni devolución. No se suspende por lluvia. A partir de los 3 años, los menores pasan a ocupar butaca individual.\r\nDeben presentar DNI al momento de subir al bus', 10000, 6, NULL),
(18, 'Mendoza & San Rafael en 9 días', 'Alojamiento Base Doble con Desayuno de acuerdo a la categoría de hotel seleccionada\r\nTraslados detallados en el itinerario\r\nExcursiones regulares detalladas en el itinerario (excepto opcionales)\r\nTickets Aéreos de Cabotaje\r\nGuía Bilingüe Español Inglés\r\nServicio de Emergencia 24 horas\r\nCoordinación Permanente', 'Conociendo Mendoza\r\nCamino del Vino: Enoturismo en Mendoza\r\nPor la Cordillera de los Andes bordeando el Río Mendoza\r\nQuebrada de Villavicencio\r\nSan Rafael - Los Reyunos\r\nCañón del río Atuel\r\nCaverna de las Brujas\r\nTradición del Vino Malbec: Bodegas Industrial y Artesanal', 50000, 3, NULL),
(19, 'San Juan 7 Días-6 Noches', 'Alojamiento Base Doble con Desayuno de acuerdo a la categoría de hotel seleccionada\r\nTraslados detallados en el itinerario\r\nExcursiones regulares detalladas en el itinerario (excepto opcionales)\r\nTickets Aéreos de Cabotaje\r\nGuía Bilingüe Español Inglés\r\nServicio de Emergencia 24 horas\r\nCoordinación Permanente', 'San Juan, Dique de Ullum y Cavas de Zonda\r\nParque Provincial Ischigualasto: Valle Fértil y Valle de La Luna\r\nBarreal, Valle de Calingasta & Pampa del Leoncito (Observatorio Astronómico)\r\nJáchal, Dique Cuesta del Viento y Rodeo\r\nRuta del Vino: Viñedos y Bodegas', 60000, 3, NULL),
(20, 'Tilcara, Salta y Cafayate 8 Días y 6 Noches', 'Traslados Bus Privado semi-cama y cama, equipado con mantas.\r\nRecargo Butaca Cama $ 1.800 x pasajero.\r\n-Coordinador durante todo el recorrido, Guías locales.\r\n-06 noches de alojamiento: 2 noches en Tilcara, 3 en Salta y 1 en Cafayate.\r\n-Régimen: Media Pensión.\r\n-Ex­cur­siones In­clu­i­das.\r\n-Ex­cur­siones op­cionales.', 'Tafi del Valle.\r\n-Valles Calchaquíes.\r\n-Visita Cafayate con Bodega.\r\n-Quebrada del Rio de las Conchas.\r\n-City Tour Salta.\r\n-Purmamarca.\r\n-Salinas Grandes.\r\n-Quebrada de Humahuaca\r\n-Visita Tucumán (Opcional espectáculo de luz y sonido)', 50000, 2, NULL),
(21, 'Mar Del Plara, Miramar y Necochea 6 Dias y 5 Noches', 'Incluye aereos, traslado en bus, excursiones y media pension', 'Dos dias y dos noches en Ciudad de Mar Del Plata\r\nUn Dia en Miramar\r\nTres dias en Necochea', 30000, 7, NULL),
(22, 'Ushuaia, El Chaltén y El Calafate. 8 noches.', 'Aéreos | Traslados | Alojamiento en hoteles 4* | Excursiones', 'Dia 1: Llegada a Ushuaia, recorrereos el Presidio de Reincidentes y el museo del Fin del Mundo\r\nDia 2: Navegacion por el canal de Beagle y parque nacional Tierra del Fuego.\r\nDia 3: Recorrido a traves del valle del rio Olivia, donde conoceremos los agos Fagnano y Escondido.\r\nDia 4: Traslado al Calafate, visita al Glaciar Perito Moreno en el Parque Nacional Homónimo.\r\nDia 5: Navegamos el Lago Argentino en el Parque Nacional  Los Glaciares.\r\nDia 6: Traslado a El Chalten, recorrido por el bosque, avistamiento en el Mirador del Torre y conoceremos la laguna Capri.\r\nDia 7: dia libre en e Chalten y viaje de regreso.', 50000, 4, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(250) NOT NULL,
  `permiso` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `password`, `permiso`) VALUES
(1, 'admin@demo.com', '$2y$10$8vYZB/lVsbIFWPUNcRnxkul1K5oOkxHOUTW.9kfGyMMWreWp59quO', 1),
(2, 'usuario@demo.com', '$2y$10$8vYZB/lVsbIFWPUNcRnxkul1K5oOkxHOUTW.9kfGyMMWreWp59quO', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_tour` (`id_tour`);

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
-- AUTO_INCREMENT de la tabla `comentario`
--
ALTER TABLE `comentario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT de la tabla `region`
--
ALTER TABLE `region`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `tour`
--
ALTER TABLE `tour`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD CONSTRAINT `comentario_ibfk_1` FOREIGN KEY (`id_tour`) REFERENCES `tour` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `tour`
--
ALTER TABLE `tour`
  ADD CONSTRAINT `tour_ibfk_1` FOREIGN KEY (`id_region`) REFERENCES `region` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
