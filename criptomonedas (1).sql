-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 28-11-2021 a las 22:12:24
-- Versión del servidor: 8.0.21
-- Versión de PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `criptomonedas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `criptomoneda`
--

DROP TABLE IF EXISTS `criptomoneda`;
CREATE TABLE IF NOT EXISTS `criptomoneda` (
  `id_transaccion` int NOT NULL AUTO_INCREMENT,
  `criptomoneda` varchar(50) NOT NULL,
  `transaccion` varchar(50) NOT NULL,
  `cantidad_cripto` int NOT NULL,
  `cambio_dolar` varchar(50) NOT NULL,
  `compra_venta_dolar` varchar(50) NOT NULL,
  `comision` varchar(50) NOT NULL,
  `valoreal` varchar(50) NOT NULL,
  PRIMARY KEY (`id_transaccion`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `criptomoneda`
--

INSERT INTO `criptomoneda` (`id_transaccion`, `criptomoneda`, `transaccion`, `cantidad_cripto`, `cambio_dolar`, `compra_venta_dolar`, `comision`, `valoreal`) VALUES
(12, 'DOGE', 'venta', 2, '0.7021', '1.4042', '1.47441', '1.4042'),
(14, 'ETH', 'compra', 3, '3923.08', '11769.24', '11886.9324', '11769.24'),
(15, 'XRP', 'venta', 2, '1.5597', '3.1194', '3.27537', '3.1194'),
(8, 'BTC', 'venta', 2, '59000', '118000', '119180', '118000'),
(9, 'BTC', 'venta', 2, '59000', '118000', '119180', '118000'),
(10, 'ETH', 'venta', 2, '3923.08', '7846.16', '7924.6216', '7846.16'),
(11, 'DOGE', 'venta', 2, '0.7021', '1.4042', '1.47441', '1.4042'),
(13, 'XRP', 'compra', 3, '1.5597', '4.6791', '4.913055', '4.6791');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `divisas`
--

DROP TABLE IF EXISTS `divisas`;
CREATE TABLE IF NOT EXISTS `divisas` (
  `id` int NOT NULL AUTO_INCREMENT,
  `divisa` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `cantidad_cripto` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `moneda` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `valor` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=45 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `divisas`
--

INSERT INTO `divisas` (`id`, `divisa`, `cantidad_cripto`, `moneda`, `valor`) VALUES
(1, 'bitcoin', '1', 'euro', '52114'),
(2, 'Cardano ADA', '1', 'USD', '1.73'),
(35, 'dogecoin', '2', 'YEN', '50.52'),
(30, 'bitcoin', '2', 'USD', '117667.4'),
(26, 'candano ', '3 ', 'EUR ', '4.47'),
(44, 'ethereum ', '5', 'USD', '22524.65');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `id` int NOT NULL AUTO_INCREMENT,
  `usuario` varchar(50) NOT NULL,
  `contrasena` varchar(50) NOT NULL,
  `fecha_reg` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`id`, `usuario`, `contrasena`, `fecha_reg`) VALUES
(1, 'vanessa', 'vanessa21', '17/11/21'),
(2, 'vanessa', 'vanessa21', '17/11/21'),
(3, 'vanessa', 'vanessa21', '17/11/21'),
(4, 'YESY', 'yesenia2021', '17/11/21');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
