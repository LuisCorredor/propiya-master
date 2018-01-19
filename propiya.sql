-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 19-01-2018 a las 14:48:43
-- Versión del servidor: 5.7.17-log
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `propiya`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `configs`
--

CREATE TABLE `configs` (
  `id` int(11) NOT NULL,
  `opcion` varchar(200) NOT NULL,
  `valor` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `configs`
--

INSERT INTO `configs` (`id`, `opcion`, `valor`) VALUES
(1, 'pack_free_precio', '0'),
(2, 'pack_free_dias', '30'),
(3, 'pack_free_posts', '1'),
(4, 'pack_silver_precio', '1500'),
(5, 'pack_silver_dias', '30'),
(6, 'pack_silver_posts', '15'),
(7, 'pack_gold_precio', '2000'),
(8, 'pack_gold_dias', '30'),
(9, 'pack_gold_posts', '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_personales`
--

CREATE TABLE `datos_personales` (
  `id` int(11) NOT NULL,
  `usuario` int(11) NOT NULL,
  `nombre` varchar(400) CHARACTER SET utf8 NOT NULL,
  `agencia` varchar(400) CHARACTER SET utf8 NOT NULL,
  `constructora` varchar(400) CHARACTER SET utf8 NOT NULL,
  `telefono` varchar(50) CHARACTER SET utf8 NOT NULL,
  `email` varchar(200) CHARACTER SET utf8 NOT NULL,
  `acerca` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `twitter` varchar(200) CHARACTER SET utf8 NOT NULL,
  `facebook` varchar(200) CHARACTER SET utf8 NOT NULL,
  `google` varchar(200) CHARACTER SET utf8 NOT NULL,
  `linkedin` varchar(200) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `datos_personales`
--

INSERT INTO `datos_personales` (`id`, `usuario`, `nombre`, `agencia`, `constructora`, `telefono`, `email`, `acerca`, `twitter`, `facebook`, `google`, `linkedin`) VALUES
(10, 44, 'SkollProg', '', '', '', 'buajuan93@gmail.com', '', '', '', '', ''),
(11, 45, 'Luis Corredor', '', '', '', 'ernestoco.lc@gmail.com', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagos`
--

CREATE TABLE `pagos` (
  `id` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `pack` varchar(20) NOT NULL,
  `pago` varchar(200) NOT NULL,
  `codigo` varchar(6) NOT NULL,
  `estado` varchar(20) NOT NULL,
  `monto` float NOT NULL,
  `fecha` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pagos`
--

INSERT INTO `pagos` (`id`, `user`, `pack`, `pago`, `codigo`, `estado`, `monto`, `fecha`) VALUES
(0, 44, 'gold', 'https://sandbox.mercadopago.com/mla/checkout/pay?pref_id=237141696-ca959437-5e20-4bde-bc00-d24908466859', 'OAT7JS', 'pendiente', 2000, '2017-12-15 14:43:15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `propiedad`
--

CREATE TABLE `propiedad` (
  `idPropiedad` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `TituloPropiedad` varchar(255) NOT NULL,
  `Estado` varchar(255) NOT NULL,
  `TipoInmueble` varchar(255) NOT NULL,
  `Precio` varchar(255) NOT NULL,
  `Area` varchar(255) NOT NULL,
  `Ambientes` varchar(255) NOT NULL,
  `Galeria` varchar(255) NOT NULL,
  `Direccion` varchar(255) NOT NULL,
  `Ciudad` varchar(255) NOT NULL,
  `Provincia` varchar(255) NOT NULL,
  `CodigoPostal` int(20) NOT NULL,
  `Latitud` float(10,6) NOT NULL,
  `Longitud` float(10,6) NOT NULL,
  `Descripcion` varchar(255) NOT NULL,
  `EdadInmueble` varchar(255) NOT NULL,
  `Cuartos` varchar(255) NOT NULL,
  `Banos` varchar(255) NOT NULL,
  `OtrasCaracteristicas` varchar(255) NOT NULL,
  `NombreContacto` varchar(255) NOT NULL,
  `EmailContacto` varchar(255) NOT NULL,
  `TelefonoContacto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos_usuario`
--

CREATE TABLE `tipos_usuario` (
  `id` int(11) NOT NULL,
  `tipo` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipos_usuario`
--

INSERT INTO `tipos_usuario` (`id`, `tipo`) VALUES
(1, 'particular'),
(2, 'inmobiliaria'),
(3, 'constructora');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tokens`
--

CREATE TABLE `tokens` (
  `id` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `token` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tokens`
--

INSERT INTO `tokens` (`id`, `user`, `fecha`, `token`) VALUES
(24, 44, '2017-12-13 19:05:38', 'zwaca5d5t5fqex0wdw8tl2n8dvebmb2uluq08f0iskym6780or'),
(25, 45, '2018-01-19 02:35:29', 'vb3nw81k8f4hw56bk3kjah66p2mu1qwc3xfahn8xaqemnx9a4');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `tipo` int(11) NOT NULL,
  `pack` varchar(20) CHARACTER SET utf8 NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 NOT NULL,
  `pass` varchar(50) CHARACTER SET utf8 NOT NULL,
  `activado` int(11) NOT NULL DEFAULT '0',
  `verificado` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `tipo`, `pack`, `email`, `pass`, `activado`, `verificado`) VALUES
(44, 2, 'free', 'buajuan93@gmail.com', '601f1889667efaebb33b8c12572835da3f027f78', 1, 0),
(45, 2, 'free', 'ernestoco.lc@gmail.com', '830ac5a7b9a7161c58807a88a284b7b15b375a09', 0, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `configs`
--
ALTER TABLE `configs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `datos_personales`
--
ALTER TABLE `datos_personales`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pagos`
--
ALTER TABLE `pagos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `propiedad`
--
ALTER TABLE `propiedad`
  ADD PRIMARY KEY (`idPropiedad`);

--
-- Indices de la tabla `tipos_usuario`
--
ALTER TABLE `tipos_usuario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tokens`
--
ALTER TABLE `tokens`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `configs`
--
ALTER TABLE `configs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `datos_personales`
--
ALTER TABLE `datos_personales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `propiedad`
--
ALTER TABLE `propiedad`
  MODIFY `idPropiedad` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tipos_usuario`
--
ALTER TABLE `tipos_usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `tokens`
--
ALTER TABLE `tokens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
