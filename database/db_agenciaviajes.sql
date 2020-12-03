-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-12-2020 a las 19:12:29
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
  `id_tour` int(11) NOT NULL,
  `id_usuario` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `comentario`
--

INSERT INTO `comentario` (`id`, `texto`, `calificacion`, `id_tour`, `id_usuario`) VALUES
(104, 'podria mejorar', 2, 20, 3),
(108, 'bjnfgj', 4, 19, 3),
(109, 'bjnfgj', 5, 19, 3),
(112, 'muy bien viaje', 3, 20, 3),
(113, 'muy buen tour', 3, 14, 3),
(114, 'Hermoso viaje, nos encantaron las cataratas, muy buena atencion', 5, 9, 2),
(115, 'muy divertido el viaje, esperamos volver pronto', 4, 9, 2),
(116, 'nos encantaron las cataratas!', 5, 10, 2),
(117, 'muy buena atencion', 4, 10, 2),
(118, 'hermoso paisaje nos brinda nuestra Argentina!', 5, 20, 2),
(119, 'muy buen viaje!', 4, 26, 2),
(120, 'disfrutamos mucho del viaje y de la ñieve', 5, 12, 2),
(121, 'muy lindos lugares recorrimos', 5, 28, 2),
(122, 'nos encantaron las sierras y la buena onda de los guias', 5, 28, 2),
(123, 'estubo bueno el viaje, buena atencion de parte de la empresa', 4, 21, 2),
(124, 'nos encanto el viaje', 5, 9, 2),
(125, 'hermosa ciudad, hermosas las sierras', 5, 30, 3),
(126, 'nos gusto mucho el viaje', 3, 30, 3),
(127, 'de 10! divino paisaje!', 5, 18, 3),
(129, 'espectacular viaje, hermoso el faro del fin del mundo', 5, 22, 3);

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
(4, 'Patagonia', 'Neuquen, Rio Negro, Santa Cruz y Tierra del Fuego', 'img/5fbd526e7214c9.62778848.jpg'),
(5, 'Cordoba', 'Cordoba Capital, Villa Carlos Paz, Calamuchita, Traslasierra, Valle de Punilla, Villa Gral. Belgrano y Cosquin.', 'img/5fbd5b3d387492.76281869.jpg'),
(6, 'Buenos Aires', 'San Telmo, La Boca, Caminito, Palermo, Recoleta, Puerto Madero, La plata, Mar del Plata, Necochea, Monte Hermoso,Miramar\r\n', 'img/5fbd5afd002372.15628628.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tour`
--

CREATE TABLE `tour` (
  `id` int(11) NOT NULL,
  `destinos` varchar(200) NOT NULL,
  `paquete` text NOT NULL,
  `itinerario` text NOT NULL,
  `precio` varchar(11) NOT NULL,
  `id_region` int(11) NOT NULL,
  `imagen` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tour`
--

INSERT INTO `tour` (`id`, `destinos`, `paquete`, `itinerario`, `precio`, `id_region`, `imagen`) VALUES
(9, 'Cataratas del Iguazú, 4 dias 3 noches', 'Traslado en bus | \r\nalojamiento hotel Pousada Caroline (Brasil) incluye media pensión | \r\ntraslados a excursiones', 'dia 1:\r\nLlegada a la localidad de San Ignacio, donde se Visitaran las minas de Wanda.\r\nContinuación del viaje, y llegada al hotel en Foz do Iguacu en Brasil, resto del dia libre, Alojamiento.\r\n\r\ndia 2:\r\nRecorrido por las cataratas, lado Brasil.\r\n\r\ndia 3:\r\nvisita al parque de aves y cena show Musical.', '$20000', 1, 'img/5fc00b166b5054.18810745.jpg'),
(10, 'Cataratas del Iguazu 7 dias, 6 noches', 'Traslado en bus alojamiento hotel Pousada Caroline 3* (Brasil)\r\nincluye media pensión \r\nTraslados a excursiones', 'dia 1: Llegada a la localidad de San Ignacio, donde se Visitaran las minas de Wanda. Continuación del viaje, y llegada al hotel en Foz do Iguacu en Brasil, resto del dia libre, Alojamiento.\r\n \r\ndia 2: Recorrido por las cataratas, lado Brasil. \r\n\r\ndia 3: visita al parque de aves y cena show Musical.\r\n\r\ndia 4: Recorrido y paseo de comprar pos Ciudad del Este, paraguay\r\n\r\ndia 5:salida hacia Cataratas lado argentino, donde se podra visitar en sus circuitos superior e inferior los famosos saltos, San Martín, Dos Hermanas, Bozetti. Por la tarde se abordará el tren que lleva a la imponente Garganta del Diablo, donde se contemplara un espectáculo natural estremecedor y único en el mundo.\r\n\r\ndia 6:Desayuno y dia libre para realizar excursiones o paseos de compras opcionales.\r\n\r\ndia 7: viaje de regreso\r\n', '$40000', 1, 'img/5fc00adbdbc707.78187244.png'),
(11, 'Esteros del Ibera con saltos de Moconá. 6 dias, 5 noches.', '•	Traslado bus, servicio a bordo\r\n•	Coordinador+guía Cobertura medica\r\n•	3 noches alojamiento Dos de Mayo (Misiones) y 2 noches Concepción del Yaguareté Corá (Corrientes)\r\n•	Traslado y entrada a excursiones\r\n', '•	Dia 1:  Llegada a Corrientes y city tour guiado en Concepción.\r\n•	Dia 2: Visita al Parque Nacional Esteros del Ibera, ingresando por el Portal Carambola con navegación.\r\n•	Dia 3: Traslado a Misiones, resto del dia libre\r\n•	Dia 4: Traslado al parque Saltos del Moconá.\r\n•	Dia 5:  Visita al Centro de Interpretación y al Museo Histórico, Museo del Campo y Museo La Pilarcita.\r\n•	Dia 6: Viaje de regreso y Visita a la Estancia Las Marías (en viaje de regreso).', '$30000', 1, 'img/5fc00ea1e329e7.48755462.jpg'),
(12, 'Bariloche 5 DIAS|4 NOCHES', '• Aereo\r\n• Alojamiento Hotel Villa Huinid Pioneros, 3*. Incluye desayuno (habitacion standard) \r\n• Traslados\r\n• Excursiones ', '• Dia 1: Llegada a Bariloche, traslado al hotel, resto del dia libre\r\n• Dia 2: Vista a lago Nahuel Huapi.\r\n• Dia 3: Recorrido al Circuito Chico \r\n• Dia 4: Visita al Cerro Catedral(Sólo en las salidas 19/01,06/02,13/03,13/04)\r\n• Dia 5: Vuelo de regreso.\r\n', '$50000', 4, 'img/5fc00c49d3b445.75774101.jpg'),
(13, 'Bariloche 13 DIAS|12 NOCHES ', '• 12 noches de alojamiento, hoteles 4*, media pension.\r\n• trasados\r\n• Excursiones', '• Dia 1: Llegada a Neuquen, recorrido de la ciudad.\r\n\r\n• Dia 2: Villa el Chocon\r\n \r\n• Dia 3:Piedra del Aguila,\r\n \r\n• Dia 4:Collon Cura\r\n\r\n• Dia 5: Junin de los Andes\r\n\r\n• Dia 6 :San Martin de los Andes.\r\n\r\n• Dia 7: Ruta de los 7 lagos.\r\n\r\n• Dia 8: Villa Traful.\r\n\r\n• Dia 9: Villa la Angostura.\r\n\r\n• Dia 10: Bariloche.\r\n\r\n• Dia 11: circuito chico y valle encantado\r\n\r\n• Dia 12: Confluencia\r\n\r\n', '$100000', 4, 'img/5fc00ca9317613.25315467.jpg'),
(14, 'Tucuman, Cafayate y Salta 5DIAS|4NOCHES', 'Incluye: Aereos, 1 noche de alojamiento en Tucuman, 1 noche de alojamiento en Cafayate, 4 noches de alojamiento en Salta.', 'Excursiones:\r\n*City Tour en Tucuman\r\n*Recorrido por la Quebrada de Sosa(Tucuman).\r\n*Tafi del Valle.\r\n*Ruinas de Quilmes.\r\n*Cafayate(bodegas).\r\n*Quebrada de Humahuaca, Purmamarca Tilcara,Humahuaca.\r\n*City Tour en Salta.', '$40000', 2, 'img/5fc01161a9da38.12434385.jpg'),
(15, 'Mendoza 4 DIAS|3 NOCHES', 'Aereo, 3 noches de alojamiento segun regimen de comidas, traslados y excursiones.', '•City Tour por la ciudad\r\n•Caminos del vino\r\n•Alta montaña', '$25000', 3, 'img/5fbd6ec224a846.13197329.jpg'),
(16, 'Cordoba, Calamuchita, Valle de Punilla', 'Aereo, 3 noches de alojamiento segun regimen de comidas, traslados y excursiones.', '*City Tour por ciudad de Cordoba\r\n*Recorrido por calumuchita\r\n*Recorrido por Valle de Punilla', '$50000', 5, 'img/5fc00ed8efe534.24309513.jpg'),
(17, 'Ciudad de Buenos Aires', 'Traslado en colectivo, incluye media pension.', 'Horarios de salida: De Lunes a Domingo de 9:00hs. a 17:45hs. Incluyendo feriados. los pasajeros pueden ascender y descender de los buses en cualquiera de las paradas que deseen. Es fundamental que el pax cuide su ticket debido a que si lo extravía, no podrá continuar el recorrido. Los tickets no tienen cambio ni devolución. No se suspende por lluvia. A partir de los 3 años, los menores pasan a ocupar butaca individual.\r\nDeben presentar DNI al momento de subir al bus', '$10000', 6, 'img/5fc010f1921207.57386416.jpg'),
(18, 'Mendoza y San Rafael  9 DIAS|8 NOCHES', 'Alojamiento Base Doble con Desayuno de acuerdo a la categoría de hotel seleccionada\r\nTraslados detallados en el itinerario\r\nExcursiones regulares detalladas en el itinerario (excepto opcionales)\r\nTickets Aéreos de Cabotaje\r\nGuía Bilingüe Español Inglés\r\nServicio de Emergencia 24 horas\r\nCoordinación Permanente', 'Conociendo Mendoza\r\nCamino del Vino: Enoturismo en Mendoza\r\nPor la Cordillera de los Andes bordeando el Río Mendoza\r\nQuebrada de Villavicencio\r\nSan Rafael - Los Reyunos\r\nCañón del río Atuel\r\nCaverna de las Brujas\r\nTradición del Vino Malbec: Bodegas Industrial y Artesanal', '$50000', 3, 'img/5fc0090c732969.89860219.jpg'),
(19, 'San Juan 7 DIAS|6 NOCHES', 'Alojamiento Base Doble con Desayuno de acuerdo a la categoría de hotel seleccionada\r\nTraslados detallados en el itinerario\r\nExcursiones regulares detalladas en el itinerario (excepto opcionales)\r\nTickets Aéreos de Cabotaje\r\nGuía Bilingüe Español Inglés\r\nServicio de Emergencia 24 horas\r\nCoordinación Permanente', 'San Juan, Dique de Ullum y Cavas de Zonda\r\nParque Provincial Ischigualasto: Valle Fértil y Valle de La Luna\r\nBarreal, Valle de Calingasta & Pampa del Leoncito (Observatorio Astronómico)\r\nJáchal, Dique Cuesta del Viento y Rodeo\r\nRuta del Vino: Viñedos y Bodegas', '$60000', 3, 'img/5fc00a2bed5725.12968432.jpg'),
(20, 'Tilcara,  Salta  y  Cafayate 8 DIAS|6 NOCHES', 'Traslados Bus Privado semi-cama y cama, equipado con mantas.\r\nRecargo Butaca Cama $ 1.800 x pasajero.\r\n-Coordinador durante todo el recorrido, Guías locales.\r\n-06 noches de alojamiento: 2 noches en Tilcara, 3 en Salta y 1 en Cafayate.\r\n-Régimen: Media Pensión.\r\n-Ex­cur­siones In­clu­i­das.\r\n-Ex­cur­siones op­cionales.', 'Tafi del Valle.\r\n-Valles Calchaquíes.\r\n-Visita Cafayate con Bodega.\r\n-Quebrada del Rio de las Conchas.\r\n-City Tour Salta.\r\n-Purmamarca.\r\n-Salinas Grandes.\r\n-Quebrada de Humahuaca\r\n-Visita Tucumán (Opcional espectáculo de luz y sonido)', '$50000', 2, 'img/5fc0119832fc14.06863194.jpg'),
(21, 'Mar Del Plara, Miramar y Necochea 6 Dias y 5 Noches', 'Incluye aereos, traslado en bus, excursiones y media pension', 'Dos dias y dos noches en Ciudad de Mar Del Plata\r\nUn Dia en Miramar\r\nTres dias en Necochea', '$30000', 6, 'img/5fc010d1d6b815.95675511.jpg'),
(22, 'Ushuaia, El Chaltén y El Calafate. 7 DIAS|8 NOCHES.', 'Aéreos | Traslados | Alojamiento en hoteles 4* | Excursiones', 'Dia 1: Llegada a Ushuaia, recorrereos el Presidio de Reincidentes y el museo del Fin del Mundo\r\nDia 2: Navegacion por el canal de Beagle y parque nacional Tierra del Fuego.\r\nDia 3: Recorrido a traves del valle del rio Olivia, donde conoceremos los agos Fagnano y Escondido.\r\nDia 4: Traslado al Calafate, visita al Glaciar Perito Moreno en el Parque Nacional Homónimo.\r\nDia 5: Navegamos el Lago Argentino en el Parque Nacional  Los Glaciares.\r\nDia 6: Traslado a El Chalten, recorrido por el bosque, avistamiento en el Mirador del Torre y conoceremos la laguna Capri.\r\nDia 7: dia libre en e Chalten y viaje de regreso.', '$50000', 4, 'img/5fc00e09bab575.88735186.jpg'),
(25, 'Glaciar Perito Moreno 4 DIAS|3 NOCHES', 'Pasajes en avion, traslado, media pension, hotel', 'Día 1:Traslado Aeropuerto-Hotel en Calafate. Día 2:Excursión Glaciar Perito Moreno. Día 3:Excursion Todo Glaciares. Día 4:Traslado Hotel-Aeropuerto de Calafate.', '$30000', 4, 'img/5fc02937b93cd0.69742169.jpg'),
(26, 'Salta, Cachi y Cafayate 5 DIAS|4 NOCHES', 'Incluye pasajes aereos, hotel, traslados, media pension', 'Día 1: Salida a primera hora de la mañana desde Buenos Aires en vuelo DIRECTO. Llegada a la ciudad de Salta y Traslado al hotel. Por la tarde, CITY TOUR (incluido). Alojamiento en Salta.\r\nDía 2: Luego del Desayuno, salida hacia CAFAYATE viajando a través de la panorámica QUEBRADA DEL RÍO LAS CONCHAS. Alojamiento en Cafayate.\r\nDía 3: Desayuno en Cafayate y Tiempo Libre hasta el traslado hacia la Ciudad de Salta. Resto del día Libre en Salta. Alojamiento.\r\nDía 4: Luego del Desayuno salida en Excursión de Día Entero a CACHI atravesando el PARQUE NACIONAL LOS CARDONES y la RECTA de TIN TIN.\r\nAlojamiento en Salta.\r\nDía 5: Desayuno en el hotel. A la hora acordada traslado al aeropuerto para tomar tu vuelo de regreso a Buenos Aires.\r\n\r\n\r\n', '$50000', 2, 'img/5fc8eb0f74a537.75748035.jpg'),
(27, 'Cordoba y Villa General Belgrano | 7 DIAS  | 6 NOCHES', 'Aereo | traslados | 6 noches de alojamiento en hoteles 4* | alquiler de vehículo', '3 noches en córdoba, alojamiento en el hotel Córdoba en el hotel Amerian Córdoba Park. \r\nServicio de alquiler de auto y de asistencia al viajero  para recorrer los puntos clave la ciudad.\r\n3 noches de alojamiento en Villa General Belgrano en el hotel Howard Johnson.\r\n', '$46.000', 5, 'img/5fc8fa329fac37.00941863.jpg'),
(28, 'Cosquin, Valle de Traslasierra y San Marcos Sierra | 7 NOCHES | 8 DIAS', 'aéreos | traslados a los diferentes destinos y tours | alojamiento en hoteles 4* con desayuno incluido | excursiones', 'Alojamiento en Cosquin, alojamiento en hotel La Puerta del Sol, recorrido por El Cerro Pan de Azúcar y  El Balneario Las Siete Cascadas\r\nAlojamiento en Traslasierra en el complejo de cabañas La Agustina, recorremos Mina Clavero.\r\nAlojamiento en San Marcos Sierra , alojamiento en hotel Marcos Sierra. recorremos la Reserva Natural 3 Piletas del Rio Quilpo.', '$50.000', 5, 'img/5fc9002c9efd59.31133824.jpg'),
(30, 'Sierra de la Ventana y Villa Ventana | 4 DIAS | 3 NOCHES', 'traslados | alojamiento en complejos de cabañas | excursiones por las sierras', 'alojamiento en el complejo Las Americas de Sierra de la Ventana\r\nexcursion a la sierra de la ventana\r\nalojamiento en el complejo del Sol , Villa Ventana', '$20.000', 6, 'img/5fc9285066b330.80857165.jpg');

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
(2, 'usuario@demo.com', '$2y$10$8vYZB/lVsbIFWPUNcRnxkul1K5oOkxHOUTW.9kfGyMMWreWp59quO', 0),
(3, 'oli@demo.com', '$2y$10$LA4IvnU8TRolNBe.NsCC9OljsGRj0h8up86uLzWpgD8CEUEwHmrQO', 1),
(5, 'cieli@demo.com', '$2y$10$zii18dC/wfoERexCRwPIauxdpGpRtBRdCjprdy6DmSCwoFKiITjMC', 0),
(6, 'loli@demo.com', '$2y$10$U8qSpvSXcu4PDp9OclraOO0wXKAhoDqLe9kEuIR5IPhrOE1aJaTe.', 0),
(7, 'manu1@demo.com', '$2y$10$TLs3hzBOUq8R9ppx1GgnnOGk0AucGMSIfVYiiwVzN89I4ba2NTOF2', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_tour` (`id_tour`),
  ADD KEY `id_usuario` (`id_usuario`);

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `email_2` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comentario`
--
ALTER TABLE `comentario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;
--
-- AUTO_INCREMENT de la tabla `region`
--
ALTER TABLE `region`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `tour`
--
ALTER TABLE `tour`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD CONSTRAINT `comentario_ibfk_1` FOREIGN KEY (`id_tour`) REFERENCES `tour` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comentario_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `tour`
--
ALTER TABLE `tour`
  ADD CONSTRAINT `tour_ibfk_1` FOREIGN KEY (`id_region`) REFERENCES `region` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
