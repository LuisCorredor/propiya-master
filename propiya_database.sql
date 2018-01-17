-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2017 at 08:02 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `propiya_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `configs`
--

CREATE TABLE `configs` (
  `id` int(11) NOT NULL,
  `opcion` varchar(200) NOT NULL,
  `valor` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `configs`
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
-- Table structure for table `datos_personales`
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
-- Dumping data for table `datos_personales`
--

INSERT INTO `datos_personales` (`id`, `usuario`, `nombre`, `agencia`, `constructora`, `telefono`, `email`, `acerca`, `twitter`, `facebook`, `google`, `linkedin`) VALUES
(10, 44, 'SkollProg', '', '', '', 'buajuan93@gmail.com', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `pagos`
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
-- Dumping data for table `pagos`
--

INSERT INTO `pagos` (`id`, `user`, `pack`, `pago`, `codigo`, `estado`, `monto`, `fecha`) VALUES
(0, 44, 'gold', 'https://sandbox.mercadopago.com/mla/checkout/pay?pref_id=237141696-ca959437-5e20-4bde-bc00-d24908466859', 'OAT7JS', 'pendiente', 2000, '2017-12-15 14:43:15');

-- --------------------------------------------------------

--
-- Table structure for table `tipos_usuario`
--

CREATE TABLE `tipos_usuario` (
  `id` int(11) NOT NULL,
  `tipo` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tipos_usuario`
--

INSERT INTO `tipos_usuario` (`id`, `tipo`) VALUES
(1, 'particular'),
(2, 'inmobiliaria'),
(3, 'constructora');

-- --------------------------------------------------------

--
-- Table structure for table `tokens`
--

CREATE TABLE `tokens` (
  `id` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `token` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tokens`
--

INSERT INTO `tokens` (`id`, `user`, `fecha`, `token`) VALUES
(24, 44, '2017-12-13 19:05:38', 'zwaca5d5t5fqex0wdw8tl2n8dvebmb2uluq08f0iskym6780or');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
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
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `tipo`, `pack`, `email`, `pass`, `activado`, `verificado`) VALUES
(44, 2, 'free', 'buajuan93@gmail.com', '601f1889667efaebb33b8c12572835da3f027f78', 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `configs`
--
ALTER TABLE `configs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `datos_personales`
--
ALTER TABLE `datos_personales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pagos`
--
ALTER TABLE `pagos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tipos_usuario`
--
ALTER TABLE `tipos_usuario`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tokens`
--
ALTER TABLE `tokens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `configs`
--
ALTER TABLE `configs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `datos_personales`
--
ALTER TABLE `datos_personales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tipos_usuario`
--
ALTER TABLE `tipos_usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tokens`
--
ALTER TABLE `tokens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
