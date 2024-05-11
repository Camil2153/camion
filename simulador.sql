-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-11-2023 a las 03:22:28
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `simulador`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividades`
--

CREATE TABLE `actividades` (
  `cod_act` varchar(2) NOT NULL,
  `nom_act` varchar(500) NOT NULL,
  `act_sis` varchar(2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `actividades`
--

INSERT INTO `actividades` (`cod_act`, `nom_act`, `act_sis`, `created_at`, `updated_at`) VALUES
('01', 'Cambio de aceite', '01', '2023-08-23 01:57:48', '2023-08-23 01:57:48'),
('02', 'Cambio de filtro de aire', '01', '2023-08-23 01:59:33', '2023-08-23 01:59:33'),
('03', 'Reemplazo de Pastillas y Discos', '02', '2023-08-23 02:00:00', '2023-08-23 02:00:00'),
('04', 'Cambio de Fluidos', '02', '2023-08-23 02:00:13', '2023-08-23 02:00:13'),
('05', 'Lubricación', '03', '2023-08-23 02:00:53', '2023-08-23 02:00:53'),
('06', 'Alineación de ruedas', '03', '2023-08-23 02:01:16', '2023-08-23 02:01:16'),
('07', 'Alineación de Ejes', '04', '2023-08-23 02:01:57', '2023-08-23 02:01:57'),
('08', 'Ajuste de Cables y Palancas', '04', '2023-08-23 02:02:27', '2023-08-23 02:02:27'),
('09', 'Reemplazo Fusibles y relés', '05', '2023-08-23 02:03:13', '2023-08-23 02:03:13'),
('10', 'Reemplazo Batería', '05', '2023-08-23 02:03:40', '2023-08-23 02:03:40'),
('11', 'Despinchar', '03', '2023-08-23 23:24:52', '2023-08-23 23:24:52'),
('12', 'Inspeccion amortiguadores', '03', '2023-09-20 11:13:07', '2023-09-20 11:13:07'),
('13', 'cambio pastillas de frenos', '02', '2023-09-20 11:13:35', '2023-09-20 11:13:35'),
('14', 'engrasar tornillos u', '03', '2023-09-20 11:14:08', '2023-09-20 11:14:08'),
('15', 'Elementos de direccion', '06', '2023-09-20 11:15:47', '2023-09-20 11:15:47'),
('16', 'Bujias incandescentes', '01', '2023-09-20 11:16:39', '2023-09-20 11:16:39'),
('17', 'ejes elevadizos', '03', '2023-09-20 11:17:04', '2023-09-20 11:17:04'),
('18', 'Lubricacion partes moviles', '03', '2023-09-20 11:17:38', '2023-09-20 11:17:38'),
('19', 'Liquido de transmision', '04', '2023-09-20 11:18:03', '2023-09-20 11:18:03'),
('20', 'Cilindro de ruedas', '02', '2023-09-20 11:18:29', '2023-09-20 11:18:29'),
('21', 'Reparación de tubo de escape', '07', '2023-10-02 13:16:31', '2023-10-02 13:16:31'),
('22', 'Reparación de sistema de refrigeración', '09', '2023-10-02 13:19:27', '2023-10-02 13:19:27'),
('23', 'Reemplazo de dirección asistida', '06', '2023-10-02 13:23:01', '2023-10-02 13:23:01'),
('24', 'Reemplazo de bomba de dirección', '06', '2023-10-02 13:50:43', '2023-10-02 13:50:43'),
('25', 'Reparación del sistema eléctrico', '05', '2023-10-02 13:58:59', '2023-10-02 13:58:59'),
('26', 'Reemplazo de caja de cambios', '04', '2023-10-02 14:13:47', '2023-10-02 14:13:47'),
('27', 'Reparación de llanta pinchada', '17', '2023-10-02 15:02:15', '2023-10-02 15:02:15'),
('28', 'Reparación de direcciónal dañada', '18', '2023-10-02 15:05:50', '2023-10-02 15:05:50'),
('29', 'Reparación de pérdida de potencia del motor', '01', '2023-10-02 15:36:58', '2023-10-02 15:36:58'),
('30', 'Reemplazo de bujías sueltas', '01', '2023-10-02 16:12:02', '2023-10-02 16:12:02'),
('31', 'Reparación del sistema de escape', '07', '2023-10-02 16:15:04', '2023-10-02 16:15:04'),
('32', 'Reemplazo de componentes en el sistema de transmisión', '04', '2023-10-02 16:16:56', '2023-10-02 16:16:56'),
('33', 'Reparación del sistema de suspensión', '03', '2023-10-02 16:23:34', '2023-10-02 16:23:34'),
('34', 'Reparación de pérdida de presión de los neumáticos', '14', '2023-10-02 16:26:12', '2023-10-02 16:26:12'),
('36', 'Reparación del sistema de lubricación', '35', '2023-10-02 16:32:47', '2023-10-02 16:32:47'),
('37', 'Reemplazo de direcciónal dañada', '06', '2023-10-02 16:35:00', '2023-10-02 16:35:00'),
('40', 'Reemplazo de frenos desgastados', '02', '2023-10-02 16:42:35', '2023-10-02 16:42:35'),
('44', 'luces', '05', '2023-09-29 03:34:46', '2023-09-29 03:34:46');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `almacenes`
--

CREATE TABLE `almacenes` (
  `cod_alm` varchar(4) NOT NULL,
  `com_alm` varchar(15) NOT NULL,
  `cat_alm` varchar(25) NOT NULL,
  `can_alm` bigint(20) NOT NULL,
  `ubi_alm` varchar(15) NOT NULL,
  `pro_alm` varchar(30) NOT NULL,
  `fec_adq_alm` date NOT NULL,
  `fec_ven_alm` date NOT NULL,
  `est_alm` varchar(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `almacenes`
--

INSERT INTO `almacenes` (`cod_alm`, `com_alm`, `cat_alm`, `can_alm`, `ubi_alm`, `pro_alm`, `fec_adq_alm`, `fec_ven_alm`, `est_alm`, `created_at`, `updated_at`) VALUES
('0001', '100002848599393', 'mecánica', 7, '5a -72', 'Autoservicio Arboles', '2023-07-01', '2024-12-31', 'disponible', '2023-08-23 11:46:00', '2023-08-24 00:12:08'),
('0002', '100004849202840', 'mecánica', 8, '5a -73', 'Autoservicio Arboles', '2023-07-01', '2026-12-31', 'disponible', '2023-08-23 11:46:50', '2023-10-02 14:23:45'),
('0003', '100045793937289', 'mecánica', 10, '5b -26', 'Autoservicio Arboles', '2023-07-01', '2026-12-31', 'disponible', '2023-08-23 11:47:35', '2023-08-23 11:47:35'),
('0004', '100374928747392', 'electrónica', -1, '5a -26', 'Autoservicio Arboles', '2023-07-01', '2025-12-23', 'disponible', '2023-08-23 11:48:51', '2023-10-02 13:12:47'),
('0005', '42i3148329', 'mecánica', 5, '5b -20', 'Autoservicio Arboles', '2023-07-01', '2024-06-29', 'disponible', '2023-08-23 11:49:39', '2023-08-23 12:02:02'),
('0006', '4i98392683', 'mecánica', 8, '5b -21', 'Autoservicio Arboles', '2022-01-01', '2023-12-31', 'disponible', '2023-08-23 11:50:22', '2023-08-23 11:50:22'),
('0007', '10e203t04e09', 'mecánica', 13, '5a -01', 'Autoservicio Arboles', '2023-07-01', '2028-12-31', 'disponible', '2023-08-23 23:26:33', '2023-08-23 23:32:13'),
('0008', '16365363', 'mecánica', 8, 'CALLE 27B-4', 'Distribuidoras SAS', '2023-06-23', '2030-06-23', 'disponible', '2023-09-20 11:27:58', '2023-09-20 11:27:58'),
('0009', '161762736', 'mecánica', 30, 'CALLE 4B', 'JIMSAS', '2023-07-10', '2030-07-10', 'disponible', '2023-09-20 11:28:52', '2023-09-20 11:28:52'),
('0010', '12737123', 'mecánica', 1, '18-8', 'RECORDLTDA', '2023-08-04', '2025-08-04', 'disponible', '2023-09-20 11:30:07', '2023-09-20 11:30:07'),
('1230', 'TS12345', 'mecánica', 50, 'Bodega A', 'Motores Colombia S.A.', '2023-06-15', '2029-06-15', 'disponible', '2023-10-02 04:30:42', '2023-10-02 04:30:42'),
('1234', '131234134', 'electrónica', 10, 'Bodega A', 'Neumáticos S.A.', '2023-06-15', '2029-06-15', 'disponible', '2023-10-02 03:52:37', '2023-10-02 03:52:37'),
('2340', 'TR67890', 'mecánica', 3, 'Bodega B', 'Transmisiones Express Ltda.', '2023-09-20', '2024-09-15', 'disponible', '2023-10-02 04:31:27', '2023-10-02 04:31:27'),
('2345', '1314324', 'mecánica', 20, 'Bodega B', 'Filtros y Partes Ltda.', '2023-09-20', '2024-09-15', 'disponible', '2023-10-02 03:56:33', '2023-10-02 03:56:33'),
('2346', 'TB78901', 'mecánica', 12, 'Bodega A', 'Tanques Express Ltda.', '2023-10-08', '2023-10-08', 'disponible', '2023-10-02 04:40:11', '2023-10-02 04:40:11'),
('3056', 'FS23456', 'mecánica', 20, 'Bodega C', 'Frenos Seguros Ltda.', '2022-12-10', '2025-03-05', 'disponible', '2023-10-02 04:32:18', '2023-10-02 04:32:18'),
('3456', '53715235612', 'mecánica', 15, 'Bodega C', 'Lubricantes Colombianos S.A.', '2022-12-10', '2024-12-10', 'disponible', '2023-10-02 03:58:04', '2023-10-02 03:58:04'),
('4067', 'SS78901', 'mecánica', 10, 'Bodega A', 'Suspensión Total SAS', '2023-03-05', '2029-03-05', 'disponible', '2023-10-02 04:32:52', '2023-10-02 04:32:52'),
('4566', 'TC23456', 'mecánica', 2, 'Bodega C', 'Turbo Ltda.', '2020-04-04', '2029-04-04', 'disponible', '2023-10-02 04:54:31', '2023-10-02 04:54:31'),
('4567', '764873254', 'mecánica', 15, 'Bodega A', 'Pernos Seguros Ltda.', '2023-03-05', '2025-03-05', 'disponible', '2023-10-02 03:58:57', '2023-10-02 03:58:57'),
('4678', 'PE67890', 'mecánica', 15, 'Bodega C', 'Vidrios Seguros Ltda.', '2023-02-22', '2029-02-22', 'disponible', '2023-10-02 04:35:29', '2023-10-02 04:35:29'),
('5060', 'PP12345', 'herramientas manuales', 3, 'Bodega B', 'Pinturas Creativas S.A.', '2023-11-12', '2029-11-12', 'disponible', '2023-10-02 04:48:26', '2023-10-02 04:48:26'),
('5678', '829839383', 'mecánica', 20, 'Bodega B', 'Baterías Energéticas S.A.', '2023-07-12', '2029-07-12', 'disponible', '2023-10-02 03:59:48', '2023-10-02 03:59:48'),
('6784', 'AC23456', 'mecánica', 6, 'Bodega C', 'Aire Fresco Ltda.', '2023-12-25', '2029-12-25', 'disponible', '2023-10-02 04:49:10', '2023-10-02 04:49:10'),
('7845', 'AS78901', 'herramientas manuales', 24, 'Bodega C', 'Asientos Elegantes S.A.', '2024-03-20', '2029-03-20', 'disponible', '2023-10-02 04:51:55', '2023-10-02 04:51:55'),
('7877', 'LT23456', 'mecánica', 23, 'Bodega A', 'Luces Brillantes Ltda.', '2023-12-05', '2029-12-05', 'disponible', '2023-10-02 04:38:45', '2023-10-02 14:01:14'),
('7890', 'EL67890', 'mecánica', 30, 'Bodega A', 'Alternadores Colombia S.A.', '2023-11-08', '2023-11-08', 'disponible', '2023-10-02 04:36:11', '2023-10-02 04:36:11'),
('7891', 'RB78901', 'mecánica', 18, 'Bodega A', 'Ruedas Premium Ltda.', '2024-01-02', '2029-01-02', 'disponible', '2023-10-02 04:50:15', '2023-10-02 04:50:15'),
('8878', 'EF12345', 'mecánica', 6, 'Bodega B', 'Escape Total SAS', '2024-02-15', '2029-02-15', 'disponible', '2023-10-02 04:50:55', '2023-10-02 14:39:57'),
('8901', 'ST67890', 'mecánica', 5, 'Bodega B', 'GPS Solutions Ltda.', '2023-05-10', '2023-05-10', 'disponible', '2023-10-02 04:37:01', '2023-10-02 04:37:01'),
('9012', 'SR12345', 'mecánica', 12, 'Bodega C', 'Radiadores Rápidos S.A.', '2023-09-18', '2023-09-18', 'disponible', '2023-10-02 04:37:42', '2023-10-02 04:37:42');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `camiones`
--

CREATE TABLE `camiones` (
  `pla_cam` varchar(7) NOT NULL,
  `mar_cam` varchar(15) NOT NULL,
  `mod_cam` varchar(4) NOT NULL,
  `tip_cam` varchar(20) NOT NULL,
  `num_eje_cam` int(11) NOT NULL,
  `est_cam` varchar(20) NOT NULL,
  `kil_cam` int(11) NOT NULL,
  `cap_cam` int(11) NOT NULL,
  `con_cam` varchar(20) NOT NULL,
  `est_cam_anterior` varchar(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `camiones`
--

INSERT INTO `camiones` (`pla_cam`, `mar_cam`, `mod_cam`, `tip_cam`, `num_eje_cam`, `est_cam`, `kil_cam`, `cap_cam`, `con_cam`, `est_cam_anterior`, `created_at`, `updated_at`) VALUES
('ABC123', 'Volvo', '2019', 'convencional', 2, 'disponible', 120200, 25, '123456789', 'disponible', '2023-10-02 02:42:20', '2023-11-09 01:50:00'),
('BCD123', 'Volvo', '2017', 'portacontenedores', 2, 'disponible', 95732, 22, '76543244', NULL, '2023-10-02 03:10:20', '2023-10-02 17:18:24'),
('BCD789', 'Mack', '2020', 'convencional', 3, 'disponible', 80212, 34, '54321098', 'disponible', '2023-10-02 02:51:38', '2023-11-09 01:50:01'),
('DEF789', 'Freightliner', '2018', 'cisterna', 2, 'disponible', 91052, 20, '34567890', 'disponible', '2023-10-02 02:43:48', '2023-11-09 01:50:00'),
('EFG456', 'Freightliner', '2021', 'convencional', 3, 'disponible', 75568, 30, '43214321', 'disponible', '2023-10-02 03:10:51', '2023-11-09 01:50:00'),
('EFG901', 'Volvo', '2017', 'plataforma plana', 2, 'disponible', 115751, 24, '65432109', NULL, '2023-10-02 02:52:27', '2023-10-02 17:19:08'),
('FHY-145', 'Kenworth', '1966', 'plataforma plana', 2, 'disponible', 900512, 20, '898983973', 'disponible', '2023-09-29 02:17:51', '2023-11-09 01:50:01'),
('FMN213', 'BMW', '1993', 'cisterna', 1, 'disponible', 309477, 30, '7367157363', 'disponible', '2023-09-29 02:25:35', '2023-11-09 01:50:00'),
('GHI567', 'Mack', '2021', 'volteo', 3, 'disponible', 75872, 35, '56789012', 'disponible', '2023-10-02 02:44:34', '2023-11-09 01:50:00'),
('GPO091', 'Mercedes', '1970', 'convencional', 3, 'disponible', 989798, 30, '8748723462', 'disponible', '2023-09-29 02:26:42', '2023-11-09 01:50:01'),
('H49033', 'Volvo', '2017', 'convencional', 2, 'disponible', 865145, 20, '123789567', NULL, '2023-09-28 00:48:38', '2023-10-02 17:21:19'),
('HIJ234', 'International', '2018', 'plataforma plana', 2, 'disponible', 95327, 22, '45678900', NULL, '2023-10-02 02:53:39', '2023-10-02 17:21:30'),
('HIJ789', 'Mack', '2019', 'convencional', 2, 'disponible', 86001, 23, '44123456', 'disponible', '2023-10-02 03:11:24', '2023-11-09 01:50:00'),
('HIL378', 'Kenworth', '1997', 'convencional', 2, 'disponible', 400415, 20, '32289938', NULL, '2023-09-29 02:24:49', '2023-10-02 17:21:47'),
('JBL-411', 'BMW', '2000', 'plataforma plana', 4, 'disponible', 352128, 30, '134782664', NULL, '2023-09-29 02:17:14', '2023-10-02 17:21:55'),
('JKL901', 'International', '2017', 'refrigerado', 2, 'disponible', 110133, 22, '78901234', 'disponible', '2023-10-02 02:45:19', '2023-11-09 01:50:01'),
('KLM345', 'Kenworth', '2021', 'cisterna', 3, 'disponible', 70125, 30, '87654321', NULL, '2023-10-02 02:55:34', '2023-10-02 17:22:11'),
('KLM678', 'Freightliner', '2021', 'convencional', 2, 'disponible', 70471, 24, '44341234', 'disponible', '2023-10-02 03:06:09', '2023-11-09 01:50:01'),
('KLM901', 'Scania', '2020', 'convencional', 3, 'disponible', 80141, 28, '55012345', NULL, '2023-10-02 03:12:14', '2023-10-02 17:22:29'),
('L34067', 'mercedes', '1991', 'volteo', 3, 'disponible', 879649, 20, 'RTY564', 'disponible', '2023-09-29 02:27:55', '2023-11-09 01:50:00'),
('MNO234', 'Scania', '2022', 'portacontenedores', 3, 'disponible', 40955, 30, '90123456', 'disponible', '2023-10-02 02:45:53', '2023-11-09 01:50:00'),
('NOP234', 'Kenworth', '2018', 'convencional', 2, 'disponible', 91543, 24, '67890123', NULL, '2023-10-02 03:12:44', '2023-10-02 17:22:53'),
('NOP456', 'Volvo', '2019', 'volteo', 2, 'disponible', 105000, 25, '23456788', 'disponible', '2023-10-02 02:56:11', '2023-11-09 01:50:00'),
('NOP901', 'Scania', '2022', 'cisterna', 3, 'disponible', 50554, 30, '89012345', NULL, '2023-10-02 03:06:45', '2023-10-02 17:23:12'),
('PQR567', 'Kenworth', '2020', 'convencional', 2, 'disponible', 95000, 23, '43210987', 'disponible', '2023-10-02 02:47:40', '2023-11-09 01:50:01'),
('QRS234', 'Volvo', '2018', 'portacontenedores', 2, 'disponible', 85000, 22, '23456789', NULL, '2023-10-02 03:07:30', '2023-10-02 03:07:30'),
('QRS567', 'Freightliner', '2020', 'cisterna', 2, 'disponible', 90000, 23, '12341234', 'disponible', '2023-10-02 02:57:08', '2023-10-02 03:32:05'),
('RST567', 'Kenworth', '2019', 'convencional', 2, 'disponible', 95000, 23, '78904434', NULL, '2023-10-02 03:05:01', '2023-10-02 16:39:05'),
('STU456', 'Mack', '2019', 'refrigerado', 2, 'disponible', 105000, 25, '98765432', NULL, '2023-10-02 03:08:12', '2023-10-02 03:08:12'),
('STU890', 'Volvo', '2019', 'convencional', 3, 'en mantenimiento', 130000, 28, '32109876', 'en mantenimiento', '2023-10-02 02:49:18', '2023-11-09 01:50:01'),
('TUV789', 'Mack', '2019', 'cisterna', 3, 'disponible', 85000, 28, '01234567', NULL, '2023-10-02 02:57:40', '2023-10-02 02:57:40'),
('UVW345', 'Volvo', '2020', 'volteo', 3, 'disponible', 75000, 32, '76543210', NULL, '2023-10-02 03:04:27', '2023-10-02 03:04:27'),
('VWX123', 'Freightliner', '2018', 'convencional', 2, 'disponible', 85000, 21, '21098765', 'disponible', '2023-10-02 02:49:57', '2023-10-02 16:06:54'),
('VWX789', 'Kenworth', '2020', 'refrigerado', 3, 'disponible', 80000, 30, '66234567', 'disponible', '2023-10-02 03:08:49', '2023-10-02 03:27:53'),
('WXY901', 'Scania', '2018', 'plataforma plana', 2, 'disponible', 100000, 24, '2349197397', NULL, '2023-10-02 03:02:31', '2023-10-02 03:02:31'),
('XYZ123', 'International', '2017', 'plataforma plana', 2, 'disponible', 110000, 22, '10987654', NULL, '2023-10-02 03:03:45', '2023-10-02 03:03:45'),
('XYZ456', 'Kenworth', '2020', 'plataforma plana', 3, 'en mantenimiento', 150000, 30, '45678901', 'en mantenimiento', '2023-10-02 02:43:05', '2023-11-09 01:50:01'),
('YZA012', 'International', '2018', 'convencional', 2, 'en mantenimiento', 90000, 23, '34567899', 'en mantenimiento', '2023-10-02 03:09:25', '2023-11-09 01:50:01'),
('YZA456', 'Scania', '2019', 'plataforma plana', 3, 'disponible', 110000, 32, '56789011', NULL, '2023-10-02 02:50:46', '2023-10-02 02:50:46');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias_gastos`
--

CREATE TABLE `categorias_gastos` (
  `cod_cat_gas` varchar(4) NOT NULL,
  `nom_cat_gas` varchar(25) NOT NULL,
  `desc_cat_gas` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `categorias_gastos`
--

INSERT INTO `categorias_gastos` (`cod_cat_gas`, `nom_cat_gas`, `desc_cat_gas`, `created_at`, `updated_at`) VALUES
('0001', 'Peajes', 'Impuesto vial', '2023-08-23 06:03:24', '2023-08-23 06:03:24'),
('0002', 'Combustible', 'ACPM', '2023-08-23 06:03:54', '2023-08-23 06:03:54'),
('0003', 'Ocasionales', 'Gastos de imprevistos', '2023-08-23 06:04:48', '2023-09-08 21:46:19'),
('0004', 'Estacionamiento', 'Estacionamiento Vehiculo', '2023-08-23 06:05:16', '2023-08-23 06:05:16'),
('0005', 'Alimentación', 'Alimentación Conductor', '2023-08-23 06:05:45', '2023-08-23 06:05:45'),
('0006', 'Alojamiento', 'Alojamiento conductor', '2023-08-23 06:06:17', '2023-08-23 06:06:17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `cod_cli` varchar(6) NOT NULL,
  `nom_cli` varchar(25) NOT NULL,
  `nom_com_cli` varchar(25) NOT NULL,
  `col_cli` varchar(35) NOT NULL,
  `dir_cli` varchar(35) NOT NULL,
  `rfc_cli` varchar(15) NOT NULL,
  `ciu_cli` varchar(40) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`cod_cli`, `nom_cli`, `nom_com_cli`, `col_cli`, `dir_cli`, `rfc_cli`, `ciu_cli`, `created_at`, `updated_at`) VALUES
('000001', 'Carlos Manrrique', 'Home Center', 'Tolima', 'calle 72 #65-04', '18983410', 'Ibague', '2023-08-23 01:48:36', '2023-08-23 01:55:24'),
('000002', 'Edna Karina Torres', 'Constructora Atlántico', 'Atlántico', 'calle 45 #65-04', '18983540', 'Barranquilla', '2023-08-23 01:49:22', '2023-08-23 01:55:07'),
('000003', 'Juan Jose Castillo', 'Constructora Pachón SAS', 'Cundinamarca', 'cra 1 #01-22', '18983450', 'Arbelaez', '2023-08-23 01:50:28', '2023-08-23 01:52:23'),
('000004', 'Julio Cesar Hernandez', 'Ferrecentro', 'Antioquia', 'calle 08 #60-22', '3901893733', 'Medellin', '2023-08-23 01:52:00', '2023-08-23 01:52:00'),
('000005', 'Carolina Gutierrez Nieto', 'Ferreteria Alamos', 'Cundinamarca', 'calle 4 #05-01', '3901893733', 'Guataquí', '2023-08-23 01:54:17', '2023-08-23 01:54:17'),
('000006', 'Faider Rodriguez', 'distribuidores SAS', 'Antioquia', 'CR6-9-34', '18998789', 'Medellin', '2023-09-20 10:51:14', '2023-09-20 11:06:54'),
('000007', 'Richard Torres', 'JIMLTDA', 'Santandander', 'calle 27b#5-14', '188987676', 'Bucaramanga', '2023-09-20 10:52:57', '2023-09-20 11:07:04'),
('000008', 'Oscar Rodriguez', 'Expresss SAS', 'Cundinamarca', 'calle 4#32-3', '1989989867', 'Bogota', '2023-09-20 10:54:13', '2023-09-20 11:07:26'),
('000009', 'Richard Torres', 'JIMLTDA', 'Santandander', 'calle 27b#5-14', '188987676', 'Bucaramanga', '2023-09-20 10:52:49', '2023-09-20 11:07:34'),
('000010', 'Teresa Alvarez', 'Asociados LTDA', 'Antioquia', 'cr7 #1-12', '1689898334', 'Medellín', '2023-09-20 10:55:36', '2023-09-20 11:07:43'),
('000011', 'Jairo Castellanos', 'Urbanos SAS', 'Tolima', 'calle 32a #6-24', '1878645353', 'Ibague', '2023-09-20 10:56:44', '2023-09-20 11:07:57'),
('000012', 'Ebelio Mastinez', 'CamionesLTDA', 'Cauca', 'cr2b#2-36', '156727637', 'Popayan', '2023-09-20 10:59:00', '2023-09-20 11:08:14'),
('000013', 'Jorge Herrera', 'Rodrigo Lopez', 'Cundinamarca', 'calle 48 #12-11', '1677892929', 'Bogota', '2023-09-20 11:00:32', '2023-09-20 11:08:27'),
('000014', 'Jhony Barrera', 'Instrumentos SAS', 'Antioquia', 'cr8 #4-27', '156782689', 'Medellin', '2023-09-20 11:01:39', '2023-09-20 11:08:40'),
('000015', 'Felipe Castellanos', 'Arquitectos ASS', 'Valle del Cauca', 'calle 4#8-60', '16763330', 'Cali', '2023-09-20 11:04:17', '2023-09-20 11:08:52'),
('000016', 'Yerson Villarraga', 'INGENIEROS LTDA', 'Cundinamarca', 'calle 7 #2a-8', '178564737', 'Bogota', '2023-09-20 11:05:34', '2023-09-20 11:09:06'),
('000017', 'Sebastian Vargas', 'Avantika', 'Norte de Santander', 'CALLE 23#1-45', '167389080', 'Cucuta', '2023-09-20 11:02:53', '2023-09-20 11:09:19'),
('000018', 'FERNEY RAMIREZ', 'ALIEX SAS', 'CAUCA', 'CALLE 7#98-6', '189899898', 'POPAYAN', '2023-09-20 11:10:27', '2023-09-20 11:10:27'),
('000019', 'SANTIAGO GARAVITO', 'EMPRESAS MULTIPLES LTDA', 'BOYACA', 'CR5#23-7', '1787787387', 'TUNJA', '2023-09-20 11:11:23', '2023-09-20 11:11:23'),
('004567', 'Carolina Gómez', 'Gómez Hauling', 'La Victoria', 'Carrera 15 #123', 'GOMC840315ABC', 'Ibague', '2023-10-02 03:45:17', '2023-10-02 03:45:17'),
('123456', 'María González', 'Transportes González S.A.', 'El Rosal', 'Calle 45 #123', 'GONM760524ABC', 'Bogotá D.C', '2023-10-02 03:36:00', '2023-10-02 03:36:00'),
('234567', 'Carlos Pérez', 'Pérez Transportes Ltda.', 'La Esperanza', 'Carrera 30 #456', 'PERC890712XYZ', 'Medellín', '2023-10-02 03:36:50', '2023-10-02 03:36:50'),
('345678', 'Laura Rodríguez', 'Transportes Rodríguez SAS', 'Los Pinos', 'Avenida 12 #789', 'RODL650315PQR', 'Cali', '2023-10-02 03:37:26', '2023-10-02 03:37:26'),
('456789', 'Juan López', 'López Logística', 'San Francisco', 'Calle 67 #234', 'LOPJ541124XYZ', 'Barranquilla', '2023-10-02 03:39:08', '2023-10-02 03:39:08'),
('567890', 'Ana Martínez', 'Martínez Trans. Express', 'Los Alamos', 'Carrera 25 #567', 'MARA720827ABC', 'Cartagena', '2023-10-02 03:39:55', '2023-10-02 03:39:55'),
('623456', 'Manuel Vargas', 'Vargas Transport', 'Los Pájaros', 'Calle 34 #567', 'VARM810725XYZ', 'Santa Marta', '2023-10-02 03:44:23', '2023-10-02 03:44:23'),
('678901', 'José Sánchez', 'Sánchez Logistics', 'La Florida', 'Avenida 5 #890', 'SANJ690502PQR', 'Pereira', '2023-10-02 03:40:32', '2023-10-02 03:40:32'),
('789012', 'Sandra Ramírez', 'Ramírez Transportes', 'San José', 'Calle 12 #345', 'RAMS800630XYZ', 'Bucaramanga', '2023-10-02 03:42:04', '2023-10-02 03:42:04'),
('890123', 'Pedro Castro', 'Castro Cargo', 'El Bosque', 'Carrera 40 #678', 'CASP721015ABC', 'Cúcuta', '2023-10-02 03:42:44', '2023-10-02 03:42:44'),
('901234', 'Laura Herrera', 'Herrera Logística', 'La Floresta', 'Avenida 8 #901', 'HERL750420PQR', 'Manizales', '2023-10-02 03:43:37', '2023-10-02 03:43:37'),
('995678', 'Juan Pérez', 'Pérez Transport Express', 'Los Pinos', 'Calle 56 #890', 'PEJJ731217PQR', 'Villavicencio', '2023-10-02 03:45:59', '2023-10-02 03:45:59');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `componentes`
--

CREATE TABLE `componentes` (
  `num_ser_com` varchar(15) NOT NULL,
  `nom_com` varchar(25) NOT NULL,
  `mar_com` varchar(15) NOT NULL,
  `desc_com` varchar(500) NOT NULL,
  `cos_com` int(11) NOT NULL,
  `sis_com` varchar(2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `componentes`
--

INSERT INTO `componentes` (`num_ser_com`, `nom_com`, `mar_com`, `desc_com`, `cos_com`, `sis_com`, `created_at`, `updated_at`) VALUES
('100002848599393', 'Aceite 20w60', 'Mobil', 'REF: 20w60', 45000, '01', '2023-08-23 02:07:13', '2023-08-23 02:07:13'),
('100004849202840', 'Pastilla de freno', 'Bendix', 'Pastilla de freno marca Bendix', 50000, '02', '2023-08-23 11:39:04', '2023-08-23 11:44:03'),
('100045793937289', 'Disco de freno', 'Bendix', 'Disco de freno marca Bendix', 85000, '02', '2023-08-23 11:40:09', '2023-08-23 11:44:14'),
('100374928747392', 'Bateria', 'PowerMax Pro', 'Bateria Marca PowerMax Pro', 685000, '05', '2023-08-23 11:43:38', '2023-08-23 11:44:28'),
('10e203t04e09', 'Llantas', 'Michelin', 'Llantas marca Michelin', 185000, '03', '2023-08-23 23:25:41', '2023-08-23 23:25:41'),
('12737123', 'direccion', 'Bendix', 'barra de direccion', 350000, '06', '2023-09-20 11:24:33', '2023-09-20 11:24:33'),
('131234134', 'iluminacion', 'Bendix', 'Revision de Iluminacion', 79000, '05', '2023-09-20 11:25:57', '2023-09-20 11:25:57'),
('1314324', 'velocidad', 'EA', 'revisión Control de Velocidad', 300000, '05', '2023-09-20 11:23:54', '2023-09-20 11:23:54'),
('161762736', 'partes', 'movil', 'Engrasante de partes', 40000, '02', '2023-09-20 11:21:02', '2023-09-20 11:21:02'),
('16365363', 'Tornillos u', 'Bendix', 'Tornillos u', 89000, '03', '2023-09-20 11:22:54', '2023-09-20 11:22:54'),
('42i3148329', 'Filtro de aire', 'WIX Filters', 'filtro de aire', 30000, '01', '2023-08-23 03:49:45', '2023-08-23 03:49:45'),
('4i98392683', 'Líquido de Frenos DOT 4', 'ATE', 'Líquido de Frenos DOT 4 Marca ATE', 120000, '02', '2023-08-23 11:42:09', '2023-08-23 11:44:40'),
('53715235612', 'baladas', 'Bendix', 'monitoreo de baladas', 78000, '02', '2023-09-20 11:25:11', '2023-09-20 11:25:11'),
('764873254', 'pernos', 'Bendix', 'Pernos de montaje', 400000, '01', '2023-09-20 11:26:28', '2023-09-20 11:26:28'),
('829839383', 'Filtro', 'Bendix', 'Filtro de aire', 189000, '04', '2023-09-20 11:21:48', '2023-09-20 11:21:48'),
('AC23456', 'Aire Acondicionado', 'Denso', 'Sistema de aire acondicionado completo', 5500000, '13', '2023-10-02 04:20:47', '2023-10-02 04:20:47'),
('AS78901', 'Asientos de Cuero', 'Recaro', 'Asientos de cuero con ajuste eléctrico', 4000000, '12', '2023-10-02 04:17:30', '2023-10-02 04:17:30'),
('EF12345', 'Sistema de Escape', 'Walker', 'Sistema de escape completo', 2500000, '07', '2023-10-02 04:07:24', '2023-10-02 04:07:24'),
('EL67890', 'Alternador', 'Delco', 'Alternador de 120 amperios', 1500000, '05', '2023-10-02 04:07:57', '2023-10-02 04:07:57'),
('FS23456', 'Frenos de Disco', 'Bendix', 'Juego completo de frenos de disco', 5000000, '02', '2023-10-02 04:04:02', '2023-10-02 04:04:02'),
('LT23456', 'Luces LED', 'Philips', 'Juego completo de luces LED', 1800000, '11', '2023-10-02 04:16:01', '2023-10-02 04:16:01'),
('PE67890', 'Parabrisas', 'PPG', 'Parabrisas reforzado', 2200000, '10', '2023-10-02 04:14:02', '2023-10-02 04:14:02'),
('PP12345', 'Pintura Personalizada', 'PPG', 'Pintura personalizada con logotipo de la empresa', 7000000, '15', '2023-10-02 04:24:46', '2023-10-02 04:24:46'),
('RB78901', 'Ruedas de Aluminio', 'Alcoa', 'Juego de ruedas de aluminio pulido', 3200000, '14', '2023-10-02 04:23:03', '2023-10-02 04:23:03'),
('SR12345', 'Radiador', 'Behr', 'Radiador de aluminio de alta eficiencia', 4800000, '09', '2023-10-02 04:12:00', '2023-10-02 04:12:00'),
('SS78901', 'Suspensión Neumática', 'Firestone', 'Sistema de suspensión neumática', 8000000, '03', '2023-10-02 04:04:31', '2023-10-02 04:04:31'),
('ST67890', 'Sistema de Rastreo GPS', 'Garmin', 'Sistema de rastreo y seguimiento en tiempo real', 2800000, '16', '2023-10-02 04:26:32', '2023-10-02 04:26:32'),
('TB78901', 'Tanque de Combustible', 'FuelSafe', 'Tanque de combustible de acero inoxidable', 3500000, '08', '2023-10-02 04:10:26', '2023-10-02 04:10:26'),
('TC23456', 'Turbo Cargador', 'Garrett', 'Turbo cargador de alta potencia', 6000000, '01', '2023-10-02 04:08:38', '2023-10-02 04:08:38'),
('TR67890', 'Transmisión Automática', 'Allison', 'Transmisión automática de 10 velocidades', 15000000, '04', '2023-10-02 04:02:51', '2023-10-02 04:02:51'),
('TS12345', 'Motor Diesel', 'Cummins', 'Motor diésel de 6 cilindros', 20000000, '01', '2023-10-02 04:02:23', '2023-10-02 04:02:23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conductores`
--

CREATE TABLE `conductores` (
  `dni_con` varchar(20) NOT NULL,
  `nom_con` varchar(45) NOT NULL,
  `num_lic_con` varchar(20) NOT NULL,
  `fec_ven_lic_con` date NOT NULL,
  `fec_con_con` date NOT NULL,
  `est_con` varchar(20) NOT NULL,
  `fec_nac_con` date NOT NULL,
  `dir_con` varchar(35) NOT NULL,
  `num_tel_con` varchar(10) NOT NULL,
  `cor_ele_con` varchar(45) NOT NULL,
  `año_exp_con` int(11) NOT NULL,
  `eps_con` varchar(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `conductores`
--

INSERT INTO `conductores` (`dni_con`, `nom_con`, `num_lic_con`, `fec_ven_lic_con`, `fec_con_con`, `est_con`, `fec_nac_con`, `dir_con`, `num_tel_con`, `cor_ele_con`, `año_exp_con`, `eps_con`, `created_at`, `updated_at`) VALUES
('01234567', 'Martín Jiménez', '01234567', '2024-11-05', '2018-03-20', 'asignado', '1985-08-12', 'Avenida 456, Bogotá', '3112345678', 'martinjimenez@email.com', 9, 'Coosalud', '2023-10-02 01:03:52', '2023-10-02 02:57:40'),
('10987654', 'José Pérez', '10987654', '2025-03-10', '2019-08-15', 'asignado', '1982-12-02', 'Avenida 56, Bogotá', '3209876543', 'joseperez@email.com', 9, 'EPS Familiar', '2023-10-02 01:14:00', '2023-10-02 03:03:45'),
('12341234', 'Silvio Ríos', '12341234', '2025-06-15', '2017-09-08', 'asignado', '1990-02-25', 'Calle 23, Medellín', '3209876543', 'silviorios@email.com', 12, 'SaludCoop', '2023-10-02 01:05:09', '2023-10-02 02:57:09'),
('123456789', 'Juan Pérez', '123456789', '2025-05-15', '2022-03-20', 'asignado', '1980-08-10', 'Calle 123, Bogotá', '3214567890', 'juanperez@email.com', 10, 'Sura', '2023-10-02 00:13:44', '2023-10-02 02:09:18'),
('123789567', 'Roberto Reyes', '123789567', '2024-06-20', '2023-06-20', 'asignado', '1989-10-13', 'calle 5 #03-22', '3127896574', 'rr893018@gmail.com', 10, 'SANITAS', '2023-09-25 17:23:58', '2023-09-28 00:48:38'),
('134782664', 'ANDRES LOPEZ', '7837837', '2023-12-12', '2023-02-01', 'asignado', '1997-08-12', 'CARRERA 5C #3', '3214567890', 'ANDRES@GMAIL.COM', 5, 'NUEVA EPS', '2023-09-25 17:27:03', '2023-09-29 02:17:14'),
('21098765', 'Martin González', '21098765', '2024-06-22', '2018-11-05', 'asignado', '1987-04-14', 'Carrera 23, Cali', '3111234567', 'martagonzalez@email.com', 7, 'SaludTotal', '2023-10-02 01:12:38', '2023-10-02 02:49:57'),
('23456788', 'Juan Carlos Herrera', '23456788', '2024-03-28', '2020-10-10', 'asignado', '1987-12-15', 'Carrera 56, Cali', '3175678901', 'juancarlos@email.com', 8, 'SaludTotal', '2023-10-02 01:06:34', '2023-10-02 02:56:11'),
('23456789', 'Luis María González', '23456789', '2024-06-20', '2019-12-03', 'asignado', '1985-09-05', 'Carrera 45, Medellín', '3105551234', 'luismariagonzalez@email.com', 7, 'Sanitas', '2023-10-02 00:15:37', '2023-10-02 03:07:30'),
('2349197397', 'DALVER CASTILLO', '2349197397', '2023-09-26', '2023-01-01', 'asignado', '1975-06-12', 'CR98-9', '3218976767', 'DCASTILLO@GMAIL.COM', 20, 'SANITAS', '2023-09-25 17:33:30', '2023-10-02 03:02:32'),
('32109876', 'Carlos Gómez', '32109876', '2025-03-14', '2018-07-22', 'asignado', '1983-06-10', 'Carrera 45, Bogotá', '3195557890', 'carlosgomez@email.com', 11, 'SaludTotal', '2023-10-02 01:16:47', '2023-10-02 02:49:18'),
('32289938', 'FELIPE CARDONA', '32289938', '2023-10-12', '2023-06-13', 'asignado', '1980-08-07', 'CALLE 23', '3248907766', 'FELIPE@GMAIL.COM', 20, 'NUEVA EPS', '2023-09-29 02:20:25', '2023-09-29 02:24:49'),
('34567890', 'Andrés Ramírez', '34567890', '2025-03-10', '2020-07-15', 'asignado', '1990-02-18', 'Calle 67, Barranquilla', '3187775678', 'andresramirez@email.com', 8, 'Coomeva', '2023-10-02 00:29:49', '2023-10-02 02:43:48'),
('34567899', 'Antonio Rodríguez', '34567899', '2025-09-05', '2019-06-22', 'asignado', '1984-05-30', 'Calle 89, Bogotá', '3101234567', 'antoniorodriguez@email.com', 14, 'Sura', '2023-10-02 01:08:22', '2023-10-02 03:09:25'),
('43210987', 'Luis Sánchez', '43210987', '2024-09-17', '2020-05-03', 'asignado', '1989-11-28', 'Calle 78, Medellín', '3145678901', 'luissanchez@email.com', 6, 'Aliansalud', '2023-10-02 01:15:44', '2023-10-02 02:47:40'),
('43214321', 'Raúl Gutiérrez', '43214321', '2025-08-14', '2017-09-17', 'asignado', '1981-12-22', 'Calle 67, Medellín', '3189876543', 'raulgutierrez@email.com', 13, 'Famisanar', '2023-10-02 01:22:58', '2023-10-02 03:10:51'),
('44123456', 'Isidro García', '44123456', '2025-05-03', '2019-07-18', 'asignado', '1984-04-20', 'Calle 78, Medellín', '3145447890', 'isidrogarcia@email.com', 11, 'SaludTotal', '2023-10-02 01:59:38', '2023-10-02 03:11:25'),
('44341234', 'Juan Diego Pérez Sosa', '44341234', '2025-11-18', '2017-06-02', 'asignado', '1983-02-14', 'Calle 67, Medellín', '3189236543', 'juanaperez@email.com', 12, 'Famisanar', '2023-10-02 02:02:19', '2023-10-02 03:06:10'),
('45678900', 'Manuel Vargas', '45678900', '2024-11-12', '2020-04-03', 'asignado', '1981-09-20', 'Carrera 67, Medellín', '3146789012', 'manuelvargas@email.com', 11, 'Coomeva', '2023-10-02 01:09:45', '2023-10-02 02:53:39'),
('45678901', 'Luis Martínez', '45678901', '2024-09-30', '2020-02-10', 'asignado', '1982-07-12', 'Avenida 123, Cali', '3156789012', 'luismartinez@email.com', 12, 'EPS Familiar', '2023-10-02 00:49:35', '2023-10-02 02:43:06'),
('54321098', 'Juan David Herrera', '54321098', '2025-09-15', '2020-04-20', 'asignado', '1988-02-02', 'Calle 89, Bogotá', '3111234577', 'juandavid@email.com', 10, 'Compensar', '2023-10-02 01:26:30', '2023-10-02 02:51:38'),
('55012345', 'Ricardo Martínez', '55012345', '2024-09-10', '2018-03-25', 'asignado', '1986-11-15', 'Carrera 56, Barranquilla', '3155678901', 'ricardomartinez@email.com', 8, 'Aliansalud', '2023-10-02 01:56:40', '2023-10-02 03:12:14'),
('56789011', 'Adrian López', '56789011', '2025-07-15', '2017-02-08', 'asignado', '1989-03-14', 'Calle 34, Pereira', '3185557890', 'adrianlopez@email.com', 8, 'SaludCoop', '2023-10-02 01:10:51', '2023-10-02 02:50:47'),
('56789012', 'Carlos Rodríguez', '56789012', '2023-11-25', '2018-03-20', 'asignado', '1975-04-08', 'Calle 89, Bogotá', '3001234567', 'carlosrodriguez@email.com', 18, 'SaludTotal', '2023-10-02 00:50:47', '2023-10-02 02:44:34'),
('65432109', 'Patricio Molina', '65432109', '2024-07-25', '2019-12-08', 'asignado', '1983-05-19', 'Carrera 45, Cali', '3105678901', 'patriciomolina@email.com', 9, 'Sanitas', '2023-10-02 01:25:08', '2023-10-02 02:52:27'),
('66234567', 'Jorge Hernández', '66234567', '2024-08-22', '2019-10-10', 'asignado', '1985-07-05', 'Avenida 123, Bogotá', '3102345678', 'jorgehernandez@email.com', 9, 'SaludCoop', '2023-10-02 02:01:03', '2023-10-02 03:08:49'),
('67890123', 'Pedro López', '67890123', '2024-08-14', '2017-11-05', 'asignado', '1988-03-20', 'Carrera 34, Bucaramanga', '3175557890', 'pedrolopez@email.com', 10, 'Nueva EPS', '2023-10-02 00:54:54', '2023-10-02 03:12:44'),
('7367157363', 'MAURICIO VARGAS', '7367157363', '2023-03-12', '2023-06-21', 'bloqueado', '1982-03-12', 'CALLE4B#9', '3156789090', 'maurcio009@gmail.com', 15, 'SALUD TOTAL', '2023-09-25 17:31:45', '2023-09-29 02:54:41'),
('76543210', 'María José Pérez', '76543210', '2024-11-20', '2018-07-15', 'asignado', '1984-04-10', 'Avenida 56, Barranquilla', '3176789012', 'mariajose@email.com', 9, 'Famisanar', '2023-10-02 01:35:20', '2023-10-02 03:04:27'),
('76543244', 'Carlos Soto', '76543244', '2024-03-12', '2020-08-30', 'asignado', '1987-07-27', 'Carrera 23, Bogotá', '3112345678', 'carlossoto@email.com', 7, 'Coomeva', '2023-10-02 01:45:51', '2023-10-02 03:10:20'),
('78901234', 'Juan Castro', '78901234', '2025-12-09', '2016-04-02', 'asignado', '1983-09-25', 'Calle 56, Pereira', '3229876543', 'juancastro@email.com', 15, 'Sanitas', '2023-10-02 00:56:51', '2023-10-02 02:45:19'),
('78904434', 'Luis Torres', '78904434', '2025-06-08', '2019-01-14', 'asignado', '1983-10-02', 'Calle 67, Cali', '3209876543', 'luistorres@email.com', 9, 'Sanitas', '2023-10-02 01:48:03', '2023-10-02 03:05:01'),
('8748723462', 'FELIPE CARDONA', '8748723462', '2023-10-12', '2023-06-13', 'asignado', '1980-08-07', 'CALLE 23', '3248907766', 'FELIPE@GMAIL.COM', 20, 'NUEVA EPS', '2023-09-29 02:20:09', '2023-09-29 02:26:42'),
('87654321', 'Andres Rodríguez', '87654321', '2024-10-19', '2019-06-01', 'asignado', '1986-03-05', 'Avenida 123, Bogotá', '3102345678', 'andresrodriguez@email.com', 8, 'Compensar', '2023-10-02 01:18:20', '2023-10-02 02:55:34'),
('89012345', 'Luis Gómez', '89012345', '2024-07-18', '2019-01-29', 'asignado', '1992-12-03', 'Carrera 78, Cartagena', '3107890123', 'luisgomez@email.com', 6, 'Compensar', '2023-10-02 00:59:23', '2023-10-02 03:06:45'),
('898983973', 'RICARDO MESA', '898983973', '2023-10-12', '2023-03-01', 'asignado', '1987-07-07', 'CALLE 5C #4-32', '3142709897', 'ricardom@hotmail.com', 20, 'compensar', '2023-09-25 17:29:04', '2023-09-29 02:17:51'),
('90123456', 'José Morales', '90123456', '2023-10-22', '2020-05-14', 'asignado', '1987-09-17', 'Calle 67, Cali', '3156789012', 'josemorales@email.com', 11, 'Aliansalud', '2023-10-02 01:00:33', '2023-10-02 02:45:54'),
('98765432', 'Andrés Castro', '98765432', '2025-12-05', '2017-02-22', 'asignado', '1982-09-18', 'Calle 34, Medellín', '3145557890', 'andrescastro@email.com', 12, 'Sanitas', '2023-10-02 01:41:18', '2023-10-02 03:08:12'),
('RTY564', 'CAMILO PEREZ', 'RTY564', '2024-08-31', '2023-07-23', 'asignado', '0078-12-31', 'CR5C#4', '3214783456', 'CAMILOP@GMAIL.COM', 15, 'SANITAS', '2023-09-29 02:24:07', '2023-09-29 02:27:55');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documentos_camiones`
--

CREATE TABLE `documentos_camiones` (
  `cod_doc_cam` varchar(4) NOT NULL,
  `nom_doc_cam` varchar(45) NOT NULL,
  `est_doc_cam` varchar(20) NOT NULL,
  `vig_doc_cam` date NOT NULL,
  `cam_doc_cam` varchar(7) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `documentos_camiones`
--

INSERT INTO `documentos_camiones` (`cod_doc_cam`, `nom_doc_cam`, `est_doc_cam`, `vig_doc_cam`, `cam_doc_cam`, `created_at`, `updated_at`) VALUES
('1234', 'Certificado de Revisión Técnico-Mecánica', 'válido', '2024-06-15', 'ABC123', '2023-10-02 03:16:47', '2023-10-02 03:16:47'),
('1235', 'Certificado de Control de Emisiones', 'válido', '2025-10-18', 'MNO234', '2023-10-02 03:19:49', '2023-10-02 03:19:49'),
('1236', 'Certificado de Inspección de Neumáticos', 'válido', '2024-04-30', 'DEF789', '2023-10-02 03:22:53', '2023-10-02 03:22:53'),
('1290', 'PERMISO DE CIRCULACION', 'válido', '2024-02-28', 'FMN213', '2023-09-29 02:30:11', '2023-09-29 02:30:11'),
('2345', 'Certificado de Peso Bruto Vehicular', 'válido', '2025-09-15', 'VWX123', '2023-10-02 03:21:13', '2023-10-02 03:21:13'),
('2346', 'Permiso de Transporte de Carga Extraordinaria', 'válido', '2025-02-10', 'MNO234', '2023-10-02 03:25:10', '2023-10-02 03:25:10'),
('2347', 'Cert. de Inspección de Luces y Señalización', 'válido', '2024-07-12', 'VWX789', '2023-10-02 03:27:52', '2023-10-02 03:27:52'),
('2348', 'Permiso de Transporte de Mat. Peligrosos', 'válido', '2025-05-20', 'EFG456', '2023-10-02 03:29:18', '2023-10-02 03:29:18'),
('2349', 'Certificado de Inspección de Sis. de Frenado', 'válido', '2024-07-14', 'NOP456', '2023-10-02 03:30:58', '2023-10-02 03:30:58'),
('3455', 'TARJETA DE PROPIEDAD', 'válido', '2024-03-31', 'FMN213', '2023-09-29 02:31:45', '2023-09-29 02:31:45'),
('3456', 'Certificado de Carga Máxima', 'válido', '2025-03-05', 'GHI567', '2023-10-02 03:18:59', '2023-10-02 03:18:59'),
('3457', 'LICENCIA', 'válido', '2023-12-12', 'L34067', '2023-09-29 02:28:54', '2023-09-29 02:28:54'),
('5606', 'Certificado de Inspección de Caja de Cambios', 'válido', '2024-11-25', 'HIJ789', '2023-10-02 03:30:03', '2023-10-02 03:30:03'),
('5676', 'Certificado de Inspección de Caja de Cambios', 'válido', '2024-11-25', 'HIJ789', '2023-10-02 03:29:52', '2023-10-02 03:29:52'),
('5677', 'PERMISO DE TRANSPORTE DE CARGA', 'válido', '2024-12-12', 'L34067', '2023-09-29 02:33:24', '2023-10-02 02:29:38'),
('5678', 'Póliza de Seguro', 'válido', '2024-09-20', 'XYZ456', '2023-10-02 03:17:46', '2023-10-02 03:17:46'),
('5679', 'Permiso de Carga Especial', 'válido', '2024-02-22', 'PQR567', '2023-10-02 03:20:30', '2023-10-02 03:20:30'),
('5764', 'PERMISO DE CIRCULACION', 'válido', '2023-12-31', 'GPO091', '2023-09-29 02:30:45', '2023-09-29 02:30:45'),
('5877', 'Permiso de Transporte de Carga Refrigerada', 'válido', '2025-08-15', 'GHI567', '2023-10-02 03:23:21', '2023-10-02 03:23:21'),
('6786', 'Permiso Trans. de Carga de Ali. Perecederos', 'válido', '2025-01-30', 'QRS567', '2023-10-02 03:32:04', '2023-10-02 03:32:04'),
('6787', 'Permiso de Transporte de Carga Especializada', 'válido', '2025-09-05', 'YZA012', '2023-10-02 03:28:16', '2023-10-02 03:28:16'),
('6788', 'Certificado de Calibración del Tacógrafo', 'válido', '2024-11-08', 'PQR567', '2023-10-02 03:25:36', '2023-10-02 03:25:36'),
('6789', 'Permiso de Transporte de Carga Peligrosa', 'válido', '2023-11-10', 'YZA012', '2023-10-02 03:21:57', '2023-10-02 03:21:57'),
('7738', 'SOAT', 'válido', '2024-06-26', 'L34067', '2023-09-29 02:32:07', '2023-10-02 02:29:44'),
('7890', 'Certificado de Inspección de Frenos', 'válido', '2024-07-12', 'JKL901', '2023-10-02 03:19:22', '2023-10-02 03:19:22'),
('9012', 'Tarjeta de Operación', 'válido', '2023-12-10', 'DEF789', '2023-10-02 03:18:11', '2023-10-02 03:18:11'),
('9013', 'Certificado de Seguridad Vehicular', 'válido', '2024-12-08', 'STU890', '2023-10-02 03:20:52', '2023-10-02 03:20:52'),
('9014', 'Certificado de Cumplimiento de Nor. de Seg.', 'válido', '2024-06-22', 'JKL901', '2023-10-02 03:24:48', '2023-10-02 03:24:48'),
('9015', 'Permiso de T. de Carga de Grandes Dimensiones', 'válido', '2025-03-15', 'STU890', '2023-10-02 03:26:35', '2023-10-02 03:26:35'),
('9016', 'Certificado de Revisión de Frenos', 'válido', '2024-12-18', 'BCD789', '2023-10-02 03:28:39', '2023-10-02 03:28:39'),
('9017', 'Permiso de Transporte de Carga de Maq. Pesada', 'válido', '2025-09-17', 'KLM678', '2023-10-02 03:30:26', '2023-10-02 03:30:26'),
('9832', 'TECNOMECANICA', 'válido', '2024-09-29', 'FMN213', '2023-09-29 02:32:43', '2023-10-02 02:29:52'),
('9833', 'TECNOMECANICA', 'válido', '2024-09-23', 'FHY-145', '2023-09-29 02:29:18', '2023-09-29 02:29:18');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresas`
--

CREATE TABLE `empresas` (
  `nit_emp` varchar(10) NOT NULL,
  `nom_emp` varchar(45) NOT NULL,
  `pai_emp` varchar(45) NOT NULL,
  `reg_emp` varchar(45) NOT NULL,
  `cod_pos_emp` varchar(45) NOT NULL,
  `dir_emp` varchar(45) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `empresas`
--

INSERT INTO `empresas` (`nit_emp`, `nom_emp`, `pai_emp`, `reg_emp`, `cod_pos_emp`, `dir_emp`, `created_at`, `updated_at`) VALUES
('101220123', 'INGENIERIA PLUS LTDA.', 'Colombia', 'Bogota D.C.', '252211', 'Calle 10 # 5-51', '2023-10-02 02:27:13', '2023-10-02 02:28:36');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fallas`
--

CREATE TABLE `fallas` (
  `cod_fal` varchar(4) NOT NULL,
  `desc_fal` varchar(500) NOT NULL,
  `fec_fal` date NOT NULL,
  `kil_fal` int(11) NOT NULL,
  `gra_fal` varchar(20) NOT NULL,
  `est_act_fal` varchar(20) NOT NULL,
  `res_det_fal` varchar(45) NOT NULL,
  `sis_fal` varchar(2) NOT NULL,
  `cam_fal` varchar(7) NOT NULL,
  `rut_fal` varchar(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `fallas`
--

INSERT INTO `fallas` (`cod_fal`, `desc_fal`, `fec_fal`, `kil_fal`, `gra_fal`, `est_act_fal`, `res_det_fal`, `sis_fal`, `cam_fal`, `rut_fal`, `created_at`, `updated_at`) VALUES
('0001', 'Pérdida de potencia del motor', '2023-02-22', 365900, 'moderada', 'reparada', 'Pedro López', '01', 'YZA012', '0030', '2023-10-02 06:02:59', '2023-10-02 12:48:16'),
('0002', 'Frenos desgastados', '2023-03-15', 130500, 'grave', 'reparada', 'Juan Gutierrez', '02', 'BCD789', '0012', '2023-10-02 05:34:08', '2023-10-02 16:44:04'),
('0003', 'Luces traseras no funcionan', '2023-04-05', 145200, 'leve', 'reparada', 'José Mario González', '11', 'TUV789', '0013', '2023-10-02 05:35:11', '2023-10-02 14:01:47'),
('0004', 'Problema en la dirección', '2023-05-20', 155800, 'moderada', 'reparada', 'Luis Ramírez', '06', 'DEF789', '0013', '2023-10-02 05:36:08', '2023-10-02 16:36:40'),
('0005', 'Problema en el sistema de refrigeración', '2023-06-12', 165300, 'grave', 'reparada', 'Inspección de rutina', '09', 'NOP456', '0016', '2023-10-02 05:38:05', '2023-10-02 15:40:24'),
('0006', 'Pérdida de presión de los neumáticos', '2023-07-25', 175600, 'leve', 'reparada', 'Andrés López', '14', 'FMN213', '0016', '2023-10-02 05:39:50', '2023-10-02 16:27:39'),
('0007', 'Problema en el sistema de suspensión', '2023-08-08', 185100, 'moderada', 'reparada', 'Inspección de rutina', '03', 'GHI567', '0017', '2023-10-02 05:40:33', '2023-10-02 16:25:23'),
('0008', 'Problema en el sistema de transmisión', '2023-09-16', 195400, 'grave', 'reparada', 'Pedro Ramírez', '04', 'H49033', '0018', '2023-10-02 05:41:20', '2023-10-02 13:18:41'),
('0009', 'se pincho una llanta', '2023-09-29', 140000, 'leve', 'reparada', 'Carlos Manrrique', '03', 'FHY-145', '1008', '2023-09-29 22:51:11', '2023-10-02 15:03:40'),
('0010', 'Problema en el sistema de escape', '2023-10-30', 205700, 'moderada', 'reparada', 'Inspección de rutina', '07', 'L34067', '0012', '2023-10-02 05:42:07', '2023-10-02 16:06:24'),
('0011', 'Problema en el sistema de frenos', '2023-12-24', 225200, 'grave', 'reparada', 'Carlos García', '02', 'KLM678', '0016', '2023-10-02 05:44:12', '2023-10-02 14:02:00'),
('0014', 'Problema en el sistema de escape', '2023-03-04', 255800, 'moderada', 'reparada', 'Inspección de rutina', '07', 'NOP456', '0018', '2023-10-02 05:47:44', '2023-10-02 14:06:36'),
('0016', 'Problema en el sistema de suspensión', '2023-05-28', 275200, 'moderada', 'reparada', 'Inspección de rutina', '03', 'PQR567', '1001', '2023-10-02 05:49:59', '2023-10-02 13:13:01'),
('0017', 'Problema en el sistema de transmisión', '2023-06-10', 285400, 'grave', 'reparada', 'Luis Gonzalez', '04', 'QRS567', '0030', '2023-10-02 05:50:46', '2023-10-02 14:15:55'),
('0018', 'Pérdida de potencia del motor', '2023-07-23', 295600, 'moderada', 'pendiente', 'Inspección de rutina', '01', 'RST567', '0104', '2023-10-02 05:51:30', '2023-10-02 05:51:30'),
('0019', 'Problema en el sistema de frenos', '2023-08-05', 305800, 'grave', 'reparada', 'Manuel Pérez', '02', 'STU890', '1002', '2023-10-02 05:52:20', '2023-10-02 14:23:37'),
('0020', 'Problema en el sistema de lubricación', '2023-09-18', 315900, 'moderada', 'reparada', 'Inspección de rutina', '12', 'TUV789', '0030', '2023-10-02 05:53:17', '2023-10-02 14:39:44'),
('0021', 'Problema en el sistema eléctrico', '2023-10-01', 325200, 'moderada', 'reparada', 'Carlos Ramiíez', '05', 'UVW345', '0030', '2023-10-02 05:59:49', '2023-10-02 13:24:43'),
('0022', 'Problema en el sistema de escape', '2023-11-14', 335400, 'grave', 'reparada', 'Inspección de rutina', '07', 'VWX123', '1002', '2023-10-02 06:00:23', '2023-10-02 13:24:57'),
('0023', 'Problema en el sistema de suspensión', '2023-12-17', 345600, 'moderada', 'reparada', 'Luis Ramírez', '03', 'WXY901', '1001', '2023-10-02 06:01:39', '2023-10-02 14:35:43'),
('0024', 'Problema en el sistema de transmisión', '2023-01-09', 355800, 'grave', 'reparada', 'Inspección de rutina', '04', 'XYZ123', '0015', '2023-10-02 06:02:21', '2023-10-02 16:18:09'),
('0026', 'Problema en el sistema de frenos', '2023-03-08', 375200, 'grave', 'pendiente', 'Andrés González', '02', 'DEF789', '1001', '2023-10-02 06:04:09', '2023-10-02 06:04:09'),
('0027', 'Problema en el sistema de lubricación', '2023-04-18', 385400, 'moderada', 'reparada', 'Inspección de rutina', '12', 'YZA012', '1002', '2023-10-02 06:04:51', '2023-10-02 16:34:00'),
('1012', 'Problema en el sistema eléctrico', '2023-02-26', 325200, 'moderada', 'reparada', 'Carlos Ramiíez', '05', 'UVW345', '0030', '2023-11-08 23:16:15', '2023-11-08 23:16:15'),
('1050', 'Problema en el sistema de escape', '2023-03-14', 335400, 'grave', 'reparada', 'Inspección de rutina', '07', 'VWX123', '1002', '2023-11-08 23:16:15', '2023-11-08 23:16:15'),
('1055', 'Frenos desgastados', '2023-05-25', 130500, 'grave', 'reparada', 'Juan Gutierrez', '02', 'BCD789', '0012', '2023-11-08 21:01:33', '2023-11-08 21:01:33'),
('1099', 'Problema en el sistema de suspensión', '2023-12-08', 185100, 'moderada', 'reparada', 'Inspección de rutina', '03', 'GHI567', '0017', '2023-11-08 20:24:12', '2023-11-08 20:24:12'),
('1146', 'Pérdida de potencia del motor', '2023-12-22', 365900, 'moderada', 'reparada', 'Pedro López', '01', 'YZA012', '0030', '2023-11-08 23:16:15', '2023-11-08 23:16:15'),
('1152', 'Problema en el sistema de refrigeración', '2023-09-18', 245600, 'grave', 'proceso', 'Luis Rodríguez', '09', 'STU890', '1002', '2023-11-08 21:01:33', '2023-11-08 21:01:33'),
('1180', 'Problema en el sistema de lubricación', '2023-06-16', 235400, 'moderada', 'reparada', 'Inspección de rutina', '07', 'L34067', '0019', '2023-11-08 23:16:15', '2023-11-08 23:16:15'),
('1211', 'Pérdida de potencia del motor', '2023-06-16', 295600, 'moderada', 'pendiente', 'Inspección de rutina', '01', 'RST567', '0104', '2023-11-08 23:16:15', '2023-11-08 23:16:15'),
('1222', 'Problema en el sistema de lubricación', '2023-01-24', 385400, 'moderada', 'reparada', 'Inspección de rutina', '12', 'YZA012', '1002', '2023-11-08 21:01:33', '2023-11-08 21:01:33'),
('1234', 'Pérdida de potencia del motor', '2023-02-15', 85432, 'moderada', 'reparada', 'Juan Pérez', '01', 'ABC123', '0011', '2023-10-02 05:32:52', '2023-10-02 15:38:23'),
('1245', 'DAÑO  EMBRIAGUE', '2023-05-30', 409899, 'moderada', 'pendiente', 'FERNEY', '04', 'FMN213', '0018', '2023-11-08 21:01:33', '2023-11-08 21:01:33'),
('1247', 'Problema en el sistema de lubricación', '2023-03-18', 315900, 'moderada', 'reparada', 'Inspección de rutina', '12', 'TUV789', '0030', '2023-11-08 23:16:15', '2023-11-08 23:16:15'),
('1295', 'Problema en el sistema de refrigeración', '2023-01-08', 165300, 'grave', 'reparada', 'Inspección de rutina', '09', 'NOP456', '0016', '2023-11-08 21:01:33', '2023-11-08 21:01:33'),
('1305', 'Problema en el sistema de transmisión', '2023-02-03', 285400, 'grave', 'reparada', 'Luis Gonzalez', '04', 'QRS567', '0030', '2023-11-08 21:01:33', '2023-11-08 21:01:33'),
('1306', 'Problema en el sistema de lubricación', '2023-09-16', 235400, 'moderada', 'reparada', 'Inspección de rutina', '07', 'L34067', '0019', '2023-11-08 21:01:33', '2023-11-08 21:01:33'),
('1373', 'Problema en el sistema de suspensión', '2023-11-16', 275200, 'moderada', 'reparada', 'Inspección de rutina', '03', 'PQR567', '1001', '2023-11-08 21:01:33', '2023-11-08 21:01:33'),
('1407', 'Problema en el sistema de frenos', '2023-05-10', 225200, 'grave', 'reparada', 'Carlos García', '02', 'KLM678', '0016', '2023-11-08 21:01:33', '2023-11-08 21:01:33'),
('1422', 'Problema en el sistema eléctrico', '2023-02-26', 325200, 'moderada', 'reparada', 'Carlos Ramiíez', '05', 'UVW345', '0030', '2023-11-08 21:01:33', '2023-11-08 21:01:33'),
('1428', 'Problema en el sistema de suspensión', '2023-09-10', 185100, 'moderada', 'reparada', 'Inspección de rutina', '03', 'GHI567', '0017', '2023-11-08 21:01:33', '2023-11-08 21:01:33'),
('1477', 'Problema en el sistema de dirección', '2023-12-11', 215900, 'grave', 'reparada', 'José María López', '06', 'JBL-411', '0013', '2023-11-08 21:01:33', '2023-11-08 21:01:33'),
('1478', 'Problema en el sistema de lubricación', '2023-10-18', 315900, 'moderada', 'reparada', 'Inspección de rutina', '12', 'TUV789', '0030', '2023-11-08 20:24:07', '2023-11-08 20:24:07'),
('1506', 'Problema en el sistema de lubricación', '2023-10-16', 315900, 'moderada', 'reparada', 'Inspección de rutina', '12', 'TUV789', '0030', '2023-11-08 21:01:33', '2023-11-08 21:01:33'),
('1543', 'Problema en el sistema de suspensión', '2023-11-10', 185100, 'moderada', 'reparada', 'Inspección de rutina', '03', 'GHI567', '0017', '2023-11-08 23:16:15', '2023-11-08 23:16:15'),
('1545', 'Problema en el sistema de lubricación', '2023-08-18', 315900, 'moderada', 'reparada', 'Inspección de rutina', '12', 'TUV789', '0030', '2023-11-08 20:24:12', '2023-11-08 20:24:12'),
('1550', 'BUJIAS SUELTAS', '2023-10-06', 789546, 'grave', 'reparada', 'ESTEBAN', '01', 'JBL-411', '1008', '2023-11-08 20:24:12', '2023-11-08 20:24:12'),
('1577', 'Pérdida de presión de los neumáticos', '2023-12-25', 175600, 'leve', 'reparada', 'Andrés López', '14', 'FMN213', '0016', '2023-11-08 20:24:12', '2023-11-08 20:24:12'),
('1632', 'se pincho una llanta', '2023-12-23', 140000, 'leve', 'reparada', 'Carlos Manrrique', '03', 'FHY-145', '1008', '2023-11-08 23:16:15', '2023-11-08 23:16:15'),
('1636', 'Problema en el sistema de escape', '2023-07-25', 205700, 'moderada', 'reparada', 'Inspección de rutina', '07', 'L34067', '0012', '2023-11-08 21:01:33', '2023-11-08 21:01:33'),
('1702', 'Problema en el sistema de frenos', '2023-01-25', 305800, 'grave', 'reparada', 'Manuel Pérez', '02', 'STU890', '1002', '2023-11-08 21:01:33', '2023-11-08 21:01:33'),
('1715', 'Problema en el sistema de suspensión', '2023-11-28', 345600, 'moderada', 'reparada', 'Luis Ramírez', '03', 'WXY901', '1001', '2023-11-08 21:01:33', '2023-11-08 21:01:33'),
('1783', 'Frenos desgastados', '2023-07-15', 130500, 'grave', 'reparada', 'Juan Gutierrez', '02', 'BCD789', '0012', '2023-11-08 20:24:12', '2023-11-08 20:24:12'),
('1793', 'Problema en el sistema de escape', '2023-04-25', 205700, 'moderada', 'reparada', 'Inspección de rutina', '07', 'L34067', '0012', '2023-11-08 23:16:15', '2023-11-08 23:16:15'),
('1822', 'Pérdida de presión de los neumáticos', '2023-08-19', 175600, 'leve', 'reparada', 'Andrés López', '14', 'FMN213', '0016', '2023-11-08 23:16:15', '2023-11-08 23:16:15'),
('1912', 'Problema en el sistema eléctrico', '2023-07-01', 325200, 'moderada', 'reparada', 'Carlos Ramiíez', '05', 'UVW345', '0030', '2023-11-08 20:24:07', '2023-11-08 20:24:07'),
('1926', 'DAÑO  EMBRIAGUE', '2023-09-27', 409899, 'moderada', 'pendiente', 'FERNEY', '04', 'FMN213', '0018', '2023-11-08 21:01:33', '2023-11-08 21:01:33'),
('1928', 'Problema en el sistema de suspensión', '2023-06-28', 275200, 'moderada', 'reparada', 'Inspección de rutina', '03', 'PQR567', '1001', '2023-11-08 20:24:07', '2023-11-08 20:24:07'),
('1942', 'Problema en el sistema de dirección', '2023-05-12', 215900, 'grave', 'reparada', 'José María López', '06', 'JBL-411', '0013', '2023-11-08 20:24:12', '2023-11-08 20:24:12'),
('1994', 'Pérdida de potencia del motor', '2023-05-18', 295600, 'moderada', 'pendiente', 'Inspección de rutina', '01', 'RST567', '0104', '2023-11-08 21:01:33', '2023-11-08 21:01:33'),
('1996', 'Problema en el sistema de lubricación', '2023-05-24', 385400, 'moderada', 'reparada', 'Inspección de rutina', '12', 'YZA012', '1002', '2023-11-08 23:16:15', '2023-11-08 23:16:15'),
('2161', 'Problema en el sistema de frenos', '2023-05-05', 305800, 'grave', 'reparada', 'Manuel Pérez', '02', 'STU890', '1002', '2023-11-08 23:16:15', '2023-11-08 23:16:15'),
('2217', 'Problema en el sistema de dirección', '2023-09-11', 215900, 'grave', 'reparada', 'José María López', '06', 'JBL-411', '0013', '2023-11-08 23:16:15', '2023-11-08 23:16:15'),
('2234', 'Problema en el sistema de refrigeración', '2023-04-26', 245600, 'grave', 'proceso', 'Luis Rodríguez', '09', 'STU890', '1002', '2023-11-08 21:01:33', '2023-11-08 21:01:33'),
('2273', 'DAÑO DE DIRECCIONAL', '2023-12-24', 490000, 'moderada', 'proceso', 'CAMILO', '06', 'JBL-411', '1004', '2023-11-08 20:24:07', '2023-11-08 20:24:07'),
('2284', 'Problema en el sistema de transmisión', '2023-07-27', 355800, 'grave', 'reparada', 'Inspección de rutina', '04', 'XYZ123', '0015', '2023-11-08 21:01:33', '2023-11-08 21:01:33'),
('2322', 'Problema en el sistema de suspensión', '2023-11-28', 275200, 'moderada', 'reparada', 'Inspección de rutina', '03', 'PQR567', '1001', '2023-11-08 21:01:33', '2023-11-08 21:01:33'),
('2335', 'Problema en el sistema de suspensión', '2023-07-18', 345600, 'moderada', 'reparada', 'Luis Ramírez', '03', 'WXY901', '1001', '2023-11-08 21:01:33', '2023-11-08 21:01:33'),
('2338', 'se pincho una llanta', '2023-03-23', 140000, 'leve', 'reparada', 'Carlos Manrrique', '03', 'FHY-145', '1008', '2023-11-08 21:01:33', '2023-11-08 21:01:33'),
('2408', 'Pérdida de potencia del motor', '2023-12-16', 295600, 'moderada', 'pendiente', 'Inspección de rutina', '01', 'RST567', '0104', '2023-11-08 21:01:33', '2023-11-08 21:01:33'),
('2467', 'Problema en el sistema de transmisión', '2023-11-10', 285400, 'grave', 'reparada', 'Luis Gonzalez', '04', 'QRS567', '0030', '2023-11-08 20:24:07', '2023-11-08 20:24:07'),
('2507', 'Pérdida de potencia del motor', '2023-11-17', 295600, 'moderada', 'pendiente', 'Inspección de rutina', '01', 'RST567', '0104', '2023-11-08 21:01:33', '2023-11-08 21:01:33'),
('2509', 'Problema en el sistema eléctrico', '2023-10-30', 325200, 'moderada', 'reparada', 'Carlos Ramiíez', '05', 'UVW345', '0030', '2023-11-08 21:01:33', '2023-11-08 21:01:33'),
('2513', 'se pincho una llanta', '2023-03-19', 140000, 'leve', 'reparada', 'Carlos Manrrique', '03', 'FHY-145', '1008', '2023-11-08 21:01:33', '2023-11-08 21:01:33'),
('2532', 'Pérdida de potencia del motor', '2023-10-23', 295600, 'moderada', 'pendiente', 'Inspección de rutina', '01', 'RST567', '0104', '2023-11-08 20:24:07', '2023-11-08 20:24:07'),
('2545', 'Problema en el sistema de frenos', '2023-02-26', 375200, 'grave', 'pendiente', 'Andrés González', '02', 'DEF789', '1001', '2023-11-08 21:01:33', '2023-11-08 21:01:33'),
('2557', 'Pérdida de presión de los neumáticos', '2023-03-19', 175600, 'leve', 'reparada', 'Andrés López', '14', 'FMN213', '0016', '2023-11-08 21:01:33', '2023-11-08 21:01:33'),
('2558', 'Problema en la dirección', '2023-04-02', 155800, 'moderada', 'reparada', 'Luis Ramírez', '06', 'DEF789', '0013', '2023-11-08 21:01:33', '2023-11-08 21:01:33'),
('2601', 'Pérdida de potencia del motor', '2023-06-15', 85432, 'moderada', 'reparada', 'Juan Pérez', '01', 'ABC123', '0011', '2023-11-08 20:24:07', '2023-11-08 20:24:07'),
('2649', 'Problema en el sistema de suspensión', '2023-04-17', 345600, 'moderada', 'reparada', 'Luis Ramírez', '03', 'WXY901', '1001', '2023-11-08 20:24:12', '2023-11-08 20:24:12'),
('2677', 'Problema en el sistema de suspensión', '2023-02-28', 275200, 'moderada', 'reparada', 'Inspección de rutina', '03', 'PQR567', '1001', '2023-11-08 23:16:15', '2023-11-08 23:16:15'),
('2697', 'Problema en el sistema de frenos', '2023-08-08', 375200, 'grave', 'pendiente', 'Andrés González', '02', 'DEF789', '1001', '2023-11-08 20:24:12', '2023-11-08 20:24:12'),
('2720', 'Problema en el sistema de frenos', '2023-05-25', 305800, 'grave', 'reparada', 'Manuel Pérez', '02', 'STU890', '1002', '2023-11-08 21:01:33', '2023-11-08 21:01:33'),
('2783', 'Luces traseras no funcionan', '2023-07-05', 145200, 'leve', 'reparada', 'José Mario González', '11', 'TUV789', '0013', '2023-11-08 23:16:15', '2023-11-08 23:16:15'),
('2811', 'Luces traseras no funcionan', '2023-09-25', 145200, 'leve', 'reparada', 'José Mario González', '11', 'TUV789', '0013', '2023-11-08 21:01:33', '2023-11-08 21:01:33'),
('2870', 'Problema en el sistema de transmisión', '2023-10-14', 355800, 'grave', 'reparada', 'Inspección de rutina', '04', 'XYZ123', '0015', '2023-11-08 21:01:33', '2023-11-08 21:01:33'),
('2874', 'Problema en el sistema eléctrico', '2023-03-30', 325200, 'moderada', 'reparada', 'Carlos Ramiíez', '05', 'UVW345', '0030', '2023-11-08 23:16:15', '2023-11-08 23:16:15'),
('2909', 'Pérdida de potencia del motor', '2023-11-15', 85432, 'moderada', 'reparada', 'Juan Pérez', '01', 'ABC123', '0011', '2023-11-08 20:24:12', '2023-11-08 20:24:12'),
('3015', 'BUJIAS SUELTAS', '2023-08-06', 789546, 'grave', 'reparada', 'ESTEBAN', '01', 'JBL-411', '1008', '2023-11-08 20:24:07', '2023-11-08 20:24:07'),
('3024', 'Pérdida de potencia del motor', '2023-04-06', 365900, 'moderada', 'reparada', 'Pedro López', '01', 'YZA012', '0030', '2023-11-08 21:01:33', '2023-11-08 21:01:33'),
('3034', 'Problema en el sistema de suspensión', '2023-01-17', 185100, 'moderada', 'reparada', 'Inspección de rutina', '03', 'GHI567', '0017', '2023-11-08 21:01:33', '2023-11-08 21:01:33'),
('3066', 'Problema en el sistema de frenos', '2023-07-24', 225200, 'grave', 'reparada', 'Carlos García', '02', 'KLM678', '0016', '2023-11-08 20:24:12', '2023-11-08 20:24:12'),
('3078', 'Problema en el sistema de transmisión', '2023-12-09', 355800, 'grave', 'reparada', 'Inspección de rutina', '04', 'XYZ123', '0015', '2023-11-08 20:24:12', '2023-11-08 20:24:12'),
('3095', 'Problema en el sistema de lubricación', '2023-01-03', 235400, 'moderada', 'reparada', 'Inspección de rutina', '07', 'L34067', '0019', '2023-11-08 21:01:33', '2023-11-08 21:01:33'),
('3098', 'Problema en el sistema de lubricación', '2023-06-18', 385400, 'moderada', 'reparada', 'Inspección de rutina', '12', 'YZA012', '1002', '2023-11-08 23:16:15', '2023-11-08 23:16:15'),
('3143', 'Pérdida de potencia del motor', '2023-01-17', 295600, 'moderada', 'pendiente', 'Inspección de rutina', '01', 'RST567', '0104', '2023-11-08 23:16:15', '2023-11-08 23:16:15'),
('3182', 'Frenos desgastados', '2023-12-25', 130500, 'grave', 'reparada', 'Juan Gutierrez', '02', 'BCD789', '0012', '2023-11-08 23:16:15', '2023-11-08 23:16:15'),
('3213', 'Problema en el sistema de lubricación', '2023-07-06', 235400, 'moderada', 'reparada', 'Inspección de rutina', '07', 'L34067', '0019', '2023-11-08 20:24:12', '2023-11-08 20:24:12'),
('3214', 'Problema en el sistema de frenos', '2023-08-19', 225200, 'grave', 'reparada', 'Carlos García', '02', 'KLM678', '0016', '2023-11-08 21:01:33', '2023-11-08 21:01:33'),
('3241', 'Problema en el sistema de refrigeración', '2023-10-18', 165300, 'grave', 'reparada', 'Inspección de rutina', '09', 'NOP456', '0016', '2023-11-08 21:01:33', '2023-11-08 21:01:33'),
('3311', 'Problema en el sistema de suspensión', '2023-08-18', 345600, 'moderada', 'reparada', 'Luis Ramírez', '03', 'WXY901', '1001', '2023-11-08 23:16:15', '2023-11-08 23:16:15'),
('3356', 'Pérdida de potencia del motor', '2023-10-08', 365900, 'moderada', 'reparada', 'Pedro López', '01', 'YZA012', '0030', '2023-11-08 21:01:33', '2023-11-08 21:01:33'),
('3383', 'Problema en el sistema de refrigeración', '2023-04-19', 245600, 'grave', 'proceso', 'Luis Rodríguez', '09', 'STU890', '1002', '2023-11-08 20:24:07', '2023-11-08 20:24:07'),
('3392', 'Problema en el sistema de escape', '2023-01-24', 335400, 'grave', 'reparada', 'Inspección de rutina', '07', 'VWX123', '1002', '2023-11-08 21:01:33', '2023-11-08 21:01:33'),
('3410', 'Problema en el sistema de suspensión', '2023-05-08', 185100, 'moderada', 'reparada', 'Inspección de rutina', '03', 'GHI567', '0017', '2023-11-08 20:24:12', '2023-11-08 20:24:12'),
('3484', 'Problema en el sistema de dirección', '2023-12-03', 215900, 'grave', 'reparada', 'José María López', '06', 'JBL-411', '0013', '2023-11-08 21:01:33', '2023-11-08 21:01:33'),
('3510', 'se pincho una llanta', '2023-11-08', 140000, 'leve', 'reparada', 'Carlos Manrrique', '03', 'FHY-145', '1008', '2023-11-08 23:16:15', '2023-11-08 23:16:15'),
('3511', 'Problema en el sistema de transmisión', '2023-03-09', 355800, 'grave', 'reparada', 'Inspección de rutina', '04', 'XYZ123', '0015', '2023-11-08 20:24:07', '2023-11-08 20:24:07'),
('3531', 'Luces traseras no funcionan', '2023-10-05', 145200, 'leve', 'reparada', 'José Mario González', '11', 'TUV789', '0013', '2023-11-08 20:24:12', '2023-11-08 20:24:12'),
('3558', 'Problema en el sistema de suspensión', '2023-02-28', 275200, 'moderada', 'reparada', 'Inspección de rutina', '03', 'PQR567', '1001', '2023-11-08 23:16:15', '2023-11-08 23:16:15'),
('3629', 'Problema en el sistema de suspensión', '2023-10-17', 345600, 'moderada', 'reparada', 'Luis Ramírez', '03', 'WXY901', '1001', '2023-11-08 23:16:15', '2023-11-08 23:16:15'),
('3678', 'Problema en el sistema de escape', '2023-01-18', 335400, 'grave', 'reparada', 'Inspección de rutina', '07', 'VWX123', '1002', '2023-11-08 21:01:33', '2023-11-08 21:01:33'),
('3683', 'Pérdida de potencia del motor', '2023-01-15', 85432, 'moderada', 'reparada', 'Juan Pérez', '01', 'ABC123', '0011', '2023-11-08 23:16:15', '2023-11-08 23:16:15'),
('3703', 'Problema en el sistema de escape', '2023-04-22', 205700, 'moderada', 'reparada', 'Inspección de rutina', '07', 'L34067', '0012', '2023-11-08 21:01:33', '2023-11-08 21:01:33'),
('3709', 'Pérdida de potencia del motor', '2023-06-15', 365900, 'moderada', 'reparada', 'Pedro López', '01', 'YZA012', '0030', '2023-11-08 21:01:33', '2023-11-08 21:01:33'),
('3741', 'Problema en el sistema de lubricación', '2023-11-16', 315900, 'moderada', 'reparada', 'Inspección de rutina', '12', 'TUV789', '0030', '2023-11-08 23:16:15', '2023-11-08 23:16:15'),
('3780', 'Problema en el sistema de lubricación', '2023-08-26', 315900, 'moderada', 'reparada', 'Inspección de rutina', '12', 'TUV789', '0030', '2023-11-08 21:01:33', '2023-11-08 21:01:33'),
('3835', 'Pérdida de potencia del motor', '2023-12-23', 85432, 'moderada', 'reparada', 'Juan Pérez', '01', 'ABC123', '0011', '2023-11-08 21:01:33', '2023-11-08 21:01:33'),
('3843', 'Problema en el sistema de transmisión', '2023-04-13', 285400, 'grave', 'reparada', 'Luis Gonzalez', '04', 'QRS567', '0030', '2023-11-08 21:01:33', '2023-11-08 21:01:33'),
('3860', 'Problema en el sistema de escape', '2023-07-14', 335400, 'grave', 'reparada', 'Inspección de rutina', '07', 'VWX123', '1002', '2023-11-08 20:24:12', '2023-11-08 20:24:12'),
('3861', 'se pincho una llanta', '2023-04-29', 140000, 'leve', 'reparada', 'Carlos Manrrique', '03', 'FHY-145', '1008', '2023-11-08 20:24:12', '2023-11-08 20:24:12'),
('3882', 'DAÑO DE DIRECCIONAL', '2023-11-18', 490000, 'moderada', 'proceso', 'CAMILO', '06', 'JBL-411', '1004', '2023-11-08 21:01:33', '2023-11-08 21:01:33'),
('3913', 'Problema en el sistema de transmisión', '2023-11-16', 195400, 'grave', 'reparada', 'Pedro Ramírez', '04', 'H49033', '0018', '2023-11-08 20:24:07', '2023-11-08 20:24:07'),
('3925', 'Problema en el sistema de suspensión', '2023-09-16', 275200, 'moderada', 'reparada', 'Inspección de rutina', '03', 'PQR567', '1001', '2023-11-08 23:16:15', '2023-11-08 23:16:15'),
('3968', 'Problema en el sistema eléctrico', '2023-02-01', 325200, 'moderada', 'reparada', 'Carlos Ramiíez', '05', 'UVW345', '0030', '2023-11-08 23:16:15', '2023-11-08 23:16:15'),
('4066', 'DAÑO DE DIRECCIONAL', '2023-09-24', 490000, 'moderada', 'proceso', 'CAMILO', '06', 'JBL-411', '1004', '2023-11-08 23:16:15', '2023-11-08 23:16:15'),
('4097', 'Pérdida de potencia del motor', '2023-06-23', 295600, 'moderada', 'pendiente', 'Inspección de rutina', '01', 'RST567', '0104', '2023-11-08 20:24:12', '2023-11-08 20:24:12'),
('4123', 'Problema en el sistema de lubricación', '2023-04-21', 385400, 'moderada', 'reparada', 'Inspección de rutina', '12', 'YZA012', '1002', '2023-11-08 21:01:33', '2023-11-08 21:01:33'),
('4124', 'Problema en el sistema de transmisión', '2023-02-10', 195400, 'grave', 'reparada', 'Pedro Ramírez', '04', 'H49033', '0018', '2023-11-08 21:01:33', '2023-11-08 21:01:33'),
('4131', 'Problema en el sistema de frenos', '2023-04-24', 225200, 'grave', 'reparada', 'Carlos García', '02', 'KLM678', '0016', '2023-11-08 20:24:12', '2023-11-08 20:24:12'),
('4133', 'Problema en el sistema de escape', '2023-11-08', 205700, 'moderada', 'reparada', 'Inspección de rutina', '07', 'L34067', '0012', '2023-11-08 20:24:12', '2023-11-08 20:24:12'),
('4252', 'Problema en la dirección', '2023-08-16', 155800, 'moderada', 'reparada', 'Luis Ramírez', '06', 'DEF789', '0013', '2023-11-08 21:01:33', '2023-11-08 21:01:33'),
('4254', 'Problema en el sistema de lubricación', '2023-12-10', 315900, 'moderada', 'reparada', 'Inspección de rutina', '12', 'TUV789', '0030', '2023-11-08 21:01:33', '2023-11-08 21:01:33'),
('4305', 'Problema en el sistema de escape', '2023-03-04', 255800, 'moderada', 'reparada', 'Inspección de rutina', '07', 'NOP456', '0018', '2023-11-08 20:24:12', '2023-11-08 20:24:12'),
('4318', 'Problema en el sistema de suspensión', '2023-07-28', 345600, 'moderada', 'reparada', 'Luis Ramírez', '03', 'WXY901', '1001', '2023-11-08 23:16:15', '2023-11-08 23:16:15'),
('4352', 'Luces traseras no funcionan', '2023-03-25', 145200, 'leve', 'reparada', 'José Mario González', '11', 'TUV789', '0013', '2023-11-08 21:01:33', '2023-11-08 21:01:33'),
('4368', 'DAÑO  EMBRIAGUE', '2023-08-18', 409899, 'moderada', 'pendiente', 'FERNEY', '04', 'FMN213', '0018', '2023-11-08 21:01:33', '2023-11-08 21:01:33'),
('4372', 'Problema en la dirección', '2023-07-02', 155800, 'moderada', 'reparada', 'Luis Ramírez', '06', 'DEF789', '0013', '2023-11-08 23:16:15', '2023-11-08 23:16:15'),
('4416', 'DAÑO  EMBRIAGUE', '2023-10-05', 409899, 'moderada', 'pendiente', 'FERNEY', '04', 'FMN213', '0018', '2023-11-08 21:01:33', '2023-11-08 21:01:33'),
('4435', 'DAÑO  EMBRIAGUE', '2023-06-27', 409899, 'moderada', 'pendiente', 'FERNEY', '04', 'FMN213', '0018', '2023-11-08 23:16:15', '2023-11-08 23:16:15'),
('4512', 'Problema en el sistema de escape', '2023-03-31', 255800, 'moderada', 'reparada', 'Inspección de rutina', '07', 'NOP456', '0018', '2023-11-08 21:01:33', '2023-11-08 21:01:33'),
('4555', 'Problema en el sistema de refrigeración', '2023-02-19', 245600, 'grave', 'proceso', 'Luis Rodríguez', '09', 'STU890', '1002', '2023-10-02 05:46:16', '2023-10-02 16:38:47'),
('4560', 'Problema en el sistema de dirección', '2023-11-12', 215900, 'grave', 'reparada', 'José María López', '06', 'JBL-411', '0013', '2023-10-02 05:43:11', '2023-10-02 13:03:20'),
('4614', 'Problema en el sistema de frenos', '2023-01-24', 225200, 'grave', 'reparada', 'Carlos García', '02', 'KLM678', '0016', '2023-11-08 23:16:15', '2023-11-08 23:16:15'),
('4669', 'Pérdida de potencia del motor', '2023-09-23', 295600, 'moderada', 'pendiente', 'Inspección de rutina', '01', 'RST567', '0104', '2023-11-08 23:16:15', '2023-11-08 23:16:15'),
('4695', 'Problema en el sistema de escape', '2023-10-04', 255800, 'moderada', 'reparada', 'Inspección de rutina', '07', 'NOP456', '0018', '2023-11-08 23:16:15', '2023-11-08 23:16:15'),
('4771', 'Pérdida de presión de los neumáticos', '2023-09-25', 175600, 'leve', 'reparada', 'Andrés López', '14', 'FMN213', '0016', '2023-11-08 23:16:15', '2023-11-08 23:16:15'),
('4844', 'Pérdida de presión de los neumáticos', '2023-05-08', 175600, 'leve', 'reparada', 'Andrés López', '14', 'FMN213', '0016', '2023-11-08 21:01:33', '2023-11-08 21:01:33'),
('4854', 'Problema en el sistema eléctrico', '2023-07-01', 325200, 'moderada', 'reparada', 'Carlos Ramiíez', '05', 'UVW345', '0030', '2023-11-08 20:24:12', '2023-11-08 20:24:12'),
('4881', 'Problema en el sistema de dirección', '2023-03-12', 215900, 'grave', 'reparada', 'José María López', '06', 'JBL-411', '0013', '2023-11-08 20:24:07', '2023-11-08 20:24:07'),
('4888', 'Problema en el sistema de escape', '2023-11-30', 205700, 'moderada', 'reparada', 'Inspección de rutina', '07', 'L34067', '0012', '2023-11-08 20:24:12', '2023-11-08 20:24:12'),
('5029', 'Problema en el sistema de escape', '2023-01-14', 335400, 'grave', 'reparada', 'Inspección de rutina', '07', 'VWX123', '1002', '2023-11-08 20:24:07', '2023-11-08 20:24:07'),
('5060', 'Problema en el sistema de frenos', '2023-12-08', 375200, 'grave', 'pendiente', 'Andrés González', '02', 'DEF789', '1001', '2023-11-08 20:24:12', '2023-11-08 20:24:12'),
('5103', 'Problema en el sistema de refrigeración', '2023-06-27', 165300, 'grave', 'reparada', 'Inspección de rutina', '09', 'NOP456', '0016', '2023-11-08 21:01:33', '2023-11-08 21:01:33'),
('5116', 'Problema en el sistema de lubricación', '2023-09-18', 385400, 'moderada', 'reparada', 'Inspección de rutina', '12', 'YZA012', '1002', '2023-11-08 20:24:07', '2023-11-08 20:24:07'),
('5186', 'Problema en el sistema de frenos', '2023-06-08', 375200, 'grave', 'pendiente', 'Andrés González', '02', 'DEF789', '1001', '2023-11-08 23:16:15', '2023-11-08 23:16:15'),
('5221', 'Problema en el sistema de escape', '2023-08-30', 205700, 'moderada', 'reparada', 'Inspección de rutina', '07', 'L34067', '0012', '2023-11-08 23:16:15', '2023-11-08 23:16:15'),
('5231', 'Problema en el sistema de transmisión', '2023-02-27', 355800, 'grave', 'reparada', 'Inspección de rutina', '04', 'XYZ123', '0015', '2023-11-08 23:16:15', '2023-11-08 23:16:15'),
('5254', 'Pérdida de potencia del motor', '2023-04-24', 85432, 'moderada', 'reparada', 'Juan Pérez', '01', 'ABC123', '0011', '2023-11-08 21:01:33', '2023-11-08 21:01:33'),
('5259', 'Luces traseras no funcionan', '2023-09-05', 145200, 'leve', 'reparada', 'José Mario González', '11', 'TUV789', '0013', '2023-11-08 20:24:07', '2023-11-08 20:24:07'),
('5275', 'Problema en el sistema de suspensión', '2023-09-08', 185100, 'moderada', 'reparada', 'Inspección de rutina', '03', 'GHI567', '0017', '2023-11-08 20:24:07', '2023-11-08 20:24:07'),
('5326', 'Problema en el sistema de transmisión', '2023-09-10', 285400, 'grave', 'reparada', 'Luis Gonzalez', '04', 'QRS567', '0030', '2023-11-08 20:24:12', '2023-11-08 20:24:12'),
('5336', 'Problema en el sistema de suspensión', '2023-08-17', 275200, 'moderada', 'reparada', 'Inspección de rutina', '03', 'PQR567', '1001', '2023-11-08 21:01:33', '2023-11-08 21:01:33'),
('5360', 'Problema en el sistema de frenos', '2023-05-26', 375200, 'grave', 'pendiente', 'Andrés González', '02', 'DEF789', '1001', '2023-11-08 23:16:15', '2023-11-08 23:16:15'),
('5410', 'Problema en el sistema eléctrico', '2023-09-25', 325200, 'moderada', 'reparada', 'Carlos Ramiíez', '05', 'UVW345', '0030', '2023-11-08 21:01:33', '2023-11-08 21:01:33'),
('5421', 'Problema en el sistema de transmisión', '2023-02-24', 285400, 'grave', 'reparada', 'Luis Gonzalez', '04', 'QRS567', '0030', '2023-11-08 21:01:33', '2023-11-08 21:01:33'),
('5464', 'Problema en el sistema de lubricación', '2023-02-06', 235400, 'moderada', 'reparada', 'Inspección de rutina', '07', 'L34067', '0019', '2023-11-08 20:24:07', '2023-11-08 20:24:07'),
('5475', 'Problema en el sistema de transmisión', '2023-05-07', 195400, 'grave', 'reparada', 'Pedro Ramírez', '04', 'H49033', '0018', '2023-11-08 21:01:33', '2023-11-08 21:01:33'),
('5509', 'Pérdida de potencia del motor', '2023-02-22', 365900, 'moderada', 'reparada', 'Pedro López', '01', 'YZA012', '0030', '2023-11-08 20:24:07', '2023-11-08 20:24:07'),
('5530', 'Problema en el sistema de escape', '2023-01-16', 205700, 'moderada', 'reparada', 'Inspección de rutina', '07', 'L34067', '0012', '2023-11-08 21:01:33', '2023-11-08 21:01:33'),
('5556', 'Pérdida de presión de los neumáticos', '2023-04-25', 175600, 'leve', 'reparada', 'Andrés López', '14', 'FMN213', '0016', '2023-11-08 20:24:12', '2023-11-08 20:24:12'),
('5574', 'Pérdida de potencia del motor', '2023-06-15', 85432, 'moderada', 'reparada', 'Juan Pérez', '01', 'ABC123', '0011', '2023-11-08 23:16:15', '2023-11-08 23:16:15'),
('5584', 'Problema en la dirección', '2023-03-20', 155800, 'moderada', 'reparada', 'Luis Ramírez', '06', 'DEF789', '0013', '2023-11-08 20:24:12', '2023-11-08 20:24:12'),
('5591', 'Problema en el sistema de suspensión', '2023-06-08', 185100, 'moderada', 'reparada', 'Inspección de rutina', '03', 'GHI567', '0017', '2023-11-08 23:16:15', '2023-11-08 23:16:15'),
('5595', 'Problema en el sistema de refrigeración', '2023-05-18', 245600, 'grave', 'proceso', 'Luis Rodríguez', '09', 'STU890', '1002', '2023-11-08 23:16:15', '2023-11-08 23:16:15'),
('5596', 'Pérdida de potencia del motor', '2023-07-23', 295600, 'moderada', 'pendiente', 'Inspección de rutina', '01', 'RST567', '0104', '2023-11-08 20:24:12', '2023-11-08 20:24:12'),
('5608', 'Problema en el sistema de transmisión', '2023-07-16', 195400, 'grave', 'reparada', 'Pedro Ramírez', '04', 'H49033', '0018', '2023-11-08 20:24:12', '2023-11-08 20:24:12'),
('5819', 'Problema en el sistema de lubricación', '2023-01-18', 315900, 'moderada', 'reparada', 'Inspección de rutina', '12', 'TUV789', '0030', '2023-11-08 20:24:12', '2023-11-08 20:24:12'),
('5831', 'Problema en el sistema de transmisión', '2023-07-16', 195400, 'grave', 'reparada', 'Pedro Ramírez', '04', 'H49033', '0018', '2023-11-08 23:16:15', '2023-11-08 23:16:15'),
('5860', 'Pérdida de potencia del motor', '2023-06-06', 85432, 'moderada', 'reparada', 'Juan Pérez', '01', 'ABC123', '0011', '2023-11-08 21:01:33', '2023-11-08 21:01:33'),
('5870', 'Problema en el sistema de lubricación', '2023-12-18', 315900, 'moderada', 'reparada', 'Inspección de rutina', '12', 'TUV789', '0030', '2023-11-08 23:16:15', '2023-11-08 23:16:15'),
('5873', 'BUJIAS SUELTAS', '2023-02-06', 789546, 'grave', 'reparada', 'ESTEBAN', '01', 'JBL-411', '1008', '2023-11-08 23:16:15', '2023-11-08 23:16:15'),
('5874', 'Problema en el sistema de escape', '2023-05-27', 255800, 'moderada', 'reparada', 'Inspección de rutina', '07', 'NOP456', '0018', '2023-11-08 21:01:33', '2023-11-08 21:01:33'),
('5920', 'Problema en el sistema de suspensión', '2023-10-08', 185100, 'moderada', 'reparada', 'Inspección de rutina', '03', 'GHI567', '0017', '2023-11-08 23:16:15', '2023-11-08 23:16:15'),
('5965', 'Luces traseras no funcionan', '2023-06-05', 145200, 'leve', 'reparada', 'José Mario González', '11', 'TUV789', '0013', '2023-11-08 20:24:12', '2023-11-08 20:24:12'),
('5973', 'Problema en el sistema de suspensión', '2023-12-26', 275200, 'moderada', 'reparada', 'Inspección de rutina', '03', 'PQR567', '1001', '2023-11-08 21:01:33', '2023-11-08 21:01:33'),
('5997', 'Problema en el sistema de escape', '2023-04-14', 335400, 'grave', 'reparada', 'Inspección de rutina', '07', 'VWX123', '1002', '2023-11-08 20:24:12', '2023-11-08 20:24:12'),
('6004', 'Problema en el sistema de refrigeración', '2023-10-26', 245600, 'grave', 'proceso', 'Luis Rodríguez', '09', 'STU890', '1002', '2023-11-08 23:16:15', '2023-11-08 23:16:15'),
('6011', 'Problema en el sistema de frenos', '2023-06-08', 375200, 'grave', 'pendiente', 'Andrés González', '02', 'DEF789', '1001', '2023-11-08 21:01:33', '2023-11-08 21:01:33'),
('6029', 'DAÑO DE DIRECCIONAL', '2023-12-24', 490000, 'moderada', 'proceso', 'CAMILO', '06', 'JBL-411', '1004', '2023-11-08 20:24:12', '2023-11-08 20:24:12'),
('6115', 'Pérdida de potencia del motor', '2023-10-23', 295600, 'moderada', 'pendiente', 'Inspección de rutina', '01', 'RST567', '0104', '2023-11-08 23:16:15', '2023-11-08 23:16:15'),
('6145', 'Pérdida de potencia del motor', '2023-04-15', 365900, 'moderada', 'reparada', 'Pedro López', '01', 'YZA012', '0030', '2023-11-08 21:01:33', '2023-11-08 21:01:33'),
('6148', 'Problema en la dirección', '2023-01-19', 155800, 'moderada', 'reparada', 'Luis Ramírez', '06', 'DEF789', '0013', '2023-11-08 21:01:33', '2023-11-08 21:01:33'),
('6157', 'Pérdida de potencia del motor', '2023-07-22', 365900, 'moderada', 'reparada', 'Pedro López', '01', 'YZA012', '0030', '2023-11-08 20:24:12', '2023-11-08 20:24:12'),
('6258', 'Problema en el sistema de suspensión', '2023-09-24', 345600, 'moderada', 'reparada', 'Luis Ramírez', '03', 'WXY901', '1001', '2023-11-08 21:01:33', '2023-11-08 21:01:33'),
('6292', 'Problema en el sistema de suspensión', '2023-08-28', 275200, 'moderada', 'reparada', 'Inspección de rutina', '03', 'PQR567', '1001', '2023-11-08 20:24:12', '2023-11-08 20:24:12'),
('6328', 'Problema en el sistema de escape', '2023-01-25', 335400, 'grave', 'reparada', 'Inspección de rutina', '07', 'VWX123', '1002', '2023-11-08 21:01:33', '2023-11-08 21:01:33'),
('6356', 'Problema en el sistema de suspensión', '2023-04-17', 345600, 'moderada', 'reparada', 'Luis Ramírez', '03', 'WXY901', '1001', '2023-11-08 20:24:07', '2023-11-08 20:24:07'),
('6357', 'Problema en el sistema de lubricación', '2023-02-18', 315900, 'moderada', 'reparada', 'Inspección de rutina', '12', 'TUV789', '0030', '2023-11-08 21:01:33', '2023-11-08 21:01:33'),
('6417', 'se pincho una llanta', '2023-02-01', 140000, 'leve', 'reparada', 'Carlos Manrrique', '03', 'FHY-145', '1008', '2023-11-08 21:01:33', '2023-11-08 21:01:33'),
('6470', 'Problema en el sistema de lubricación', '2023-12-18', 385400, 'moderada', 'reparada', 'Inspección de rutina', '12', 'YZA012', '1002', '2023-11-08 20:24:12', '2023-11-08 20:24:12'),
('6478', 'Problema en el sistema de refrigeración', '2023-09-19', 245600, 'grave', 'proceso', 'Luis Rodríguez', '09', 'STU890', '1002', '2023-11-08 20:24:12', '2023-11-08 20:24:12'),
('6577', 'Problema en el sistema de refrigeración', '2023-01-05', 245600, 'grave', 'proceso', 'Luis Rodríguez', '09', 'STU890', '1002', '2023-11-08 21:01:33', '2023-11-08 21:01:33'),
('6606', 'Problema en el sistema de transmisión', '2023-08-09', 355800, 'grave', 'reparada', 'Inspección de rutina', '04', 'XYZ123', '0015', '2023-11-08 23:16:15', '2023-11-08 23:16:15'),
('6607', 'Problema en el sistema de transmisión', '2023-09-09', 355800, 'grave', 'reparada', 'Inspección de rutina', '04', 'XYZ123', '0015', '2023-11-08 20:24:12', '2023-11-08 20:24:12'),
('6610', 'Problema en el sistema de frenos', '2023-06-11', 225200, 'grave', 'reparada', 'Carlos García', '02', 'KLM678', '0016', '2023-11-08 21:01:33', '2023-11-08 21:01:33'),
('6627', 'BUJIAS SUELTAS', '2023-04-23', 789546, 'grave', 'reparada', 'ESTEBAN', '01', 'JBL-411', '1008', '2023-11-08 21:01:33', '2023-11-08 21:01:33'),
('6630', 'Problema en la dirección', '2023-06-27', 155800, 'moderada', 'reparada', 'Luis Ramírez', '06', 'DEF789', '0013', '2023-11-08 21:01:33', '2023-11-08 21:01:33'),
('6700', 'Problema en el sistema de transmisión', '2023-03-14', 355800, 'grave', 'reparada', 'Inspección de rutina', '04', 'XYZ123', '0015', '2023-11-08 23:16:15', '2023-11-08 23:16:15'),
('6719', 'Problema en el sistema de frenos', '2023-11-05', 305800, 'grave', 'reparada', 'Manuel Pérez', '02', 'STU890', '1002', '2023-11-08 20:24:12', '2023-11-08 20:24:12'),
('6746', 'Problema en el sistema de frenos', '2023-09-05', 305800, 'grave', 'reparada', 'Manuel Pérez', '02', 'STU890', '1002', '2023-11-08 20:24:12', '2023-11-08 20:24:12'),
('6755', 'Problema en el sistema de refrigeración', '2023-07-15', 245600, 'grave', 'proceso', 'Luis Rodríguez', '09', 'STU890', '1002', '2023-11-08 21:01:33', '2023-11-08 21:01:33'),
('6789', 'DAÑO  EMBRIAGUE', '2023-03-04', 409899, 'moderada', 'pendiente', 'FERNEY', '04', 'FMN213', '0018', '2023-09-29 03:01:17', '2023-09-29 03:01:17'),
('6797', 'Problema en el sistema de escape', '2023-11-04', 255800, 'moderada', 'reparada', 'Inspección de rutina', '07', 'NOP456', '0018', '2023-11-08 20:24:07', '2023-11-08 20:24:07'),
('6802', 'Frenos desgastados', '2023-05-09', 130500, 'grave', 'reparada', 'Juan Gutierrez', '02', 'BCD789', '0012', '2023-11-08 21:01:33', '2023-11-08 21:01:33'),
('6834', 'BUJIAS SUELTAS', '2023-09-14', 789546, 'grave', 'reparada', 'ESTEBAN', '01', 'JBL-411', '1008', '2023-11-08 21:01:33', '2023-11-08 21:01:33'),
('6835', 'Problema en el sistema eléctrico', '2023-05-01', 325200, 'moderada', 'reparada', 'Carlos Ramiíez', '05', 'UVW345', '0030', '2023-11-08 20:24:12', '2023-11-08 20:24:12'),
('6890', 'DAÑO  EMBRIAGUE', '2023-08-04', 409899, 'moderada', 'pendiente', 'FERNEY', '04', 'FMN213', '0018', '2023-11-08 20:24:12', '2023-11-08 20:24:12'),
('6903', 'Problema en el sistema de escape', '2023-10-05', 255800, 'moderada', 'reparada', 'Inspección de rutina', '07', 'NOP456', '0018', '2023-11-08 21:01:33', '2023-11-08 21:01:33'),
('6918', 'Problema en el sistema de refrigeración', '2023-12-12', 165300, 'grave', 'reparada', 'Inspección de rutina', '09', 'NOP456', '0016', '2023-11-08 23:16:15', '2023-11-08 23:16:15'),
('6949', 'DAÑO  EMBRIAGUE', '2023-03-30', 409899, 'moderada', 'pendiente', 'FERNEY', '04', 'FMN213', '0018', '2023-11-08 23:16:15', '2023-11-08 23:16:15'),
('6951', 'Problema en el sistema de lubricación', '2023-07-26', 235400, 'moderada', 'reparada', 'Inspección de rutina', '07', 'L34067', '0019', '2023-11-08 21:01:33', '2023-11-08 21:01:33'),
('7034', 'Frenos desgastados', '2023-08-06', 130500, 'grave', 'reparada', 'Juan Gutierrez', '02', 'BCD789', '0012', '2023-11-08 21:01:33', '2023-11-08 21:01:33'),
('7052', 'Problema en el sistema de frenos', '2023-12-14', 305800, 'grave', 'reparada', 'Manuel Pérez', '02', 'STU890', '1002', '2023-11-08 21:01:33', '2023-11-08 21:01:33'),
('7064', 'Problema en el sistema de transmisión', '2023-11-10', 285400, 'grave', 'reparada', 'Luis Gonzalez', '04', 'QRS567', '0030', '2023-11-08 20:24:12', '2023-11-08 20:24:12'),
('7068', 'Problema en el sistema de suspensión', '2023-01-17', 345600, 'moderada', 'reparada', 'Luis Ramírez', '03', 'WXY901', '1001', '2023-11-08 20:24:12', '2023-11-08 20:24:12'),
('7099', 'Luces traseras no funcionan', '2023-11-16', 145200, 'leve', 'reparada', 'José Mario González', '11', 'TUV789', '0013', '2023-11-08 21:01:33', '2023-11-08 21:01:33'),
('7120', 'Pérdida de potencia del motor', '2023-02-16', 295600, 'moderada', 'pendiente', 'Inspección de rutina', '01', 'RST567', '0104', '2023-11-08 21:01:33', '2023-11-08 21:01:33'),
('7149', 'Frenos desgastados', '2023-06-15', 130500, 'grave', 'reparada', 'Juan Gutierrez', '02', 'BCD789', '0012', '2023-11-08 20:24:07', '2023-11-08 20:24:07'),
('7175', 'Problema en el sistema eléctrico', '2023-12-01', 325200, 'moderada', 'reparada', 'Carlos Ramiíez', '05', 'UVW345', '0030', '2023-11-08 23:16:15', '2023-11-08 23:16:15'),
('7220', 'Problema en el sistema de refrigeración', '2023-12-12', 165300, 'grave', 'reparada', 'Inspección de rutina', '09', 'NOP456', '0016', '2023-11-08 20:24:12', '2023-11-08 20:24:12'),
('7257', 'Problema en el sistema de frenos', '2023-11-23', 305800, 'grave', 'reparada', 'Manuel Pérez', '02', 'STU890', '1002', '2023-11-08 21:01:33', '2023-11-08 21:01:33'),
('7301', 'Problema en el sistema de suspensión', '2023-12-23', 185100, 'moderada', 'reparada', 'Inspección de rutina', '03', 'GHI567', '0017', '2023-11-08 21:01:33', '2023-11-08 21:01:33'),
('7374', 'Frenos desgastados', '2023-06-15', 130500, 'grave', 'reparada', 'Juan Gutierrez', '02', 'BCD789', '0012', '2023-11-08 20:24:12', '2023-11-08 20:24:12'),
('7387', 'Problema en el sistema de lubricación', '2023-12-14', 385400, 'moderada', 'reparada', 'Inspección de rutina', '12', 'YZA012', '1002', '2023-11-08 21:01:33', '2023-11-08 21:01:33'),
('7400', 'BUJIAS SUELTAS', '2023-10-15', 789546, 'grave', 'reparada', 'ESTEBAN', '01', 'JBL-411', '1008', '2023-11-08 21:01:33', '2023-11-08 21:01:33'),
('7434', 'Problema en el sistema de dirección', '2023-03-12', 215900, 'grave', 'reparada', 'José María López', '06', 'JBL-411', '0013', '2023-11-08 20:24:12', '2023-11-08 20:24:12'),
('7445', 'Problema en el sistema eléctrico', '2023-03-03', 325200, 'moderada', 'reparada', 'Carlos Ramiíez', '05', 'UVW345', '0030', '2023-11-08 21:01:33', '2023-11-08 21:01:33'),
('7497', 'Problema en el sistema de transmisión', '2023-10-22', 195400, 'grave', 'reparada', 'Pedro Ramírez', '04', 'H49033', '0018', '2023-11-08 21:01:33', '2023-11-08 21:01:33'),
('7498', 'Problema en el sistema de escape', '2023-09-04', 255800, 'moderada', 'reparada', 'Inspección de rutina', '07', 'NOP456', '0018', '2023-11-08 20:24:12', '2023-11-08 20:24:12'),
('7530', 'Problema en el sistema de escape', '2023-10-30', 205700, 'moderada', 'reparada', 'Inspección de rutina', '07', 'L34067', '0012', '2023-11-08 20:24:07', '2023-11-08 20:24:07'),
('7794', 'Frenos desgastados', '2023-12-15', 130500, 'grave', 'reparada', 'Juan Gutierrez', '02', 'BCD789', '0012', '2023-11-08 23:16:15', '2023-11-08 23:16:15'),
('7845', 'Problema en el sistema de lubricación', '2023-01-06', 235400, 'moderada', 'reparada', 'Inspección de rutina', '07', 'L34067', '0019', '2023-10-02 05:45:15', '2023-10-02 16:40:52'),
('7851', 'Pérdida de presión de los neumáticos', '2023-08-25', 175600, 'leve', 'reparada', 'Andrés López', '14', 'FMN213', '0016', '2023-11-08 23:16:15', '2023-11-08 23:16:15'),
('7896', 'Problema en el sistema de refrigeración', '2023-09-12', 165300, 'grave', 'reparada', 'Inspección de rutina', '09', 'NOP456', '0016', '2023-11-08 20:24:07', '2023-11-08 20:24:07'),
('7909', 'Problema en el sistema de frenos', '2023-09-05', 305800, 'grave', 'reparada', 'Manuel Pérez', '02', 'STU890', '1002', '2023-11-08 20:24:07', '2023-11-08 20:24:07'),
('7958', 'Problema en el sistema de dirección', '2023-07-22', 215900, 'grave', 'reparada', 'José María López', '06', 'JBL-411', '0013', '2023-11-08 21:01:33', '2023-11-08 21:01:33'),
('7963', 'Problema en el sistema de suspensión', '2023-02-28', 275200, 'moderada', 'reparada', 'Inspección de rutina', '03', 'PQR567', '1001', '2023-11-08 20:24:12', '2023-11-08 20:24:12'),
('8032', 'Problema en el sistema de lubricación', '2023-01-18', 315900, 'moderada', 'reparada', 'Inspección de rutina', '12', 'TUV789', '0030', '2023-11-08 23:16:15', '2023-11-08 23:16:15'),
('8054', 'Problema en el sistema de transmisión', '2023-02-03', 285400, 'grave', 'reparada', 'Luis Gonzalez', '04', 'QRS567', '0030', '2023-11-08 23:16:15', '2023-11-08 23:16:15'),
('8105', 'Problema en el sistema de transmisión', '2023-03-19', 285400, 'grave', 'reparada', 'Luis Gonzalez', '04', 'QRS567', '0030', '2023-11-08 21:01:33', '2023-11-08 21:01:33'),
('8224', 'Pérdida de potencia del motor', '2023-09-18', 295600, 'moderada', 'pendiente', 'Inspección de rutina', '01', 'RST567', '0104', '2023-11-08 23:16:15', '2023-11-08 23:16:15'),
('8283', 'DAÑO  EMBRIAGUE', '2023-11-04', 409899, 'moderada', 'pendiente', 'FERNEY', '04', 'FMN213', '0018', '2023-11-08 20:24:07', '2023-11-08 20:24:07'),
('8314', 'se pincho una llanta', '2023-09-19', 140000, 'leve', 'reparada', 'Carlos Manrrique', '03', 'FHY-145', '1008', '2023-11-08 23:16:15', '2023-11-08 23:16:15'),
('8317', 'Problema en el sistema de transmisión', '2023-02-10', 285400, 'grave', 'reparada', 'Luis Gonzalez', '04', 'QRS567', '0030', '2023-11-08 23:16:15', '2023-11-08 23:16:15'),
('8347', 'Luces traseras no funcionan', '2023-11-25', 145200, 'leve', 'reparada', 'José Mario González', '11', 'TUV789', '0013', '2023-11-08 23:16:15', '2023-11-08 23:16:15'),
('8403', 'Problema en el sistema de refrigeración', '2023-11-19', 245600, 'grave', 'proceso', 'Luis Rodríguez', '09', 'STU890', '1002', '2023-11-08 20:24:12', '2023-11-08 20:24:12'),
('8442', 'Problema en el sistema de dirección', '2023-07-09', 215900, 'grave', 'reparada', 'José María López', '06', 'JBL-411', '0013', '2023-11-08 21:01:33', '2023-11-08 21:01:33'),
('8476', 'Problema en el sistema de escape', '2023-11-01', 255800, 'moderada', 'reparada', 'Inspección de rutina', '07', 'NOP456', '0018', '2023-11-08 21:01:33', '2023-11-08 21:01:33'),
('8496', 'Problema en el sistema de lubricación', '2023-01-06', 235400, 'moderada', 'reparada', 'Inspección de rutina', '07', 'L34067', '0019', '2023-11-08 20:24:12', '2023-11-08 20:24:12'),
('8502', 'Pérdida de potencia del motor', '2023-03-15', 85432, 'moderada', 'reparada', 'Juan Pérez', '01', 'ABC123', '0011', '2023-11-08 20:24:12', '2023-11-08 20:24:12'),
('8591', 'Problema en la dirección', '2023-02-20', 155800, 'moderada', 'reparada', 'Luis Ramírez', '06', 'DEF789', '0013', '2023-11-08 20:24:07', '2023-11-08 20:24:07'),
('8618', 'Problema en el sistema de transmisión', '2023-12-10', 285400, 'grave', 'reparada', 'Luis Gonzalez', '04', 'QRS567', '0030', '2023-11-08 23:16:15', '2023-11-08 23:16:15'),
('8634', 'Problema en el sistema de lubricación', '2023-10-05', 235400, 'moderada', 'reparada', 'Inspección de rutina', '07', 'L34067', '0019', '2023-11-08 21:01:33', '2023-11-08 21:01:33'),
('8651', 'Problema en el sistema de escape', '2023-08-07', 205700, 'moderada', 'reparada', 'Inspección de rutina', '07', 'L34067', '0012', '2023-11-08 21:01:33', '2023-11-08 21:01:33'),
('8687', 'DAÑO  EMBRIAGUE', '2023-07-04', 409899, 'moderada', 'pendiente', 'FERNEY', '04', 'FMN213', '0018', '2023-11-08 20:24:12', '2023-11-08 20:24:12'),
('8763', 'BUJIAS SUELTAS', '2023-04-04', 789546, 'grave', 'reparada', 'ESTEBAN', '01', 'JBL-411', '1008', '2023-11-08 21:01:33', '2023-11-08 21:01:33'),
('8789', 'DAÑO DE DIRECCIONAL', '2023-08-24', 490000, 'moderada', 'proceso', 'CAMILO', '06', 'JBL-411', '1004', '2023-11-08 20:24:12', '2023-11-08 20:24:12'),
('8809', 'Problema en el sistema de suspensión', '2023-03-28', 275200, 'moderada', 'reparada', 'Inspección de rutina', '03', 'PQR567', '1001', '2023-11-08 23:16:15', '2023-11-08 23:16:15'),
('8817', 'Problema en el sistema de frenos', '2023-03-08', 375200, 'grave', 'pendiente', 'Andrés González', '02', 'DEF789', '1001', '2023-11-08 23:16:15', '2023-11-08 23:16:15'),
('8878', 'Problema en el sistema de frenos', '2023-08-25', 305800, 'grave', 'reparada', 'Manuel Pérez', '02', 'STU890', '1002', '2023-11-08 23:16:15', '2023-11-08 23:16:15'),
('8881', 'se pincho una llanta', '2023-06-29', 140000, 'leve', 'reparada', 'Carlos Manrrique', '03', 'FHY-145', '1008', '2023-11-08 20:24:07', '2023-11-08 20:24:07'),
('8885', 'Frenos desgastados', '2023-05-15', 130500, 'grave', 'reparada', 'Juan Gutierrez', '02', 'BCD789', '0012', '2023-11-08 23:16:15', '2023-11-08 23:16:15'),
('8889', 'Pérdida de potencia del motor', '2023-08-06', 85432, 'moderada', 'reparada', 'Juan Pérez', '01', 'ABC123', '0011', '2023-11-08 21:01:33', '2023-11-08 21:01:33'),
('8951', 'Problema en el sistema de refrigeración', '2023-03-12', 165300, 'grave', 'reparada', 'Inspección de rutina', '09', 'NOP456', '0016', '2023-11-08 20:24:12', '2023-11-08 20:24:12'),
('8980', 'DAÑO DE DIRECCIONAL', '2023-01-22', 490000, 'moderada', 'proceso', 'CAMILO', '06', 'JBL-411', '1004', '2023-11-08 21:01:33', '2023-11-08 21:01:33'),
('9019', 'Problema en el sistema de transmisión', '2023-02-14', 355800, 'grave', 'reparada', 'Inspección de rutina', '04', 'XYZ123', '0015', '2023-11-08 21:01:33', '2023-11-08 21:01:33'),
('9041', 'Luces traseras no funcionan', '2023-02-22', 145200, 'leve', 'reparada', 'José Mario González', '11', 'TUV789', '0013', '2023-11-08 21:01:33', '2023-11-08 21:01:33'),
('9128', 'Problema en el sistema de frenos', '2023-01-25', 305800, 'grave', 'reparada', 'Manuel Pérez', '02', 'STU890', '1002', '2023-11-08 23:16:15', '2023-11-08 23:16:15'),
('9135', 'Problema en el sistema de frenos', '2023-05-24', 225200, 'grave', 'reparada', 'Carlos García', '02', 'KLM678', '0016', '2023-11-08 20:24:07', '2023-11-08 20:24:07');
INSERT INTO `fallas` (`cod_fal`, `desc_fal`, `fec_fal`, `kil_fal`, `gra_fal`, `est_act_fal`, `res_det_fal`, `sis_fal`, `cam_fal`, `rut_fal`, `created_at`, `updated_at`) VALUES
('9176', 'Pérdida de potencia del motor', '2023-03-22', 365900, 'moderada', 'reparada', 'Pedro López', '01', 'YZA012', '0030', '2023-11-08 20:24:12', '2023-11-08 20:24:12'),
('9360', 'Problema en el sistema de frenos', '2023-05-07', 375200, 'grave', 'pendiente', 'Andrés González', '02', 'DEF789', '1001', '2023-11-08 21:01:33', '2023-11-08 21:01:33'),
('9370', 'Problema en el sistema de suspensión', '2023-05-17', 345600, 'moderada', 'reparada', 'Luis Ramírez', '03', 'WXY901', '1001', '2023-11-08 23:16:15', '2023-11-08 23:16:15'),
('9392', 'Problema en el sistema de escape', '2023-03-27', 335400, 'grave', 'reparada', 'Inspección de rutina', '07', 'VWX123', '1002', '2023-11-08 21:01:33', '2023-11-08 21:01:33'),
('9399', 'BUJIAS SUELTAS', '2023-09-06', 789546, 'grave', 'reparada', 'ESTEBAN', '01', 'JBL-411', '1008', '2023-11-08 20:24:12', '2023-11-08 20:24:12'),
('9511', 'Problema en el sistema de frenos', '2023-06-08', 375200, 'grave', 'pendiente', 'Andrés González', '02', 'DEF789', '1001', '2023-11-08 20:24:07', '2023-11-08 20:24:07'),
('9696', 'Problema en el sistema de dirección', '2023-10-12', 215900, 'grave', 'reparada', 'José María López', '06', 'JBL-411', '0013', '2023-11-08 23:16:15', '2023-11-08 23:16:15'),
('9702', 'Pérdida de presión de los neumáticos', '2023-08-25', 175600, 'leve', 'reparada', 'Andrés López', '14', 'FMN213', '0016', '2023-11-08 20:24:07', '2023-11-08 20:24:07'),
('9709', 'Pérdida de presión de los neumáticos', '2023-09-23', 175600, 'leve', 'reparada', 'Andrés López', '14', 'FMN213', '0016', '2023-11-08 21:01:33', '2023-11-08 21:01:33'),
('9722', 'Problema en la dirección', '2023-07-20', 155800, 'moderada', 'reparada', 'Luis Ramírez', '06', 'DEF789', '0013', '2023-11-08 20:24:12', '2023-11-08 20:24:12'),
('9734', 'Problema en la dirección', '2023-03-20', 155800, 'moderada', 'reparada', 'Luis Ramírez', '06', 'DEF789', '0013', '2023-11-08 23:16:15', '2023-11-08 23:16:15'),
('9777', 'Problema en el sistema de lubricación', '2023-08-18', 385400, 'moderada', 'reparada', 'Inspección de rutina', '12', 'YZA012', '1002', '2023-11-08 20:24:12', '2023-11-08 20:24:12'),
('9851', 'Problema en el sistema de transmisión', '2023-12-16', 195400, 'grave', 'reparada', 'Pedro Ramírez', '04', 'H49033', '0018', '2023-11-08 20:24:12', '2023-11-08 20:24:12'),
('9872', 'Problema en el sistema de refrigeración', '2023-11-08', 165300, 'grave', 'reparada', 'Inspección de rutina', '09', 'NOP456', '0016', '2023-11-08 23:16:15', '2023-11-08 23:16:15'),
('9894', 'DAÑO DE DIRECCIONAL', '2023-09-24', 490000, 'moderada', 'proceso', 'CAMILO', '06', 'JBL-411', '1004', '2023-09-29 02:56:16', '2023-10-02 15:06:58'),
('9898', 'BUJIAS SUELTAS', '2023-07-06', 789546, 'grave', 'reparada', 'ESTEBAN', '01', 'JBL-411', '1008', '2023-09-29 02:59:43', '2023-10-02 16:13:29'),
('9911', 'se pincho una llanta', '2023-12-29', 140000, 'leve', 'reparada', 'Carlos Manrrique', '03', 'FHY-145', '1008', '2023-11-08 20:24:12', '2023-11-08 20:24:12'),
('9964', 'Problema en el sistema de frenos', '2023-03-10', 225200, 'grave', 'reparada', 'Carlos García', '02', 'KLM678', '0016', '2023-11-08 23:16:15', '2023-11-08 23:16:15'),
('9966', 'Frenos desgastados', '2023-02-14', 130500, 'grave', 'reparada', 'Juan Gutierrez', '02', 'BCD789', '0012', '2023-11-08 21:01:33', '2023-11-08 21:01:33');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gastos`
--

CREATE TABLE `gastos` (
  `cod_gas` varchar(4) NOT NULL,
  `mon_gas` decimal(10,2) NOT NULL,
  `fec_gas` date NOT NULL,
  `cat_gas` varchar(4) NOT NULL,
  `via_gas` varchar(4) NOT NULL,
  `est_gas` varchar(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `gastos`
--

INSERT INTO `gastos` (`cod_gas`, `mon_gas`, `fec_gas`, `cat_gas`, `via_gas`, `est_gas`, `created_at`, `updated_at`) VALUES
('1001', 450000.00, '2023-03-15', '0001', '0025', 'aprobado', '2023-10-02 16:52:24', '2023-10-02 16:52:31'),
('1002', 750000.00, '2023-03-15', '0002', '0025', 'aprobado', '2023-10-02 16:52:56', '2023-10-02 16:53:02'),
('1003', 50000.00, '2023-03-15', '0004', '0025', 'aprobado', '2023-10-02 16:53:27', '2023-10-02 16:53:33'),
('1004', 200000.00, '2023-03-15', '0005', '0025', 'aprobado', '2023-10-02 16:55:13', '2023-10-02 16:55:23'),
('1005', 300000.00, '2023-02-05', '0001', '0024', 'aprobado', '2023-10-02 16:56:05', '2023-10-02 16:56:10'),
('1006', 600000.00, '2023-02-05', '0002', '0024', 'aprobado', '2023-10-02 16:56:37', '2023-10-02 16:56:44'),
('1007', 40000.00, '2023-02-05', '0004', '0024', 'aprobado', '2023-10-02 16:57:03', '2023-10-02 16:57:11'),
('1008', 180000.00, '2023-02-05', '0005', '0024', 'aprobado', '2023-10-02 16:59:09', '2023-10-02 16:59:15'),
('1009', 120000.00, '2023-01-25', '0001', '0023', 'aprobado', '2023-10-02 17:00:42', '2023-10-02 17:00:49'),
('1010', 600000.00, '2023-01-25', '0002', '0023', 'aprobado', '2023-10-02 17:02:02', '2023-10-02 17:02:10'),
('1011', 30000.00, '2023-01-25', '0004', '0023', 'aprobado', '2023-10-02 17:02:38', '2023-10-02 17:02:45'),
('1012', 200000.00, '2023-01-25', '0005', '0023', 'aprobado', '2023-10-02 17:03:50', '2023-10-02 17:03:56'),
('1013', 400000.00, '2023-04-15', '0001', '0022', 'aprobado', '2023-10-02 17:04:17', '2023-10-02 17:04:25'),
('1014', 800000.00, '2023-04-15', '0002', '0022', 'aprobado', '2023-10-02 17:04:55', '2023-10-02 17:05:03'),
('1015', 60000.00, '2023-04-15', '0004', '0022', 'aprobado', '2023-10-02 17:05:26', '2023-10-02 17:05:33'),
('1016', 250000.00, '2023-04-15', '0005', '0022', 'aprobado', '2023-10-02 17:05:54', '2023-10-02 17:06:01'),
('1017', 80000.00, '2023-08-05', '0001', '0021', 'aprobado', '2023-10-02 17:07:10', '2023-10-02 17:07:21'),
('1018', 400000.00, '2023-08-05', '0002', '0021', 'aprobado', '2023-10-02 17:07:52', '2023-10-02 17:08:05'),
('1019', 25000.00, '2023-08-05', '0004', '0021', 'aprobado', '2023-10-02 17:08:28', '2023-10-02 17:08:37'),
('1020', 150000.00, '2023-02-05', '0005', '0021', 'aprobado', '2023-10-02 17:09:00', '2023-10-02 17:09:07'),
('1029', 60000.00, '2023-07-25', '0001', '0018', 'aprobado', '2023-10-02 17:14:45', '2023-10-02 17:14:56'),
('1030', 300000.00, '2023-07-25', '0002', '0018', 'aprobado', '2023-10-02 17:15:25', '2023-10-02 17:15:32'),
('1031', 20000.00, '2023-07-25', '0004', '0018', 'aprobado', '2023-10-02 17:15:52', '2023-10-02 17:16:09'),
('1032', 120000.00, '2023-07-25', '0005', '0018', 'aprobado', '2023-10-02 17:16:31', '2023-10-02 17:16:37'),
('1101', 450000.00, '2023-04-15', '0001', '0025', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('1102', 750000.00, '2023-04-15', '0004', '0025', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('1103', 50000.00, '2023-04-15', '0001', '0025', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('1104', 200000.00, '2023-04-15', '0006', '0025', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('1105', 300000.00, '2023-03-05', '0004', '0024', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('1106', 600000.00, '2023-03-05', '0003', '0024', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('1107', 40000.00, '2023-03-05', '0002', '0024', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('1108', 180000.00, '2023-03-05', '0001', '0024', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('1109', 120000.00, '2023-02-25', '0006', '0023', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('1110', 600000.00, '2023-02-25', '0006', '0023', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('1111', 30000.00, '2023-02-25', '0002', '0023', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('1112', 200000.00, '2023-02-25', '0001', '0023', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('1113', 400000.00, '2023-05-15', '0002', '0022', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('1114', 800000.00, '2023-05-15', '0005', '0022', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('1115', 60000.00, '2023-05-15', '0001', '0022', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('1116', 250000.00, '2023-05-15', '0005', '0022', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('1120', 150000.00, '2023-03-05', '0001', '0021', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('1129', 60000.00, '2023-08-25', '0005', '0018', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('1130', 300000.00, '2023-08-25', '0002', '0018', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('1131', 20000.00, '2023-08-25', '0001', '0018', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('1132', 120000.00, '2023-08-25', '0005', '0018', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('2001', 450000.00, '2023-04-15', '0005', '0025', 'aprobado', '2023-11-08 23:52:36', '2023-11-08 23:52:36'),
('2002', 750000.00, '2023-04-15', '0005', '0025', 'aprobado', '2023-11-08 23:52:36', '2023-11-08 23:52:36'),
('2003', 50000.00, '2023-04-15', '0005', '0025', 'aprobado', '2023-11-08 23:52:36', '2023-11-08 23:52:36'),
('2004', 200000.00, '2023-04-15', '0006', '0025', 'aprobado', '2023-11-08 23:52:36', '2023-11-08 23:52:36'),
('2005', 300000.00, '2023-03-05', '0006', '0024', 'aprobado', '2023-11-08 23:52:36', '2023-11-08 23:52:36'),
('2006', 600000.00, '2023-03-05', '0002', '0024', 'aprobado', '2023-11-08 23:52:36', '2023-11-08 23:52:36'),
('2007', 40000.00, '2023-03-05', '0002', '0024', 'aprobado', '2023-11-08 23:52:36', '2023-11-08 23:52:36'),
('2008', 180000.00, '2023-03-05', '0003', '0024', 'aprobado', '2023-11-08 23:52:36', '2023-11-08 23:52:36'),
('2009', 120000.00, '2023-02-25', '0005', '0023', 'aprobado', '2023-11-08 23:52:36', '2023-11-08 23:52:36'),
('2010', 600000.00, '2023-02-25', '0001', '0023', 'aprobado', '2023-11-08 23:52:36', '2023-11-08 23:52:36'),
('2011', 30000.00, '2023-02-25', '0001', '0023', 'aprobado', '2023-11-08 23:52:36', '2023-11-08 23:52:36'),
('2012', 200000.00, '2023-02-25', '0006', '0023', 'aprobado', '2023-11-08 23:52:36', '2023-11-08 23:52:36'),
('2013', 400000.00, '2023-05-15', '0004', '0022', 'aprobado', '2023-11-08 23:52:36', '2023-11-08 23:52:36'),
('2014', 800000.00, '2023-05-15', '0001', '0022', 'aprobado', '2023-11-08 23:52:36', '2023-11-08 23:52:36'),
('2015', 60000.00, '2023-05-15', '0003', '0022', 'aprobado', '2023-11-08 23:52:36', '2023-11-08 23:52:36'),
('2016', 250000.00, '2023-05-15', '0003', '0022', 'aprobado', '2023-11-08 23:52:36', '2023-11-08 23:52:36'),
('2017', 80000.00, '2023-09-05', '0004', '0021', 'aprobado', '2023-11-08 23:52:36', '2023-11-08 23:52:36'),
('2018', 400000.00, '2023-09-05', '0003', '0021', 'aprobado', '2023-11-08 23:52:36', '2023-11-08 23:52:36'),
('2019', 25000.00, '2023-09-05', '0005', '0021', 'aprobado', '2023-11-08 23:52:36', '2023-11-08 23:52:36'),
('2020', 150000.00, '2023-03-05', '0002', '0021', 'aprobado', '2023-11-08 23:52:36', '2023-11-08 23:52:36'),
('2029', 60000.00, '2023-08-25', '0001', '0018', 'aprobado', '2023-11-08 23:52:36', '2023-11-08 23:52:36'),
('2030', 300000.00, '2023-08-25', '0003', '0018', 'aprobado', '2023-11-08 23:52:36', '2023-11-08 23:52:36'),
('2031', 20000.00, '2023-08-25', '0004', '0018', 'aprobado', '2023-11-08 23:52:36', '2023-11-08 23:52:36'),
('2032', 120000.00, '2023-08-25', '0001', '0018', 'aprobado', '2023-11-08 23:52:36', '2023-11-08 23:52:36'),
('2101', 450000.00, '2023-05-15', '0002', '0025', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('2102', 750000.00, '2023-05-15', '0003', '0025', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('2103', 50000.00, '2023-05-15', '0005', '0025', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('2104', 200000.00, '2023-05-15', '0004', '0025', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('2105', 300000.00, '2023-04-05', '0004', '0024', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('2106', 600000.00, '2023-04-05', '0005', '0024', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('2107', 40000.00, '2023-04-05', '0005', '0024', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('2108', 180000.00, '2023-04-05', '0001', '0024', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('2109', 120000.00, '2023-03-25', '0003', '0023', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('2110', 600000.00, '2023-03-25', '0005', '0023', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('2111', 30000.00, '2023-03-25', '0001', '0023', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('2112', 200000.00, '2023-03-25', '0001', '0023', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('2113', 400000.00, '2023-06-15', '0003', '0022', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('2114', 800000.00, '2023-06-15', '0002', '0022', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('2115', 60000.00, '2023-06-15', '0005', '0022', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('2116', 250000.00, '2023-06-15', '0006', '0022', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('2120', 150000.00, '2023-04-05', '0006', '0021', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('3001', 450000.00, '2023-04-15', '0005', '0025', 'aprobado', '2023-11-08 23:52:53', '2023-11-08 23:52:53'),
('3002', 750000.00, '2023-04-15', '0001', '0025', 'aprobado', '2023-11-08 23:52:53', '2023-11-08 23:52:53'),
('3003', 50000.00, '2023-04-15', '0003', '0025', 'aprobado', '2023-11-08 23:52:53', '2023-11-08 23:52:53'),
('3004', 200000.00, '2023-04-15', '0005', '0025', 'aprobado', '2023-11-08 23:52:53', '2023-11-08 23:52:53'),
('3005', 300000.00, '2023-03-05', '0004', '0024', 'aprobado', '2023-11-08 23:52:53', '2023-11-08 23:52:53'),
('3006', 600000.00, '2023-03-05', '0003', '0024', 'aprobado', '2023-11-08 23:52:53', '2023-11-08 23:52:53'),
('3007', 40000.00, '2023-03-05', '0003', '0024', 'aprobado', '2023-11-08 23:52:53', '2023-11-08 23:52:53'),
('3008', 180000.00, '2023-03-05', '0004', '0024', 'aprobado', '2023-11-08 23:52:53', '2023-11-08 23:52:53'),
('3009', 120000.00, '2023-02-25', '0003', '0023', 'aprobado', '2023-11-08 23:52:53', '2023-11-08 23:52:53'),
('3010', 600000.00, '2023-02-25', '0001', '0023', 'aprobado', '2023-11-08 23:52:53', '2023-11-08 23:52:53'),
('3011', 30000.00, '2023-02-25', '0004', '0023', 'aprobado', '2023-11-08 23:52:53', '2023-11-08 23:52:53'),
('3012', 200000.00, '2023-02-25', '0005', '0023', 'aprobado', '2023-11-08 23:52:53', '2023-11-08 23:52:53'),
('3013', 400000.00, '2023-05-15', '0004', '0022', 'aprobado', '2023-11-08 23:52:53', '2023-11-08 23:52:53'),
('3014', 800000.00, '2023-05-15', '0002', '0022', 'aprobado', '2023-11-08 23:52:53', '2023-11-08 23:52:53'),
('3015', 60000.00, '2023-05-15', '0006', '0022', 'aprobado', '2023-11-08 23:52:53', '2023-11-08 23:52:53'),
('3016', 250000.00, '2023-05-15', '0002', '0022', 'aprobado', '2023-11-08 23:52:53', '2023-11-08 23:52:53'),
('3017', 80000.00, '2023-09-05', '0004', '0021', 'aprobado', '2023-11-08 23:52:53', '2023-11-08 23:52:53'),
('3018', 400000.00, '2023-09-05', '0004', '0021', 'aprobado', '2023-11-08 23:52:53', '2023-11-08 23:52:53'),
('3019', 25000.00, '2023-09-05', '0005', '0021', 'aprobado', '2023-11-08 23:52:53', '2023-11-08 23:52:53'),
('3020', 150000.00, '2023-03-05', '0006', '0021', 'aprobado', '2023-11-08 23:52:53', '2023-11-08 23:52:53'),
('3029', 60000.00, '2023-08-25', '0002', '0018', 'aprobado', '2023-11-08 23:52:53', '2023-11-08 23:52:53'),
('3030', 300000.00, '2023-08-25', '0006', '0018', 'aprobado', '2023-11-08 23:52:53', '2023-11-08 23:52:53'),
('3031', 20000.00, '2023-08-25', '0005', '0018', 'aprobado', '2023-11-08 23:52:53', '2023-11-08 23:52:53'),
('3032', 120000.00, '2023-08-25', '0003', '0018', 'aprobado', '2023-11-08 23:52:53', '2023-11-08 23:52:53'),
('3101', 450000.00, '2023-05-15', '0004', '0025', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('3102', 750000.00, '2023-05-15', '0003', '0025', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('3103', 50000.00, '2023-05-15', '0004', '0025', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('3104', 200000.00, '2023-05-15', '0004', '0025', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('3105', 300000.00, '2023-04-05', '0002', '0024', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('3106', 600000.00, '2023-04-05', '0005', '0024', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('3107', 40000.00, '2023-04-05', '0004', '0024', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('3108', 180000.00, '2023-04-05', '0004', '0024', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('3109', 120000.00, '2023-03-25', '0002', '0023', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('3110', 600000.00, '2023-03-25', '0003', '0023', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('3111', 30000.00, '2023-03-25', '0006', '0023', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('3112', 200000.00, '2023-03-25', '0003', '0023', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('3113', 400000.00, '2023-06-15', '0004', '0022', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('3114', 800000.00, '2023-06-15', '0002', '0022', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('3115', 60000.00, '2023-06-15', '0005', '0022', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('3116', 250000.00, '2023-06-15', '0001', '0022', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('3120', 150000.00, '2023-04-05', '0001', '0021', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('4001', 450000.00, '2023-05-15', '0001', '0025', 'aprobado', '2023-11-08 23:52:53', '2023-11-08 23:52:53'),
('4002', 750000.00, '2023-05-15', '0002', '0025', 'aprobado', '2023-11-08 23:52:53', '2023-11-08 23:52:53'),
('4003', 50000.00, '2023-05-15', '0006', '0025', 'aprobado', '2023-11-08 23:52:53', '2023-11-08 23:52:53'),
('4004', 200000.00, '2023-05-15', '0001', '0025', 'aprobado', '2023-11-08 23:52:53', '2023-11-08 23:52:53'),
('4005', 300000.00, '2023-04-05', '0002', '0024', 'aprobado', '2023-11-08 23:52:53', '2023-11-08 23:52:53'),
('4006', 600000.00, '2023-04-05', '0005', '0024', 'aprobado', '2023-11-08 23:52:53', '2023-11-08 23:52:53'),
('4007', 40000.00, '2023-04-05', '0003', '0024', 'aprobado', '2023-11-08 23:52:53', '2023-11-08 23:52:53'),
('4008', 180000.00, '2023-04-05', '0006', '0024', 'aprobado', '2023-11-08 23:52:53', '2023-11-08 23:52:53'),
('4009', 120000.00, '2023-03-25', '0004', '0023', 'aprobado', '2023-11-08 23:52:53', '2023-11-08 23:52:53'),
('4010', 600000.00, '2023-03-25', '0003', '0023', 'aprobado', '2023-11-08 23:52:53', '2023-11-08 23:52:53'),
('4011', 30000.00, '2023-03-25', '0002', '0023', 'aprobado', '2023-11-08 23:52:53', '2023-11-08 23:52:53'),
('4012', 200000.00, '2023-03-25', '0002', '0023', 'aprobado', '2023-11-08 23:52:53', '2023-11-08 23:52:53'),
('4013', 400000.00, '2023-06-15', '0003', '0022', 'aprobado', '2023-11-08 23:52:53', '2023-11-08 23:52:53'),
('4014', 800000.00, '2023-06-15', '0001', '0022', 'aprobado', '2023-11-08 23:52:53', '2023-11-08 23:52:53'),
('4015', 60000.00, '2023-06-15', '0004', '0022', 'aprobado', '2023-11-08 23:52:53', '2023-11-08 23:52:53'),
('4016', 250000.00, '2023-06-15', '0004', '0022', 'aprobado', '2023-11-08 23:52:53', '2023-11-08 23:52:53'),
('4020', 150000.00, '2023-04-05', '0001', '0021', 'aprobado', '2023-11-08 23:52:53', '2023-11-08 23:52:53'),
('4101', 450000.00, '2023-06-15', '0003', '0025', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('4102', 750000.00, '2023-06-15', '0001', '0025', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('4103', 50000.00, '2023-06-15', '0006', '0025', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('4104', 200000.00, '2023-06-15', '0001', '0025', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('4105', 300000.00, '2023-05-05', '0004', '0024', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('4106', 600000.00, '2023-05-05', '0005', '0024', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('4107', 40000.00, '2023-05-05', '0003', '0024', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('4108', 180000.00, '2023-05-05', '0004', '0024', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('4109', 120000.00, '2023-04-25', '0002', '0023', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('4110', 600000.00, '2023-04-25', '0006', '0023', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('4111', 30000.00, '2023-04-25', '0004', '0023', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('4112', 200000.00, '2023-04-25', '0001', '0023', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('4113', 400000.00, '2023-07-15', '0003', '0022', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('4114', 800000.00, '2023-07-15', '0001', '0022', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('4115', 60000.00, '2023-07-15', '0006', '0022', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('4116', 250000.00, '2023-07-15', '0004', '0022', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('4120', 150000.00, '2023-05-05', '0005', '0021', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('5001', 450000.00, '2023-04-15', '0003', '0025', 'aprobado', '2023-11-08 23:53:08', '2023-11-08 23:53:08'),
('5002', 750000.00, '2023-04-15', '0001', '0025', 'aprobado', '2023-11-08 23:53:08', '2023-11-08 23:53:08'),
('5003', 50000.00, '2023-04-15', '0001', '0025', 'aprobado', '2023-11-08 23:53:08', '2023-11-08 23:53:08'),
('5004', 200000.00, '2023-04-15', '0003', '0025', 'aprobado', '2023-11-08 23:53:08', '2023-11-08 23:53:08'),
('5005', 300000.00, '2023-03-05', '0003', '0024', 'aprobado', '2023-11-08 23:53:08', '2023-11-08 23:53:08'),
('5006', 600000.00, '2023-03-05', '0001', '0024', 'aprobado', '2023-11-08 23:53:08', '2023-11-08 23:53:08'),
('5007', 40000.00, '2023-03-05', '0006', '0024', 'aprobado', '2023-11-08 23:53:08', '2023-11-08 23:53:08'),
('5008', 180000.00, '2023-03-05', '0002', '0024', 'aprobado', '2023-11-08 23:53:08', '2023-11-08 23:53:08'),
('5009', 120000.00, '2023-02-25', '0003', '0023', 'aprobado', '2023-11-08 23:53:08', '2023-11-08 23:53:08'),
('5010', 600000.00, '2023-02-25', '0005', '0023', 'aprobado', '2023-11-08 23:53:08', '2023-11-08 23:53:08'),
('5011', 30000.00, '2023-02-25', '0002', '0023', 'aprobado', '2023-11-08 23:53:08', '2023-11-08 23:53:08'),
('5012', 200000.00, '2023-02-25', '0004', '0023', 'aprobado', '2023-11-08 23:53:08', '2023-11-08 23:53:08'),
('5013', 400000.00, '2023-05-15', '0001', '0022', 'aprobado', '2023-11-08 23:53:08', '2023-11-08 23:53:08'),
('5014', 800000.00, '2023-05-15', '0004', '0022', 'aprobado', '2023-11-08 23:53:08', '2023-11-08 23:53:08'),
('5015', 60000.00, '2023-05-15', '0002', '0022', 'aprobado', '2023-11-08 23:53:08', '2023-11-08 23:53:08'),
('5016', 250000.00, '2023-05-15', '0005', '0022', 'aprobado', '2023-11-08 23:53:08', '2023-11-08 23:53:08'),
('5017', 80000.00, '2023-09-05', '0002', '0021', 'aprobado', '2023-11-08 23:53:08', '2023-11-08 23:53:08'),
('5018', 400000.00, '2023-09-05', '0005', '0021', 'aprobado', '2023-11-08 23:53:08', '2023-11-08 23:53:08'),
('5019', 25000.00, '2023-09-05', '0005', '0021', 'aprobado', '2023-11-08 23:53:08', '2023-11-08 23:53:08'),
('5020', 150000.00, '2023-03-05', '0003', '0021', 'aprobado', '2023-11-08 23:53:08', '2023-11-08 23:53:08'),
('5029', 60000.00, '2023-08-25', '0005', '0018', 'aprobado', '2023-11-08 23:53:08', '2023-11-08 23:53:08'),
('5030', 300000.00, '2023-08-25', '0001', '0018', 'aprobado', '2023-11-08 23:53:08', '2023-11-08 23:53:08'),
('5031', 20000.00, '2023-08-25', '0004', '0018', 'aprobado', '2023-11-08 23:53:08', '2023-11-08 23:53:08'),
('5032', 120000.00, '2023-08-25', '0002', '0018', 'aprobado', '2023-11-08 23:53:08', '2023-11-08 23:53:08'),
('5101', 450000.00, '2023-05-15', '0001', '0025', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('5102', 750000.00, '2023-05-15', '0006', '0025', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('5103', 50000.00, '2023-05-15', '0003', '0025', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('5104', 200000.00, '2023-05-15', '0001', '0025', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('5105', 300000.00, '2023-04-05', '0002', '0024', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('5106', 600000.00, '2023-04-05', '0006', '0024', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('5107', 40000.00, '2023-04-05', '0001', '0024', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('5108', 180000.00, '2023-04-05', '0005', '0024', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('5109', 120000.00, '2023-03-25', '0006', '0023', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('5110', 600000.00, '2023-03-25', '0001', '0023', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('5111', 30000.00, '2023-03-25', '0006', '0023', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('5112', 200000.00, '2023-03-25', '0004', '0023', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('5113', 400000.00, '2023-06-15', '0002', '0022', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('5114', 800000.00, '2023-06-15', '0005', '0022', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('5115', 60000.00, '2023-06-15', '0003', '0022', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('5116', 250000.00, '2023-06-15', '0005', '0022', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('5120', 150000.00, '2023-04-05', '0003', '0021', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('6001', 450000.00, '2023-05-15', '0004', '0025', 'aprobado', '2023-11-08 23:53:08', '2023-11-08 23:53:08'),
('6002', 750000.00, '2023-05-15', '0005', '0025', 'aprobado', '2023-11-08 23:53:08', '2023-11-08 23:53:08'),
('6003', 50000.00, '2023-05-15', '0003', '0025', 'aprobado', '2023-11-08 23:53:08', '2023-11-08 23:53:08'),
('6004', 200000.00, '2023-05-15', '0002', '0025', 'aprobado', '2023-11-08 23:53:08', '2023-11-08 23:53:08'),
('6005', 300000.00, '2023-04-05', '0006', '0024', 'aprobado', '2023-11-08 23:53:08', '2023-11-08 23:53:08'),
('6006', 600000.00, '2023-04-05', '0001', '0024', 'aprobado', '2023-11-08 23:53:08', '2023-11-08 23:53:08'),
('6007', 40000.00, '2023-04-05', '0006', '0024', 'aprobado', '2023-11-08 23:53:08', '2023-11-08 23:53:08'),
('6008', 180000.00, '2023-04-05', '0003', '0024', 'aprobado', '2023-11-08 23:53:08', '2023-11-08 23:53:08'),
('6009', 120000.00, '2023-03-25', '0002', '0023', 'aprobado', '2023-11-08 23:53:08', '2023-11-08 23:53:08'),
('6010', 600000.00, '2023-03-25', '0002', '0023', 'aprobado', '2023-11-08 23:53:08', '2023-11-08 23:53:08'),
('6011', 30000.00, '2023-03-25', '0001', '0023', 'aprobado', '2023-11-08 23:53:08', '2023-11-08 23:53:08'),
('6012', 200000.00, '2023-03-25', '0003', '0023', 'aprobado', '2023-11-08 23:53:08', '2023-11-08 23:53:08'),
('6013', 400000.00, '2023-06-15', '0006', '0022', 'aprobado', '2023-11-08 23:53:08', '2023-11-08 23:53:08'),
('6014', 800000.00, '2023-06-15', '0004', '0022', 'aprobado', '2023-11-08 23:53:08', '2023-11-08 23:53:08'),
('6015', 60000.00, '2023-06-15', '0002', '0022', 'aprobado', '2023-11-08 23:53:08', '2023-11-08 23:53:08'),
('6016', 250000.00, '2023-06-15', '0006', '0022', 'aprobado', '2023-11-08 23:53:08', '2023-11-08 23:53:08'),
('6020', 150000.00, '2023-04-05', '0005', '0021', 'aprobado', '2023-11-08 23:53:08', '2023-11-08 23:53:08'),
('6101', 450000.00, '2023-06-15', '0003', '0025', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('6102', 750000.00, '2023-06-15', '0001', '0025', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('6103', 50000.00, '2023-06-15', '0006', '0025', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('6104', 200000.00, '2023-06-15', '0002', '0025', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('6105', 300000.00, '2023-05-05', '0006', '0024', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('6106', 600000.00, '2023-05-05', '0005', '0024', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('6107', 40000.00, '2023-05-05', '0001', '0024', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('6108', 180000.00, '2023-05-05', '0006', '0024', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('6109', 120000.00, '2023-04-25', '0001', '0023', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('6110', 600000.00, '2023-04-25', '0003', '0023', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('6111', 30000.00, '2023-04-25', '0004', '0023', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('6112', 200000.00, '2023-04-25', '0001', '0023', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('6113', 400000.00, '2023-07-15', '0003', '0022', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('6114', 800000.00, '2023-07-15', '0001', '0022', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('6115', 60000.00, '2023-07-15', '0006', '0022', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('6116', 250000.00, '2023-07-15', '0002', '0022', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('6120', 150000.00, '2023-05-05', '0001', '0021', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('7001', 450000.00, '2023-05-15', '0003', '0025', 'aprobado', '2023-11-08 23:53:08', '2023-11-08 23:53:08'),
('7002', 750000.00, '2023-05-15', '0005', '0025', 'aprobado', '2023-11-08 23:53:08', '2023-11-08 23:53:08'),
('7003', 50000.00, '2023-05-15', '0006', '0025', 'aprobado', '2023-11-08 23:53:08', '2023-11-08 23:53:08'),
('7004', 200000.00, '2023-05-15', '0002', '0025', 'aprobado', '2023-11-08 23:53:08', '2023-11-08 23:53:08'),
('7005', 300000.00, '2023-04-05', '0005', '0024', 'aprobado', '2023-11-08 23:53:08', '2023-11-08 23:53:08'),
('7006', 600000.00, '2023-04-05', '0001', '0024', 'aprobado', '2023-11-08 23:53:08', '2023-11-08 23:53:08'),
('7007', 40000.00, '2023-04-05', '0003', '0024', 'aprobado', '2023-11-08 23:53:08', '2023-11-08 23:53:08'),
('7008', 180000.00, '2023-04-05', '0006', '0024', 'aprobado', '2023-11-08 23:53:08', '2023-11-08 23:53:08'),
('7009', 120000.00, '2023-03-25', '0002', '0023', 'aprobado', '2023-11-08 23:53:08', '2023-11-08 23:53:08'),
('7010', 600000.00, '2023-03-25', '0001', '0023', 'aprobado', '2023-11-08 23:53:08', '2023-11-08 23:53:08'),
('7015', 60000.00, '2023-06-15', '0001', '0022', 'aprobado', '2023-11-08 23:53:08', '2023-11-08 23:53:08'),
('7016', 250000.00, '2023-06-15', '0005', '0022', 'aprobado', '2023-11-08 23:53:08', '2023-11-08 23:53:08'),
('7020', 150000.00, '2023-04-05', '0006', '0021', 'aprobado', '2023-11-08 23:53:08', '2023-11-08 23:53:08'),
('7101', 450000.00, '2023-06-15', '0001', '0025', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('7102', 750000.00, '2023-06-15', '0001', '0025', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('7103', 50000.00, '2023-06-15', '0005', '0025', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('7104', 200000.00, '2023-06-15', '0006', '0025', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('7105', 300000.00, '2023-05-05', '0004', '0024', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('7106', 600000.00, '2023-05-05', '0002', '0024', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('7107', 40000.00, '2023-05-05', '0004', '0024', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('7108', 180000.00, '2023-05-05', '0005', '0024', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('7109', 120000.00, '2023-04-25', '0003', '0023', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('7110', 600000.00, '2023-04-25', '0005', '0023', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('7111', 30000.00, '2023-04-25', '0005', '0023', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('7112', 200000.00, '2023-04-25', '0002', '0023', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('7113', 400000.00, '2023-07-15', '0001', '0022', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('7114', 800000.00, '2023-07-15', '0002', '0022', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('7115', 60000.00, '2023-07-15', '0004', '0022', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('7116', 250000.00, '2023-07-15', '0005', '0022', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('7120', 150000.00, '2023-05-05', '0006', '0021', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('8001', 450000.00, '2023-06-15', '0003', '0025', 'aprobado', '2023-11-08 23:53:08', '2023-11-08 23:53:08'),
('8002', 750000.00, '2023-06-15', '0005', '0025', 'aprobado', '2023-11-08 23:53:08', '2023-11-08 23:53:08'),
('8003', 50000.00, '2023-06-15', '0003', '0025', 'aprobado', '2023-11-08 23:53:08', '2023-11-08 23:53:08'),
('8004', 200000.00, '2023-06-15', '0004', '0025', 'aprobado', '2023-11-08 23:53:08', '2023-11-08 23:53:08'),
('8005', 300000.00, '2023-05-05', '0006', '0024', 'aprobado', '2023-11-08 23:53:08', '2023-11-08 23:53:08'),
('8006', 600000.00, '2023-05-05', '0004', '0024', 'aprobado', '2023-11-08 23:53:08', '2023-11-08 23:53:08'),
('8007', 40000.00, '2023-05-05', '0001', '0024', 'aprobado', '2023-11-08 23:53:08', '2023-11-08 23:53:08'),
('8008', 180000.00, '2023-05-05', '0004', '0024', 'aprobado', '2023-11-08 23:53:08', '2023-11-08 23:53:08'),
('8009', 120000.00, '2023-04-25', '0004', '0023', 'aprobado', '2023-11-08 23:53:08', '2023-11-08 23:53:08'),
('8010', 600000.00, '2023-04-25', '0005', '0023', 'aprobado', '2023-11-08 23:53:08', '2023-11-08 23:53:08'),
('8011', 30000.00, '2023-04-25', '0005', '0023', 'aprobado', '2023-11-08 23:53:08', '2023-11-08 23:53:08'),
('8012', 200000.00, '2023-04-25', '0006', '0023', 'aprobado', '2023-11-08 23:53:08', '2023-11-08 23:53:08'),
('8013', 400000.00, '2023-07-15', '0003', '0022', 'aprobado', '2023-11-08 23:53:08', '2023-11-08 23:53:08'),
('8014', 800000.00, '2023-07-15', '0003', '0022', 'aprobado', '2023-11-08 23:53:08', '2023-11-08 23:53:08'),
('8015', 60000.00, '2023-07-15', '0005', '0022', 'aprobado', '2023-11-08 23:53:08', '2023-11-08 23:53:08'),
('8016', 250000.00, '2023-07-15', '0005', '0022', 'aprobado', '2023-11-08 23:53:08', '2023-11-08 23:53:08'),
('8020', 150000.00, '2023-05-05', '0001', '0021', 'aprobado', '2023-11-08 23:53:08', '2023-11-08 23:53:08'),
('8101', 450000.00, '2023-07-15', '0001', '0025', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('8102', 750000.00, '2023-07-15', '0001', '0025', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('8103', 50000.00, '2023-07-15', '0001', '0025', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('8104', 200000.00, '2023-07-15', '0001', '0025', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('8105', 300000.00, '2023-06-05', '0006', '0024', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('8106', 600000.00, '2023-06-05', '0002', '0024', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('8107', 40000.00, '2023-06-05', '0002', '0024', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('8108', 180000.00, '2023-06-05', '0003', '0024', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('8109', 120000.00, '2023-05-25', '0003', '0023', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('8110', 600000.00, '2023-05-25', '0005', '0023', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('8111', 30000.00, '2023-05-25', '0002', '0023', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('8112', 200000.00, '2023-05-25', '0003', '0023', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('8113', 400000.00, '2023-08-15', '0001', '0022', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('8114', 800000.00, '2023-08-15', '0004', '0022', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('8115', 60000.00, '2023-08-15', '0004', '0022', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('8116', 250000.00, '2023-08-15', '0001', '0022', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17'),
('8120', 150000.00, '2023-06-05', '0002', '0021', 'aprobado', '2023-11-09 00:20:17', '2023-11-09 00:20:17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_06_25_220655_create_permission_tables', 1),
(7, '2023_06_26_031531_create_role_user_table', 1),
(8, '2023_06_26_194406_conductores', 1),
(9, '2023_06_26_210504_sistemas', 1),
(10, '2023_06_26_213449_componentes', 1),
(11, '2023_06_26_230756_clientes', 1),
(12, '2023_06_26_234526_camiones', 1),
(13, '2023_06_27_012919_almacenes', 1),
(14, '2023_06_27_140937_categorias_gastos', 1),
(15, '2023_06_27_143906_rutas', 1),
(16, '2023_06_27_191134_talleres', 1),
(17, '2023_06_28_113510_fallas', 1),
(18, '2023_06_28_122529_documentos_camiones', 1),
(19, '2023_07_23_140409_actividades', 1),
(20, '2023_07_23_140526_servicios', 1),
(21, '2023_07_23_181944_empresas', 1),
(22, '2023_07_23_182540_viajes', 1),
(23, '2023_07_23_183004_gastos', 1),
(24, '2023_08_14_011756_trazabilidad', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(4, 'App\\Models\\User', 2),
(4, 'App\\Models\\User', 3),
(4, 'App\\Models\\User', 4),
(4, 'App\\Models\\User', 5),
(4, 'App\\Models\\User', 6),
(4, 'App\\Models\\User', 7),
(4, 'App\\Models\\User', 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) NOT NULL,
  `token` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(191) NOT NULL,
  `token` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `description` varchar(191) NOT NULL,
  `guard_name` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `description`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'home', 'Ver dashboard', 'web', '2023-09-24 22:38:57', '2023-09-24 22:38:57'),
(2, 'users.index', 'Ver listado de usuarios', 'web', '2023-09-24 22:38:57', '2023-09-24 22:38:57'),
(3, 'users.edit', 'Asignar un rol', 'web', '2023-09-24 22:38:57', '2023-09-24 22:38:57'),
(4, 'users.destroy', 'Eliminar usuario', 'web', '2023-09-24 22:38:57', '2023-09-24 22:38:57'),
(5, 'roles.index', 'Ver listado de roles', 'web', '2023-09-24 22:38:57', '2023-09-24 22:38:57'),
(6, 'roles.create', 'Registrar nuevo rol', 'web', '2023-09-24 22:38:57', '2023-09-24 22:38:57'),
(7, 'roles.show', 'Ver rol', 'web', '2023-09-24 22:38:57', '2023-09-24 22:38:57'),
(8, 'roles.edit', 'Editar rol', 'web', '2023-09-24 22:38:57', '2023-09-24 22:38:57'),
(9, 'roles.destroy', 'Eliminar rol', 'web', '2023-09-24 22:38:57', '2023-09-24 22:38:57'),
(10, 'viajes.index', 'Ver listado de viajes', 'web', '2023-09-24 22:38:57', '2023-09-24 22:38:57'),
(11, 'viajes.create', 'Registrar nuevo viaje', 'web', '2023-09-24 22:38:57', '2023-09-24 22:38:57'),
(12, 'viajes.show', 'Ver viaje', 'web', '2023-09-24 22:38:57', '2023-09-24 22:38:57'),
(13, 'viajes.edit', 'Editar viaje', 'web', '2023-09-24 22:38:57', '2023-09-24 22:38:57'),
(14, 'viajes.destroy', 'Eliminar viaje', 'web', '2023-09-24 22:38:57', '2023-09-24 22:38:57'),
(15, 'empresas.index', 'Ver listado de empresas', 'web', '2023-09-24 22:38:57', '2023-09-24 22:38:57'),
(16, 'empresas.create', 'Registrar nueva empresa', 'web', '2023-09-24 22:38:57', '2023-09-24 22:38:57'),
(17, 'empresas.show', 'Ver empresa', 'web', '2023-09-24 22:38:57', '2023-09-24 22:38:57'),
(18, 'empresas.edit', 'Editar empresa', 'web', '2023-09-24 22:38:57', '2023-09-24 22:38:57'),
(19, 'empresas.destroy', 'Eliminar empresa', 'web', '2023-09-24 22:38:57', '2023-09-24 22:38:57'),
(20, 'conductores.index', 'Ver listado de conductores', 'web', '2023-09-24 22:38:57', '2023-09-24 22:38:57'),
(21, 'conductores.create', 'Registrar nuevo conductor', 'web', '2023-09-24 22:38:57', '2023-09-24 22:38:57'),
(22, 'conductores.show', 'Ver conductor', 'web', '2023-09-24 22:38:57', '2023-09-24 22:38:57'),
(23, 'conductores.edit', 'Editar conductor', 'web', '2023-09-24 22:38:57', '2023-09-24 22:38:57'),
(24, 'conductores.destroy', 'Eliminar conductor', 'web', '2023-09-24 22:38:57', '2023-09-24 22:38:57'),
(25, 'sistemas.index', 'Ver listado de sistemas', 'web', '2023-09-24 22:38:57', '2023-09-24 22:38:57'),
(26, 'sistemas.create', 'Registrar nuevo sistema', 'web', '2023-09-24 22:38:57', '2023-09-24 22:38:57'),
(27, 'sistemas.show', 'Ver sistema', 'web', '2023-09-24 22:38:57', '2023-09-24 22:38:57'),
(28, 'sistemas.edit', 'Editar sistema', 'web', '2023-09-24 22:38:57', '2023-09-24 22:38:57'),
(29, 'sistemas.destroy', 'Elimina sistema', 'web', '2023-09-24 22:38:57', '2023-09-24 22:38:57'),
(30, 'componentes.index', 'Ver listado de componentes', 'web', '2023-09-24 22:38:57', '2023-09-24 22:38:57'),
(31, 'componentes.create', 'Registrar nuevo componente', 'web', '2023-09-24 22:38:57', '2023-09-24 22:38:57'),
(32, 'componentes.show', 'Ver componente', 'web', '2023-09-24 22:38:57', '2023-09-24 22:38:57'),
(33, 'componentes.edit', 'Editar componente', 'web', '2023-09-24 22:38:57', '2023-09-24 22:38:57'),
(34, 'componentes.destroy', 'Eliminar componente', 'web', '2023-09-24 22:38:57', '2023-09-24 22:38:57'),
(35, 'clientes.index', 'Ver listado de clientes', 'web', '2023-09-24 22:38:58', '2023-09-24 22:38:58'),
(36, 'clientes.create', 'Registrar nuevo cliente', 'web', '2023-09-24 22:38:58', '2023-09-24 22:38:58'),
(37, 'clientes.show', 'Ver cliente', 'web', '2023-09-24 22:38:58', '2023-09-24 22:38:58'),
(38, 'clientes.edit', 'Editar cliente', 'web', '2023-09-24 22:38:58', '2023-09-24 22:38:58'),
(39, 'clientes.destroy', 'Eliminar cliente', 'web', '2023-09-24 22:38:58', '2023-09-24 22:38:58'),
(40, 'camiones.index', 'Ver listado de camiones', 'web', '2023-09-24 22:38:58', '2023-09-24 22:38:58'),
(41, 'camiones.create', 'Registrar nuevo camion', 'web', '2023-09-24 22:38:58', '2023-09-24 22:38:58'),
(42, 'camiones.show', 'Ver camion', 'web', '2023-09-24 22:38:58', '2023-09-24 22:38:58'),
(43, 'camiones.edit', 'Editar camion', 'web', '2023-09-24 22:38:58', '2023-09-24 22:38:58'),
(44, 'camiones.destroy', 'Eliminar camion', 'web', '2023-09-24 22:38:58', '2023-09-24 22:38:58'),
(45, 'actividades.index', 'Ver listado de actividades', 'web', '2023-09-24 22:38:58', '2023-09-24 22:38:58'),
(46, 'actividades.create', 'Registrar nueva actividad', 'web', '2023-09-24 22:38:58', '2023-09-24 22:38:58'),
(47, 'actividades.show', 'Ver actividad', 'web', '2023-09-24 22:38:58', '2023-09-24 22:38:58'),
(48, 'actividades.edit', 'Editar actividad', 'web', '2023-09-24 22:38:58', '2023-09-24 22:38:58'),
(49, 'actividades.destroy', 'Eliminar actividad', 'web', '2023-09-24 22:38:58', '2023-09-24 22:38:58'),
(50, 'almacenes.index', 'Ver listado de almacenes', 'web', '2023-09-24 22:38:58', '2023-09-24 22:38:58'),
(51, 'almacenes.create', 'Registrar nuevo almacen', 'web', '2023-09-24 22:38:58', '2023-09-24 22:38:58'),
(52, 'almacenes.show', 'Ver almacen', 'web', '2023-09-24 22:38:58', '2023-09-24 22:38:58'),
(53, 'almacenes.edit', 'Editar almacen', 'web', '2023-09-24 22:38:58', '2023-09-24 22:38:58'),
(54, 'almacenes.destroy', 'Eliminar almacen', 'web', '2023-09-24 22:38:58', '2023-09-24 22:38:58'),
(55, 'categorias-gastos.index', 'Ver listado de categorias de gastos', 'web', '2023-09-24 22:38:58', '2023-09-24 22:38:58'),
(56, 'categorias-gastos.create', 'Registrar nueva categoria de gastos', 'web', '2023-09-24 22:38:58', '2023-09-24 22:38:58'),
(57, 'categorias-gastos.show', 'Ver categoria de gastos', 'web', '2023-09-24 22:38:58', '2023-09-24 22:38:58'),
(58, 'categorias-gastos.edit', 'Editar categoria de gastos', 'web', '2023-09-24 22:38:58', '2023-09-24 22:38:58'),
(59, 'categorias-gastos.destroy', 'Eliminar categoria de gastos', 'web', '2023-09-24 22:38:58', '2023-09-24 22:38:58'),
(60, 'rutas.index', 'Ver listado de rutas', 'web', '2023-09-24 22:38:58', '2023-09-24 22:38:58'),
(61, 'rutas.create', 'Registrar nueva ruta', 'web', '2023-09-24 22:38:58', '2023-09-24 22:38:58'),
(62, 'rutas.show', 'Ver ruta', 'web', '2023-09-24 22:38:58', '2023-09-24 22:38:58'),
(63, 'rutas.edit', 'Editar ruta', 'web', '2023-09-24 22:38:58', '2023-09-24 22:38:58'),
(64, 'rutas.destroy', 'Eliminar ruta', 'web', '2023-09-24 22:38:58', '2023-09-24 22:38:58'),
(65, 'gastos.index', 'Ver listado de gastos', 'web', '2023-09-24 22:38:58', '2023-09-24 22:38:58'),
(66, 'gastos.create', 'Registrar nuevo gasto', 'web', '2023-09-24 22:38:58', '2023-09-24 22:38:58'),
(67, 'gastos.show', 'Ver gasto', 'web', '2023-09-24 22:38:58', '2023-09-24 22:38:58'),
(68, 'gastos.edit', 'Editar gasto', 'web', '2023-09-24 22:38:58', '2023-09-24 22:38:58'),
(69, 'gastos.destroy', 'Eliminar gasto', 'web', '2023-09-24 22:38:58', '2023-09-24 22:38:58'),
(70, 'talleres.index', 'Ver listado de talleres', 'web', '2023-09-24 22:38:59', '2023-09-24 22:38:59'),
(71, 'talleres.create', 'Registrar nuevo taller', 'web', '2023-09-24 22:38:59', '2023-09-24 22:38:59'),
(72, 'talleres.show', 'Ver taller', 'web', '2023-09-24 22:38:59', '2023-09-24 22:38:59'),
(73, 'talleres.edit', 'Editar taller', 'web', '2023-09-24 22:38:59', '2023-09-24 22:38:59'),
(74, 'talleres.destroy', 'Eliminar taller', 'web', '2023-09-24 22:38:59', '2023-09-24 22:38:59'),
(75, 'servicios.index', 'Ver listado de servicios', 'web', '2023-09-24 22:38:59', '2023-09-24 22:38:59'),
(76, 'servicios.create', 'Registrar nuevo servicio', 'web', '2023-09-24 22:38:59', '2023-09-24 22:38:59'),
(77, 'servicios.show', 'Ver servicio', 'web', '2023-09-24 22:38:59', '2023-09-24 22:38:59'),
(78, 'servicios.edit', 'Editar servicio', 'web', '2023-09-24 22:38:59', '2023-09-24 22:38:59'),
(79, 'servicios.destroy', 'Eliminar servicio', 'web', '2023-09-24 22:38:59', '2023-09-24 22:38:59'),
(80, 'fallas.index', 'Ver listado de fallas', 'web', '2023-09-24 22:38:59', '2023-09-24 22:38:59'),
(81, 'fallas.create', 'Registrar nueva falla', 'web', '2023-09-24 22:38:59', '2023-09-24 22:38:59'),
(82, 'fallas.show', 'Ver falla', 'web', '2023-09-24 22:38:59', '2023-09-24 22:38:59'),
(83, 'fallas.edit', 'Editar falla', 'web', '2023-09-24 22:38:59', '2023-09-24 22:38:59'),
(84, 'fallas.destroy', 'Eliminar falla', 'web', '2023-09-24 22:38:59', '2023-09-24 22:38:59'),
(85, 'documentos-camiones.index', 'Ver listado de documentos de camiones', 'web', '2023-09-24 22:38:59', '2023-09-24 22:38:59'),
(86, 'documentos-camiones.create', 'Registrar nuevo documento de camion', 'web', '2023-09-24 22:38:59', '2023-09-24 22:38:59'),
(87, 'documentos-camiones.show', 'Ver documento de camion', 'web', '2023-09-24 22:38:59', '2023-09-24 22:38:59'),
(88, 'documentos-camiones.edit', 'Editar documento de camion', 'web', '2023-09-24 22:38:59', '2023-09-24 22:38:59'),
(89, 'documentos-camiones.destroy', 'Eliminar documento de camion', 'web', '2023-09-24 22:38:59', '2023-09-24 22:38:59'),
(90, 'consultas.index', 'Ver consultas', 'web', '2023-09-24 22:38:59', '2023-09-24 22:38:59'),
(91, 'reportes.index', 'Generar reportes', 'web', '2023-09-24 22:38:59', '2023-09-24 22:38:59');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `guard_name` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Administrador', 'web', '2023-09-24 22:38:57', '2023-09-24 22:38:57'),
(2, 'Coordinador', 'web', '2023-09-24 22:38:57', '2023-09-24 22:38:57'),
(3, 'Operario', 'web', '2023-09-24 22:38:57', '2023-09-24 22:38:57'),
(4, 'Conductor', 'web', '2023-09-24 22:38:57', '2023-09-24 22:38:57');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(2, 1),
(2, 2),
(3, 1),
(3, 2),
(4, 1),
(4, 2),
(5, 1),
(5, 2),
(6, 1),
(6, 2),
(7, 1),
(7, 2),
(8, 1),
(8, 2),
(9, 1),
(9, 2),
(10, 1),
(10, 2),
(11, 1),
(11, 2),
(12, 1),
(12, 2),
(13, 1),
(13, 2),
(14, 1),
(14, 2),
(15, 1),
(15, 2),
(15, 3),
(16, 1),
(16, 2),
(16, 3),
(17, 1),
(17, 2),
(17, 3),
(18, 1),
(18, 2),
(18, 3),
(19, 1),
(19, 2),
(19, 3),
(20, 1),
(20, 2),
(20, 3),
(21, 1),
(21, 2),
(21, 3),
(22, 1),
(22, 2),
(22, 3),
(23, 1),
(23, 2),
(23, 3),
(24, 1),
(24, 2),
(24, 3),
(25, 1),
(25, 2),
(25, 3),
(26, 1),
(26, 2),
(26, 3),
(27, 1),
(27, 2),
(27, 3),
(28, 1),
(28, 2),
(28, 3),
(29, 1),
(29, 2),
(29, 3),
(30, 1),
(30, 2),
(30, 3),
(31, 1),
(31, 2),
(31, 3),
(32, 1),
(32, 2),
(32, 3),
(33, 1),
(33, 2),
(33, 3),
(34, 1),
(34, 2),
(34, 3),
(35, 1),
(35, 2),
(35, 3),
(36, 1),
(36, 2),
(36, 3),
(37, 1),
(37, 2),
(37, 3),
(38, 1),
(38, 2),
(38, 3),
(39, 1),
(39, 2),
(39, 3),
(40, 1),
(40, 2),
(40, 3),
(41, 1),
(41, 2),
(41, 3),
(42, 1),
(42, 2),
(42, 3),
(43, 1),
(43, 2),
(43, 3),
(44, 1),
(44, 2),
(44, 3),
(45, 1),
(45, 2),
(45, 3),
(46, 1),
(46, 2),
(46, 3),
(47, 1),
(47, 2),
(47, 3),
(48, 1),
(48, 2),
(48, 3),
(49, 1),
(49, 2),
(49, 3),
(50, 1),
(50, 2),
(50, 3),
(51, 1),
(51, 2),
(51, 3),
(52, 1),
(52, 2),
(52, 3),
(53, 1),
(53, 2),
(53, 3),
(54, 1),
(54, 2),
(54, 3),
(55, 1),
(55, 2),
(55, 3),
(56, 1),
(56, 2),
(56, 3),
(57, 1),
(57, 2),
(57, 3),
(58, 1),
(58, 2),
(58, 3),
(59, 1),
(59, 2),
(59, 3),
(60, 1),
(60, 2),
(60, 3),
(61, 1),
(61, 2),
(61, 3),
(62, 1),
(62, 2),
(62, 3),
(63, 1),
(63, 2),
(63, 3),
(64, 1),
(64, 2),
(64, 3),
(65, 1),
(65, 2),
(65, 3),
(65, 4),
(66, 1),
(66, 2),
(66, 3),
(66, 4),
(67, 1),
(67, 2),
(67, 3),
(67, 4),
(68, 1),
(68, 2),
(68, 3),
(69, 1),
(69, 2),
(69, 3),
(70, 1),
(70, 2),
(70, 3),
(70, 4),
(71, 1),
(71, 2),
(71, 3),
(71, 4),
(72, 1),
(72, 2),
(72, 3),
(72, 4),
(73, 1),
(73, 2),
(73, 3),
(74, 1),
(74, 2),
(74, 3),
(75, 1),
(75, 2),
(75, 3),
(75, 4),
(76, 1),
(76, 2),
(76, 3),
(76, 4),
(77, 1),
(77, 2),
(77, 3),
(77, 4),
(78, 1),
(78, 2),
(78, 3),
(79, 1),
(79, 2),
(79, 3),
(80, 1),
(80, 2),
(80, 3),
(80, 4),
(81, 1),
(81, 2),
(81, 3),
(81, 4),
(82, 1),
(82, 2),
(82, 3),
(82, 4),
(83, 1),
(83, 2),
(83, 3),
(84, 1),
(84, 2),
(84, 3),
(85, 1),
(85, 2),
(85, 3),
(86, 1),
(86, 2),
(86, 3),
(87, 1),
(87, 2),
(87, 3),
(88, 1),
(88, 2),
(88, 3),
(89, 1),
(89, 2),
(89, 3),
(90, 1),
(90, 2),
(91, 1),
(91, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role_user`
--

CREATE TABLE `role_user` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rutas`
--

CREATE TABLE `rutas` (
  `cod_rut` varchar(4) NOT NULL,
  `nom_rut` varchar(40) NOT NULL,
  `ori_rut` varchar(40) NOT NULL,
  `des_rut` varchar(40) NOT NULL,
  `dis_rut` varchar(15) NOT NULL,
  `dur_rut` varchar(40) NOT NULL,
  `est_rut` varchar(25) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `rutas`
--

INSERT INTO `rutas` (`cod_rut`, `nom_rut`, `ori_rut`, `des_rut`, `dis_rut`, `dur_rut`, `est_rut`, `created_at`, `updated_at`) VALUES
('0011', 'Bucaramanga - Cucuta', 'Bucaramanga', 'Cucuta', '200.42', '5 hora(s) 29 minuto(s)', 'mala', '2023-09-20 11:31:16', '2023-09-20 11:31:16'),
('0012', 'popayan - tunja', 'popayan', 'Tunja', '731.72', '13 hora(s) 23 minuto(s)', 'regular', '2023-09-20 11:31:47', '2023-09-20 11:31:47'),
('0013', 'Medellín - pereira', 'Medellín', 'Pereira', '212.22', '4 hora(s) 51 minuto(s)', 'regular', '2023-09-20 11:32:26', '2023-09-20 11:32:26'),
('0014', 'Rioacha - Bog', 'Rioacha', 'Bogotá', '1052.25', '18 hora(s) 1 minuto(s)', 'mala', '2023-09-20 11:33:35', '2023-09-20 11:33:35'),
('0015', 'Cúcuta - bogota', 'Cúcuta', 'bogota', '568.1', '12 hora(s) 1 minuto(s)', 'mala', '2023-09-20 11:34:39', '2023-09-20 11:34:39'),
('0016', 'villavicencio - bogota', 'villavicencio', 'bogota', '121.91', '3 hora(s) 11 minuto(s)', 'regular', '2023-09-20 11:35:28', '2023-09-20 11:35:28'),
('0017', 'Acacías - fortul', 'Acacías', 'fortul', '511.81', '9 hora(s) 2 minuto(s)', 'mala', '2023-09-20 11:35:50', '2023-09-20 11:35:50'),
('0018', 'ibague - fortul', 'ibague', 'fortul', '750.66', '14 hora(s) 34 minuto(s)', 'mala', '2023-09-20 11:36:21', '2023-09-20 11:36:21'),
('0019', 'Duitama - cucuta', 'Duitama', 'cucuta', '378.05', '9 hora(s) 16 minuto(s)', 'regular', '2023-09-20 11:36:51', '2023-09-20 11:36:51'),
('0030', 'Montería - villavicencio', 'Montería', 'Villavicencio', '871.69', '18 hora(s) 11 minuto(s)', 'Regular', '2023-09-20 17:12:27', '2023-09-20 17:12:27'),
('0104', 'Tuluá - PASTO', 'Tuluá', 'Pasto', '464.84', '9 hora(s) 20 minuto(s)', 'MALA', '2023-09-29 02:41:10', '2023-09-29 02:41:10'),
('1001', 'Bogota - Guataquí', 'Bogota', 'Guataquí', '144.66', '3 hora(s) 38 minuto(s)', 'Buena', '2023-08-23 05:53:51', '2023-09-08 20:44:02'),
('1002', 'Bogota - Cartago', 'Bogota', 'Cartago', '327', '7 hora(s) 32 minuto(s)', 'Buena', '2023-08-23 05:56:16', '2023-09-08 20:44:10'),
('1003', 'Bogotá - barranquilla', 'Bogotá', 'Barranquilla', '1000.8', '16 hora(s) 58 minuto(s)', 'Mala', '2023-08-23 05:56:57', '2023-09-08 20:45:26'),
('1004', 'Bogota - Medellín', 'Bogota', 'Medellín', '415', '8 hora(s) 30 minuto(s)', 'Regular', '2023-08-23 05:57:24', '2023-09-08 20:44:27'),
('1005', 'Fusagasugá - Barranquilla', 'Fusagasugá', 'Barranquilla', '1064.05', '16 hora(s) 55 minuto(s)', 'Mala', '2023-08-23 05:58:24', '2023-09-08 20:46:30'),
('1006', 'Fusagasuga - Ibagué', 'Fusagasuga', 'Ibagué', '132.59', '2 hora(s) 22 minuto(s)', 'Buena', '2023-08-23 05:59:03', '2023-09-08 20:46:49'),
('1007', 'Bogota - Villavicencio', 'Bogota', 'Villavicencio', '125.18', '3 hora(s) 18 minuto(s)', 'Mala', '2023-08-23 06:00:58', '2023-09-08 20:47:06'),
('1008', 'Bogota - Cali', 'Bogota', 'Cali', '471.38', '9 hora(s) 35 minuto(s)', 'Regular', '2023-08-23 05:59:45', '2023-09-08 20:47:19'),
('1009', 'Bogotá - Girardot', 'Bogotá', 'Girardot', '141', '3 hora(s) 14 minuto(s)', 'Buena', '2023-08-23 06:01:39', '2023-09-08 20:47:34'),
('1010', 'Bogotá - Pereira', 'Bogotá', 'Pereira', '316', '7 hora(s) 3 minuto(s)', 'Buena', '2023-08-23 06:02:36', '2023-09-08 20:47:42'),
('1029', 'Ibagué - SANTA MARTA', 'Ibagué', 'Santa Marta', '954.59', '15 hora(s) 13 minuto(s)', 'REGULAR', '2023-09-29 02:35:07', '2023-09-29 02:35:07'),
('1236', 'Valledupar - Pasto', 'Valledupar', 'Pasto', '1543.16', '1 día(s) 3 hora(s) 8 minuto(s)', 'Regular', '2023-10-02 05:02:27', '2023-10-02 05:02:27'),
('1578', 'Barranquilla - ARAUCA', 'Barranquilla', 'Arauca', '1186.35', '20 hora(s) 38 minuto(s)', 'MALA', '2023-09-29 02:36:16', '2023-09-29 02:36:16'),
('3213', 'Quibdó - BOGOTA', 'Quibdó', 'Bogotá', '554.14', '12 hora(s) 10 minuto(s)', 'MALA', '2023-09-29 02:38:41', '2023-09-29 02:38:41'),
('4414', 'Pereira - DUITAMA', 'Pereira', 'Duitama', '499.09', '9 hora(s) 29 minuto(s)', 'REGULAR', '2023-09-29 02:39:37', '2023-09-29 02:39:37'),
('5903', 'Chiquinquirá - VILLAVICENCIO', 'Chiquinquirá', 'Villavicencio', '254.61', '5 hora(s) 47 minuto(s)', 'BUENA', '2023-09-29 02:37:01', '2023-09-29 02:37:01'),
('7844', 'Cúcuta - Ibagué', 'Cúcuta', 'Ibagué', '706.71', '13 hora(s) 58 minuto(s)', 'Regular', '2023-10-02 05:03:19', '2023-10-02 05:03:19'),
('8376', 'Fusagasugá - CUCUTA', 'Fusagasugá', 'Cúcuta', '639.72', '14 hora(s) 12 minuto(s)', 'REGULAR', '2023-09-29 02:40:08', '2023-09-29 02:40:08'),
('8938', 'Bucaramanga - CASANARE', 'Bucaramanga', 'Yopal', '469.85', '12 hora(s) 9 minuto(s)', 'REGULAR', '2023-09-29 02:37:57', '2023-09-29 02:37:57');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `cod_ser` varchar(7) NOT NULL,
  `fec_ser` date NOT NULL,
  `sis_ser` varchar(2) NOT NULL,
  `act_ser` varchar(2) NOT NULL,
  `est_ser` varchar(20) NOT NULL,
  `tip_ser` varchar(20) NOT NULL,
  `fal_ser` varchar(4) DEFAULT NULL,
  `det_ser` varchar(500) NOT NULL,
  `cam_ser` varchar(7) NOT NULL,
  `tal_ser` varchar(15) DEFAULT NULL,
  `res_ser` varchar(45) NOT NULL,
  `tip_int_ser` varchar(191) NOT NULL,
  `int_ser` int(11) NOT NULL,
  `int_ale_ser` int(11) NOT NULL,
  `ale_ser` varchar(500) NOT NULL,
  `cos_ser` int(11) NOT NULL,
  `alm_ser` varchar(4) DEFAULT NULL,
  `can_ser` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`cod_ser`, `fec_ser`, `sis_ser`, `act_ser`, `est_ser`, `tip_ser`, `fal_ser`, `det_ser`, `cam_ser`, `tal_ser`, `res_ser`, `tip_int_ser`, `int_ser`, `int_ale_ser`, `ale_ser`, `cos_ser`, `alm_ser`, `can_ser`, `created_at`, `updated_at`) VALUES
('0101001', '2023-01-03', '01', '01', 'Completada', 'preventivo', NULL, 'Cambio de aceite y filtro', 'ABC123', '001012345', 'Técnico Juan Pérez', 'kilometros', 10000, 1000, 'Es importante realizar el cambio de aceite y filtro antes de los 10,000 km para evitar daños al motor.', 500000, '0001', 1, '2023-10-02 12:45:13', '2023-10-02 13:21:55'),
('0101121', '2023-03-03', '01', '01', 'Completada', 'preventivo', NULL, 'Cambio de aceite y filtro', 'ABC123', '001012345', 'Técnico Juan Pérez', 'kilometros', 10000, 1000, 'Es importante realizar el cambio de aceite y filtro antes de los 10,000 km para evitar daños al motor.', 500000, '0001', 1, '2023-12-02 12:45:13', '2023-12-02 13:21:55'),
('0101124', '2023-04-03', '01', '01', 'Completada', 'preventivo', NULL, 'Cambio de aceite y filtro', 'ABC123', '001012345', 'Técnico Juan Pérez', 'kilometros', 10000, 1000, 'Es importante realizar el cambio de aceite y filtro antes de los 10,000 km para evitar daños al motor.', 500000, '0001', 1, '2024-01-02 12:45:13', '2024-01-02 13:21:55'),
('0101139', '2023-05-03', '01', '01', 'Completada', 'preventivo', NULL, 'Cambio de aceite y filtro', 'ABC123', '001012345', 'Técnico Juan Pérez', 'kilometros', 10000, 1000, 'Es importante realizar el cambio de aceite y filtro antes de los 10,000 km para evitar daños al motor.', 500000, '0001', 1, '2024-02-02 12:45:13', '2024-02-02 13:21:55'),
('0101584', '2023-02-03', '01', '01', 'Completada', 'preventivo', NULL, 'Cambio de aceite y filtro', 'ABC123', '001012345', 'Técnico Juan Pérez', 'kilometros', 10000, 1000, 'Es importante realizar el cambio de aceite y filtro antes de los 10,000 km para evitar daños al motor.', 500000, '0001', 1, '2023-11-02 12:45:13', '2023-11-02 13:21:55'),
('0101593', '2023-03-03', '01', '01', 'Completada', 'preventivo', NULL, 'Cambio de aceite y filtro', 'ABC123', '001012345', 'Técnico Juan Pérez', 'kilometros', 10000, 1000, 'Es importante realizar el cambio de aceite y filtro antes de los 10,000 km para evitar daños al motor.', 500000, '0001', 1, '2023-12-02 12:45:13', '2023-12-02 13:21:55'),
('0101619', '2023-04-03', '01', '01', 'Completada', 'preventivo', NULL, 'Cambio de aceite y filtro', 'ABC123', '001012345', 'Técnico Juan Pérez', 'kilometros', 10000, 1000, 'Es importante realizar el cambio de aceite y filtro antes de los 10,000 km para evitar daños al motor.', 500000, '0001', 1, '2024-01-02 12:45:13', '2024-01-02 13:21:55'),
('0101755', '2023-04-03', '01', '01', 'Completada', 'preventivo', NULL, 'Cambio de aceite y filtro', 'ABC123', '001012345', 'Técnico Juan Pérez', 'kilometros', 10000, 1000, 'Es importante realizar el cambio de aceite y filtro antes de los 10,000 km para evitar daños al motor.', 500000, '0001', 1, '2024-01-02 12:45:13', '2024-01-02 13:21:55'),
('0101776', '2023-03-03', '01', '01', 'Completada', 'preventivo', NULL, 'Cambio de aceite y filtro', 'ABC123', '001012345', 'Técnico Juan Pérez', 'kilometros', 10000, 1000, 'Es importante realizar el cambio de aceite y filtro antes de los 10,000 km para evitar daños al motor.', 500000, '0001', 1, '2023-12-02 12:45:13', '2023-12-02 13:21:55'),
('0101814', '2023-03-03', '01', '01', 'Completada', 'preventivo', NULL, 'Cambio de aceite y filtro', 'ABC123', '001012345', 'Técnico Juan Pérez', 'kilometros', 10000, 1000, 'Es importante realizar el cambio de aceite y filtro antes de los 10,000 km para evitar daños al motor.', 500000, '0001', 1, '2023-12-02 12:45:13', '2023-12-02 13:21:55'),
('0101856', '2023-02-03', '01', '01', 'Completada', 'preventivo', NULL, 'Cambio de aceite y filtro', 'ABC123', '001012345', 'Técnico Juan Pérez', 'kilometros', 10000, 1000, 'Es importante realizar el cambio de aceite y filtro antes de los 10,000 km para evitar daños al motor.', 500000, '0001', 1, '2023-11-02 12:45:13', '2023-11-02 13:21:55'),
('0101891', '2023-03-03', '01', '01', 'Completada', 'preventivo', NULL, 'Cambio de aceite y filtro', 'ABC123', '001012345', 'Técnico Juan Pérez', 'kilometros', 10000, 1000, 'Es importante realizar el cambio de aceite y filtro antes de los 10,000 km para evitar daños al motor.', 500000, '0001', 1, '2023-12-02 12:45:13', '2023-12-02 13:21:55'),
('0101909', '2023-04-03', '01', '01', 'Completada', 'preventivo', NULL, 'Cambio de aceite y filtro', 'ABC123', '001012345', 'Técnico Juan Pérez', 'kilometros', 10000, 1000, 'Es importante realizar el cambio de aceite y filtro antes de los 10,000 km para evitar daños al motor.', 500000, '0001', 1, '2024-01-02 12:45:13', '2024-01-02 13:21:55'),
('0101942', '2023-03-03', '01', '01', 'Completada', 'preventivo', NULL, 'Cambio de aceite y filtro', 'ABC123', '001012345', 'Técnico Juan Pérez', 'kilometros', 10000, 1000, 'Es importante realizar el cambio de aceite y filtro antes de los 10,000 km para evitar daños al motor.', 500000, '0001', 1, '2023-12-02 12:45:13', '2023-12-02 13:21:55'),
('0101972', '2023-02-03', '01', '01', 'Completada', 'preventivo', NULL, 'Cambio de aceite y filtro', 'ABC123', '001012345', 'Técnico Juan Pérez', 'kilometros', 10000, 1000, 'Es importante realizar el cambio de aceite y filtro antes de los 10,000 km para evitar daños al motor.', 500000, '0001', 1, '2023-11-02 12:45:13', '2023-11-02 13:21:55'),
('0101983', '2023-02-03', '01', '01', 'Completada', 'preventivo', NULL, 'Cambio de aceite y filtro', 'ABC123', '001012345', 'Técnico Juan Pérez', 'kilometros', 10000, 1000, 'Es importante realizar el cambio de aceite y filtro antes de los 10,000 km para evitar daños al motor.', 500000, '0001', 1, '2023-11-02 12:45:13', '2023-11-02 13:21:55'),
('0121002', '2023-02-14', '01', '21', 'Completada', 'correctivo', NULL, 'Fallo en la inyección de combustible', 'KLM345', '016567890', 'Carlos Ramirez', 'kilometros', 60000, 5000, 'La reparación del sistema de inyección de combustible es necesaria debido a problemas en el sistema de escape. Hazlo antes de los 60,000 km para evitar problemas adicionales.', 600000, '8878', 1, '2023-10-02 14:07:56', '2023-10-02 14:08:09'),
('0121307', '2023-04-14', '01', '21', 'Completada', 'correctivo', NULL, 'Fallo en la inyección de combustible', 'KLM345', '016567890', 'Carlos Ramirez', 'kilometros', 60000, 5000, 'La reparación del sistema de inyección de combustible es necesaria debido a problemas en el sistema de escape. Hazlo antes de los 60,000 km para evitar problemas adicionales.', 600000, '8878', 1, '2023-12-02 14:07:56', '2023-12-02 14:08:09'),
('0121347', '2023-06-14', '01', '21', 'Completada', 'correctivo', NULL, 'Fallo en la inyección de combustible', 'KLM345', '016567890', 'Carlos Ramirez', 'kilometros', 60000, 5000, 'La reparación del sistema de inyección de combustible es necesaria debido a problemas en el sistema de escape. Hazlo antes de los 60,000 km para evitar problemas adicionales.', 600000, '8878', 1, '2024-02-02 14:07:56', '2024-02-02 14:08:09'),
('0121384', '2023-03-14', '01', '21', 'Completada', 'correctivo', NULL, 'Fallo en la inyección de combustible', 'KLM345', '016567890', 'Carlos Ramirez', 'kilometros', 60000, 5000, 'La reparación del sistema de inyección de combustible es necesaria debido a problemas en el sistema de escape. Hazlo antes de los 60,000 km para evitar problemas adicionales.', 600000, '8878', 1, '2023-11-02 14:07:56', '2023-11-02 14:08:09'),
('0121397', '2023-04-14', '01', '21', 'Completada', 'correctivo', NULL, 'Fallo en la inyección de combustible', 'KLM345', '016567890', 'Carlos Ramirez', 'kilometros', 60000, 5000, 'La reparación del sistema de inyección de combustible es necesaria debido a problemas en el sistema de escape. Hazlo antes de los 60,000 km para evitar problemas adicionales.', 600000, '8878', 1, '2023-12-02 14:07:56', '2023-12-02 14:08:09'),
('0121501', '2023-03-14', '01', '21', 'Completada', 'correctivo', NULL, 'Fallo en la inyección de combustible', 'KLM345', '016567890', 'Carlos Ramirez', 'kilometros', 60000, 5000, 'La reparación del sistema de inyección de combustible es necesaria debido a problemas en el sistema de escape. Hazlo antes de los 60,000 km para evitar problemas adicionales.', 600000, '8878', 1, '2023-11-02 14:07:56', '2023-11-02 14:08:09'),
('0121534', '2023-03-14', '01', '21', 'Completada', 'correctivo', NULL, 'Fallo en la inyección de combustible', 'KLM345', '016567890', 'Carlos Ramirez', 'kilometros', 60000, 5000, 'La reparación del sistema de inyección de combustible es necesaria debido a problemas en el sistema de escape. Hazlo antes de los 60,000 km para evitar problemas adicionales.', 600000, '8878', 1, '2023-11-02 14:07:56', '2023-11-02 14:08:09'),
('0121591', '2023-04-14', '01', '21', 'Completada', 'correctivo', NULL, 'Fallo en la inyección de combustible', 'KLM345', '016567890', 'Carlos Ramirez', 'kilometros', 60000, 5000, 'La reparación del sistema de inyección de combustible es necesaria debido a problemas en el sistema de escape. Hazlo antes de los 60,000 km para evitar problemas adicionales.', 600000, '8878', 1, '2023-12-02 14:07:56', '2023-12-02 14:08:09'),
('0121602', '2023-05-14', '01', '21', 'Completada', 'correctivo', NULL, 'Fallo en la inyección de combustible', 'KLM345', '016567890', 'Carlos Ramirez', 'kilometros', 60000, 5000, 'La reparación del sistema de inyección de combustible es necesaria debido a problemas en el sistema de escape. Hazlo antes de los 60,000 km para evitar problemas adicionales.', 600000, '8878', 1, '2024-01-02 14:07:56', '2024-01-02 14:08:09'),
('0121646', '2023-03-14', '01', '21', 'Completada', 'correctivo', NULL, 'Fallo en la inyección de combustible', 'KLM345', '016567890', 'Carlos Ramirez', 'kilometros', 60000, 5000, 'La reparación del sistema de inyección de combustible es necesaria debido a problemas en el sistema de escape. Hazlo antes de los 60,000 km para evitar problemas adicionales.', 600000, '8878', 1, '2023-11-02 14:07:56', '2023-11-02 14:08:09'),
('0121781', '2023-05-14', '01', '21', 'Completada', 'correctivo', NULL, 'Fallo en la inyección de combustible', 'KLM345', '016567890', 'Carlos Ramirez', 'kilometros', 60000, 5000, 'La reparación del sistema de inyección de combustible es necesaria debido a problemas en el sistema de escape. Hazlo antes de los 60,000 km para evitar problemas adicionales.', 600000, '8878', 1, '2024-01-02 14:07:56', '2024-01-02 14:08:09'),
('0121855', '2023-04-14', '01', '21', 'Completada', 'correctivo', NULL, 'Fallo en la inyección de combustible', 'KLM345', '016567890', 'Carlos Ramirez', 'kilometros', 60000, 5000, 'La reparación del sistema de inyección de combustible es necesaria debido a problemas en el sistema de escape. Hazlo antes de los 60,000 km para evitar problemas adicionales.', 600000, '8878', 1, '2023-12-02 14:07:56', '2023-12-02 14:08:09'),
('0121867', '2023-04-14', '01', '21', 'Completada', 'correctivo', NULL, 'Fallo en la inyección de combustible', 'KLM345', '016567890', 'Carlos Ramirez', 'kilometros', 60000, 5000, 'La reparación del sistema de inyección de combustible es necesaria debido a problemas en el sistema de escape. Hazlo antes de los 60,000 km para evitar problemas adicionales.', 600000, '8878', 1, '2023-12-02 14:07:56', '2023-12-02 14:08:09'),
('0121946', '2023-05-14', '01', '21', 'Completada', 'correctivo', NULL, 'Fallo en la inyección de combustible', 'KLM345', '016567890', 'Carlos Ramirez', 'kilometros', 60000, 5000, 'La reparación del sistema de inyección de combustible es necesaria debido a problemas en el sistema de escape. Hazlo antes de los 60,000 km para evitar problemas adicionales.', 600000, '8878', 1, '2024-01-02 14:07:56', '2024-01-02 14:08:09'),
('0121965', '2023-05-14', '01', '21', 'Completada', 'correctivo', NULL, 'Fallo en la inyección de combustible', 'KLM345', '016567890', 'Carlos Ramirez', 'kilometros', 60000, 5000, 'La reparación del sistema de inyección de combustible es necesaria debido a problemas en el sistema de escape. Hazlo antes de los 60,000 km para evitar problemas adicionales.', 600000, '8878', 1, '2024-01-02 14:07:56', '2024-01-02 14:08:09'),
('0121967', '2023-04-14', '01', '21', 'Completada', 'correctivo', NULL, 'Fallo en la inyección de combustible', 'KLM345', '016567890', 'Carlos Ramirez', 'kilometros', 60000, 5000, 'La reparación del sistema de inyección de combustible es necesaria debido a problemas en el sistema de escape. Hazlo antes de los 60,000 km para evitar problemas adicionales.', 600000, '8878', 1, '2023-12-02 14:07:56', '2023-12-02 14:08:09'),
('0129002', '2025-03-15', '01', '29', 'Completada', 'correctivo', '1234', 'Reparación de pérdida de potencia del motor', 'RST567', '001012345', 'Técnico Juan Pérez', 'kilometros', 110000, 5000, 'La pérdida de potencia del motor debe ser reparada antes de los 110,000 km para mantener el rendimiento óptimo.', 550000, NULL, NULL, '2023-10-02 15:38:06', '2023-10-02 15:38:23'),
('0130002', '2023-09-05', '01', '30', 'Completada', 'correctivo', '9898', ': Bujías sueltas en el motor', 'JBL-411', '623565352', 'Técnico Juan Pérez', 'kilometros', 80000, 5000, 'Las bujías sueltas en el motor deben ser reemplazadas antes de los 80,000 km para mantener el rendimiento óptimo.', 120000, NULL, NULL, '2023-10-02 16:13:19', '2023-10-02 16:13:29'),
('0130148', '2023-11-05', '01', '30', 'Completada', 'correctivo', '9898', ': Bujías sueltas en el motor', 'JBL-411', '623565352', 'Técnico Juan Pérez', 'kilometros', 80000, 5000, 'Las bujías sueltas en el motor deben ser reemplazadas antes de los 80,000 km para mantener el rendimiento óptimo.', 120000, NULL, NULL, '2023-12-02 16:13:19', '2023-12-02 16:13:29'),
('0130188', '2023-12-05', '01', '30', 'Completada', 'correctivo', '9898', ': Bujías sueltas en el motor', 'JBL-411', '623565352', 'Técnico Juan Pérez', 'kilometros', 80000, 5000, 'Las bujías sueltas en el motor deben ser reemplazadas antes de los 80,000 km para mantener el rendimiento óptimo.', 120000, NULL, NULL, '2024-01-02 16:13:19', '2024-01-02 16:13:29'),
('0130262', '2023-11-05', '01', '30', 'Completada', 'correctivo', '9898', ': Bujías sueltas en el motor', 'JBL-411', '623565352', 'Técnico Juan Pérez', 'kilometros', 80000, 5000, 'Las bujías sueltas en el motor deben ser reemplazadas antes de los 80,000 km para mantener el rendimiento óptimo.', 120000, NULL, NULL, '2023-12-02 16:13:19', '2023-12-02 16:13:29'),
('0130271', '2023-12-05', '01', '30', 'Completada', 'correctivo', '9898', ': Bujías sueltas en el motor', 'JBL-411', '623565352', 'Técnico Juan Pérez', 'kilometros', 80000, 5000, 'Las bujías sueltas en el motor deben ser reemplazadas antes de los 80,000 km para mantener el rendimiento óptimo.', 120000, NULL, NULL, '2024-01-02 16:13:19', '2024-01-02 16:13:29'),
('0130331', '2023-11-05', '01', '30', 'Completada', 'correctivo', '9898', ': Bujías sueltas en el motor', 'JBL-411', '623565352', 'Técnico Juan Pérez', 'kilometros', 80000, 5000, 'Las bujías sueltas en el motor deben ser reemplazadas antes de los 80,000 km para mantener el rendimiento óptimo.', 120000, NULL, NULL, '2023-12-02 16:13:19', '2023-12-02 16:13:29'),
('0130347', '2023-12-05', '01', '30', 'Completada', 'correctivo', '9898', ': Bujías sueltas en el motor', 'JBL-411', '623565352', 'Técnico Juan Pérez', 'kilometros', 80000, 5000, 'Las bujías sueltas en el motor deben ser reemplazadas antes de los 80,000 km para mantener el rendimiento óptimo.', 120000, NULL, NULL, '2024-01-02 16:13:19', '2024-01-02 16:13:29'),
('0130556', '2023-10-05', '01', '30', 'Completada', 'correctivo', '9898', ': Bujías sueltas en el motor', 'JBL-411', '623565352', 'Técnico Juan Pérez', 'kilometros', 80000, 5000, 'Las bujías sueltas en el motor deben ser reemplazadas antes de los 80,000 km para mantener el rendimiento óptimo.', 120000, NULL, NULL, '2023-11-02 16:13:19', '2023-11-02 16:13:29'),
('0130558', '2023-11-05', '01', '30', 'Completada', 'correctivo', '9898', ': Bujías sueltas en el motor', 'JBL-411', '623565352', 'Técnico Juan Pérez', 'kilometros', 80000, 5000, 'Las bujías sueltas en el motor deben ser reemplazadas antes de los 80,000 km para mantener el rendimiento óptimo.', 120000, NULL, NULL, '2023-12-02 16:13:19', '2023-12-02 16:13:29'),
('0130640', '2023-11-05', '01', '30', 'Completada', 'correctivo', '9898', ': Bujías sueltas en el motor', 'JBL-411', '623565352', 'Técnico Juan Pérez', 'kilometros', 80000, 5000, 'Las bujías sueltas en el motor deben ser reemplazadas antes de los 80,000 km para mantener el rendimiento óptimo.', 120000, NULL, NULL, '2023-12-02 16:13:19', '2023-12-02 16:13:29'),
('0130703', '2023-12-05', '01', '30', 'Completada', 'correctivo', '9898', ': Bujías sueltas en el motor', 'JBL-411', '623565352', 'Técnico Juan Pérez', 'kilometros', 80000, 5000, 'Las bujías sueltas en el motor deben ser reemplazadas antes de los 80,000 km para mantener el rendimiento óptimo.', 120000, NULL, NULL, '2024-01-02 16:13:19', '2024-01-02 16:13:29'),
('0130729', '2023-10-05', '01', '30', 'Completada', 'correctivo', '9898', ': Bujías sueltas en el motor', 'JBL-411', '623565352', 'Técnico Juan Pérez', 'kilometros', 80000, 5000, 'Las bujías sueltas en el motor deben ser reemplazadas antes de los 80,000 km para mantener el rendimiento óptimo.', 120000, NULL, NULL, '2023-11-02 16:13:19', '2023-11-02 16:13:29'),
('0130833', '2023-10-05', '01', '30', 'Completada', 'correctivo', '9898', ': Bujías sueltas en el motor', 'JBL-411', '623565352', 'Técnico Juan Pérez', 'kilometros', 80000, 5000, 'Las bujías sueltas en el motor deben ser reemplazadas antes de los 80,000 km para mantener el rendimiento óptimo.', 120000, NULL, NULL, '2023-11-02 16:13:19', '2023-11-02 16:13:29'),
('0130929', '2023-10-05', '01', '30', 'Completada', 'correctivo', '9898', ': Bujías sueltas en el motor', 'JBL-411', '623565352', 'Técnico Juan Pérez', 'kilometros', 80000, 5000, 'Las bujías sueltas en el motor deben ser reemplazadas antes de los 80,000 km para mantener el rendimiento óptimo.', 120000, NULL, NULL, '2023-11-02 16:13:19', '2023-11-02 16:13:29'),
('0130978', '2023-11-05', '01', '30', 'Completada', 'correctivo', '9898', ': Bujías sueltas en el motor', 'JBL-411', '623565352', 'Técnico Juan Pérez', 'kilometros', 80000, 5000, 'Las bujías sueltas en el motor deben ser reemplazadas antes de los 80,000 km para mantener el rendimiento óptimo.', 120000, NULL, NULL, '2023-12-02 16:13:19', '2023-12-02 16:13:29'),
('0203002', '2023-07-03', '02', '03', 'Completada', 'correctivo', NULL, 'Reemplazo de discos y pastillas de freno', 'MNO234', '012123456', 'Luis Ramirez', 'kilometros', 75000, 2000, 'El reemplazo de discos y pastillas de freno es necesario debido a problemas en el sistema de frenos. Hazlo antes de los 75,000 km para garantizar la seguridad.', 700000, '0002', 1, '2023-10-02 14:23:45', '2023-10-02 14:24:02'),
('0203151', '2023-10-03', '02', '03', 'Completada', 'correctivo', NULL, 'Reemplazo de discos y pastillas de freno', 'MNO234', '012123456', 'Luis Ramirez', 'kilometros', 75000, 2000, 'El reemplazo de discos y pastillas de freno es necesario debido a problemas en el sistema de frenos. Hazlo antes de los 75,000 km para garantizar la seguridad.', 700000, '0002', 1, '2024-01-02 14:23:45', '2024-01-02 14:24:02'),
('0203157', '2023-10-03', '02', '03', 'Completada', 'correctivo', NULL, 'Reemplazo de discos y pastillas de freno', 'MNO234', '012123456', 'Luis Ramirez', 'kilometros', 75000, 2000, 'El reemplazo de discos y pastillas de freno es necesario debido a problemas en el sistema de frenos. Hazlo antes de los 75,000 km para garantizar la seguridad.', 700000, '0002', 1, '2024-01-02 14:23:45', '2024-01-02 14:24:02'),
('0203177', '2023-08-03', '02', '03', 'Completada', 'correctivo', NULL, 'Reemplazo de discos y pastillas de freno', 'MNO234', '012123456', 'Luis Ramirez', 'kilometros', 75000, 2000, 'El reemplazo de discos y pastillas de freno es necesario debido a problemas en el sistema de frenos. Hazlo antes de los 75,000 km para garantizar la seguridad.', 700000, '0002', 1, '2023-11-02 14:23:45', '2023-11-02 14:24:02'),
('0203392', '2023-09-03', '02', '03', 'Completada', 'correctivo', NULL, 'Reemplazo de discos y pastillas de freno', 'MNO234', '012123456', 'Luis Ramirez', 'kilometros', 75000, 2000, 'El reemplazo de discos y pastillas de freno es necesario debido a problemas en el sistema de frenos. Hazlo antes de los 75,000 km para garantizar la seguridad.', 700000, '0002', 1, '2023-12-02 14:23:45', '2023-12-02 14:24:02'),
('0203409', '2023-10-03', '02', '03', 'Completada', 'correctivo', NULL, 'Reemplazo de discos y pastillas de freno', 'MNO234', '012123456', 'Luis Ramirez', 'kilometros', 75000, 2000, 'El reemplazo de discos y pastillas de freno es necesario debido a problemas en el sistema de frenos. Hazlo antes de los 75,000 km para garantizar la seguridad.', 700000, '0002', 1, '2024-01-02 14:23:45', '2024-01-02 14:24:02'),
('0203412', '2023-09-03', '02', '03', 'Completada', 'correctivo', NULL, 'Reemplazo de discos y pastillas de freno', 'MNO234', '012123456', 'Luis Ramirez', 'kilometros', 75000, 2000, 'El reemplazo de discos y pastillas de freno es necesario debido a problemas en el sistema de frenos. Hazlo antes de los 75,000 km para garantizar la seguridad.', 700000, '0002', 1, '2023-12-02 14:23:45', '2023-12-02 14:24:02'),
('0203414', '2023-08-03', '02', '03', 'Completada', 'correctivo', NULL, 'Reemplazo de discos y pastillas de freno', 'MNO234', '012123456', 'Luis Ramirez', 'kilometros', 75000, 2000, 'El reemplazo de discos y pastillas de freno es necesario debido a problemas en el sistema de frenos. Hazlo antes de los 75,000 km para garantizar la seguridad.', 700000, '0002', 1, '2023-11-02 14:23:45', '2023-11-02 14:24:02'),
('0203482', '2023-09-03', '02', '03', 'Completada', 'correctivo', NULL, 'Reemplazo de discos y pastillas de freno', 'MNO234', '012123456', 'Luis Ramirez', 'kilometros', 75000, 2000, 'El reemplazo de discos y pastillas de freno es necesario debido a problemas en el sistema de frenos. Hazlo antes de los 75,000 km para garantizar la seguridad.', 700000, '0002', 1, '2023-12-02 14:23:45', '2023-12-02 14:24:02'),
('0203509', '2023-11-03', '02', '03', 'Completada', 'correctivo', NULL, 'Reemplazo de discos y pastillas de freno', 'MNO234', '012123456', 'Luis Ramirez', 'kilometros', 75000, 2000, 'El reemplazo de discos y pastillas de freno es necesario debido a problemas en el sistema de frenos. Hazlo antes de los 75,000 km para garantizar la seguridad.', 700000, '0002', 1, '2024-02-02 14:23:45', '2024-02-02 14:24:02'),
('0203551', '2023-08-03', '02', '03', 'Completada', 'correctivo', NULL, 'Reemplazo de discos y pastillas de freno', 'MNO234', '012123456', 'Luis Ramirez', 'kilometros', 75000, 2000, 'El reemplazo de discos y pastillas de freno es necesario debido a problemas en el sistema de frenos. Hazlo antes de los 75,000 km para garantizar la seguridad.', 700000, '0002', 1, '2023-11-02 14:23:45', '2023-11-02 14:24:02'),
('0203568', '2023-09-03', '02', '03', 'Completada', 'correctivo', NULL, 'Reemplazo de discos y pastillas de freno', 'MNO234', '012123456', 'Luis Ramirez', 'kilometros', 75000, 2000, 'El reemplazo de discos y pastillas de freno es necesario debido a problemas en el sistema de frenos. Hazlo antes de los 75,000 km para garantizar la seguridad.', 700000, '0002', 1, '2023-12-02 14:23:45', '2023-12-02 14:24:02'),
('0203782', '2023-10-03', '02', '03', 'Completada', 'correctivo', NULL, 'Reemplazo de discos y pastillas de freno', 'MNO234', '012123456', 'Luis Ramirez', 'kilometros', 75000, 2000, 'El reemplazo de discos y pastillas de freno es necesario debido a problemas en el sistema de frenos. Hazlo antes de los 75,000 km para garantizar la seguridad.', 700000, '0002', 1, '2024-01-02 14:23:45', '2024-01-02 14:24:02'),
('0203839', '2023-09-03', '02', '03', 'Completada', 'correctivo', NULL, 'Reemplazo de discos y pastillas de freno', 'MNO234', '012123456', 'Luis Ramirez', 'kilometros', 75000, 2000, 'El reemplazo de discos y pastillas de freno es necesario debido a problemas en el sistema de frenos. Hazlo antes de los 75,000 km para garantizar la seguridad.', 700000, '0002', 1, '2023-12-02 14:23:45', '2023-12-02 14:24:02'),
('0203840', '2023-09-03', '02', '03', 'Completada', 'correctivo', NULL, 'Reemplazo de discos y pastillas de freno', 'MNO234', '012123456', 'Luis Ramirez', 'kilometros', 75000, 2000, 'El reemplazo de discos y pastillas de freno es necesario debido a problemas en el sistema de frenos. Hazlo antes de los 75,000 km para garantizar la seguridad.', 700000, '0002', 1, '2023-12-02 14:23:45', '2023-12-02 14:24:02'),
('0203954', '2023-08-03', '02', '03', 'Completada', 'correctivo', NULL, 'Reemplazo de discos y pastillas de freno', 'MNO234', '012123456', 'Luis Ramirez', 'kilometros', 75000, 2000, 'El reemplazo de discos y pastillas de freno es necesario debido a problemas en el sistema de frenos. Hazlo antes de los 75,000 km para garantizar la seguridad.', 700000, '0002', 1, '2023-11-02 14:23:45', '2023-11-02 14:24:02'),
('0213002', '2023-03-15', '02', '13', 'Completada', 'correctivo', '0001', 'Pastillas desgastadas', 'BCD789', '002123456', 'Luis Ramirez', 'kilometros', 20000, 1000, 'El reemplazo de pastillas de freno es necesario debido al desgaste, asegúrate de hacerlo antes de los 20,000 km para garantizar la seguridad.', 300000, NULL, NULL, '2023-10-02 12:46:44', '2023-10-02 12:48:16'),
('0213199', '2023-05-15', '02', '13', 'Completada', 'correctivo', '0001', 'Pastillas desgastadas', 'BCD789', '002123456', 'Luis Ramirez', 'kilometros', 20000, 1000, 'El reemplazo de pastillas de freno es necesario debido al desgaste, asegúrate de hacerlo antes de los 20,000 km para garantizar la seguridad.', 300000, NULL, NULL, '2023-12-02 12:46:44', '2023-12-02 12:48:16'),
('0213257', '2023-06-15', '02', '13', 'Completada', 'correctivo', '0001', 'Pastillas desgastadas', 'BCD789', '002123456', 'Luis Ramirez', 'kilometros', 20000, 1000, 'El reemplazo de pastillas de freno es necesario debido al desgaste, asegúrate de hacerlo antes de los 20,000 km para garantizar la seguridad.', 300000, NULL, NULL, '2024-01-02 12:46:44', '2024-01-02 12:48:16'),
('0213266', '2023-05-15', '02', '13', 'Completada', 'correctivo', '0001', 'Pastillas desgastadas', 'BCD789', '002123456', 'Luis Ramirez', 'kilometros', 20000, 1000, 'El reemplazo de pastillas de freno es necesario debido al desgaste, asegúrate de hacerlo antes de los 20,000 km para garantizar la seguridad.', 300000, NULL, NULL, '2023-12-02 12:46:44', '2023-12-02 12:48:16'),
('0213307', '2023-04-15', '02', '13', 'Completada', 'correctivo', '0001', 'Pastillas desgastadas', 'BCD789', '002123456', 'Luis Ramirez', 'kilometros', 20000, 1000, 'El reemplazo de pastillas de freno es necesario debido al desgaste, asegúrate de hacerlo antes de los 20,000 km para garantizar la seguridad.', 300000, NULL, NULL, '2023-11-02 12:46:44', '2023-11-02 12:48:16'),
('0213317', '2023-06-15', '02', '13', 'Completada', 'correctivo', '0001', 'Pastillas desgastadas', 'BCD789', '002123456', 'Luis Ramirez', 'kilometros', 20000, 1000, 'El reemplazo de pastillas de freno es necesario debido al desgaste, asegúrate de hacerlo antes de los 20,000 km para garantizar la seguridad.', 300000, NULL, NULL, '2024-01-02 12:46:44', '2024-01-02 12:48:16'),
('0213339', '2023-05-15', '02', '13', 'Completada', 'correctivo', '0001', 'Pastillas desgastadas', 'BCD789', '002123456', 'Luis Ramirez', 'kilometros', 20000, 1000, 'El reemplazo de pastillas de freno es necesario debido al desgaste, asegúrate de hacerlo antes de los 20,000 km para garantizar la seguridad.', 300000, NULL, NULL, '2023-12-02 12:46:44', '2023-12-02 12:48:16'),
('0213435', '2023-07-15', '02', '13', 'Completada', 'correctivo', '0001', 'Pastillas desgastadas', 'BCD789', '002123456', 'Luis Ramirez', 'kilometros', 20000, 1000, 'El reemplazo de pastillas de freno es necesario debido al desgaste, asegúrate de hacerlo antes de los 20,000 km para garantizar la seguridad.', 300000, NULL, NULL, '2024-02-02 12:46:44', '2024-02-02 12:48:16'),
('0213443', '2023-05-15', '02', '13', 'Completada', 'correctivo', '0001', 'Pastillas desgastadas', 'BCD789', '002123456', 'Luis Ramirez', 'kilometros', 20000, 1000, 'El reemplazo de pastillas de freno es necesario debido al desgaste, asegúrate de hacerlo antes de los 20,000 km para garantizar la seguridad.', 300000, NULL, NULL, '2023-12-02 12:46:44', '2023-12-02 12:48:16'),
('0213532', '2023-06-15', '02', '13', 'Completada', 'correctivo', '0001', 'Pastillas desgastadas', 'BCD789', '002123456', 'Luis Ramirez', 'kilometros', 20000, 1000, 'El reemplazo de pastillas de freno es necesario debido al desgaste, asegúrate de hacerlo antes de los 20,000 km para garantizar la seguridad.', 300000, NULL, NULL, '2024-01-02 12:46:44', '2024-01-02 12:48:16'),
('0213576', '2023-04-15', '02', '13', 'Completada', 'correctivo', '0001', 'Pastillas desgastadas', 'BCD789', '002123456', 'Luis Ramirez', 'kilometros', 20000, 1000, 'El reemplazo de pastillas de freno es necesario debido al desgaste, asegúrate de hacerlo antes de los 20,000 km para garantizar la seguridad.', 300000, NULL, NULL, '2023-11-02 12:46:44', '2023-11-02 12:48:16'),
('0213606', '2023-05-15', '02', '13', 'Completada', 'correctivo', '0001', 'Pastillas desgastadas', 'BCD789', '002123456', 'Luis Ramirez', 'kilometros', 20000, 1000, 'El reemplazo de pastillas de freno es necesario debido al desgaste, asegúrate de hacerlo antes de los 20,000 km para garantizar la seguridad.', 300000, NULL, NULL, '2023-12-02 12:46:44', '2023-12-02 12:48:16'),
('0213652', '2023-06-15', '02', '13', 'Completada', 'correctivo', '0001', 'Pastillas desgastadas', 'BCD789', '002123456', 'Luis Ramirez', 'kilometros', 20000, 1000, 'El reemplazo de pastillas de freno es necesario debido al desgaste, asegúrate de hacerlo antes de los 20,000 km para garantizar la seguridad.', 300000, NULL, NULL, '2024-01-02 12:46:44', '2024-01-02 12:48:16'),
('0213782', '2023-05-15', '02', '13', 'Completada', 'correctivo', '0001', 'Pastillas desgastadas', 'BCD789', '002123456', 'Luis Ramirez', 'kilometros', 20000, 1000, 'El reemplazo de pastillas de freno es necesario debido al desgaste, asegúrate de hacerlo antes de los 20,000 km para garantizar la seguridad.', 300000, NULL, NULL, '2023-12-02 12:46:44', '2023-12-02 12:48:16'),
('0213918', '2023-04-15', '02', '13', 'Completada', 'correctivo', '0001', 'Pastillas desgastadas', 'BCD789', '002123456', 'Luis Ramirez', 'kilometros', 20000, 1000, 'El reemplazo de pastillas de freno es necesario debido al desgaste, asegúrate de hacerlo antes de los 20,000 km para garantizar la seguridad.', 300000, NULL, NULL, '2023-11-02 12:46:44', '2023-11-02 12:48:16'),
('0213947', '2023-04-15', '02', '13', 'Completada', 'correctivo', '0001', 'Pastillas desgastadas', 'BCD789', '002123456', 'Luis Ramirez', 'kilometros', 20000, 1000, 'El reemplazo de pastillas de freno es necesario debido al desgaste, asegúrate de hacerlo antes de los 20,000 km para garantizar la seguridad.', 300000, NULL, NULL, '2023-11-02 12:46:44', '2023-11-02 12:48:16'),
('0240002', '2023-06-10', '02', '40', 'Completada', 'correctivo', '0002', 'Frenos desgastados', 'DEF789', '162654673', 'Luis Ramirez', 'kilometros', 190000, 5000, 'Los frenos desgastados deben ser reemplazados antes de los 190,000 km para garantizar la seguridad en la carretera.', 280000, NULL, NULL, '2023-10-02 16:43:54', '2023-10-02 16:44:04'),
('0240148', '2023-07-10', '02', '40', 'Completada', 'correctivo', '0002', 'Frenos desgastados', 'DEF789', '162654673', 'Luis Ramirez', 'kilometros', 190000, 5000, 'Los frenos desgastados deben ser reemplazados antes de los 190,000 km para garantizar la seguridad en la carretera.', 280000, NULL, NULL, '2023-11-02 16:43:54', '2023-11-02 16:44:04'),
('0240163', '2023-09-10', '02', '40', 'Completada', 'correctivo', '0002', 'Frenos desgastados', 'DEF789', '162654673', 'Luis Ramirez', 'kilometros', 190000, 5000, 'Los frenos desgastados deben ser reemplazados antes de los 190,000 km para garantizar la seguridad en la carretera.', 280000, NULL, NULL, '2024-01-02 16:43:54', '2024-01-02 16:44:04'),
('0240254', '2023-10-10', '02', '40', 'Completada', 'correctivo', '0002', 'Frenos desgastados', 'DEF789', '162654673', 'Luis Ramirez', 'kilometros', 190000, 5000, 'Los frenos desgastados deben ser reemplazados antes de los 190,000 km para garantizar la seguridad en la carretera.', 280000, NULL, NULL, '2024-02-02 16:43:54', '2024-02-02 16:44:04'),
('0240273', '2023-09-10', '02', '40', 'Completada', 'correctivo', '0002', 'Frenos desgastados', 'DEF789', '162654673', 'Luis Ramirez', 'kilometros', 190000, 5000, 'Los frenos desgastados deben ser reemplazados antes de los 190,000 km para garantizar la seguridad en la carretera.', 280000, NULL, NULL, '2024-01-02 16:43:54', '2024-01-02 16:44:04'),
('0240290', '2023-08-10', '02', '40', 'Completada', 'correctivo', '0002', 'Frenos desgastados', 'DEF789', '162654673', 'Luis Ramirez', 'kilometros', 190000, 5000, 'Los frenos desgastados deben ser reemplazados antes de los 190,000 km para garantizar la seguridad en la carretera.', 280000, NULL, NULL, '2023-12-02 16:43:54', '2023-12-02 16:44:04'),
('0240358', '2023-07-10', '02', '40', 'Completada', 'correctivo', '0002', 'Frenos desgastados', 'DEF789', '162654673', 'Luis Ramirez', 'kilometros', 190000, 5000, 'Los frenos desgastados deben ser reemplazados antes de los 190,000 km para garantizar la seguridad en la carretera.', 280000, NULL, NULL, '2023-11-02 16:43:54', '2023-11-02 16:44:04'),
('0240396', '2023-08-10', '02', '40', 'Completada', 'correctivo', '0002', 'Frenos desgastados', 'DEF789', '162654673', 'Luis Ramirez', 'kilometros', 190000, 5000, 'Los frenos desgastados deben ser reemplazados antes de los 190,000 km para garantizar la seguridad en la carretera.', 280000, NULL, NULL, '2023-12-02 16:43:54', '2023-12-02 16:44:04'),
('0240399', '2023-08-10', '02', '40', 'Completada', 'correctivo', '0002', 'Frenos desgastados', 'DEF789', '162654673', 'Luis Ramirez', 'kilometros', 190000, 5000, 'Los frenos desgastados deben ser reemplazados antes de los 190,000 km para garantizar la seguridad en la carretera.', 280000, NULL, NULL, '2023-12-02 16:43:54', '2023-12-02 16:44:04'),
('0240523', '2023-08-10', '02', '40', 'Completada', 'correctivo', '0002', 'Frenos desgastados', 'DEF789', '162654673', 'Luis Ramirez', 'kilometros', 190000, 5000, 'Los frenos desgastados deben ser reemplazados antes de los 190,000 km para garantizar la seguridad en la carretera.', 280000, NULL, NULL, '2023-12-02 16:43:54', '2023-12-02 16:44:04'),
('0240586', '2023-08-10', '02', '40', 'Completada', 'correctivo', '0002', 'Frenos desgastados', 'DEF789', '162654673', 'Luis Ramirez', 'kilometros', 190000, 5000, 'Los frenos desgastados deben ser reemplazados antes de los 190,000 km para garantizar la seguridad en la carretera.', 280000, NULL, NULL, '2023-12-02 16:43:54', '2023-12-02 16:44:04'),
('0240594', '2023-09-10', '02', '40', 'Completada', 'correctivo', '0002', 'Frenos desgastados', 'DEF789', '162654673', 'Luis Ramirez', 'kilometros', 190000, 5000, 'Los frenos desgastados deben ser reemplazados antes de los 190,000 km para garantizar la seguridad en la carretera.', 280000, NULL, NULL, '2024-01-02 16:43:54', '2024-01-02 16:44:04'),
('0240687', '2023-09-10', '02', '40', 'Completada', 'correctivo', '0002', 'Frenos desgastados', 'DEF789', '162654673', 'Luis Ramirez', 'kilometros', 190000, 5000, 'Los frenos desgastados deben ser reemplazados antes de los 190,000 km para garantizar la seguridad en la carretera.', 280000, NULL, NULL, '2024-01-02 16:43:54', '2024-01-02 16:44:04'),
('0240799', '2023-07-10', '02', '40', 'Completada', 'correctivo', '0002', 'Frenos desgastados', 'DEF789', '162654673', 'Luis Ramirez', 'kilometros', 190000, 5000, 'Los frenos desgastados deben ser reemplazados antes de los 190,000 km para garantizar la seguridad en la carretera.', 280000, NULL, NULL, '2023-11-02 16:43:54', '2023-11-02 16:44:04'),
('0240876', '2023-07-10', '02', '40', 'Completada', 'correctivo', '0002', 'Frenos desgastados', 'DEF789', '162654673', 'Luis Ramirez', 'kilometros', 190000, 5000, 'Los frenos desgastados deben ser reemplazados antes de los 190,000 km para garantizar la seguridad en la carretera.', 280000, NULL, NULL, '2023-11-02 16:43:54', '2023-11-02 16:44:04'),
('0240982', '2023-08-10', '02', '40', 'Completada', 'correctivo', '0002', 'Frenos desgastados', 'DEF789', '162654673', 'Luis Ramirez', 'kilometros', 190000, 5000, 'Los frenos desgastados deben ser reemplazados antes de los 190,000 km para garantizar la seguridad en la carretera.', 280000, NULL, NULL, '2023-12-02 16:43:54', '2023-12-02 16:44:04'),
('0312001', '2023-04-18', '03', '12', 'Completada', 'correctivo', NULL, 'Amortiguadores y resortes dañados', 'NOP456', '001012345', 'Carlos Lopez', 'kilometros', 80000, 5000, 'El reemplazo de amortiguadores y resortes es necesario debido a problemas en el sistema de suspensión. Hazlo antes de los 80,000 km para garantizar una conducción segura.', 900000, NULL, NULL, '2023-10-02 14:35:52', '2023-10-02 14:36:04'),
('0312002', '2023-05-12', '03', '12', 'Completada', 'correctivo', '4560', 'Amortiguadores dañados', 'DEF789', '006567890', 'Andrés López', 'kilometros', 25000, 1000, 'El reemplazo de los amortiguadores es necesario debido a un problema en el sistema de dirección. Hazlo antes de los 25,000 km para evitar problemas adicionales.', 600000, NULL, NULL, '2023-10-02 13:02:58', '2023-10-02 13:03:20'),
('0312103', '2023-07-18', '03', '12', 'Completada', 'correctivo', NULL, 'Amortiguadores y resortes dañados', 'NOP456', '001012345', 'Carlos Lopez', 'kilometros', 80000, 5000, 'El reemplazo de amortiguadores y resortes es necesario debido a problemas en el sistema de suspensión. Hazlo antes de los 80,000 km para garantizar una conducción segura.', 900000, NULL, NULL, '2024-01-02 14:35:52', '2024-01-02 14:36:04'),
('0312104', '2023-06-18', '03', '12', 'Completada', 'correctivo', NULL, 'Amortiguadores y resortes dañados', 'NOP456', '001012345', 'Carlos Lopez', 'kilometros', 80000, 5000, 'El reemplazo de amortiguadores y resortes es necesario debido a problemas en el sistema de suspensión. Hazlo antes de los 80,000 km para garantizar una conducción segura.', 900000, NULL, NULL, '2023-12-02 14:35:52', '2023-12-02 14:36:04'),
('0312140', '2023-06-18', '03', '12', 'Completada', 'correctivo', NULL, 'Amortiguadores y resortes dañados', 'NOP456', '001012345', 'Carlos Lopez', 'kilometros', 80000, 5000, 'El reemplazo de amortiguadores y resortes es necesario debido a problemas en el sistema de suspensión. Hazlo antes de los 80,000 km para garantizar una conducción segura.', 900000, NULL, NULL, '2023-12-02 14:35:52', '2023-12-02 14:36:04'),
('0312193', '2023-07-12', '03', '12', 'Completada', 'correctivo', '4560', 'Amortiguadores dañados', 'DEF789', '006567890', 'Andrés López', 'kilometros', 25000, 1000, 'El reemplazo de los amortiguadores es necesario debido a un problema en el sistema de dirección. Hazlo antes de los 25,000 km para evitar problemas adicionales.', 600000, NULL, NULL, '2023-12-02 13:02:58', '2023-12-02 13:03:20'),
('0312257', '2023-07-12', '03', '12', 'Completada', 'correctivo', '4560', 'Amortiguadores dañados', 'DEF789', '006567890', 'Andrés López', 'kilometros', 25000, 1000, 'El reemplazo de los amortiguadores es necesario debido a un problema en el sistema de dirección. Hazlo antes de los 25,000 km para evitar problemas adicionales.', 600000, NULL, NULL, '2023-12-02 13:02:58', '2023-12-02 13:03:20'),
('0312333', '2023-08-12', '03', '12', 'Completada', 'correctivo', '4560', 'Amortiguadores dañados', 'DEF789', '006567890', 'Andrés López', 'kilometros', 25000, 1000, 'El reemplazo de los amortiguadores es necesario debido a un problema en el sistema de dirección. Hazlo antes de los 25,000 km para evitar problemas adicionales.', 600000, NULL, NULL, '2024-01-02 13:02:58', '2024-01-02 13:03:20'),
('0312339', '2023-07-12', '03', '12', 'Completada', 'correctivo', '4560', 'Amortiguadores dañados', 'DEF789', '006567890', 'Andrés López', 'kilometros', 25000, 1000, 'El reemplazo de los amortiguadores es necesario debido a un problema en el sistema de dirección. Hazlo antes de los 25,000 km para evitar problemas adicionales.', 600000, NULL, NULL, '2023-12-02 13:02:58', '2023-12-02 13:03:20'),
('0312345', '2023-07-12', '03', '12', 'Completada', 'correctivo', '4560', 'Amortiguadores dañados', 'DEF789', '006567890', 'Andrés López', 'kilometros', 25000, 1000, 'El reemplazo de los amortiguadores es necesario debido a un problema en el sistema de dirección. Hazlo antes de los 25,000 km para evitar problemas adicionales.', 600000, NULL, NULL, '2023-12-02 13:02:58', '2023-12-02 13:03:20'),
('0312347', '2023-05-18', '03', '12', 'Completada', 'correctivo', NULL, 'Amortiguadores y resortes dañados', 'NOP456', '001012345', 'Carlos Lopez', 'kilometros', 80000, 5000, 'El reemplazo de amortiguadores y resortes es necesario debido a problemas en el sistema de suspensión. Hazlo antes de los 80,000 km para garantizar una conducción segura.', 900000, NULL, NULL, '2023-11-02 14:35:52', '2023-11-02 14:36:04'),
('0312385', '2023-05-18', '03', '12', 'Completada', 'correctivo', NULL, 'Amortiguadores y resortes dañados', 'NOP456', '001012345', 'Carlos Lopez', 'kilometros', 80000, 5000, 'El reemplazo de amortiguadores y resortes es necesario debido a problemas en el sistema de suspensión. Hazlo antes de los 80,000 km para garantizar una conducción segura.', 900000, NULL, NULL, '2023-11-02 14:35:52', '2023-11-02 14:36:04'),
('0312457', '2023-06-18', '03', '12', 'Completada', 'correctivo', NULL, 'Amortiguadores y resortes dañados', 'NOP456', '001012345', 'Carlos Lopez', 'kilometros', 80000, 5000, 'El reemplazo de amortiguadores y resortes es necesario debido a problemas en el sistema de suspensión. Hazlo antes de los 80,000 km para garantizar una conducción segura.', 900000, NULL, NULL, '2023-12-02 14:35:52', '2023-12-02 14:36:04'),
('0312475', '2023-06-12', '03', '12', 'Completada', 'correctivo', '4560', 'Amortiguadores dañados', 'DEF789', '006567890', 'Andrés López', 'kilometros', 25000, 1000, 'El reemplazo de los amortiguadores es necesario debido a un problema en el sistema de dirección. Hazlo antes de los 25,000 km para evitar problemas adicionales.', 600000, NULL, NULL, '2023-11-02 13:02:58', '2023-11-02 13:03:20'),
('0312483', '2023-09-12', '03', '12', 'Completada', 'correctivo', '4560', 'Amortiguadores dañados', 'DEF789', '006567890', 'Andrés López', 'kilometros', 25000, 1000, 'El reemplazo de los amortiguadores es necesario debido a un problema en el sistema de dirección. Hazlo antes de los 25,000 km para evitar problemas adicionales.', 600000, NULL, NULL, '2024-02-02 13:02:58', '2024-02-02 13:03:20'),
('0312495', '2023-06-12', '03', '12', 'Completada', 'correctivo', '4560', 'Amortiguadores dañados', 'DEF789', '006567890', 'Andrés López', 'kilometros', 25000, 1000, 'El reemplazo de los amortiguadores es necesario debido a un problema en el sistema de dirección. Hazlo antes de los 25,000 km para evitar problemas adicionales.', 600000, NULL, NULL, '2023-11-02 13:02:58', '2023-11-02 13:03:20'),
('0312502', '2023-07-18', '03', '12', 'Completada', 'correctivo', NULL, 'Amortiguadores y resortes dañados', 'NOP456', '001012345', 'Carlos Lopez', 'kilometros', 80000, 5000, 'El reemplazo de amortiguadores y resortes es necesario debido a problemas en el sistema de suspensión. Hazlo antes de los 80,000 km para garantizar una conducción segura.', 900000, NULL, NULL, '2024-01-02 14:35:52', '2024-01-02 14:36:04'),
('0312529', '2023-06-18', '03', '12', 'Completada', 'correctivo', NULL, 'Amortiguadores y resortes dañados', 'NOP456', '001012345', 'Carlos Lopez', 'kilometros', 80000, 5000, 'El reemplazo de amortiguadores y resortes es necesario debido a problemas en el sistema de suspensión. Hazlo antes de los 80,000 km para garantizar una conducción segura.', 900000, NULL, NULL, '2023-12-02 14:35:52', '2023-12-02 14:36:04'),
('0312556', '2023-08-12', '03', '12', 'Completada', 'correctivo', '4560', 'Amortiguadores dañados', 'DEF789', '006567890', 'Andrés López', 'kilometros', 25000, 1000, 'El reemplazo de los amortiguadores es necesario debido a un problema en el sistema de dirección. Hazlo antes de los 25,000 km para evitar problemas adicionales.', 600000, NULL, NULL, '2024-01-02 13:02:58', '2024-01-02 13:03:20'),
('0312561', '2023-07-18', '03', '12', 'Completada', 'correctivo', NULL, 'Amortiguadores y resortes dañados', 'NOP456', '001012345', 'Carlos Lopez', 'kilometros', 80000, 5000, 'El reemplazo de amortiguadores y resortes es necesario debido a problemas en el sistema de suspensión. Hazlo antes de los 80,000 km para garantizar una conducción segura.', 900000, NULL, NULL, '2024-01-02 14:35:52', '2024-01-02 14:36:04'),
('0312608', '2023-06-18', '03', '12', 'Completada', 'correctivo', NULL, 'Amortiguadores y resortes dañados', 'NOP456', '001012345', 'Carlos Lopez', 'kilometros', 80000, 5000, 'El reemplazo de amortiguadores y resortes es necesario debido a problemas en el sistema de suspensión. Hazlo antes de los 80,000 km para garantizar una conducción segura.', 900000, NULL, NULL, '2023-12-02 14:35:52', '2023-12-02 14:36:04'),
('0312647', '2023-07-12', '03', '12', 'Completada', 'correctivo', '4560', 'Amortiguadores dañados', 'DEF789', '006567890', 'Andrés López', 'kilometros', 25000, 1000, 'El reemplazo de los amortiguadores es necesario debido a un problema en el sistema de dirección. Hazlo antes de los 25,000 km para evitar problemas adicionales.', 600000, NULL, NULL, '2023-12-02 13:02:58', '2023-12-02 13:03:20'),
('0312648', '2023-08-12', '03', '12', 'Completada', 'correctivo', '4560', 'Amortiguadores dañados', 'DEF789', '006567890', 'Andrés López', 'kilometros', 25000, 1000, 'El reemplazo de los amortiguadores es necesario debido a un problema en el sistema de dirección. Hazlo antes de los 25,000 km para evitar problemas adicionales.', 600000, NULL, NULL, '2024-01-02 13:02:58', '2024-01-02 13:03:20'),
('0312679', '2023-06-12', '03', '12', 'Completada', 'correctivo', '4560', 'Amortiguadores dañados', 'DEF789', '006567890', 'Andrés López', 'kilometros', 25000, 1000, 'El reemplazo de los amortiguadores es necesario debido a un problema en el sistema de dirección. Hazlo antes de los 25,000 km para evitar problemas adicionales.', 600000, NULL, NULL, '2023-11-02 13:02:58', '2023-11-02 13:03:20'),
('0312718', '2023-06-12', '03', '12', 'Completada', 'correctivo', '4560', 'Amortiguadores dañados', 'DEF789', '006567890', 'Andrés López', 'kilometros', 25000, 1000, 'El reemplazo de los amortiguadores es necesario debido a un problema en el sistema de dirección. Hazlo antes de los 25,000 km para evitar problemas adicionales.', 600000, NULL, NULL, '2023-11-02 13:02:58', '2023-11-02 13:03:20'),
('0312733', '2023-08-12', '03', '12', 'Completada', 'correctivo', '4560', 'Amortiguadores dañados', 'DEF789', '006567890', 'Andrés López', 'kilometros', 25000, 1000, 'El reemplazo de los amortiguadores es necesario debido a un problema en el sistema de dirección. Hazlo antes de los 25,000 km para evitar problemas adicionales.', 600000, NULL, NULL, '2024-01-02 13:02:58', '2024-01-02 13:03:20'),
('0312738', '2023-05-18', '03', '12', 'Completada', 'correctivo', NULL, 'Amortiguadores y resortes dañados', 'NOP456', '001012345', 'Carlos Lopez', 'kilometros', 80000, 5000, 'El reemplazo de amortiguadores y resortes es necesario debido a problemas en el sistema de suspensión. Hazlo antes de los 80,000 km para garantizar una conducción segura.', 900000, NULL, NULL, '2023-11-02 14:35:52', '2023-11-02 14:36:04'),
('0312751', '2023-07-18', '03', '12', 'Completada', 'correctivo', NULL, 'Amortiguadores y resortes dañados', 'NOP456', '001012345', 'Carlos Lopez', 'kilometros', 80000, 5000, 'El reemplazo de amortiguadores y resortes es necesario debido a problemas en el sistema de suspensión. Hazlo antes de los 80,000 km para garantizar una conducción segura.', 900000, NULL, NULL, '2024-01-02 14:35:52', '2024-01-02 14:36:04'),
('0312757', '2023-05-18', '03', '12', 'Completada', 'correctivo', NULL, 'Amortiguadores y resortes dañados', 'NOP456', '001012345', 'Carlos Lopez', 'kilometros', 80000, 5000, 'El reemplazo de amortiguadores y resortes es necesario debido a problemas en el sistema de suspensión. Hazlo antes de los 80,000 km para garantizar una conducción segura.', 900000, NULL, NULL, '2023-11-02 14:35:52', '2023-11-02 14:36:04'),
('0312789', '2023-06-18', '03', '12', 'Completada', 'correctivo', NULL, 'Amortiguadores y resortes dañados', 'NOP456', '001012345', 'Carlos Lopez', 'kilometros', 80000, 5000, 'El reemplazo de amortiguadores y resortes es necesario debido a problemas en el sistema de suspensión. Hazlo antes de los 80,000 km para garantizar una conducción segura.', 900000, NULL, NULL, '2023-12-02 14:35:52', '2023-12-02 14:36:04'),
('0312880', '2023-08-18', '03', '12', 'Completada', 'correctivo', NULL, 'Amortiguadores y resortes dañados', 'NOP456', '001012345', 'Carlos Lopez', 'kilometros', 80000, 5000, 'El reemplazo de amortiguadores y resortes es necesario debido a problemas en el sistema de suspensión. Hazlo antes de los 80,000 km para garantizar una conducción segura.', 900000, NULL, NULL, '2024-02-02 14:35:52', '2024-02-02 14:36:04'),
('0312966', '2023-07-12', '03', '12', 'Completada', 'correctivo', '4560', 'Amortiguadores dañados', 'DEF789', '006567890', 'Andrés López', 'kilometros', 25000, 1000, 'El reemplazo de los amortiguadores es necesario debido a un problema en el sistema de dirección. Hazlo antes de los 25,000 km para evitar problemas adicionales.', 600000, NULL, NULL, '2023-12-02 13:02:58', '2023-12-02 13:03:20'),
('0333002', '2026-05-05', '03', '33', 'Completada', 'correctivo', '0007', 'Problema en el sistema de suspensión', 'GHI567', '015456789', 'Laura Rodríguez', 'kilometros', 120000, 5000, 'El sistema de suspensión debe ser reparado antes de los 120,000 km para garantizar una conducción segura y cómoda.', 450000, NULL, NULL, '2023-10-02 16:25:06', '2023-10-02 16:25:23');
INSERT INTO `servicios` (`cod_ser`, `fec_ser`, `sis_ser`, `act_ser`, `est_ser`, `tip_ser`, `fal_ser`, `det_ser`, `cam_ser`, `tal_ser`, `res_ser`, `tip_int_ser`, `int_ser`, `int_ale_ser`, `ale_ser`, `cos_ser`, `alm_ser`, `can_ser`, `created_at`, `updated_at`) VALUES
('0419002', '2023-06-21', '04', '19', 'Cancelada', 'preventivo', NULL, 'Mantenimiento programado', 'EFG456', NULL, 'Laura Rodríguez', 'kilometros', 30000, 1000, 'l cambio de aceite de la transmisión es esencial para mantener el buen funcionamiento. Hazlo antes de los 30,000 km para prevenir problemas.', 350000, NULL, NULL, '2023-10-02 13:10:48', '2023-10-02 13:11:03'),
('0419129', '2023-08-21', '04', '19', 'Cancelada', 'preventivo', NULL, 'Mantenimiento programado', 'EFG456', NULL, 'Laura Rodríguez', 'kilometros', 30000, 1000, 'l cambio de aceite de la transmisión es esencial para mantener el buen funcionamiento. Hazlo antes de los 30,000 km para prevenir problemas.', 350000, NULL, NULL, '2023-12-02 13:10:48', '2023-12-02 13:11:03'),
('0419217', '2023-08-21', '04', '19', 'Cancelada', 'preventivo', NULL, 'Mantenimiento programado', 'EFG456', NULL, 'Laura Rodríguez', 'kilometros', 30000, 1000, 'l cambio de aceite de la transmisión es esencial para mantener el buen funcionamiento. Hazlo antes de los 30,000 km para prevenir problemas.', 350000, NULL, NULL, '2023-12-02 13:10:48', '2023-12-02 13:11:03'),
('0419272', '2023-07-21', '04', '19', 'Cancelada', 'preventivo', NULL, 'Mantenimiento programado', 'EFG456', NULL, 'Laura Rodríguez', 'kilometros', 30000, 1000, 'l cambio de aceite de la transmisión es esencial para mantener el buen funcionamiento. Hazlo antes de los 30,000 km para prevenir problemas.', 350000, NULL, NULL, '2023-11-02 13:10:48', '2023-11-02 13:11:03'),
('0419311', '2023-09-21', '04', '19', 'Cancelada', 'preventivo', NULL, 'Mantenimiento programado', 'EFG456', NULL, 'Laura Rodríguez', 'kilometros', 30000, 1000, 'l cambio de aceite de la transmisión es esencial para mantener el buen funcionamiento. Hazlo antes de los 30,000 km para prevenir problemas.', 350000, NULL, NULL, '2024-01-02 13:10:48', '2024-01-02 13:11:03'),
('0419370', '2023-07-21', '04', '19', 'Cancelada', 'preventivo', NULL, 'Mantenimiento programado', 'EFG456', NULL, 'Laura Rodríguez', 'kilometros', 30000, 1000, 'l cambio de aceite de la transmisión es esencial para mantener el buen funcionamiento. Hazlo antes de los 30,000 km para prevenir problemas.', 350000, NULL, NULL, '2023-11-02 13:10:48', '2023-11-02 13:11:03'),
('0419375', '2023-07-21', '04', '19', 'Cancelada', 'preventivo', NULL, 'Mantenimiento programado', 'EFG456', NULL, 'Laura Rodríguez', 'kilometros', 30000, 1000, 'l cambio de aceite de la transmisión es esencial para mantener el buen funcionamiento. Hazlo antes de los 30,000 km para prevenir problemas.', 350000, NULL, NULL, '2023-11-02 13:10:48', '2023-11-02 13:11:03'),
('0419425', '2023-08-21', '04', '19', 'Cancelada', 'preventivo', NULL, 'Mantenimiento programado', 'EFG456', NULL, 'Laura Rodríguez', 'kilometros', 30000, 1000, 'l cambio de aceite de la transmisión es esencial para mantener el buen funcionamiento. Hazlo antes de los 30,000 km para prevenir problemas.', 350000, NULL, NULL, '2023-12-02 13:10:48', '2023-12-02 13:11:03'),
('0419472', '2023-09-21', '04', '19', 'Cancelada', 'preventivo', NULL, 'Mantenimiento programado', 'EFG456', NULL, 'Laura Rodríguez', 'kilometros', 30000, 1000, 'l cambio de aceite de la transmisión es esencial para mantener el buen funcionamiento. Hazlo antes de los 30,000 km para prevenir problemas.', 350000, NULL, NULL, '2024-01-02 13:10:48', '2024-01-02 13:11:03'),
('0419568', '2023-09-21', '04', '19', 'Cancelada', 'preventivo', NULL, 'Mantenimiento programado', 'EFG456', NULL, 'Laura Rodríguez', 'kilometros', 30000, 1000, 'l cambio de aceite de la transmisión es esencial para mantener el buen funcionamiento. Hazlo antes de los 30,000 km para prevenir problemas.', 350000, NULL, NULL, '2024-01-02 13:10:48', '2024-01-02 13:11:03'),
('0419609', '2023-10-21', '04', '19', 'Cancelada', 'preventivo', NULL, 'Mantenimiento programado', 'EFG456', NULL, 'Laura Rodríguez', 'kilometros', 30000, 1000, 'l cambio de aceite de la transmisión es esencial para mantener el buen funcionamiento. Hazlo antes de los 30,000 km para prevenir problemas.', 350000, NULL, NULL, '2024-02-02 13:10:48', '2024-02-02 13:11:03'),
('0419612', '2023-07-21', '04', '19', 'Cancelada', 'preventivo', NULL, 'Mantenimiento programado', 'EFG456', NULL, 'Laura Rodríguez', 'kilometros', 30000, 1000, 'l cambio de aceite de la transmisión es esencial para mantener el buen funcionamiento. Hazlo antes de los 30,000 km para prevenir problemas.', 350000, NULL, NULL, '2023-11-02 13:10:48', '2023-11-02 13:11:03'),
('0419771', '2023-08-21', '04', '19', 'Cancelada', 'preventivo', NULL, 'Mantenimiento programado', 'EFG456', NULL, 'Laura Rodríguez', 'kilometros', 30000, 1000, 'l cambio de aceite de la transmisión es esencial para mantener el buen funcionamiento. Hazlo antes de los 30,000 km para prevenir problemas.', 350000, NULL, NULL, '2023-12-02 13:10:48', '2023-12-02 13:11:03'),
('0419789', '2023-08-21', '04', '19', 'Cancelada', 'preventivo', NULL, 'Mantenimiento programado', 'EFG456', NULL, 'Laura Rodríguez', 'kilometros', 30000, 1000, 'l cambio de aceite de la transmisión es esencial para mantener el buen funcionamiento. Hazlo antes de los 30,000 km para prevenir problemas.', 350000, NULL, NULL, '2023-12-02 13:10:48', '2023-12-02 13:11:03'),
('0419825', '2023-08-21', '04', '19', 'Cancelada', 'preventivo', NULL, 'Mantenimiento programado', 'EFG456', NULL, 'Laura Rodríguez', 'kilometros', 30000, 1000, 'l cambio de aceite de la transmisión es esencial para mantener el buen funcionamiento. Hazlo antes de los 30,000 km para prevenir problemas.', 350000, NULL, NULL, '2023-12-02 13:10:48', '2023-12-02 13:11:03'),
('0419931', '2023-09-21', '04', '19', 'Cancelada', 'preventivo', NULL, 'Mantenimiento programado', 'EFG456', NULL, 'Laura Rodríguez', 'kilometros', 30000, 1000, 'l cambio de aceite de la transmisión es esencial para mantener el buen funcionamiento. Hazlo antes de los 30,000 km para prevenir problemas.', 350000, NULL, NULL, '2024-01-02 13:10:48', '2024-01-02 13:11:03'),
('0426002', '2024-04-25', '04', '26', 'Completada', 'correctivo', NULL, 'Caja de cambios dañada', 'L34067', '013234567', 'Luis Gonzalez', 'kilometros', 700000, 5000, 'El reemplazo de la caja de cambios es necesario debido a problemas en el sistema eléctrico. Hazlo antes de los 70,000 km para evitar problemas adicionales.', 800000, NULL, NULL, '2023-10-02 14:16:03', '2023-10-02 14:16:27'),
('0432002', '2023-01-15', '04', '32', 'Completada', 'correctivo', '0024', 'Problema en el sistema de transmisión', 'FMN213', '013234567', 'Camilo Diaz', 'kilometros', 110000, 6500, 'El problema en el sistema de transmisión debe ser reparado antes de los 110,000 km para garantizar el funcionamiento adecuado del vehículo.', 700000, NULL, NULL, '2023-10-02 16:17:50', '2023-10-02 16:18:09'),
('0432196', '2023-05-15', '04', '32', 'Completada', 'correctivo', '0024', 'Problema en el sistema de transmisión', 'FMN213', '013234567', 'Camilo Diaz', 'kilometros', 110000, 6500, 'El problema en el sistema de transmisión debe ser reparado antes de los 110,000 km para garantizar el funcionamiento adecuado del vehículo.', 700000, NULL, NULL, '2024-02-02 16:17:50', '2024-02-02 16:18:09'),
('0432200', '2023-03-15', '04', '32', 'Completada', 'correctivo', '0024', 'Problema en el sistema de transmisión', 'FMN213', '013234567', 'Camilo Diaz', 'kilometros', 110000, 6500, 'El problema en el sistema de transmisión debe ser reparado antes de los 110,000 km para garantizar el funcionamiento adecuado del vehículo.', 700000, NULL, NULL, '2023-12-02 16:17:50', '2023-12-02 16:18:09'),
('0432280', '2023-04-15', '04', '32', 'Completada', 'correctivo', '0024', 'Problema en el sistema de transmisión', 'FMN213', '013234567', 'Camilo Diaz', 'kilometros', 110000, 6500, 'El problema en el sistema de transmisión debe ser reparado antes de los 110,000 km para garantizar el funcionamiento adecuado del vehículo.', 700000, NULL, NULL, '2024-01-02 16:17:50', '2024-01-02 16:18:09'),
('0432287', '2023-03-15', '04', '32', 'Completada', 'correctivo', '0024', 'Problema en el sistema de transmisión', 'FMN213', '013234567', 'Camilo Diaz', 'kilometros', 110000, 6500, 'El problema en el sistema de transmisión debe ser reparado antes de los 110,000 km para garantizar el funcionamiento adecuado del vehículo.', 700000, NULL, NULL, '2023-12-02 16:17:50', '2023-12-02 16:18:09'),
('0432328', '2023-02-15', '04', '32', 'Completada', 'correctivo', '0024', 'Problema en el sistema de transmisión', 'FMN213', '013234567', 'Camilo Diaz', 'kilometros', 110000, 6500, 'El problema en el sistema de transmisión debe ser reparado antes de los 110,000 km para garantizar el funcionamiento adecuado del vehículo.', 700000, NULL, NULL, '2023-11-02 16:17:50', '2023-11-02 16:18:09'),
('0432524', '2023-02-15', '04', '32', 'Completada', 'correctivo', '0024', 'Problema en el sistema de transmisión', 'FMN213', '013234567', 'Camilo Diaz', 'kilometros', 110000, 6500, 'El problema en el sistema de transmisión debe ser reparado antes de los 110,000 km para garantizar el funcionamiento adecuado del vehículo.', 700000, NULL, NULL, '2023-11-02 16:17:50', '2023-11-02 16:18:09'),
('0432540', '2023-03-15', '04', '32', 'Completada', 'correctivo', '0024', 'Problema en el sistema de transmisión', 'FMN213', '013234567', 'Camilo Diaz', 'kilometros', 110000, 6500, 'El problema en el sistema de transmisión debe ser reparado antes de los 110,000 km para garantizar el funcionamiento adecuado del vehículo.', 700000, NULL, NULL, '2023-12-02 16:17:50', '2023-12-02 16:18:09'),
('0432637', '2023-04-15', '04', '32', 'Completada', 'correctivo', '0024', 'Problema en el sistema de transmisión', 'FMN213', '013234567', 'Camilo Diaz', 'kilometros', 110000, 6500, 'El problema en el sistema de transmisión debe ser reparado antes de los 110,000 km para garantizar el funcionamiento adecuado del vehículo.', 700000, NULL, NULL, '2024-01-02 16:17:50', '2024-01-02 16:18:09'),
('0432691', '2023-03-15', '04', '32', 'Completada', 'correctivo', '0024', 'Problema en el sistema de transmisión', 'FMN213', '013234567', 'Camilo Diaz', 'kilometros', 110000, 6500, 'El problema en el sistema de transmisión debe ser reparado antes de los 110,000 km para garantizar el funcionamiento adecuado del vehículo.', 700000, NULL, NULL, '2023-12-02 16:17:50', '2023-12-02 16:18:09'),
('0432725', '2023-03-15', '04', '32', 'Completada', 'correctivo', '0024', 'Problema en el sistema de transmisión', 'FMN213', '013234567', 'Camilo Diaz', 'kilometros', 110000, 6500, 'El problema en el sistema de transmisión debe ser reparado antes de los 110,000 km para garantizar el funcionamiento adecuado del vehículo.', 700000, NULL, NULL, '2023-12-02 16:17:50', '2023-12-02 16:18:09'),
('0432804', '2023-02-15', '04', '32', 'Completada', 'correctivo', '0024', 'Problema en el sistema de transmisión', 'FMN213', '013234567', 'Camilo Diaz', 'kilometros', 110000, 6500, 'El problema en el sistema de transmisión debe ser reparado antes de los 110,000 km para garantizar el funcionamiento adecuado del vehículo.', 700000, NULL, NULL, '2023-11-02 16:17:50', '2023-11-02 16:18:09'),
('0432834', '2023-04-15', '04', '32', 'Completada', 'correctivo', '0024', 'Problema en el sistema de transmisión', 'FMN213', '013234567', 'Camilo Diaz', 'kilometros', 110000, 6500, 'El problema en el sistema de transmisión debe ser reparado antes de los 110,000 km para garantizar el funcionamiento adecuado del vehículo.', 700000, NULL, NULL, '2024-01-02 16:17:50', '2024-01-02 16:18:09'),
('0432848', '2023-02-15', '04', '32', 'Completada', 'correctivo', '0024', 'Problema en el sistema de transmisión', 'FMN213', '013234567', 'Camilo Diaz', 'kilometros', 110000, 6500, 'El problema en el sistema de transmisión debe ser reparado antes de los 110,000 km para garantizar el funcionamiento adecuado del vehículo.', 700000, NULL, NULL, '2023-11-02 16:17:50', '2023-11-02 16:18:09'),
('0432865', '2023-04-15', '04', '32', 'Completada', 'correctivo', '0024', 'Problema en el sistema de transmisión', 'FMN213', '013234567', 'Camilo Diaz', 'kilometros', 110000, 6500, 'El problema en el sistema de transmisión debe ser reparado antes de los 110,000 km para garantizar el funcionamiento adecuado del vehículo.', 700000, NULL, NULL, '2024-01-02 16:17:50', '2024-01-02 16:18:09'),
('0432973', '2023-03-15', '04', '32', 'Completada', 'correctivo', '0024', 'Problema en el sistema de transmisión', 'FMN213', '013234567', 'Camilo Diaz', 'kilometros', 110000, 6500, 'El problema en el sistema de transmisión debe ser reparado antes de los 110,000 km para garantizar el funcionamiento adecuado del vehículo.', 700000, NULL, NULL, '2023-12-02 16:17:50', '2023-12-02 16:18:09'),
('0510002', '2023-07-05', '05', '10', 'Completada', 'correctivo', '0016', 'Batería agotada', 'FMN213', '002123456', 'Carlos García', 'kilometros', 40000, 1000, 'La batería agotada debe ser reemplazada debido a problemas en el sistema de suspensión. Hazlo antes de los 40,000 km para evitar problemas adicionales.', 180000, '0004', 2, '2023-10-02 13:12:47', '2023-10-02 13:13:01'),
('0510118', '2023-09-05', '05', '10', 'Completada', 'correctivo', '0016', 'Batería agotada', 'FMN213', '002123456', 'Carlos García', 'kilometros', 40000, 1000, 'La batería agotada debe ser reemplazada debido a problemas en el sistema de suspensión. Hazlo antes de los 40,000 km para evitar problemas adicionales.', 180000, '0004', 2, '2023-12-02 13:12:47', '2023-12-02 13:13:01'),
('0510181', '2023-08-05', '05', '10', 'Completada', 'correctivo', '0016', 'Batería agotada', 'FMN213', '002123456', 'Carlos García', 'kilometros', 40000, 1000, 'La batería agotada debe ser reemplazada debido a problemas en el sistema de suspensión. Hazlo antes de los 40,000 km para evitar problemas adicionales.', 180000, '0004', 2, '2023-11-02 13:12:47', '2023-11-02 13:13:01'),
('0510251', '2023-08-05', '05', '10', 'Completada', 'correctivo', '0016', 'Batería agotada', 'FMN213', '002123456', 'Carlos García', 'kilometros', 40000, 1000, 'La batería agotada debe ser reemplazada debido a problemas en el sistema de suspensión. Hazlo antes de los 40,000 km para evitar problemas adicionales.', 180000, '0004', 2, '2023-11-02 13:12:47', '2023-11-02 13:13:01'),
('0510281', '2023-10-05', '05', '10', 'Completada', 'correctivo', '0016', 'Batería agotada', 'FMN213', '002123456', 'Carlos García', 'kilometros', 40000, 1000, 'La batería agotada debe ser reemplazada debido a problemas en el sistema de suspensión. Hazlo antes de los 40,000 km para evitar problemas adicionales.', 180000, '0004', 2, '2024-01-02 13:12:47', '2024-01-02 13:13:01'),
('0510312', '2023-09-05', '05', '10', 'Completada', 'correctivo', '0016', 'Batería agotada', 'FMN213', '002123456', 'Carlos García', 'kilometros', 40000, 1000, 'La batería agotada debe ser reemplazada debido a problemas en el sistema de suspensión. Hazlo antes de los 40,000 km para evitar problemas adicionales.', 180000, '0004', 2, '2023-12-02 13:12:47', '2023-12-02 13:13:01'),
('0510361', '2023-09-05', '05', '10', 'Completada', 'correctivo', '0016', 'Batería agotada', 'FMN213', '002123456', 'Carlos García', 'kilometros', 40000, 1000, 'La batería agotada debe ser reemplazada debido a problemas en el sistema de suspensión. Hazlo antes de los 40,000 km para evitar problemas adicionales.', 180000, '0004', 2, '2023-12-02 13:12:47', '2023-12-02 13:13:01'),
('0510370', '2023-11-05', '05', '10', 'Completada', 'correctivo', '0016', 'Batería agotada', 'FMN213', '002123456', 'Carlos García', 'kilometros', 40000, 1000, 'La batería agotada debe ser reemplazada debido a problemas en el sistema de suspensión. Hazlo antes de los 40,000 km para evitar problemas adicionales.', 180000, '0004', 2, '2024-02-02 13:12:47', '2024-02-02 13:13:01'),
('0510492', '2023-08-05', '05', '10', 'Completada', 'correctivo', '0016', 'Batería agotada', 'FMN213', '002123456', 'Carlos García', 'kilometros', 40000, 1000, 'La batería agotada debe ser reemplazada debido a problemas en el sistema de suspensión. Hazlo antes de los 40,000 km para evitar problemas adicionales.', 180000, '0004', 2, '2023-11-02 13:12:47', '2023-11-02 13:13:01'),
('0510586', '2023-09-05', '05', '10', 'Completada', 'correctivo', '0016', 'Batería agotada', 'FMN213', '002123456', 'Carlos García', 'kilometros', 40000, 1000, 'La batería agotada debe ser reemplazada debido a problemas en el sistema de suspensión. Hazlo antes de los 40,000 km para evitar problemas adicionales.', 180000, '0004', 2, '2023-12-02 13:12:47', '2023-12-02 13:13:01'),
('0510693', '2023-10-05', '05', '10', 'Completada', 'correctivo', '0016', 'Batería agotada', 'FMN213', '002123456', 'Carlos García', 'kilometros', 40000, 1000, 'La batería agotada debe ser reemplazada debido a problemas en el sistema de suspensión. Hazlo antes de los 40,000 km para evitar problemas adicionales.', 180000, '0004', 2, '2024-01-02 13:12:47', '2024-01-02 13:13:01'),
('0510714', '2023-08-05', '05', '10', 'Completada', 'correctivo', '0016', 'Batería agotada', 'FMN213', '002123456', 'Carlos García', 'kilometros', 40000, 1000, 'La batería agotada debe ser reemplazada debido a problemas en el sistema de suspensión. Hazlo antes de los 40,000 km para evitar problemas adicionales.', 180000, '0004', 2, '2023-11-02 13:12:47', '2023-11-02 13:13:01'),
('0510832', '2023-09-05', '05', '10', 'Completada', 'correctivo', '0016', 'Batería agotada', 'FMN213', '002123456', 'Carlos García', 'kilometros', 40000, 1000, 'La batería agotada debe ser reemplazada debido a problemas en el sistema de suspensión. Hazlo antes de los 40,000 km para evitar problemas adicionales.', 180000, '0004', 2, '2023-12-02 13:12:47', '2023-12-02 13:13:01'),
('0510873', '2023-10-05', '05', '10', 'Completada', 'correctivo', '0016', 'Batería agotada', 'FMN213', '002123456', 'Carlos García', 'kilometros', 40000, 1000, 'La batería agotada debe ser reemplazada debido a problemas en el sistema de suspensión. Hazlo antes de los 40,000 km para evitar problemas adicionales.', 180000, '0004', 2, '2024-01-02 13:12:47', '2024-01-02 13:13:01'),
('0510909', '2023-10-05', '05', '10', 'Completada', 'correctivo', '0016', 'Batería agotada', 'FMN213', '002123456', 'Carlos García', 'kilometros', 40000, 1000, 'La batería agotada debe ser reemplazada debido a problemas en el sistema de suspensión. Hazlo antes de los 40,000 km para evitar problemas adicionales.', 180000, '0004', 2, '2024-01-02 13:12:47', '2024-01-02 13:13:01'),
('0510951', '2023-09-05', '05', '10', 'Completada', 'correctivo', '0016', 'Batería agotada', 'FMN213', '002123456', 'Carlos García', 'kilometros', 40000, 1000, 'La batería agotada debe ser reemplazada debido a problemas en el sistema de suspensión. Hazlo antes de los 40,000 km para evitar problemas adicionales.', 180000, '0004', 2, '2023-12-02 13:12:47', '2023-12-02 13:13:01'),
('0525002', '2023-12-08', '05', '25', 'Completada', 'correctivo', '0003', 'Cortocircuito en el cableado', 'JBL-411', '100901234', 'Juan Gonzalez', 'kilometros', 55000, 1000, 'El sistema eléctrico debe ser reparado debido a problemas en el sistema de lubricación. Hazlo antes de los 55,000 km para evitar problemas adicionales.', 450000, '7877', 2, '2023-10-02 14:01:14', '2023-10-02 14:01:47'),
('0606002', '2023-04-24', '06', '06', 'Completada', 'preventivo', NULL, 'Mantenimiento programado', 'DEF789', '003234567', 'María González', 'kilometros', 15000, 1000, 'Realiza la alineación y balanceo antes de los 15,000 km para asegurar un manejo seguro y evitar desgaste irregular de las llantas.', 200000, NULL, NULL, '2023-10-02 13:00:21', '2023-10-02 13:03:30'),
('0606157', '2023-06-24', '06', '06', 'Completada', 'preventivo', NULL, 'Mantenimiento programado', 'DEF789', '003234567', 'María González', 'kilometros', 15000, 1000, 'Realiza la alineación y balanceo antes de los 15,000 km para asegurar un manejo seguro y evitar desgaste irregular de las llantas.', 200000, NULL, NULL, '2023-12-02 13:00:21', '2023-12-02 13:03:30'),
('0606323', '2023-07-24', '06', '06', 'Completada', 'preventivo', NULL, 'Mantenimiento programado', 'DEF789', '003234567', 'María González', 'kilometros', 15000, 1000, 'Realiza la alineación y balanceo antes de los 15,000 km para asegurar un manejo seguro y evitar desgaste irregular de las llantas.', 200000, NULL, NULL, '2024-01-02 13:00:21', '2024-01-02 13:03:30'),
('0606345', '2023-07-24', '06', '06', 'Completada', 'preventivo', NULL, 'Mantenimiento programado', 'DEF789', '003234567', 'María González', 'kilometros', 15000, 1000, 'Realiza la alineación y balanceo antes de los 15,000 km para asegurar un manejo seguro y evitar desgaste irregular de las llantas.', 200000, NULL, NULL, '2024-01-02 13:00:21', '2024-01-02 13:03:30'),
('0606488', '2023-05-24', '06', '06', 'Completada', 'preventivo', NULL, 'Mantenimiento programado', 'DEF789', '003234567', 'María González', 'kilometros', 15000, 1000, 'Realiza la alineación y balanceo antes de los 15,000 km para asegurar un manejo seguro y evitar desgaste irregular de las llantas.', 200000, NULL, NULL, '2023-11-02 13:00:21', '2023-11-02 13:03:30'),
('0606515', '2023-05-24', '06', '06', 'Completada', 'preventivo', NULL, 'Mantenimiento programado', 'DEF789', '003234567', 'María González', 'kilometros', 15000, 1000, 'Realiza la alineación y balanceo antes de los 15,000 km para asegurar un manejo seguro y evitar desgaste irregular de las llantas.', 200000, NULL, NULL, '2023-11-02 13:00:21', '2023-11-02 13:03:30'),
('0606581', '2023-06-24', '06', '06', 'Completada', 'preventivo', NULL, 'Mantenimiento programado', 'DEF789', '003234567', 'María González', 'kilometros', 15000, 1000, 'Realiza la alineación y balanceo antes de los 15,000 km para asegurar un manejo seguro y evitar desgaste irregular de las llantas.', 200000, NULL, NULL, '2023-12-02 13:00:21', '2023-12-02 13:03:30'),
('0606621', '2023-08-24', '06', '06', 'Completada', 'preventivo', NULL, 'Mantenimiento programado', 'DEF789', '003234567', 'María González', 'kilometros', 15000, 1000, 'Realiza la alineación y balanceo antes de los 15,000 km para asegurar un manejo seguro y evitar desgaste irregular de las llantas.', 200000, NULL, NULL, '2024-02-02 13:00:21', '2024-02-02 13:03:30'),
('0606634', '2023-05-24', '06', '06', 'Completada', 'preventivo', NULL, 'Mantenimiento programado', 'DEF789', '003234567', 'María González', 'kilometros', 15000, 1000, 'Realiza la alineación y balanceo antes de los 15,000 km para asegurar un manejo seguro y evitar desgaste irregular de las llantas.', 200000, NULL, NULL, '2023-11-02 13:00:21', '2023-11-02 13:03:30'),
('0606753', '2023-06-24', '06', '06', 'Completada', 'preventivo', NULL, 'Mantenimiento programado', 'DEF789', '003234567', 'María González', 'kilometros', 15000, 1000, 'Realiza la alineación y balanceo antes de los 15,000 km para asegurar un manejo seguro y evitar desgaste irregular de las llantas.', 200000, NULL, NULL, '2023-12-02 13:00:21', '2023-12-02 13:03:30'),
('0606791', '2023-05-24', '06', '06', 'Completada', 'preventivo', NULL, 'Mantenimiento programado', 'DEF789', '003234567', 'María González', 'kilometros', 15000, 1000, 'Realiza la alineación y balanceo antes de los 15,000 km para asegurar un manejo seguro y evitar desgaste irregular de las llantas.', 200000, NULL, NULL, '2023-11-02 13:00:21', '2023-11-02 13:03:30'),
('0623002', '2023-10-25', '06', '23', 'Completada', 'correctivo', '0021', 'Falla en la dirección asistida', 'L34067', '002123456', 'Manuel Pérez', 'kilometros', 50000, 1000, 'La dirección asistida debe ser reemplazada debido a problemas en el sistema eléctrico. Hazlo antes de los 50,000 km para garantizar la seguridad.', 500000, NULL, NULL, '2023-10-02 13:24:32', '2023-10-02 13:24:43'),
('0623372', '2023-12-25', '06', '23', 'Completada', 'correctivo', '0021', 'Falla en la dirección asistida', 'L34067', '002123456', 'Manuel Pérez', 'kilometros', 50000, 1000, 'La dirección asistida debe ser reemplazada debido a problemas en el sistema eléctrico. Hazlo antes de los 50,000 km para garantizar la seguridad.', 500000, NULL, NULL, '2023-12-02 13:24:32', '2023-12-02 13:24:43'),
('0623443', '2023-11-25', '06', '23', 'Completada', 'correctivo', '0021', 'Falla en la dirección asistida', 'L34067', '002123456', 'Manuel Pérez', 'kilometros', 50000, 1000, 'La dirección asistida debe ser reemplazada debido a problemas en el sistema eléctrico. Hazlo antes de los 50,000 km para garantizar la seguridad.', 500000, NULL, NULL, '2023-11-02 13:24:32', '2023-11-02 13:24:43'),
('0623578', '2023-11-25', '06', '23', 'Completada', 'correctivo', '0021', 'Falla en la dirección asistida', 'L34067', '002123456', 'Manuel Pérez', 'kilometros', 50000, 1000, 'La dirección asistida debe ser reemplazada debido a problemas en el sistema eléctrico. Hazlo antes de los 50,000 km para garantizar la seguridad.', 500000, NULL, NULL, '2023-11-02 13:24:32', '2023-11-02 13:24:43'),
('0623615', '2023-11-25', '06', '23', 'Completada', 'correctivo', '0021', 'Falla en la dirección asistida', 'L34067', '002123456', 'Manuel Pérez', 'kilometros', 50000, 1000, 'La dirección asistida debe ser reemplazada debido a problemas en el sistema eléctrico. Hazlo antes de los 50,000 km para garantizar la seguridad.', 500000, NULL, NULL, '2023-11-02 13:24:32', '2023-11-02 13:24:43'),
('0623672', '2023-12-25', '06', '23', 'Completada', 'correctivo', '0021', 'Falla en la dirección asistida', 'L34067', '002123456', 'Manuel Pérez', 'kilometros', 50000, 1000, 'La dirección asistida debe ser reemplazada debido a problemas en el sistema eléctrico. Hazlo antes de los 50,000 km para garantizar la seguridad.', 500000, NULL, NULL, '2023-12-02 13:24:32', '2023-12-02 13:24:43'),
('0623703', '2023-12-25', '06', '23', 'Completada', 'correctivo', '0021', 'Falla en la dirección asistida', 'L34067', '002123456', 'Manuel Pérez', 'kilometros', 50000, 1000, 'La dirección asistida debe ser reemplazada debido a problemas en el sistema eléctrico. Hazlo antes de los 50,000 km para garantizar la seguridad.', 500000, NULL, NULL, '2023-12-02 13:24:32', '2023-12-02 13:24:43'),
('0624002', '2023-10-25', '06', '24', 'Completada', 'correctivo', '0011', 'Falla en la bomba existente', 'L34067', '300789012', 'Pedro López', 'kilometros', 50000, 1000, 'La bomba de dirección debe ser reemplazada debido a problemas en el sistema de frenos. Hazlo antes de los 50,000 km para garantizar la seguridad del vehículo.', 500000, NULL, NULL, '2023-10-02 13:53:12', '2023-10-02 14:02:00'),
('0624252', '2023-11-25', '06', '24', 'Completada', 'correctivo', '0011', 'Falla en la bomba existente', 'L34067', '300789012', 'Pedro López', 'kilometros', 50000, 1000, 'La bomba de dirección debe ser reemplazada debido a problemas en el sistema de frenos. Hazlo antes de los 50,000 km para garantizar la seguridad del vehículo.', 500000, NULL, NULL, '2023-11-02 13:53:12', '2023-11-02 14:02:00'),
('0624262', '2023-12-25', '06', '24', 'Completada', 'correctivo', '0011', 'Falla en la bomba existente', 'L34067', '300789012', 'Pedro López', 'kilometros', 50000, 1000, 'La bomba de dirección debe ser reemplazada debido a problemas en el sistema de frenos. Hazlo antes de los 50,000 km para garantizar la seguridad del vehículo.', 500000, NULL, NULL, '2023-12-02 13:53:12', '2023-12-02 14:02:00'),
('0624416', '2023-11-25', '06', '24', 'Completada', 'correctivo', '0011', 'Falla en la bomba existente', 'L34067', '300789012', 'Pedro López', 'kilometros', 50000, 1000, 'La bomba de dirección debe ser reemplazada debido a problemas en el sistema de frenos. Hazlo antes de los 50,000 km para garantizar la seguridad del vehículo.', 500000, NULL, NULL, '2023-11-02 13:53:12', '2023-11-02 14:02:00'),
('0624430', '2023-11-25', '06', '24', 'Completada', 'correctivo', '0011', 'Falla en la bomba existente', 'L34067', '300789012', 'Pedro López', 'kilometros', 50000, 1000, 'La bomba de dirección debe ser reemplazada debido a problemas en el sistema de frenos. Hazlo antes de los 50,000 km para garantizar la seguridad del vehículo.', 500000, NULL, NULL, '2023-11-02 13:53:12', '2023-11-02 14:02:00'),
('0624936', '2023-12-25', '06', '24', 'Completada', 'correctivo', '0011', 'Falla en la bomba existente', 'L34067', '300789012', 'Pedro López', 'kilometros', 50000, 1000, 'La bomba de dirección debe ser reemplazada debido a problemas en el sistema de frenos. Hazlo antes de los 50,000 km para garantizar la seguridad del vehículo.', 500000, NULL, NULL, '2023-12-02 13:53:12', '2023-12-02 14:02:00'),
('0624943', '2023-12-25', '06', '24', 'Completada', 'correctivo', '0011', 'Falla en la bomba existente', 'L34067', '300789012', 'Pedro López', 'kilometros', 50000, 1000, 'La bomba de dirección debe ser reemplazada debido a problemas en el sistema de frenos. Hazlo antes de los 50,000 km para garantizar la seguridad del vehículo.', 500000, NULL, NULL, '2023-12-02 13:53:12', '2023-12-02 14:02:00'),
('0637002', '2023-03-20', '06', '37', 'Completada', 'correctivo', '0004', 'Direccional dañada', 'XYZ456', '253752547', 'Luis Gonzalez', 'kilometros', 150000, 6500, 'La direcciónal dañada debe ser reemplazada antes de los 150,000 km para mantener la seguridad en la carretera.', 85000, NULL, NULL, '2023-10-02 16:36:28', '2023-10-02 16:36:40'),
('0637181', '2023-04-20', '06', '37', 'Completada', 'correctivo', '0004', 'Direccional dañada', 'XYZ456', '253752547', 'Luis Gonzalez', 'kilometros', 150000, 6500, 'La direcciónal dañada debe ser reemplazada antes de los 150,000 km para mantener la seguridad en la carretera.', 85000, NULL, NULL, '2023-11-02 16:36:28', '2023-11-02 16:36:40'),
('0637250', '2023-04-20', '06', '37', 'Completada', 'correctivo', '0004', 'Direccional dañada', 'XYZ456', '253752547', 'Luis Gonzalez', 'kilometros', 150000, 6500, 'La direcciónal dañada debe ser reemplazada antes de los 150,000 km para mantener la seguridad en la carretera.', 85000, NULL, NULL, '2023-11-02 16:36:28', '2023-11-02 16:36:40'),
('0637360', '2023-05-20', '06', '37', 'Completada', 'correctivo', '0004', 'Direccional dañada', 'XYZ456', '253752547', 'Luis Gonzalez', 'kilometros', 150000, 6500, 'La direcciónal dañada debe ser reemplazada antes de los 150,000 km para mantener la seguridad en la carretera.', 85000, NULL, NULL, '2023-12-02 16:36:28', '2023-12-02 16:36:40'),
('0637591', '2023-04-20', '06', '37', 'Completada', 'correctivo', '0004', 'Direccional dañada', 'XYZ456', '253752547', 'Luis Gonzalez', 'kilometros', 150000, 6500, 'La direcciónal dañada debe ser reemplazada antes de los 150,000 km para mantener la seguridad en la carretera.', 85000, NULL, NULL, '2023-11-02 16:36:28', '2023-11-02 16:36:40'),
('0637739', '2023-06-20', '06', '37', 'Completada', 'correctivo', '0004', 'Direccional dañada', 'XYZ456', '253752547', 'Luis Gonzalez', 'kilometros', 150000, 6500, 'La direcciónal dañada debe ser reemplazada antes de los 150,000 km para mantener la seguridad en la carretera.', 85000, NULL, NULL, '2024-01-02 16:36:28', '2024-01-02 16:36:40'),
('0637921', '2023-05-20', '06', '37', 'Completada', 'correctivo', '0004', 'Direccional dañada', 'XYZ456', '253752547', 'Luis Gonzalez', 'kilometros', 150000, 6500, 'La direcciónal dañada debe ser reemplazada antes de los 150,000 km para mantener la seguridad en la carretera.', 85000, NULL, NULL, '2023-12-02 16:36:28', '2023-12-02 16:36:40'),
('0637949', '2023-05-20', '06', '37', 'Completada', 'correctivo', '0004', 'Direccional dañada', 'XYZ456', '253752547', 'Luis Gonzalez', 'kilometros', 150000, 6500, 'La direcciónal dañada debe ser reemplazada antes de los 150,000 km para mantener la seguridad en la carretera.', 85000, NULL, NULL, '2023-12-02 16:36:28', '2023-12-02 16:36:40'),
('0721001', '2023-07-10', '07', '21', 'Completada', 'correctivo', NULL, 'Problema en el sistema de escape', 'VWX123', '016567890', 'Camilo Diaz', 'kilometros', 130000, 5000, 'El problema en el sistema de escape debe ser reparado antes de los 130,000 km para evitar la emisión de gases nocivos.', 300000, NULL, NULL, '2023-10-02 16:06:29', '2023-10-02 16:06:54'),
('0721002', '2023-08-12', '07', '21', 'Completada', 'correctivo', '0008', 'Fuga en el tubo de escape', 'GHI567', '013234567', 'Luis Gonzalez', 'kilometros', 35000, 5000, 'La fuga en el tubo de escape debe ser reparada debido a problemas en el sistema de transmisión. Hazlo antes de los 35,000 km para evitar problemas adicionales.', 250000, NULL, NULL, '2023-10-02 13:18:27', '2023-10-02 13:18:42'),
('0721003', '2023-05-12', '07', '21', 'Completada', 'correctivo', NULL, 'Fugas detectadas en el sistema de escape', 'STU890', '016567890', 'Andrés Castillo', 'kilometros', 85000, 2500, 'Las fugas en el sistema de escape deben ser reparadas debido a problemas en el sistema de lubricación. Hazlo antes de los 85,000 km para evitar daños graves.', 550000, '8878', 1, '2023-10-02 14:39:57', '2023-10-02 14:39:57'),
('0721100', '2023-10-10', '07', '21', 'Completada', 'correctivo', NULL, 'Problema en el sistema de escape', 'VWX123', '016567890', 'Camilo Diaz', 'kilometros', 130000, 5000, 'El problema en el sistema de escape debe ser reparado antes de los 130,000 km para evitar la emisión de gases nocivos.', 300000, NULL, NULL, '2024-01-02 16:06:29', '2024-01-02 16:06:54'),
('0721102', '2023-09-10', '07', '21', 'Completada', 'correctivo', NULL, 'Problema en el sistema de escape', 'VWX123', '016567890', 'Camilo Diaz', 'kilometros', 130000, 5000, 'El problema en el sistema de escape debe ser reparado antes de los 130,000 km para evitar la emisión de gases nocivos.', 300000, NULL, NULL, '2023-12-02 16:06:29', '2023-12-02 16:06:54'),
('0721171', '2023-08-10', '07', '21', 'Completada', 'correctivo', NULL, 'Problema en el sistema de escape', 'VWX123', '016567890', 'Camilo Diaz', 'kilometros', 130000, 5000, 'El problema en el sistema de escape debe ser reparado antes de los 130,000 km para evitar la emisión de gases nocivos.', 300000, NULL, NULL, '2023-11-02 16:06:29', '2023-11-02 16:06:54'),
('0721293', '2023-10-12', '07', '21', 'Completada', 'correctivo', '0008', 'Fuga en el tubo de escape', 'GHI567', '013234567', 'Luis Gonzalez', 'kilometros', 35000, 5000, 'La fuga en el tubo de escape debe ser reparada debido a problemas en el sistema de transmisión. Hazlo antes de los 35,000 km para evitar problemas adicionales.', 250000, NULL, NULL, '2023-12-02 13:18:27', '2023-12-02 13:18:42'),
('0721306', '2023-07-12', '07', '21', 'Completada', 'correctivo', NULL, 'Fugas detectadas en el sistema de escape', 'STU890', '016567890', 'Andrés Castillo', 'kilometros', 85000, 2500, 'Las fugas en el sistema de escape deben ser reparadas debido a problemas en el sistema de lubricación. Hazlo antes de los 85,000 km para evitar daños graves.', 550000, '8878', 1, '2023-12-02 14:39:57', '2023-12-02 14:39:57'),
('0721355', '2023-09-12', '07', '21', 'Completada', 'correctivo', '0008', 'Fuga en el tubo de escape', 'GHI567', '013234567', 'Luis Gonzalez', 'kilometros', 35000, 5000, 'La fuga en el tubo de escape debe ser reparada debido a problemas en el sistema de transmisión. Hazlo antes de los 35,000 km para evitar problemas adicionales.', 250000, NULL, NULL, '2023-11-02 13:18:27', '2023-11-02 13:18:42'),
('0721375', '2023-09-10', '07', '21', 'Completada', 'correctivo', NULL, 'Problema en el sistema de escape', 'VWX123', '016567890', 'Camilo Diaz', 'kilometros', 130000, 5000, 'El problema en el sistema de escape debe ser reparado antes de los 130,000 km para evitar la emisión de gases nocivos.', 300000, NULL, NULL, '2023-12-02 16:06:29', '2023-12-02 16:06:54'),
('0721396', '2023-07-12', '07', '21', 'Completada', 'correctivo', NULL, 'Fugas detectadas en el sistema de escape', 'STU890', '016567890', 'Andrés Castillo', 'kilometros', 85000, 2500, 'Las fugas en el sistema de escape deben ser reparadas debido a problemas en el sistema de lubricación. Hazlo antes de los 85,000 km para evitar daños graves.', 550000, '8878', 1, '2023-12-02 14:39:57', '2023-12-02 14:39:57'),
('0721433', '2023-06-12', '07', '21', 'Completada', 'correctivo', NULL, 'Fugas detectadas en el sistema de escape', 'STU890', '016567890', 'Andrés Castillo', 'kilometros', 85000, 2500, 'Las fugas en el sistema de escape deben ser reparadas debido a problemas en el sistema de lubricación. Hazlo antes de los 85,000 km para evitar daños graves.', 550000, '8878', 1, '2023-11-02 14:39:57', '2023-11-02 14:39:57'),
('0721456', '2023-09-12', '07', '21', 'Completada', 'correctivo', '0008', 'Fuga en el tubo de escape', 'GHI567', '013234567', 'Luis Gonzalez', 'kilometros', 35000, 5000, 'La fuga en el tubo de escape debe ser reparada debido a problemas en el sistema de transmisión. Hazlo antes de los 35,000 km para evitar problemas adicionales.', 250000, NULL, NULL, '2023-11-02 13:18:27', '2023-11-02 13:18:42'),
('0721514', '2023-11-12', '07', '21', 'Completada', 'correctivo', '0008', 'Fuga en el tubo de escape', 'GHI567', '013234567', 'Luis Gonzalez', 'kilometros', 35000, 5000, 'La fuga en el tubo de escape debe ser reparada debido a problemas en el sistema de transmisión. Hazlo antes de los 35,000 km para evitar problemas adicionales.', 250000, NULL, NULL, '2024-01-02 13:18:27', '2024-01-02 13:18:42'),
('0721607', '2023-09-12', '07', '21', 'Completada', 'correctivo', '0008', 'Fuga en el tubo de escape', 'GHI567', '013234567', 'Luis Gonzalez', 'kilometros', 35000, 5000, 'La fuga en el tubo de escape debe ser reparada debido a problemas en el sistema de transmisión. Hazlo antes de los 35,000 km para evitar problemas adicionales.', 250000, NULL, NULL, '2023-11-02 13:18:27', '2023-11-02 13:18:42'),
('0721622', '2023-06-12', '07', '21', 'Completada', 'correctivo', NULL, 'Fugas detectadas en el sistema de escape', 'STU890', '016567890', 'Andrés Castillo', 'kilometros', 85000, 2500, 'Las fugas en el sistema de escape deben ser reparadas debido a problemas en el sistema de lubricación. Hazlo antes de los 85,000 km para evitar daños graves.', 550000, '8878', 1, '2023-11-02 14:39:57', '2023-11-02 14:39:57'),
('0721662', '2023-08-12', '07', '21', 'Completada', 'correctivo', NULL, 'Fugas detectadas en el sistema de escape', 'STU890', '016567890', 'Andrés Castillo', 'kilometros', 85000, 2500, 'Las fugas en el sistema de escape deben ser reparadas debido a problemas en el sistema de lubricación. Hazlo antes de los 85,000 km para evitar daños graves.', 550000, '8878', 1, '2024-01-02 14:39:57', '2024-01-02 14:39:57'),
('0721676', '2023-06-12', '07', '21', 'Completada', 'correctivo', NULL, 'Fugas detectadas en el sistema de escape', 'STU890', '016567890', 'Andrés Castillo', 'kilometros', 85000, 2500, 'Las fugas en el sistema de escape deben ser reparadas debido a problemas en el sistema de lubricación. Hazlo antes de los 85,000 km para evitar daños graves.', 550000, '8878', 1, '2023-11-02 14:39:57', '2023-11-02 14:39:57'),
('0721714', '2023-08-10', '07', '21', 'Completada', 'correctivo', NULL, 'Problema en el sistema de escape', 'VWX123', '016567890', 'Camilo Diaz', 'kilometros', 130000, 5000, 'El problema en el sistema de escape debe ser reparado antes de los 130,000 km para evitar la emisión de gases nocivos.', 300000, NULL, NULL, '2023-11-02 16:06:29', '2023-11-02 16:06:54'),
('0721767', '2023-10-12', '07', '21', 'Completada', 'correctivo', '0008', 'Fuga en el tubo de escape', 'GHI567', '013234567', 'Luis Gonzalez', 'kilometros', 35000, 5000, 'La fuga en el tubo de escape debe ser reparada debido a problemas en el sistema de transmisión. Hazlo antes de los 35,000 km para evitar problemas adicionales.', 250000, NULL, NULL, '2023-12-02 13:18:27', '2023-12-02 13:18:42'),
('0721801', '2023-08-10', '07', '21', 'Completada', 'correctivo', NULL, 'Problema en el sistema de escape', 'VWX123', '016567890', 'Camilo Diaz', 'kilometros', 130000, 5000, 'El problema en el sistema de escape debe ser reparado antes de los 130,000 km para evitar la emisión de gases nocivos.', 300000, NULL, NULL, '2023-11-02 16:06:29', '2023-11-02 16:06:54'),
('0721850', '2023-10-12', '07', '21', 'Completada', 'correctivo', '0008', 'Fuga en el tubo de escape', 'GHI567', '013234567', 'Luis Gonzalez', 'kilometros', 35000, 5000, 'La fuga en el tubo de escape debe ser reparada debido a problemas en el sistema de transmisión. Hazlo antes de los 35,000 km para evitar problemas adicionales.', 250000, NULL, NULL, '2023-12-02 13:18:27', '2023-12-02 13:18:42'),
('0721903', '2023-09-10', '07', '21', 'Completada', 'correctivo', NULL, 'Problema en el sistema de escape', 'VWX123', '016567890', 'Camilo Diaz', 'kilometros', 130000, 5000, 'El problema en el sistema de escape debe ser reparado antes de los 130,000 km para evitar la emisión de gases nocivos.', 300000, NULL, NULL, '2023-12-02 16:06:29', '2023-12-02 16:06:54'),
('0721951', '2023-07-12', '07', '21', 'Completada', 'correctivo', NULL, 'Fugas detectadas en el sistema de escape', 'STU890', '016567890', 'Andrés Castillo', 'kilometros', 85000, 2500, 'Las fugas en el sistema de escape deben ser reparadas debido a problemas en el sistema de lubricación. Hazlo antes de los 85,000 km para evitar daños graves.', 550000, '8878', 1, '2023-12-02 14:39:57', '2023-12-02 14:39:57'),
('0922001', '2023-02-18', '09', '22', 'Completada', 'correctivo', NULL, 'Problema en el sistema de refrigeración', 'RST567', '253752547', 'Juan Gutierrez', 'kilometros', 170000, 6500, 'El problema en el sistema de refrigeración debe ser reparado antes de los 170,000 km para evitar el sobrecalentamiento del motor.', 500000, NULL, NULL, '2023-10-02 16:38:51', '2023-10-02 16:39:05'),
('0922002', '2023-09-18', '09', '22', 'Completada', 'correctivo', '0022', 'Sobrecalentamiento del motor', 'H49033', '010901234', 'Luis Ramirez', 'kilometros', 45000, 2000, 'El sistema de refrigeración debe ser reparado debido al sobrecalentamiento del motor. Hazlo antes de los 45,000 km para evitar daños graves.', 350000, NULL, NULL, '2023-10-02 13:21:10', '2023-10-02 13:24:57'),
('0922004', '2023-05-28', '09', '22', 'Completada', 'correctivo', NULL, 'Problema en el sistema de refrigeración', 'PQR567', '253752547', 'Camilo Diaz', 'kilometros', 120000, 6000, 'El problema en el sistema de refrigeración debe ser reparado antes de los 120,000 km para evitar el sobrecalentamiento del motor.', 450000, NULL, NULL, '2023-10-02 15:40:32', '2023-10-02 15:40:51'),
('0922113', '2023-03-18', '09', '22', 'Completada', 'correctivo', NULL, 'Problema en el sistema de refrigeración', 'RST567', '253752547', 'Juan Gutierrez', 'kilometros', 170000, 6500, 'El problema en el sistema de refrigeración debe ser reparado antes de los 170,000 km para evitar el sobrecalentamiento del motor.', 500000, NULL, NULL, '2023-11-02 16:38:51', '2023-11-02 16:39:05'),
('0922118', '2023-04-18', '09', '22', 'Completada', 'correctivo', NULL, 'Problema en el sistema de refrigeración', 'RST567', '253752547', 'Juan Gutierrez', 'kilometros', 170000, 6500, 'El problema en el sistema de refrigeración debe ser reparado antes de los 170,000 km para evitar el sobrecalentamiento del motor.', 500000, NULL, NULL, '2023-12-02 16:38:51', '2023-12-02 16:39:05'),
('0922123', '2023-03-18', '09', '22', 'Completada', 'correctivo', NULL, 'Problema en el sistema de refrigeración', 'RST567', '253752547', 'Juan Gutierrez', 'kilometros', 170000, 6500, 'El problema en el sistema de refrigeración debe ser reparado antes de los 170,000 km para evitar el sobrecalentamiento del motor.', 500000, NULL, NULL, '2023-11-02 16:38:51', '2023-11-02 16:39:05'),
('0922142', '2023-11-18', '09', '22', 'Completada', 'correctivo', '0022', 'Sobrecalentamiento del motor', 'H49033', '010901234', 'Luis Ramirez', 'kilometros', 45000, 2000, 'El sistema de refrigeración debe ser reparado debido al sobrecalentamiento del motor. Hazlo antes de los 45,000 km para evitar daños graves.', 350000, NULL, NULL, '2023-12-02 13:21:10', '2023-12-02 13:24:57'),
('0922211', '2023-10-18', '09', '22', 'Completada', 'correctivo', '0022', 'Sobrecalentamiento del motor', 'H49033', '010901234', 'Luis Ramirez', 'kilometros', 45000, 2000, 'El sistema de refrigeración debe ser reparado debido al sobrecalentamiento del motor. Hazlo antes de los 45,000 km para evitar daños graves.', 350000, NULL, NULL, '2023-11-02 13:21:10', '2023-11-02 13:24:57'),
('0922212', '2023-12-18', '09', '22', 'Completada', 'correctivo', '0022', 'Sobrecalentamiento del motor', 'H49033', '010901234', 'Luis Ramirez', 'kilometros', 45000, 2000, 'El sistema de refrigeración debe ser reparado debido al sobrecalentamiento del motor. Hazlo antes de los 45,000 km para evitar daños graves.', 350000, NULL, NULL, '2024-01-02 13:21:10', '2024-01-02 13:24:57'),
('0922238', '2023-10-18', '09', '22', 'Completada', 'correctivo', '0022', 'Sobrecalentamiento del motor', 'H49033', '010901234', 'Luis Ramirez', 'kilometros', 45000, 2000, 'El sistema de refrigeración debe ser reparado debido al sobrecalentamiento del motor. Hazlo antes de los 45,000 km para evitar daños graves.', 350000, NULL, NULL, '2023-11-02 13:21:10', '2023-11-02 13:24:57'),
('0922299', '2023-07-28', '09', '22', 'Completada', 'correctivo', NULL, 'Problema en el sistema de refrigeración', 'PQR567', '253752547', 'Camilo Diaz', 'kilometros', 120000, 6000, 'El problema en el sistema de refrigeración debe ser reparado antes de los 120,000 km para evitar el sobrecalentamiento del motor.', 450000, NULL, NULL, '2023-12-02 15:40:32', '2023-12-02 15:40:51'),
('0922308', '2023-07-28', '09', '22', 'Completada', 'correctivo', NULL, 'Problema en el sistema de refrigeración', 'PQR567', '253752547', 'Camilo Diaz', 'kilometros', 120000, 6000, 'El problema en el sistema de refrigeración debe ser reparado antes de los 120,000 km para evitar el sobrecalentamiento del motor.', 450000, NULL, NULL, '2023-12-02 15:40:32', '2023-12-02 15:40:51'),
('0922372', '2023-10-18', '09', '22', 'Completada', 'correctivo', '0022', 'Sobrecalentamiento del motor', 'H49033', '010901234', 'Luis Ramirez', 'kilometros', 45000, 2000, 'El sistema de refrigeración debe ser reparado debido al sobrecalentamiento del motor. Hazlo antes de los 45,000 km para evitar daños graves.', 350000, NULL, NULL, '2023-11-02 13:21:10', '2023-11-02 13:24:57'),
('0922400', '2023-04-18', '09', '22', 'Completada', 'correctivo', NULL, 'Problema en el sistema de refrigeración', 'RST567', '253752547', 'Juan Gutierrez', 'kilometros', 170000, 6500, 'El problema en el sistema de refrigeración debe ser reparado antes de los 170,000 km para evitar el sobrecalentamiento del motor.', 500000, NULL, NULL, '2023-12-02 16:38:51', '2023-12-02 16:39:05'),
('0922492', '2023-05-18', '09', '22', 'Completada', 'correctivo', NULL, 'Problema en el sistema de refrigeración', 'RST567', '253752547', 'Juan Gutierrez', 'kilometros', 170000, 6500, 'El problema en el sistema de refrigeración debe ser reparado antes de los 170,000 km para evitar el sobrecalentamiento del motor.', 500000, NULL, NULL, '2024-01-02 16:38:51', '2024-01-02 16:39:05'),
('0922505', '2023-11-18', '09', '22', 'Completada', 'correctivo', '0022', 'Sobrecalentamiento del motor', 'H49033', '010901234', 'Luis Ramirez', 'kilometros', 45000, 2000, 'El sistema de refrigeración debe ser reparado debido al sobrecalentamiento del motor. Hazlo antes de los 45,000 km para evitar daños graves.', 350000, NULL, NULL, '2023-12-02 13:21:10', '2023-12-02 13:24:57'),
('0922555', '2023-07-28', '09', '22', 'Completada', 'correctivo', NULL, 'Problema en el sistema de refrigeración', 'PQR567', '253752547', 'Camilo Diaz', 'kilometros', 120000, 6000, 'El problema en el sistema de refrigeración debe ser reparado antes de los 120,000 km para evitar el sobrecalentamiento del motor.', 450000, NULL, NULL, '2023-12-02 15:40:32', '2023-12-02 15:40:51'),
('0922587', '2023-06-28', '09', '22', 'Completada', 'correctivo', NULL, 'Problema en el sistema de refrigeración', 'PQR567', '253752547', 'Camilo Diaz', 'kilometros', 120000, 6000, 'El problema en el sistema de refrigeración debe ser reparado antes de los 120,000 km para evitar el sobrecalentamiento del motor.', 450000, NULL, NULL, '2023-11-02 15:40:32', '2023-11-02 15:40:51'),
('0922601', '2023-08-28', '09', '22', 'Completada', 'correctivo', NULL, 'Problema en el sistema de refrigeración', 'PQR567', '253752547', 'Camilo Diaz', 'kilometros', 120000, 6000, 'El problema en el sistema de refrigeración debe ser reparado antes de los 120,000 km para evitar el sobrecalentamiento del motor.', 450000, NULL, NULL, '2024-01-02 15:40:32', '2024-01-02 15:40:51'),
('0922608', '2023-11-18', '09', '22', 'Completada', 'correctivo', '0022', 'Sobrecalentamiento del motor', 'H49033', '010901234', 'Luis Ramirez', 'kilometros', 45000, 2000, 'El sistema de refrigeración debe ser reparado debido al sobrecalentamiento del motor. Hazlo antes de los 45,000 km para evitar daños graves.', 350000, NULL, NULL, '2023-12-02 13:21:10', '2023-12-02 13:24:57'),
('0922751', '2023-06-28', '09', '22', 'Completada', 'correctivo', NULL, 'Problema en el sistema de refrigeración', 'PQR567', '253752547', 'Camilo Diaz', 'kilometros', 120000, 6000, 'El problema en el sistema de refrigeración debe ser reparado antes de los 120,000 km para evitar el sobrecalentamiento del motor.', 450000, NULL, NULL, '2023-11-02 15:40:32', '2023-11-02 15:40:51'),
('0922859', '2023-03-18', '09', '22', 'Completada', 'correctivo', NULL, 'Problema en el sistema de refrigeración', 'RST567', '253752547', 'Juan Gutierrez', 'kilometros', 170000, 6500, 'El problema en el sistema de refrigeración debe ser reparado antes de los 170,000 km para evitar el sobrecalentamiento del motor.', 500000, NULL, NULL, '2023-11-02 16:38:51', '2023-11-02 16:39:05'),
('0922981', '2023-06-28', '09', '22', 'Completada', 'correctivo', NULL, 'Problema en el sistema de refrigeración', 'PQR567', '253752547', 'Camilo Diaz', 'kilometros', 120000, 6000, 'El problema en el sistema de refrigeración debe ser reparado antes de los 120,000 km para evitar el sobrecalentamiento del motor.', 450000, NULL, NULL, '2023-11-02 15:40:32', '2023-11-02 15:40:51');
INSERT INTO `servicios` (`cod_ser`, `fec_ser`, `sis_ser`, `act_ser`, `est_ser`, `tip_ser`, `fal_ser`, `det_ser`, `cam_ser`, `tal_ser`, `res_ser`, `tip_int_ser`, `int_ser`, `int_ale_ser`, `ale_ser`, `cos_ser`, `alm_ser`, `can_ser`, `created_at`, `updated_at`) VALUES
('0922992', '2023-04-18', '09', '22', 'Completada', 'correctivo', NULL, 'Problema en el sistema de refrigeración', 'RST567', '253752547', 'Juan Gutierrez', 'kilometros', 170000, 6500, 'El problema en el sistema de refrigeración debe ser reparado antes de los 170,000 km para evitar el sobrecalentamiento del motor.', 500000, NULL, NULL, '2023-12-02 16:38:51', '2023-12-02 16:39:05'),
('1236002', '2023-04-25', '12', '36', 'Completada', 'correctivo', '7845', 'Problema en el sistema de lubricación', 'YZA012', '001012345', 'Laura Rodríguez', 'kilometros', 180000, 7500, 'El problema en el sistema de lubricación debe ser reparado antes de los 180,000 km para garantizar un motor en buen estado.', 420000, NULL, NULL, '2023-10-02 16:40:41', '2023-10-02 16:40:53'),
('1236115', '2023-05-25', '12', '36', 'Completada', 'correctivo', '7845', 'Problema en el sistema de lubricación', 'YZA012', '001012345', 'Laura Rodríguez', 'kilometros', 180000, 7500, 'El problema en el sistema de lubricación debe ser reparado antes de los 180,000 km para garantizar un motor en buen estado.', 420000, NULL, NULL, '2023-11-02 16:40:41', '2023-11-02 16:40:53'),
('1236243', '2023-05-25', '12', '36', 'Completada', 'correctivo', '7845', 'Problema en el sistema de lubricación', 'YZA012', '001012345', 'Laura Rodríguez', 'kilometros', 180000, 7500, 'El problema en el sistema de lubricación debe ser reparado antes de los 180,000 km para garantizar un motor en buen estado.', 420000, NULL, NULL, '2023-11-02 16:40:41', '2023-11-02 16:40:53'),
('1236364', '2023-06-25', '12', '36', 'Completada', 'correctivo', '7845', 'Problema en el sistema de lubricación', 'YZA012', '001012345', 'Laura Rodríguez', 'kilometros', 180000, 7500, 'El problema en el sistema de lubricación debe ser reparado antes de los 180,000 km para garantizar un motor en buen estado.', 420000, NULL, NULL, '2023-12-02 16:40:41', '2023-12-02 16:40:53'),
('1236451', '2023-06-25', '12', '36', 'Completada', 'correctivo', '7845', 'Problema en el sistema de lubricación', 'YZA012', '001012345', 'Laura Rodríguez', 'kilometros', 180000, 7500, 'El problema en el sistema de lubricación debe ser reparado antes de los 180,000 km para garantizar un motor en buen estado.', 420000, NULL, NULL, '2023-12-02 16:40:41', '2023-12-02 16:40:53'),
('1236623', '2023-07-25', '12', '36', 'Completada', 'correctivo', '7845', 'Problema en el sistema de lubricación', 'YZA012', '001012345', 'Laura Rodríguez', 'kilometros', 180000, 7500, 'El problema en el sistema de lubricación debe ser reparado antes de los 180,000 km para garantizar un motor en buen estado.', 420000, NULL, NULL, '2024-01-02 16:40:41', '2024-01-02 16:40:53'),
('1236632', '2023-05-25', '12', '36', 'Completada', 'correctivo', '7845', 'Problema en el sistema de lubricación', 'YZA012', '001012345', 'Laura Rodríguez', 'kilometros', 180000, 7500, 'El problema en el sistema de lubricación debe ser reparado antes de los 180,000 km para garantizar un motor en buen estado.', 420000, NULL, NULL, '2023-11-02 16:40:41', '2023-11-02 16:40:53'),
('1236723', '2023-06-25', '12', '36', 'Completada', 'correctivo', '7845', 'Problema en el sistema de lubricación', 'YZA012', '001012345', 'Laura Rodríguez', 'kilometros', 180000, 7500, 'El problema en el sistema de lubricación debe ser reparado antes de los 180,000 km para garantizar un motor en buen estado.', 420000, NULL, NULL, '2023-12-02 16:40:41', '2023-12-02 16:40:53'),
('1434002', '2023-06-10', '14', '34', 'Completada', 'correctivo', '0006', 'Pérdida de presión en una llanta', 'FMN213', '006567890', 'Luis Ramirez', 'kilometros', 130000, 5000, 'La pérdida de presión de los neumáticos debe ser reparada antes de los 130,000 km para evitar problemas en la carretera.', 75000, NULL, NULL, '2023-10-02 16:27:26', '2023-10-02 16:27:39'),
('1434411', '2023-08-10', '14', '34', 'Completada', 'correctivo', '0006', 'Pérdida de presión en una llanta', 'FMN213', '006567890', 'Luis Ramirez', 'kilometros', 130000, 5000, 'La pérdida de presión de los neumáticos debe ser reparada antes de los 130,000 km para evitar problemas en la carretera.', 75000, NULL, NULL, '2023-12-02 16:27:26', '2023-12-02 16:27:39'),
('1434461', '2023-09-10', '14', '34', 'Completada', 'correctivo', '0006', 'Pérdida de presión en una llanta', 'FMN213', '006567890', 'Luis Ramirez', 'kilometros', 130000, 5000, 'La pérdida de presión de los neumáticos debe ser reparada antes de los 130,000 km para evitar problemas en la carretera.', 75000, NULL, NULL, '2024-01-02 16:27:26', '2024-01-02 16:27:39'),
('1434467', '2023-08-10', '14', '34', 'Completada', 'correctivo', '0006', 'Pérdida de presión en una llanta', 'FMN213', '006567890', 'Luis Ramirez', 'kilometros', 130000, 5000, 'La pérdida de presión de los neumáticos debe ser reparada antes de los 130,000 km para evitar problemas en la carretera.', 75000, NULL, NULL, '2023-12-02 16:27:26', '2023-12-02 16:27:39'),
('1434570', '2023-08-10', '14', '34', 'Completada', 'correctivo', '0006', 'Pérdida de presión en una llanta', 'FMN213', '006567890', 'Luis Ramirez', 'kilometros', 130000, 5000, 'La pérdida de presión de los neumáticos debe ser reparada antes de los 130,000 km para evitar problemas en la carretera.', 75000, NULL, NULL, '2023-12-02 16:27:26', '2023-12-02 16:27:39'),
('1434661', '2023-07-10', '14', '34', 'Completada', 'correctivo', '0006', 'Pérdida de presión en una llanta', 'FMN213', '006567890', 'Luis Ramirez', 'kilometros', 130000, 5000, 'La pérdida de presión de los neumáticos debe ser reparada antes de los 130,000 km para evitar problemas en la carretera.', 75000, NULL, NULL, '2023-11-02 16:27:26', '2023-11-02 16:27:39'),
('1434846', '2023-07-10', '14', '34', 'Completada', 'correctivo', '0006', 'Pérdida de presión en una llanta', 'FMN213', '006567890', 'Luis Ramirez', 'kilometros', 130000, 5000, 'La pérdida de presión de los neumáticos debe ser reparada antes de los 130,000 km para evitar problemas en la carretera.', 75000, NULL, NULL, '2023-11-02 16:27:26', '2023-11-02 16:27:39'),
('1434913', '2023-07-10', '14', '34', 'Completada', 'correctivo', '0006', 'Pérdida de presión en una llanta', 'FMN213', '006567890', 'Luis Ramirez', 'kilometros', 130000, 5000, 'La pérdida de presión de los neumáticos debe ser reparada antes de los 130,000 km para evitar problemas en la carretera.', 75000, NULL, NULL, '2023-11-02 16:27:26', '2023-11-02 16:27:39'),
('1727002', '2023-05-11', '17', '27', 'Completada', 'correctivo', '0009', 'Reparación de llanta pinchada', 'PQR567', '900123455', 'Ana López', 'kilometros', 90000, 6500, 'La llanta pinchada debe ser reparada debido a problemas en el sistema de neumáticos. Hazlo antes de los 90,000 km para evitar complicaciones en la carretera.', 150000, NULL, NULL, '2023-10-02 15:03:40', '2023-10-02 15:03:40'),
('1727116', '2023-06-11', '17', '27', 'Completada', 'correctivo', '0009', 'Reparación de llanta pinchada', 'PQR567', '900123455', 'Ana López', 'kilometros', 90000, 6500, 'La llanta pinchada debe ser reparada debido a problemas en el sistema de neumáticos. Hazlo antes de los 90,000 km para evitar complicaciones en la carretera.', 150000, NULL, NULL, '2023-11-02 15:03:40', '2023-11-02 15:03:40'),
('1727147', '2023-07-11', '17', '27', 'Completada', 'correctivo', '0009', 'Reparación de llanta pinchada', 'PQR567', '900123455', 'Ana López', 'kilometros', 90000, 6500, 'La llanta pinchada debe ser reparada debido a problemas en el sistema de neumáticos. Hazlo antes de los 90,000 km para evitar complicaciones en la carretera.', 150000, NULL, NULL, '2023-12-02 15:03:40', '2023-12-02 15:03:40'),
('1727224', '2023-07-11', '17', '27', 'Completada', 'correctivo', '0009', 'Reparación de llanta pinchada', 'PQR567', '900123455', 'Ana López', 'kilometros', 90000, 6500, 'La llanta pinchada debe ser reparada debido a problemas en el sistema de neumáticos. Hazlo antes de los 90,000 km para evitar complicaciones en la carretera.', 150000, NULL, NULL, '2023-12-02 15:03:40', '2023-12-02 15:03:40'),
('1727344', '2023-08-11', '17', '27', 'Completada', 'correctivo', '0009', 'Reparación de llanta pinchada', 'PQR567', '900123455', 'Ana López', 'kilometros', 90000, 6500, 'La llanta pinchada debe ser reparada debido a problemas en el sistema de neumáticos. Hazlo antes de los 90,000 km para evitar complicaciones en la carretera.', 150000, NULL, NULL, '2024-01-02 15:03:40', '2024-01-02 15:03:40'),
('1727525', '2023-06-11', '17', '27', 'Completada', 'correctivo', '0009', 'Reparación de llanta pinchada', 'PQR567', '900123455', 'Ana López', 'kilometros', 90000, 6500, 'La llanta pinchada debe ser reparada debido a problemas en el sistema de neumáticos. Hazlo antes de los 90,000 km para evitar complicaciones en la carretera.', 150000, NULL, NULL, '2023-11-02 15:03:40', '2023-11-02 15:03:40'),
('1727679', '2023-06-11', '17', '27', 'Completada', 'correctivo', '0009', 'Reparación de llanta pinchada', 'PQR567', '900123455', 'Ana López', 'kilometros', 90000, 6500, 'La llanta pinchada debe ser reparada debido a problemas en el sistema de neumáticos. Hazlo antes de los 90,000 km para evitar complicaciones en la carretera.', 150000, NULL, NULL, '2023-11-02 15:03:40', '2023-11-02 15:03:40'),
('1727949', '2023-07-11', '17', '27', 'Completada', 'correctivo', '0009', 'Reparación de llanta pinchada', 'PQR567', '900123455', 'Ana López', 'kilometros', 90000, 6500, 'La llanta pinchada debe ser reparada debido a problemas en el sistema de neumáticos. Hazlo antes de los 90,000 km para evitar complicaciones en la carretera.', 150000, NULL, NULL, '2023-12-02 15:03:40', '2023-12-02 15:03:40'),
('1828002', '2023-06-22', '18', '28', 'Completada', 'correctivo', '9894', 'Direccional averiada', 'PQR567', '100901234', 'Juan Gutierrez', 'kilometros', 95000, 3500, 'La direcciónal dañada debe ser reparada debido a un daño en el sistema de luces. Hazlo antes de los 95,000 km para mantener la seguridad en la carretera', 80000, NULL, NULL, '2023-10-02 15:06:58', '2023-10-02 15:06:58'),
('1828287', '2023-07-22', '18', '28', 'Completada', 'correctivo', '9894', 'Direccional averiada', 'PQR567', '100901234', 'Juan Gutierrez', 'kilometros', 95000, 3500, 'La direcciónal dañada debe ser reparada debido a un daño en el sistema de luces. Hazlo antes de los 95,000 km para mantener la seguridad en la carretera', 80000, NULL, NULL, '2023-11-02 15:06:58', '2023-11-02 15:06:58'),
('1828412', '2023-07-22', '18', '28', 'Completada', 'correctivo', '9894', 'Direccional averiada', 'PQR567', '100901234', 'Juan Gutierrez', 'kilometros', 95000, 3500, 'La direcciónal dañada debe ser reparada debido a un daño en el sistema de luces. Hazlo antes de los 95,000 km para mantener la seguridad en la carretera', 80000, NULL, NULL, '2023-11-02 15:06:58', '2023-11-02 15:06:58'),
('1828725', '2023-08-22', '18', '28', 'Completada', 'correctivo', '9894', 'Direccional averiada', 'PQR567', '100901234', 'Juan Gutierrez', 'kilometros', 95000, 3500, 'La direcciónal dañada debe ser reparada debido a un daño en el sistema de luces. Hazlo antes de los 95,000 km para mantener la seguridad en la carretera', 80000, NULL, NULL, '2023-12-02 15:06:58', '2023-12-02 15:06:58'),
('1828732', '2023-09-22', '18', '28', 'Completada', 'correctivo', '9894', 'Direccional averiada', 'PQR567', '100901234', 'Juan Gutierrez', 'kilometros', 95000, 3500, 'La direcciónal dañada debe ser reparada debido a un daño en el sistema de luces. Hazlo antes de los 95,000 km para mantener la seguridad en la carretera', 80000, NULL, NULL, '2024-01-02 15:06:58', '2024-01-02 15:06:58'),
('1828781', '2023-08-22', '18', '28', 'Completada', 'correctivo', '9894', 'Direccional averiada', 'PQR567', '100901234', 'Juan Gutierrez', 'kilometros', 95000, 3500, 'La direcciónal dañada debe ser reparada debido a un daño en el sistema de luces. Hazlo antes de los 95,000 km para mantener la seguridad en la carretera', 80000, NULL, NULL, '2023-12-02 15:06:58', '2023-12-02 15:06:58'),
('1828897', '2023-08-22', '18', '28', 'Completada', 'correctivo', '9894', 'Direccional averiada', 'PQR567', '100901234', 'Juan Gutierrez', 'kilometros', 95000, 3500, 'La direcciónal dañada debe ser reparada debido a un daño en el sistema de luces. Hazlo antes de los 95,000 km para mantener la seguridad en la carretera', 80000, NULL, NULL, '2023-12-02 15:06:58', '2023-12-02 15:06:58'),
('1828914', '2023-07-22', '18', '28', 'Completada', 'correctivo', '9894', 'Direccional averiada', 'PQR567', '100901234', 'Juan Gutierrez', 'kilometros', 95000, 3500, 'La direcciónal dañada debe ser reparada debido a un daño en el sistema de luces. Hazlo antes de los 95,000 km para mantener la seguridad en la carretera', 80000, NULL, NULL, '2023-11-02 15:06:58', '2023-11-02 15:06:58'),
('3536002', '2023-08-15', '35', '36', 'Completada', 'correctivo', '0027', 'Reparación del sistema de lubricación', 'YZA012', '123244555', 'Luis Gonzalez', 'kilometros', 140000, 2000, 'El problema en el sistema de lubricación debe ser reparado antes de los 140,000 km para garantizar un motor en buen estado.', 400000, NULL, NULL, '2023-10-02 16:33:46', '2023-10-02 16:34:00'),
('3536184', '2023-11-15', '35', '36', 'Completada', 'correctivo', '0027', 'Reparación del sistema de lubricación', 'YZA012', '123244555', 'Luis Gonzalez', 'kilometros', 140000, 2000, 'El problema en el sistema de lubricación debe ser reparado antes de los 140,000 km para garantizar un motor en buen estado.', 400000, NULL, NULL, '2024-01-02 16:33:46', '2024-01-02 16:34:00'),
('3536316', '2023-09-15', '35', '36', 'Completada', 'correctivo', '0027', 'Reparación del sistema de lubricación', 'YZA012', '123244555', 'Luis Gonzalez', 'kilometros', 140000, 2000, 'El problema en el sistema de lubricación debe ser reparado antes de los 140,000 km para garantizar un motor en buen estado.', 400000, NULL, NULL, '2023-11-02 16:33:46', '2023-11-02 16:34:00'),
('3536425', '2023-10-15', '35', '36', 'Completada', 'correctivo', '0027', 'Reparación del sistema de lubricación', 'YZA012', '123244555', 'Luis Gonzalez', 'kilometros', 140000, 2000, 'El problema en el sistema de lubricación debe ser reparado antes de los 140,000 km para garantizar un motor en buen estado.', 400000, NULL, NULL, '2023-12-02 16:33:46', '2023-12-02 16:34:00'),
('3536521', '2023-10-15', '35', '36', 'Completada', 'correctivo', '0027', 'Reparación del sistema de lubricación', 'YZA012', '123244555', 'Luis Gonzalez', 'kilometros', 140000, 2000, 'El problema en el sistema de lubricación debe ser reparado antes de los 140,000 km para garantizar un motor en buen estado.', 400000, NULL, NULL, '2023-12-02 16:33:46', '2023-12-02 16:34:00'),
('3536775', '2023-10-15', '35', '36', 'Completada', 'correctivo', '0027', 'Reparación del sistema de lubricación', 'YZA012', '123244555', 'Luis Gonzalez', 'kilometros', 140000, 2000, 'El problema en el sistema de lubricación debe ser reparado antes de los 140,000 km para garantizar un motor en buen estado.', 400000, NULL, NULL, '2023-12-02 16:33:46', '2023-12-02 16:34:00'),
('3536823', '2023-09-15', '35', '36', 'Completada', 'correctivo', '0027', 'Reparación del sistema de lubricación', 'YZA012', '123244555', 'Luis Gonzalez', 'kilometros', 140000, 2000, 'El problema en el sistema de lubricación debe ser reparado antes de los 140,000 km para garantizar un motor en buen estado.', 400000, NULL, NULL, '2023-11-02 16:33:46', '2023-11-02 16:34:00'),
('3536824', '2023-09-15', '35', '36', 'Completada', 'correctivo', '0027', 'Reparación del sistema de lubricación', 'YZA012', '123244555', 'Luis Gonzalez', 'kilometros', 140000, 2000, 'El problema en el sistema de lubricación debe ser reparado antes de los 140,000 km para garantizar un motor en buen estado.', 400000, NULL, NULL, '2023-11-02 16:33:46', '2023-11-02 16:34:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sistemas`
--

CREATE TABLE `sistemas` (
  `cod_sis` varchar(2) NOT NULL,
  `nom_sis` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `sistemas`
--

INSERT INTO `sistemas` (`cod_sis`, `nom_sis`, `created_at`, `updated_at`) VALUES
('01', 'Motor', '2023-08-23 01:55:37', '2023-08-23 01:55:37'),
('02', 'Frenos', '2023-08-23 01:55:47', '2023-08-23 01:55:47'),
('03', 'Suspensión', '2023-08-23 01:55:58', '2023-08-23 01:56:31'),
('04', 'Transmisión', '2023-08-23 01:56:22', '2023-08-23 01:56:37'),
('05', 'Eléctrico', '2023-08-23 01:56:48', '2023-08-23 01:57:04'),
('06', 'Dirección', '2023-09-20 11:15:19', '2023-09-20 11:15:19'),
('07', 'Escape', '2023-10-02 04:06:17', '2023-10-02 04:06:31'),
('08', 'Combustible', '2023-10-02 04:09:28', '2023-10-02 04:09:28'),
('09', 'Enfriamiento', '2023-10-02 04:11:02', '2023-10-02 04:11:02'),
('10', 'Vidrios y Cristales', '2023-10-02 04:13:13', '2023-10-02 04:13:13'),
('11', 'Iluminación', '2023-10-02 04:14:53', '2023-10-02 04:14:53'),
('12', 'Interior', '2023-10-02 04:16:36', '2023-10-02 04:16:36'),
('13', 'Climatización', '2023-10-02 04:19:51', '2023-10-02 04:19:51'),
('14', 'Ruedas', '2023-10-02 04:21:53', '2023-10-02 04:21:53'),
('15', 'Exterior', '2023-10-02 04:23:39', '2023-10-02 04:23:39'),
('16', 'Seguridad', '2023-10-02 04:25:36', '2023-10-02 04:25:36'),
('17', 'Neumáticos', '2023-10-02 15:01:40', '2023-10-02 15:01:40'),
('18', 'Luces', '2023-10-02 15:05:35', '2023-10-02 15:05:35'),
('35', 'Lubricación', '2023-10-02 16:30:04', '2023-10-02 16:30:04');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `talleres`
--

CREATE TABLE `talleres` (
  `nit_tal` varchar(15) NOT NULL,
  `nom_tal` varchar(45) NOT NULL,
  `dir_tal` varchar(35) NOT NULL,
  `ser_tal` varchar(45) NOT NULL,
  `hor_tal` varchar(45) NOT NULL,
  `num_con_tal` varchar(10) NOT NULL,
  `rut_tal` varchar(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `talleres`
--

INSERT INTO `talleres` (`nit_tal`, `nom_tal`, `dir_tal`, `ser_tal`, `hor_tal`, `num_con_tal`, `rut_tal`, `created_at`, `updated_at`) VALUES
('001012345', 'Taller de Emergencias', 'Carrera Este #67890', 'reparación mecánica', 'Servicio 24/7', '4567890123', '0104', '2023-10-02 05:16:15', '2023-10-02 05:16:15'),
('002123456', 'Taller de Electromecánica', 'Calle 70 #3456', 'reparación mecánica', 'Lunes a Viernes de 7:00 AM a 5:00 PM', '3218901234', '1002', '2023-10-02 05:17:22', '2023-10-02 05:17:22'),
('003234567', 'Taller de Refrigeración', 'Carrera 80 #5678', 'reparación mecánica', 'Lunes a Sábado de 8:30 AM a 6:30 PM', '2345678901', '1003', '2023-10-02 05:18:00', '2023-10-02 05:18:00'),
('004345678', 'Taller de Soldadura', 'Avenida Oeste #7890', 'servicio de neumáticos', 'Lunes a Viernes de 9:00 AM a 5:00 PM', '3456789012', '1005', '2023-10-02 05:18:37', '2023-10-02 05:18:37'),
('005456789', 'Taller de Pintura Especializada', 'Calle 90 #12345', 'mantenimiento', 'Lunes a Sábado de 7:00 AM a 7:00 PM', '4567890123', '1004', '2023-10-02 05:19:22', '2023-10-02 05:19:22'),
('006567890', 'Taller de Mantenimiento de Ruedas', 'Carrera Sur #23456', 'servicio de neumáticos', 'Lunes a Viernes de 8:00 AM a 6:00 PM', '3218901234', '1008', '2023-10-02 05:20:12', '2023-10-02 05:20:12'),
('007678901', 'Taller de Sistema de Escape', 'Avenida Central #1234', 'reparación mecánica', 'Lunes a Viernes de 8:00 AM a 6:00 PM', '2345678901', '1007', '2023-10-02 05:21:39', '2023-10-02 05:21:39'),
('008789012', 'Taller de Suspensión y Dirección', 'Calle Este #5678', 'mantenimiento', 'Lunes a Viernes de 8:00 AM a 6:00 PM', '3218901234', '0012', '2023-10-02 05:22:19', '2023-10-02 05:22:19'),
('009890123', 'Taller de Mantenimiento de Interiores', 'Carrera Norte #7890', 'mantenimiento', 'Lunes a Sábado de 9:00 AM a 5:00 PM', '3456789012', '0012', '2023-10-02 05:23:31', '2023-10-02 05:23:31'),
('010901234', 'Taller de Mantenimiento de Refrigeración', 'Avenida Principal #12345', 'mantenimiento', 'Lunes a Viernes de 8:30 AM a 6:30 PM', '4567890123', '0013', '2023-10-02 05:24:15', '2023-10-02 05:24:15'),
('011012345', 'Taller de Sistemas de Seguridad', 'Calle 100 #23456', 'reparación mecánica', 'Lunes a Sábado de 7:00 AM a 7:00 PM', '3218901234', '0015', '2023-10-02 05:24:52', '2023-10-02 05:24:52'),
('012123456', 'Taller de Mantenimiento de Frenos', 'Carrera Oeste #5678', 'reparación mecánica', 'Lunes a Viernes de 8:00 AM a 6:00 PM', '2345678901', '0013', '2023-10-02 05:25:47', '2023-10-02 05:25:47'),
('013234567', 'Taller de Mantenimiento de Transmisiones', 'Avenida Central #1234', 'reparación mecánica', 'Lunes a Sábado de 7:30 AM a 5:30 PM', '3218901234', '0013', '2023-10-02 05:26:38', '2023-10-02 05:26:38'),
('014345678', 'Taller de Mantenimiento de Carrocería', 'Calle 110 #7890', 'reparación mecánica', 'Lunes a Sábado de 9:00 AM a 5:00 PM', '3456789012', '0016', '2023-10-02 05:27:28', '2023-10-02 05:27:28'),
('015456789', 'Taller de Mantenimiento de Suspensiones', 'Carrera Norte #12345', 'mantenimiento', 'Lunes a Viernes de 8:30 AM a 6:30 PM', '4567890123', '0017', '2023-10-02 05:28:15', '2023-10-02 05:28:15'),
('016567890', 'Taller de Mantenimiento de Sistemas de Escape', 'Avenida Este #23456', 'reparación mecánica', 'Lunes a Sábado de 7:00 AM a 7:00 PM', '3218901245', '0104', '2023-10-02 05:29:01', '2023-10-02 05:29:01'),
('100901234', 'Taller de Diagnóstico Electrónico', 'Calle Sur #12345', 'mantenimiento', 'Lunes a Sábado de 8:30 AM a 7:30 PM', '3456789012', '0019', '2023-10-02 05:15:28', '2023-10-02 05:15:28'),
('123244555', 'JUAN RODRIGUEZ', 'calle 7b-4', 'servicio de neumáticos', '24 hrs', '3219086653', '0018', '2023-09-20 11:41:31', '2023-09-20 11:41:31'),
('131243545', 'adolfo torrez', 'calle 7-46', 'mantenimiento', 'de 7 a 7', '3213233434', '0015', '2023-09-20 11:40:53', '2023-09-20 11:40:53'),
('162654673', 'DAVID CONTRERAS', 'CR7-67', 'servicio de neumáticos', '24 hrs', '3218935356', '0012', '2023-09-20 11:42:15', '2023-09-20 11:42:15'),
('200890123', 'Taller de Mantenimiento Preventivo', 'Avenida Norte #5678', 'mantenimiento', 'Lunes a Viernes de 9:00 AM a 5:00 PM', '2345678901', '0030', '2023-10-02 05:14:53', '2023-10-02 05:14:53'),
('253752547', 'JOSE PEREZ', 'CALLE 6#23-4', 'reparación mecánica', '6-6', '3178989867', '0016', '2023-09-20 11:45:30', '2023-09-20 11:45:30'),
('300789012', 'Taller de Frenos y Suspensión', 'Calle 60 #2345', 'reparación mecánica', 'Lunes a Sábado de 7:30 AM a 6:30 PM', '3218901234', '0018', '2023-10-02 05:14:20', '2023-10-02 05:14:20'),
('400678901', 'Taller de Transmisión', 'Carrera 50 #7890', 'reparación mecánica', 'Lunes a Viernes de 8:00 AM a 6:00 PM', '4567890123', '0017', '2023-10-02 05:13:33', '2023-10-02 05:13:33'),
('500567890', 'Taller de Lubricación', 'Carrera 40 #1234', 'mantenimiento', 'Lunes a Sábado de 7:00 AM a 5:00 PM', '3456789012', '0015', '2023-10-02 05:12:34', '2023-10-02 05:12:34'),
('600456789', 'Taller de Pintura y Carrocería', 'Calle 30 #567', 'mantenimiento', '5:00 p. m a 12:00 a. m', '3215678902', '0014', '2023-10-02 05:11:40', '2023-10-02 05:11:40'),
('623565352', 'ESTEBAN HERNANDEZ', 'CR9 #43', 'servicio de neumáticos', '24 hrs', '3178675785', '0019', '2023-09-20 11:44:55', '2023-09-20 11:44:55'),
('700345678', 'Taller de Neumáticos y Ruedas', 'Avenida Principal #789', 'servicio de neumáticos', '5:00 p. m a 12:00 a. m', '2345678901', '0013', '2023-10-02 05:10:11', '2023-10-02 05:10:11'),
('800234567', 'Taller de Electricidad y Electrónica', 'Calle 20 #456', 'reparación mecánica', 'Todo el dia', '3219876543', '0012', '2023-10-02 05:09:25', '2023-10-02 05:09:25'),
('900123455', 'Taller Mecánico Express', 'Carrera 10 #123', 'reparación mecánica', '5:00 p. m a 12:00 a. m', '1234567890', '0011', '2023-10-02 05:08:42', '2023-10-02 05:08:42');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trazabilidad`
--

CREATE TABLE `trazabilidad` (
  `cod_tra` bigint(20) NOT NULL,
  `dat_pro_tra` date DEFAULT NULL,
  `tim_pro_tra` time DEFAULT NULL,
  `dat_enp_tra` date DEFAULT NULL,
  `tim_enp_tra` time DEFAULT NULL,
  `dat_com_tra` date DEFAULT NULL,
  `tim_com_tra` time DEFAULT NULL,
  `dat_can_tra` date DEFAULT NULL,
  `tim_can_tra` time DEFAULT NULL,
  `ini_ina_tra` datetime DEFAULT NULL,
  `fin_ina_tra` time DEFAULT NULL,
  `via_tra` varchar(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `trazabilidad`
--

INSERT INTO `trazabilidad` (`cod_tra`, `dat_pro_tra`, `tim_pro_tra`, `dat_enp_tra`, `tim_enp_tra`, `dat_com_tra`, `tim_com_tra`, `dat_can_tra`, `tim_can_tra`, `ini_ina_tra`, `fin_ina_tra`, `via_tra`, `created_at`, `updated_at`) VALUES
(1, '2023-10-02', '07:03:54', '2023-10-02', '07:04:11', '2023-10-02', '12:18:17', NULL, NULL, '2023-10-02 07:50:26', '09:51:32', '0001', '2023-10-02 12:03:54', '2023-10-02 17:18:17'),
(2, '2023-10-02', '07:06:53', '2023-10-02', '07:07:14', '2023-10-02', '12:18:24', NULL, NULL, '2023-10-02 07:50:56', '10:51:57', '0002', '2023-10-02 12:06:53', '2023-10-02 17:18:24'),
(3, '2023-10-02', '07:08:21', '2023-10-02', '07:09:20', '2023-10-02', '12:18:31', NULL, NULL, NULL, NULL, '0003', '2023-10-02 12:08:21', '2023-10-02 17:18:31'),
(4, '2023-10-02', '07:09:09', '2023-10-02', '07:10:28', '2023-10-02', '12:18:47', NULL, NULL, '2023-10-01 07:52:41', '09:52:46', '0004', '2023-10-02 12:09:09', '2023-10-02 17:18:47'),
(5, '2023-10-02', '07:10:12', '2023-10-02', '07:11:49', '2023-10-02', '12:18:53', NULL, NULL, NULL, NULL, '0005', '2023-10-02 12:10:12', '2023-10-02 17:18:53'),
(6, '2023-10-02', '07:11:35', NULL, NULL, NULL, NULL, '2023-10-02', '07:12:37', '2023-09-03 07:52:55', '11:53:00', '0006', '2023-10-02 12:11:35', '2023-10-02 12:12:37'),
(7, '2023-10-02', '07:12:25', '2023-10-02', '07:12:47', '2023-10-02', '12:19:01', NULL, NULL, '2023-08-15 07:53:36', '12:53:44', '0007', '2023-10-02 12:12:25', '2023-10-02 17:19:01'),
(8, '2023-10-02', '07:14:16', '2023-10-02', '07:16:51', '2023-10-02', '12:19:08', NULL, NULL, NULL, NULL, '0008', '2023-10-02 12:14:16', '2023-10-02 17:19:08'),
(9, '2023-10-02', '07:15:18', '2023-10-02', '12:19:15', '2023-10-02', '12:19:22', NULL, NULL, NULL, NULL, '0009', '2023-10-02 12:15:18', '2023-10-02 17:19:22'),
(10, '2023-10-02', '07:16:26', '2023-10-02', '12:20:50', '2023-10-02', '12:20:58', NULL, NULL, '2023-09-12 07:54:02', '13:54:14', '0010', '2023-10-02 12:16:26', '2023-10-02 17:20:58'),
(11, '2023-10-02', '07:18:08', '2023-10-02', '07:18:28', '2023-10-02', '12:21:10', NULL, NULL, NULL, NULL, '0011', '2023-10-02 12:18:08', '2023-10-02 17:21:10'),
(12, '2023-10-02', '07:19:24', '2023-10-02', '07:20:27', '2023-10-02', '12:21:19', NULL, NULL, '2023-08-14 07:54:58', '08:55:08', '0012', '2023-10-02 12:19:24', '2023-10-02 17:21:19'),
(13, '2023-10-02', '07:20:17', '2023-10-02', '07:20:44', '2023-10-02', '12:21:30', NULL, NULL, '2023-06-04 07:56:03', '08:56:10', '0013', '2023-10-02 12:20:17', '2023-10-02 17:21:30'),
(14, '2023-10-02', '07:21:30', '2023-10-02', '07:21:47', '2023-10-02', '12:21:38', NULL, NULL, NULL, NULL, '0014', '2023-10-02 12:21:30', '2023-10-02 17:21:38'),
(15, '2023-10-02', '07:22:36', '2023-10-02', '07:26:20', '2023-10-02', '12:21:47', NULL, NULL, '2023-08-23 07:57:19', '09:57:26', '0015', '2023-10-02 12:22:36', '2023-10-02 17:21:47'),
(16, '2023-10-02', '07:27:08', '2023-10-02', '07:27:18', '2023-10-02', '12:21:55', NULL, NULL, NULL, NULL, '0016', '2023-10-02 12:27:08', '2023-10-02 17:21:55'),
(17, '2023-10-02', '07:28:08', '2023-10-02', '07:30:38', '2023-10-02', '12:22:03', NULL, NULL, NULL, NULL, '0017', '2023-10-02 12:28:08', '2023-10-02 17:22:03'),
(18, '2023-10-02', '07:28:52', '2023-10-02', '07:30:48', '2023-10-02', '12:22:11', NULL, NULL, '2023-02-25 07:57:39', '10:57:45', '0018', '2023-10-02 12:28:52', '2023-10-02 17:22:11'),
(19, '2023-10-02', '07:29:43', '2023-10-02', '07:31:00', '2023-10-02', '12:22:19', NULL, NULL, NULL, NULL, '0019', '2023-10-02 12:29:43', '2023-10-02 17:22:19'),
(20, '2023-10-02', '07:30:27', '2023-10-02', '07:31:11', '2023-10-02', '12:22:29', NULL, NULL, NULL, NULL, '0020', '2023-10-02 12:30:27', '2023-10-02 17:22:29'),
(21, '2023-10-02', '07:32:34', '2023-10-02', '07:31:11', '2023-10-02', '12:22:38', NULL, NULL, NULL, NULL, '0021', '2023-10-02 12:32:34', '2023-10-02 17:22:38'),
(22, '2023-10-02', '07:33:18', '2023-10-02', '07:31:11', '2023-10-02', '12:22:45', NULL, NULL, NULL, NULL, '0022', '2023-10-02 12:33:18', '2023-10-02 17:22:45'),
(23, '2023-10-02', '07:34:17', '2023-10-02', '07:31:11', '2023-10-02', '12:22:53', NULL, NULL, NULL, NULL, '0023', '2023-10-02 12:34:17', '2023-10-02 17:22:53'),
(24, '2023-10-02', '07:35:12', '2023-10-02', '07:31:11', NULL, NULL, '2023-10-02', '12:23:02', '2023-06-12 07:58:00', '09:38:06', '0024', '2023-10-02 12:35:12', '2023-10-02 17:23:02'),
(25, '2023-10-02', '07:35:56', '2023-10-02', '07:31:11', '2023-10-02', '12:23:12', NULL, NULL, '2023-05-14 07:58:15', '09:45:19', '0025', '2023-10-02 12:35:56', '2023-10-02 17:23:12'),
(26, '2023-07-01', '04:48:29', '2023-03-01', '09:04:35', '2023-04-01', '09:10:41', '2023-01-01', '20:41:58', '2023-04-01 00:00:00', '00:20:23', '5091', '2023-11-09 02:12:53', '2023-11-09 02:12:53'),
(27, '2023-02-01', '11:49:00', '2023-02-01', '05:59:58', '2023-09-01', '07:38:27', '2023-02-01', '19:10:55', '2023-06-01 00:00:00', '00:20:23', '1139', '2023-11-09 02:12:53', '2023-11-09 02:12:53'),
(28, '2023-05-01', '11:52:54', '2023-02-01', '05:18:17', '2023-08-01', '17:51:25', '2023-08-01', '03:32:24', '2023-08-01 00:00:00', '00:20:23', '7164', '2023-11-09 02:12:53', '2023-11-09 02:12:53'),
(29, '2023-01-01', '23:03:03', '2023-07-01', '21:32:50', '2023-10-01', '09:56:22', '2023-07-01', '18:55:37', '2023-02-01 00:00:00', '00:20:23', '3299', '2023-11-09 02:12:53', '2023-11-09 02:12:53'),
(30, '2023-10-01', '02:36:12', '2023-11-01', '11:19:52', '2023-06-01', '23:51:49', '2023-06-01', '15:25:44', '2023-08-01 00:00:00', '00:20:23', '7811', '2023-11-09 02:12:53', '2023-11-09 02:12:53'),
(31, '2023-09-01', '23:35:05', '2023-07-01', '20:33:39', '2023-07-01', '10:23:31', '2023-04-01', '12:24:08', '2023-06-01 00:00:00', '00:20:23', '9995', '2023-11-09 02:12:53', '2023-11-09 02:12:53'),
(32, '2023-08-01', '18:14:59', '2023-09-01', '10:00:17', '2023-10-01', '01:50:39', '2023-09-01', '16:59:53', '2023-02-01 00:00:00', '00:20:23', '4680', '2023-11-09 02:12:53', '2023-11-09 02:12:53'),
(33, '2023-01-01', '21:15:29', '2023-04-01', '02:24:39', '2023-05-01', '22:28:58', '2023-04-01', '21:28:35', '2023-05-01 00:00:00', '00:20:23', '2090', '2023-11-09 02:12:53', '2023-11-09 02:12:53'),
(34, '2023-06-01', '23:51:06', '2023-07-01', '00:33:06', '2023-04-01', '11:48:54', '2023-06-01', '03:31:25', '2023-02-01 00:00:00', '00:20:23', '1003', '2023-11-09 02:12:53', '2023-11-09 02:12:53'),
(35, '2023-05-01', '09:58:05', '2023-10-01', '05:43:40', '2023-06-01', '19:06:55', '2023-06-01', '23:38:30', '2023-06-01 00:00:00', '00:20:23', '9739', '2023-11-09 02:12:53', '2023-11-09 02:12:53'),
(36, '2023-09-01', '16:42:03', '2023-03-01', '01:19:32', '2023-07-01', '18:52:51', '2023-02-01', '10:48:32', '2023-09-01 00:00:00', '00:20:23', '1001', '2023-11-09 02:12:53', '2023-11-09 02:12:53'),
(37, '2023-08-01', '03:02:24', '2023-06-01', '22:44:43', '2023-04-01', '20:48:08', '2023-04-01', '22:32:05', '2023-09-01 00:00:00', '00:20:23', '3003', '2023-11-09 02:12:53', '2023-11-09 02:12:53'),
(38, '2023-03-01', '13:15:56', '2023-03-01', '08:24:11', '2023-02-01', '16:16:06', '2023-11-01', '17:28:24', '2023-09-01 00:00:00', '00:20:23', '4598', '2023-11-09 02:12:53', '2023-11-09 02:12:53'),
(39, '2023-08-01', '12:57:19', '2023-07-01', '10:41:20', '2023-05-01', '14:29:31', '2023-10-01', '11:09:01', '2023-09-01 00:00:00', '00:20:23', '7915', '2023-11-09 02:12:53', '2023-11-09 02:12:53'),
(40, '2023-06-01', '21:24:28', '2023-01-01', '18:40:21', '2023-07-01', '18:06:32', '2023-11-01', '08:01:10', '2023-11-01 00:00:00', '00:20:23', '4014', '2023-11-09 02:12:53', '2023-11-09 02:12:53'),
(41, '2023-05-01', '14:45:34', '2023-11-01', '00:46:19', '2023-03-01', '01:50:07', '2023-08-01', '03:55:20', '2023-09-01 00:00:00', '00:20:23', '1009', '2023-11-09 02:12:53', '2023-11-09 02:12:53'),
(42, '2023-03-01', '23:44:31', '2023-03-01', '23:43:31', '2023-05-01', '21:06:05', '2023-04-01', '19:24:06', '2023-02-01 00:00:00', '00:20:23', '7658', '2023-11-09 02:12:53', '2023-11-09 02:12:53'),
(43, '2023-09-01', '16:03:56', '2023-02-01', '14:09:41', '2023-07-01', '04:28:36', '2023-02-01', '05:36:28', '2023-08-01 00:00:00', '00:20:23', '5364', '2023-11-09 02:12:53', '2023-11-09 02:12:53'),
(44, '2023-02-01', '08:47:30', '2023-05-01', '20:32:07', '2023-02-01', '23:02:48', '2023-06-01', '13:04:09', '2023-03-01 00:00:00', '00:20:23', '4025', '2023-11-09 02:12:53', '2023-11-09 02:12:53'),
(45, '2023-11-01', '11:11:51', '2023-04-01', '08:05:16', '2023-08-01', '04:53:21', '2023-01-01', '20:06:23', '2023-11-01 00:00:00', '00:20:23', '8649', '2023-11-09 02:12:53', '2023-11-09 02:12:53'),
(46, '2023-11-01', '00:39:28', '2023-02-01', '15:22:10', '2023-09-01', '22:06:02', '2023-04-01', '17:35:04', '2023-09-01 00:00:00', '00:20:23', '6692', '2023-11-09 02:12:53', '2023-11-09 02:12:53'),
(47, '2023-04-01', '15:37:06', '2023-04-01', '14:02:01', '2023-01-01', '06:04:19', '2023-03-01', '13:03:55', '2023-11-01 00:00:00', '00:20:23', '4580', '2023-11-09 02:12:53', '2023-11-09 02:12:53'),
(48, '2023-02-01', '01:57:54', '2023-02-01', '05:22:51', '2023-10-01', '12:33:03', '2023-02-01', '22:02:19', '2023-04-01 00:00:00', '00:20:23', '4019', '2023-11-09 02:12:53', '2023-11-09 02:12:53'),
(49, '2023-01-01', '16:53:53', '2023-03-01', '03:24:04', '2023-11-01', '08:32:21', '2023-11-01', '11:38:07', '2023-08-01 00:00:00', '00:20:23', '9482', '2023-11-09 02:12:53', '2023-11-09 02:12:53'),
(50, '2023-02-01', '01:29:40', '2023-11-01', '18:21:01', '2023-10-01', '23:12:29', '2023-04-01', '11:48:05', '2023-07-01 00:00:00', '00:20:23', '2002', '2023-11-09 02:12:53', '2023-11-09 02:12:53'),
(51, '2023-07-01', '18:02:20', '2023-01-01', '03:32:37', '2023-06-01', '00:58:59', '2023-08-01', '10:47:13', '2023-02-01 00:00:00', '00:20:23', '2019', '2023-11-09 02:12:53', '2023-11-09 02:12:53'),
(52, '2023-02-01', '01:51:48', '2023-11-01', '11:00:33', '2023-06-01', '00:24:10', '2023-08-01', '04:34:15', '2023-01-01 00:00:00', '00:20:23', '2681', '2023-11-09 02:12:53', '2023-11-09 02:12:53'),
(53, '2023-06-01', '08:38:43', '2023-04-01', '12:11:02', '2023-07-01', '09:41:20', '2023-03-01', '02:26:01', '2023-08-01 00:00:00', '00:20:23', '1252', '2023-11-09 02:12:53', '2023-11-09 02:12:53'),
(54, '2023-08-01', '22:18:40', '2023-06-01', '22:05:42', '2023-11-01', '03:00:17', '2023-08-01', '02:14:17', '2023-05-01 00:00:00', '00:20:23', '2005', '2023-11-09 02:12:53', '2023-11-09 02:12:53'),
(55, '2023-06-01', '09:58:29', '2023-07-01', '20:14:52', '2023-05-01', '06:56:05', '2023-04-01', '21:32:03', '2023-05-01 00:00:00', '00:20:23', '4019', '2023-11-09 02:12:53', '2023-11-09 02:12:53'),
(56, '2023-05-01', '23:05:23', '2023-08-01', '15:49:38', '2023-02-01', '20:54:39', '2023-10-01', '14:51:34', '2023-07-01 00:00:00', '00:20:23', '4007', '2023-11-09 02:12:53', '2023-11-09 02:12:53'),
(57, '2023-07-01', '19:37:56', '2023-04-01', '08:31:09', '2023-08-01', '09:10:28', '2023-10-01', '01:38:37', '2023-09-01 00:00:00', '00:20:23', '8854', '2023-11-09 02:12:53', '2023-11-09 02:12:53'),
(58, '2023-01-01', '11:35:09', '2023-05-01', '13:57:54', '2023-08-01', '17:03:37', '2023-06-01', '06:27:51', '2023-10-01 00:00:00', '00:20:23', '8492', '2023-11-09 02:12:53', '2023-11-09 02:12:53'),
(59, '2023-02-01', '07:06:17', '2023-02-01', '16:12:29', '2023-01-01', '04:00:35', '2023-08-01', '02:18:55', '2023-04-01 00:00:00', '00:20:23', '6692', '2023-11-09 02:12:53', '2023-11-09 02:12:53'),
(60, '2023-01-01', '15:12:54', '2023-01-01', '10:18:42', '2023-11-01', '10:59:08', '2023-05-01', '19:55:18', '2023-10-01 00:00:00', '00:20:23', '3445', '2023-11-09 02:12:53', '2023-11-09 02:12:53'),
(61, '2023-07-01', '00:33:01', '2023-06-01', '07:00:24', '2023-01-01', '08:10:40', '2023-07-01', '20:19:02', '2023-06-01 00:00:00', '00:20:23', '2131', '2023-11-09 02:12:53', '2023-11-09 02:12:53'),
(62, '2023-08-01', '07:10:56', '2023-06-01', '09:22:06', '2023-07-01', '17:21:29', '2023-10-01', '05:29:26', '2023-06-01 00:00:00', '00:20:23', '7218', '2023-11-09 02:12:53', '2023-11-09 02:12:53'),
(63, '2023-02-01', '10:52:02', '2023-09-01', '16:32:09', '2023-01-01', '00:22:37', '2023-01-01', '02:20:31', '2023-05-01 00:00:00', '00:20:23', '5105', '2023-11-09 02:12:53', '2023-11-09 02:12:53'),
(64, '2023-07-01', '11:03:24', '2023-05-01', '18:11:46', '2023-06-01', '06:12:59', '2023-09-01', '02:20:48', '2023-02-01 00:00:00', '00:20:23', '5152', '2023-11-09 02:12:53', '2023-11-09 02:12:53'),
(65, '2023-08-01', '06:28:39', '2023-03-01', '06:46:42', '2023-09-01', '22:29:30', '2023-05-01', '06:20:22', '2023-01-01 00:00:00', '00:20:23', '4088', '2023-11-09 02:12:53', '2023-11-09 02:12:53'),
(66, '2023-03-01', '11:41:53', '2023-09-01', '13:31:53', '2023-05-01', '07:49:03', '2023-05-01', '02:45:10', '2023-04-01 00:00:00', '00:20:23', '1106', '2023-11-09 02:12:53', '2023-11-09 02:12:53'),
(67, '2023-04-01', '00:06:27', '2023-11-01', '16:07:25', '2023-07-01', '17:23:00', '2023-11-01', '17:10:12', '2023-08-01 00:00:00', '00:20:23', '2005', '2023-11-09 02:12:53', '2023-11-09 02:12:53'),
(68, '2023-10-01', '07:14:02', '2023-01-01', '02:50:12', '2023-07-01', '12:47:35', '2023-11-01', '01:32:14', '2023-06-01 00:00:00', '00:20:23', '3018', '2023-11-09 02:12:53', '2023-11-09 02:12:53'),
(69, '2023-06-01', '17:57:41', '2023-04-01', '06:56:01', '2023-06-01', '18:05:17', '2023-03-01', '17:16:23', '2023-01-01 00:00:00', '00:20:23', '4990', '2023-11-09 02:12:53', '2023-11-09 02:12:53'),
(70, '2023-01-01', '18:58:48', '2023-09-01', '12:44:14', '2023-04-01', '23:11:21', '2023-10-01', '13:57:32', '2023-03-01 00:00:00', '00:20:23', '2021', '2023-11-09 02:12:53', '2023-11-09 02:12:53'),
(71, '2023-05-01', '15:38:46', '2023-11-01', '19:00:15', '2023-02-01', '04:15:57', '2023-07-01', '06:00:55', '2023-07-01 00:00:00', '00:20:23', '2022', '2023-11-09 02:12:53', '2023-11-09 02:12:53'),
(72, '2023-09-01', '11:21:15', '2023-11-01', '08:08:32', '2023-10-01', '04:30:58', '2023-05-01', '12:31:44', '2023-04-01 00:00:00', '00:20:23', '8095', '2023-11-09 02:12:53', '2023-11-09 02:12:53'),
(73, '2023-01-01', '17:26:45', '2023-07-01', '13:28:58', '2023-02-01', '03:09:34', '2023-02-01', '10:41:05', '2023-08-01 00:00:00', '00:20:23', '0009', '2023-11-09 02:12:53', '2023-11-09 02:12:53'),
(74, '2023-11-01', '22:29:16', '2023-09-01', '22:59:27', '2023-06-01', '18:26:21', '2023-03-01', '23:25:43', '2023-02-01 00:00:00', '00:20:23', '9024', '2023-11-09 02:12:53', '2023-11-09 02:12:53'),
(75, '2023-05-01', '23:02:29', '2023-08-01', '10:20:16', '2023-02-01', '13:02:48', '2023-03-01', '10:50:50', '2023-07-01 00:00:00', '00:20:23', '3001', '2023-11-09 02:12:53', '2023-11-09 02:12:53'),
(76, '2023-01-01', '18:04:39', '2023-07-01', '16:30:24', '2023-08-01', '06:55:54', '2023-05-01', '07:08:31', '2023-03-01 00:00:00', '00:20:23', '4990', '2023-11-09 02:12:53', '2023-11-09 02:12:53'),
(77, '2023-04-01', '13:56:08', '2023-10-01', '16:58:05', '2023-10-01', '04:58:21', '2023-05-01', '13:45:56', '2023-07-01 00:00:00', '00:20:23', '4224', '2023-11-09 02:12:53', '2023-11-09 02:12:53'),
(78, '2023-08-01', '01:53:55', '2023-03-01', '22:32:41', '2023-11-01', '03:15:55', '2023-08-01', '03:08:18', '2023-06-01 00:00:00', '00:20:23', '0930', '2023-11-09 02:12:53', '2023-11-09 02:12:53'),
(79, '2023-05-01', '23:35:56', '2023-08-01', '14:50:11', '2023-11-01', '21:30:16', '2023-07-01', '11:03:18', '2023-05-01 00:00:00', '00:20:23', '0435', '2023-11-09 02:12:53', '2023-11-09 02:12:53'),
(80, '2023-03-01', '06:16:01', '2023-07-01', '03:53:52', '2023-01-01', '17:39:19', '2023-06-01', '12:22:23', '2023-11-01 00:00:00', '00:20:23', '4555', '2023-11-09 02:12:53', '2023-11-09 02:12:53'),
(81, '2023-06-01', '10:25:22', '2023-09-01', '14:01:31', '2023-07-01', '04:40:26', '2023-03-01', '10:34:43', '2023-07-01 00:00:00', '00:20:23', '1023', '2023-11-09 02:12:53', '2023-11-09 02:12:53'),
(82, '2023-06-01', '12:19:53', '2023-01-01', '11:42:20', '2023-05-01', '15:25:24', '2023-11-01', '19:41:43', '2023-03-01 00:00:00', '00:20:23', '4003', '2023-11-09 02:12:53', '2023-11-09 02:12:53'),
(83, '2023-11-01', '11:35:49', '2023-07-01', '12:46:35', '2023-10-01', '18:22:48', '2023-03-01', '18:13:58', '2023-02-01 00:00:00', '00:20:23', '0681', '2023-11-09 02:12:53', '2023-11-09 02:12:53'),
(84, '2023-09-01', '17:17:35', '2023-03-01', '22:42:07', '2023-01-01', '11:42:01', '2023-03-01', '17:59:17', '2023-01-01 00:00:00', '00:20:23', '9628', '2023-11-09 02:12:53', '2023-11-09 02:12:53'),
(85, '2023-04-01', '20:54:12', '2023-06-01', '16:17:30', '2023-01-01', '01:24:48', '2023-03-01', '00:13:55', '2023-04-01 00:00:00', '00:20:23', '3014', '2023-11-09 02:12:53', '2023-11-09 02:12:53'),
(86, '2023-04-01', '11:39:26', '2023-06-01', '00:24:34', '2023-07-01', '22:52:01', '2023-11-01', '22:47:12', '2023-10-01 00:00:00', '00:20:23', '1017', '2023-11-09 02:12:53', '2023-11-09 02:12:53'),
(87, '2023-11-01', '23:45:20', '2023-01-01', '04:21:09', '2023-09-01', '12:53:51', '2023-03-01', '13:53:01', '2023-02-01 00:00:00', '00:20:23', '2021', '2023-11-09 02:12:53', '2023-11-09 02:12:53'),
(88, '2023-06-01', '02:15:00', '2023-10-01', '03:00:36', '2023-11-01', '12:56:26', '2023-09-01', '02:46:57', '2023-04-01 00:00:00', '00:20:23', '7721', '2023-11-09 02:12:53', '2023-11-09 02:12:53'),
(89, '2023-11-01', '14:45:20', '2023-04-01', '21:09:19', '2023-05-01', '05:09:12', '2023-11-01', '03:30:56', '2023-10-01 00:00:00', '00:20:23', '0013', '2023-11-09 02:12:53', '2023-11-09 02:12:53'),
(90, '2023-08-01', '23:14:05', '2023-09-01', '04:12:01', '2023-05-01', '14:41:47', '2023-09-01', '01:25:37', '2023-11-01 00:00:00', '00:20:23', '3909', '2023-11-09 02:12:53', '2023-11-09 02:12:53'),
(91, '2023-06-01', '23:47:31', '2023-05-01', '05:57:41', '2023-10-01', '19:08:21', '2023-03-01', '21:59:37', '2023-09-01 00:00:00', '00:20:23', '9015', '2023-11-09 02:12:53', '2023-11-09 02:12:53'),
(92, '2023-05-01', '10:03:28', '2023-09-01', '17:05:26', '2023-02-01', '18:12:02', '2023-03-01', '23:59:51', '2023-03-01 00:00:00', '00:20:23', '0005', '2023-11-09 02:12:53', '2023-11-09 02:12:53'),
(93, '2023-06-01', '19:26:29', '2023-08-01', '21:43:55', '2023-06-01', '21:56:10', '2023-11-01', '05:12:08', '2023-02-01 00:00:00', '00:20:23', '1001', '2023-11-09 02:12:53', '2023-11-09 02:12:53'),
(94, '2023-01-01', '22:33:35', '2023-06-01', '14:00:42', '2023-06-01', '15:11:19', '2023-09-01', '18:28:44', '2023-08-01 00:00:00', '00:20:23', '0930', '2023-11-09 02:12:53', '2023-11-09 02:12:53'),
(95, '2023-04-01', '19:06:40', '2023-01-01', '18:54:16', '2023-10-01', '19:11:02', '2023-06-01', '02:21:22', '2023-11-01 00:00:00', '00:20:23', '0023', '2023-11-09 02:12:53', '2023-11-09 02:12:53'),
(96, '2023-11-01', '23:58:54', '2023-03-01', '00:44:19', '2023-06-01', '14:11:56', '2023-04-01', '23:08:02', '2023-09-01 00:00:00', '00:20:23', '7658', '2023-11-09 02:12:53', '2023-11-09 02:12:53'),
(97, '2023-08-01', '04:34:20', '2023-01-01', '14:30:12', '2023-11-01', '18:24:46', '2023-01-01', '03:18:47', '2023-05-01 00:00:00', '00:20:23', '5384', '2023-11-09 02:12:53', '2023-11-09 02:12:53'),
(98, '2023-03-01', '08:15:57', '2023-02-01', '16:57:40', '2023-01-01', '07:52:15', '2023-05-01', '20:53:51', '2023-03-01 00:00:00', '00:20:23', '1017', '2023-11-09 02:12:53', '2023-11-09 02:12:53'),
(99, '2023-11-01', '17:55:05', '2023-09-01', '17:58:00', '2023-04-01', '12:06:17', '2023-06-01', '20:17:24', '2023-09-01 00:00:00', '00:20:23', '2022', '2023-11-09 02:12:53', '2023-11-09 02:12:53'),
(100, '2023-07-01', '02:12:40', '2023-08-01', '04:35:25', '2023-10-01', '19:18:58', '2023-05-01', '13:41:47', '2023-08-01 00:00:00', '00:20:23', '2004', '2023-11-09 02:12:53', '2023-11-09 02:12:53'),
(101, '2023-04-01', '13:42:28', '2023-09-01', '03:26:54', '2023-05-01', '14:08:59', '2023-09-01', '21:48:44', '2023-04-01 00:00:00', '00:20:23', '7508', '2023-11-09 02:12:53', '2023-11-09 02:12:53'),
(102, '2023-10-01', '22:11:56', '2023-11-01', '02:46:56', '2023-08-01', '21:04:18', '2023-05-01', '15:19:23', '2023-10-01 00:00:00', '00:20:23', '3021', '2023-11-09 02:12:53', '2023-11-09 02:12:53'),
(103, '2023-08-01', '19:45:34', '2023-01-01', '14:24:57', '2023-11-01', '00:03:52', '2023-02-01', '15:29:09', '2023-10-01 00:00:00', '00:20:23', '4005', '2023-11-09 02:12:53', '2023-11-09 02:12:53'),
(104, '2023-05-01', '07:31:48', '2023-04-01', '19:53:11', '2023-01-01', '22:04:21', '2023-04-01', '00:24:12', '2023-01-01 00:00:00', '00:20:23', '3003', '2023-11-09 02:12:53', '2023-11-09 02:12:53'),
(105, '2023-07-01', '22:09:30', '2023-11-01', '22:28:13', '2023-10-01', '11:30:53', '2023-10-01', '16:32:45', '2023-11-01 00:00:00', '00:20:23', '3468', '2023-11-09 02:12:53', '2023-11-09 02:12:53'),
(106, '2023-03-01', '14:00:56', '2023-04-01', '23:24:14', '2023-10-01', '06:32:07', '2023-10-01', '09:32:21', '2023-06-01 00:00:00', '00:20:23', '8095', '2023-11-09 02:12:53', '2023-11-09 02:12:53'),
(107, '2023-02-01', '09:31:53', '2023-06-01', '07:56:01', '2023-02-01', '16:57:23', '2023-02-01', '10:46:10', '2023-10-01 00:00:00', '00:20:23', '8385', '2023-11-09 02:12:53', '2023-11-09 02:12:53'),
(108, '2023-02-01', '18:01:51', '2023-03-01', '00:11:21', '2023-04-01', '09:19:13', '2023-02-01', '07:23:00', '2023-03-01 00:00:00', '00:20:23', '1252', '2023-11-09 02:12:53', '2023-11-09 02:12:53'),
(109, '2023-09-01', '05:41:05', '2023-11-01', '20:21:46', '2023-06-01', '23:43:42', '2023-05-01', '03:34:35', '2023-06-01 00:00:00', '00:20:23', '4015', '2023-11-09 02:12:53', '2023-11-09 02:12:53'),
(110, '2023-09-01', '13:51:17', '2023-07-01', '05:12:18', '2023-04-01', '22:12:01', '2023-08-01', '14:57:44', '2023-01-01 00:00:00', '00:20:23', '3014', '2023-11-09 02:12:53', '2023-11-09 02:12:53'),
(111, '2023-07-01', '10:18:21', '2023-06-01', '05:00:21', '2023-06-01', '02:21:36', '2023-10-01', '23:47:27', '2023-05-01 00:00:00', '00:20:23', '0013', '2023-11-09 02:12:53', '2023-11-09 02:12:53'),
(112, '2023-03-01', '05:29:45', '2023-04-01', '00:31:45', '2023-01-01', '08:35:37', '2023-06-01', '14:31:04', '2023-05-01 00:00:00', '00:20:23', '2004', '2023-11-09 02:12:53', '2023-11-09 02:12:53'),
(113, '2023-02-01', '10:40:32', '2023-10-01', '21:11:53', '2023-10-01', '18:41:04', '2023-03-01', '20:13:22', '2023-06-01 00:00:00', '00:20:23', '1088', '2023-11-09 02:12:53', '2023-11-09 02:12:53'),
(114, '2023-02-01', '07:11:07', '2023-02-01', '13:57:33', '2023-07-01', '08:33:22', '2023-11-01', '12:56:04', '2023-11-01 00:00:00', '00:20:23', '3903', '2023-11-09 02:12:53', '2023-11-09 02:12:53'),
(115, '2023-02-01', '12:08:22', '2023-01-01', '22:15:57', '2023-05-01', '01:47:40', '2023-03-01', '01:42:08', '2023-07-01 00:00:00', '00:20:23', '0019', '2023-11-09 02:12:53', '2023-11-09 02:12:53'),
(116, '2023-06-01', '19:36:25', '2023-06-01', '03:50:12', '2023-03-01', '16:26:05', '2023-08-01', '13:43:50', '2023-08-01 00:00:00', '00:20:23', '0585', '2023-11-09 02:12:53', '2023-11-09 02:12:53'),
(117, '2023-09-01', '16:10:55', '2023-01-01', '03:49:45', '2023-08-01', '23:07:05', '2023-09-01', '20:47:00', '2023-01-01 00:00:00', '00:20:23', '0866', '2023-11-09 02:12:53', '2023-11-09 02:12:53'),
(118, '2023-07-01', '19:54:53', '2023-05-01', '08:49:11', '2023-08-01', '12:20:41', '2023-05-01', '11:10:13', '2023-02-01 00:00:00', '00:20:23', '2023', '2023-11-09 02:12:53', '2023-11-09 02:12:53'),
(119, '2023-11-01', '17:19:11', '2023-08-01', '06:13:46', '2023-03-01', '10:29:08', '2023-06-01', '23:09:31', '2023-06-01 00:00:00', '00:20:23', '3006', '2023-11-09 02:12:53', '2023-11-09 02:12:53'),
(120, '2023-10-01', '16:13:45', '2023-08-01', '07:41:05', '2023-07-01', '23:57:02', '2023-03-01', '01:53:51', '2023-09-01 00:00:00', '00:20:23', '8744', '2023-11-09 02:12:53', '2023-11-09 02:12:53'),
(121, '2023-06-01', '20:58:21', '2023-10-01', '18:30:12', '2023-03-01', '18:48:51', '2023-03-01', '22:56:18', '2023-11-01 00:00:00', '00:20:23', '9489', '2023-11-09 02:12:53', '2023-11-09 02:12:53'),
(122, '2023-01-01', '06:11:30', '2023-02-01', '01:50:19', '2023-10-01', '03:12:28', '2023-01-01', '20:24:11', '2023-02-01 00:00:00', '00:20:23', '0019', '2023-11-09 02:12:53', '2023-11-09 02:12:53'),
(123, '2023-08-01', '18:06:27', '2023-07-01', '18:39:55', '2023-01-01', '23:40:19', '2023-09-01', '17:46:48', '2023-06-01 00:00:00', '00:20:23', '3012', '2023-11-09 02:12:53', '2023-11-09 02:12:53'),
(124, '2023-07-01', '06:15:27', '2023-06-01', '17:45:34', '2023-03-01', '17:06:51', '2023-01-01', '21:20:10', '2023-05-01 00:00:00', '00:20:23', '4023', '2023-11-09 02:12:53', '2023-11-09 02:12:53'),
(125, '2023-02-01', '01:33:07', '2023-01-01', '20:00:41', '2023-02-01', '06:15:08', '2023-10-01', '10:41:23', '2023-08-01 00:00:00', '00:20:23', '1088', '2023-11-09 02:12:53', '2023-11-09 02:12:53'),
(126, '2023-05-01', '22:15:46', '2023-06-01', '14:48:32', '2023-08-01', '09:00:17', '2023-11-01', '13:48:35', '2023-01-01 00:00:00', '00:20:23', '4005', '2023-11-09 02:12:58', '2023-11-09 02:12:58'),
(127, '2023-05-01', '06:22:01', '2023-11-01', '04:07:48', '2023-10-01', '21:10:09', '2023-09-01', '05:02:37', '2023-09-01 00:00:00', '00:20:23', '7282', '2023-11-09 02:12:58', '2023-11-09 02:12:58'),
(128, '2023-11-01', '17:01:38', '2023-08-01', '10:20:39', '2023-01-01', '19:17:55', '2023-11-01', '09:34:26', '2023-02-01 00:00:00', '00:20:23', '8385', '2023-11-09 02:12:58', '2023-11-09 02:12:58'),
(129, '2023-10-01', '23:19:12', '2023-03-01', '05:20:07', '2023-05-01', '11:29:18', '2023-02-01', '02:15:42', '2023-02-01 00:00:00', '00:20:23', '0007', '2023-11-09 02:12:58', '2023-11-09 02:12:58'),
(130, '2023-04-01', '17:40:25', '2023-07-01', '19:21:50', '2023-03-01', '16:51:21', '2023-10-01', '01:59:01', '2023-10-01 00:00:00', '00:20:23', '5096', '2023-11-09 02:12:58', '2023-11-09 02:12:58'),
(131, '2023-03-01', '16:20:44', '2023-08-01', '06:10:05', '2023-04-01', '18:05:08', '2023-10-01', '00:06:46', '2023-06-01 00:00:00', '00:20:23', '0015', '2023-11-09 02:12:58', '2023-11-09 02:12:58'),
(132, '2023-11-01', '02:13:33', '2023-07-01', '16:39:59', '2023-08-01', '08:37:51', '2023-09-01', '13:59:23', '2023-08-01 00:00:00', '00:20:23', '1017', '2023-11-09 02:12:58', '2023-11-09 02:12:58'),
(133, '2023-02-01', '15:56:35', '2023-11-01', '23:14:51', '2023-10-01', '10:12:56', '2023-06-01', '08:52:17', '2023-03-01 00:00:00', '00:20:23', '3647', '2023-11-09 02:12:58', '2023-11-09 02:12:58'),
(134, '2023-05-01', '04:27:39', '2023-09-01', '12:05:38', '2023-01-01', '21:38:20', '2023-03-01', '14:17:39', '2023-03-01 00:00:00', '00:20:23', '5148', '2023-11-09 02:12:58', '2023-11-09 02:12:58'),
(135, '2023-04-01', '17:16:18', '2023-09-01', '17:34:26', '2023-04-01', '10:27:26', '2023-03-01', '16:31:34', '2023-10-01 00:00:00', '00:20:23', '8649', '2023-11-09 02:12:58', '2023-11-09 02:12:58'),
(136, '2023-10-01', '19:08:24', '2023-03-01', '23:05:20', '2023-11-01', '02:25:56', '2023-06-01', '06:24:45', '2023-09-01 00:00:00', '00:20:23', '8677', '2023-11-09 02:12:58', '2023-11-09 02:12:58'),
(137, '2023-02-01', '09:03:41', '2023-06-01', '10:45:42', '2023-08-01', '02:55:14', '2023-06-01', '06:38:15', '2023-09-01 00:00:00', '00:20:23', '7229', '2023-11-09 02:12:58', '2023-11-09 02:12:58'),
(138, '2023-09-01', '15:22:58', '2023-09-01', '00:33:13', '2023-09-01', '16:04:40', '2023-02-01', '12:29:49', '2023-04-01 00:00:00', '00:20:23', '4999', '2023-11-09 02:12:58', '2023-11-09 02:12:58'),
(139, '2023-10-01', '13:00:39', '2023-01-01', '14:54:54', '2023-11-01', '22:17:17', '2023-09-01', '01:14:31', '2023-11-01 00:00:00', '00:20:23', '1014', '2023-11-09 02:12:58', '2023-11-09 02:12:58'),
(140, '2023-03-01', '06:11:23', '2023-07-01', '23:52:31', '2023-04-01', '13:55:36', '2023-11-01', '01:43:48', '2023-06-01 00:00:00', '00:20:23', '0805', '2023-11-09 02:12:58', '2023-11-09 02:12:58'),
(141, '2023-08-01', '09:59:02', '2023-11-01', '08:19:51', '2023-11-01', '20:25:51', '2023-04-01', '01:12:31', '2023-04-01 00:00:00', '00:20:23', '3647', '2023-11-09 02:12:58', '2023-11-09 02:12:58'),
(142, '2023-08-01', '14:57:28', '2023-11-01', '21:12:12', '2023-07-01', '04:14:44', '2023-03-01', '09:50:11', '2023-06-01 00:00:00', '00:20:23', '4018', '2023-11-09 02:12:58', '2023-11-09 02:12:58'),
(143, '2023-06-01', '13:08:10', '2023-04-01', '22:56:44', '2023-10-01', '05:44:21', '2023-09-01', '22:32:10', '2023-06-01 00:00:00', '00:20:23', '4806', '2023-11-09 02:12:58', '2023-11-09 02:12:58'),
(144, '2023-01-01', '21:53:33', '2023-06-01', '17:02:52', '2023-01-01', '06:52:41', '2023-03-01', '01:15:15', '2023-08-01 00:00:00', '00:20:23', '5384', '2023-11-09 02:12:58', '2023-11-09 02:12:58'),
(145, '2023-06-01', '02:47:52', '2023-11-01', '12:58:14', '2023-09-01', '05:15:52', '2023-09-01', '07:17:27', '2023-02-01 00:00:00', '00:20:23', '2014', '2023-11-09 02:12:58', '2023-11-09 02:12:58'),
(146, '2023-01-01', '12:22:49', '2023-06-01', '02:56:59', '2023-01-01', '16:37:30', '2023-05-01', '01:19:41', '2023-11-01 00:00:00', '00:20:23', '4443', '2023-11-09 02:12:58', '2023-11-09 02:12:58'),
(147, '2023-04-01', '10:20:22', '2023-03-01', '18:47:02', '2023-03-01', '23:50:22', '2023-02-01', '19:53:45', '2023-08-01 00:00:00', '00:20:23', '9489', '2023-11-09 02:12:58', '2023-11-09 02:12:58'),
(148, '2023-09-01', '16:50:04', '2023-03-01', '19:58:23', '2023-07-01', '11:58:55', '2023-08-01', '23:53:51', '2023-10-01 00:00:00', '00:20:23', '4009', '2023-11-09 02:12:58', '2023-11-09 02:12:58'),
(149, '2023-04-01', '16:06:59', '2023-05-01', '03:17:12', '2023-05-01', '13:24:02', '2023-07-01', '09:01:53', '2023-01-01 00:00:00', '00:20:23', '3647', '2023-11-09 02:12:58', '2023-11-09 02:12:58'),
(150, '2023-10-01', '04:19:29', '2023-03-01', '08:54:56', '2023-04-01', '10:28:28', '2023-03-01', '22:46:27', '2023-11-01 00:00:00', '00:20:23', '6356', '2023-11-09 02:12:58', '2023-11-09 02:12:58'),
(151, '2023-07-01', '08:12:11', '2023-11-01', '17:07:22', '2023-08-01', '11:30:15', '2023-03-01', '16:28:39', '2023-09-01 00:00:00', '00:20:23', '4362', '2023-11-09 02:12:58', '2023-11-09 02:12:58'),
(152, '2023-02-01', '06:44:26', '2023-01-01', '13:25:45', '2023-07-01', '02:29:32', '2023-10-01', '22:29:16', '2023-02-01 00:00:00', '00:20:23', '9024', '2023-11-09 02:12:58', '2023-11-09 02:12:58'),
(153, '2023-10-01', '13:27:23', '2023-02-01', '23:47:55', '2023-07-01', '19:04:13', '2023-04-01', '04:08:55', '2023-11-01 00:00:00', '00:20:23', '1021', '2023-11-09 02:12:58', '2023-11-09 02:12:58'),
(154, '2023-09-01', '20:02:09', '2023-09-01', '10:56:34', '2023-10-01', '03:35:35', '2023-01-01', '17:47:03', '2023-07-01 00:00:00', '00:20:23', '0930', '2023-11-09 02:12:58', '2023-11-09 02:12:58'),
(155, '2023-10-01', '17:02:23', '2023-01-01', '22:37:34', '2023-08-01', '12:32:24', '2023-07-01', '10:37:24', '2023-05-01 00:00:00', '00:20:23', '0018', '2023-11-09 02:12:58', '2023-11-09 02:12:58'),
(156, '2023-04-01', '13:56:01', '2023-10-01', '18:48:32', '2023-03-01', '15:57:54', '2023-08-01', '14:03:20', '2023-09-01 00:00:00', '00:20:23', '9482', '2023-11-09 02:12:58', '2023-11-09 02:12:58'),
(157, '2023-03-01', '15:19:59', '2023-06-01', '11:51:09', '2023-01-01', '15:12:14', '2023-02-01', '14:12:11', '2023-08-01 00:00:00', '00:20:23', '4102', '2023-11-09 02:12:58', '2023-11-09 02:12:58'),
(158, '2023-01-01', '13:02:03', '2023-08-01', '18:25:26', '2023-09-01', '16:44:47', '2023-01-01', '08:22:06', '2023-06-01 00:00:00', '00:20:23', '0149', '2023-11-09 02:12:58', '2023-11-09 02:12:58'),
(159, '2023-07-01', '03:29:05', '2023-10-01', '00:24:57', '2023-05-01', '00:32:18', '2023-10-01', '06:29:22', '2023-09-01 00:00:00', '00:20:23', '1025', '2023-11-09 02:12:58', '2023-11-09 02:12:58'),
(160, '2023-10-01', '06:34:50', '2023-09-01', '05:46:10', '2023-09-01', '02:23:52', '2023-03-01', '17:37:56', '2023-01-01 00:00:00', '00:20:23', '0014', '2023-11-09 02:12:58', '2023-11-09 02:12:58'),
(161, '2023-04-01', '06:33:30', '2023-04-01', '14:35:17', '2023-03-01', '02:09:01', '2023-10-01', '05:33:39', '2023-06-01 00:00:00', '00:20:23', '3909', '2023-11-09 02:12:58', '2023-11-09 02:12:58'),
(162, '2023-08-01', '07:05:38', '2023-05-01', '05:19:06', '2023-10-01', '13:12:26', '2023-03-01', '11:04:14', '2023-08-01 00:00:00', '00:20:23', '3015', '2023-11-09 02:12:58', '2023-11-09 02:12:58'),
(163, '2023-07-01', '22:42:50', '2023-10-01', '08:41:01', '2023-04-01', '08:33:49', '2023-11-01', '12:33:27', '2023-10-01 00:00:00', '00:20:23', '1024', '2023-11-09 02:12:58', '2023-11-09 02:12:58'),
(164, '2023-01-01', '12:46:35', '2023-07-01', '11:04:00', '2023-06-01', '23:16:54', '2023-05-01', '06:45:05', '2023-02-01 00:00:00', '00:20:23', '0022', '2023-11-09 02:12:58', '2023-11-09 02:12:58'),
(165, '2023-10-01', '11:22:06', '2023-10-01', '22:49:27', '2023-02-01', '19:20:48', '2023-07-01', '18:10:14', '2023-10-01 00:00:00', '00:20:23', '0001', '2023-11-09 02:12:58', '2023-11-09 02:12:58'),
(166, '2023-11-01', '23:09:38', '2023-11-01', '16:56:35', '2023-09-01', '17:28:19', '2023-04-01', '11:28:59', '2023-05-01 00:00:00', '00:20:23', '3024', '2023-11-09 02:12:58', '2023-11-09 02:12:58'),
(167, '2023-07-01', '18:30:36', '2023-03-01', '15:07:58', '2023-07-01', '00:56:07', '2023-05-01', '01:34:33', '2023-01-01 00:00:00', '00:20:23', '1670', '2023-11-09 02:12:58', '2023-11-09 02:12:58'),
(168, '2023-09-01', '21:57:22', '2023-03-01', '13:23:49', '2023-01-01', '08:56:23', '2023-10-01', '01:17:02', '2023-09-01 00:00:00', '00:20:23', '2023', '2023-11-09 02:12:58', '2023-11-09 02:12:58'),
(169, '2023-01-01', '02:31:35', '2023-03-01', '01:05:25', '2023-05-01', '21:58:39', '2023-04-01', '23:45:49', '2023-10-01 00:00:00', '00:20:23', '3026', '2023-11-09 02:12:58', '2023-11-09 02:12:58'),
(170, '2023-05-01', '20:33:33', '2023-01-01', '18:34:32', '2023-08-01', '23:54:23', '2023-11-01', '23:02:37', '2023-10-01 00:00:00', '00:20:23', '4014', '2023-11-09 02:12:58', '2023-11-09 02:12:58'),
(171, '2023-01-01', '14:25:09', '2023-09-01', '06:17:45', '2023-10-01', '13:50:55', '2023-03-01', '14:27:41', '2023-03-01 00:00:00', '00:20:23', '0015', '2023-11-09 02:12:58', '2023-11-09 02:12:58'),
(172, '2023-01-01', '04:29:21', '2023-11-01', '00:35:37', '2023-05-01', '18:52:36', '2023-09-01', '17:18:58', '2023-02-01 00:00:00', '00:20:23', '0011', '2023-11-09 02:12:58', '2023-11-09 02:12:58'),
(173, '2023-06-01', '09:14:20', '2023-06-01', '08:46:23', '2023-04-01', '11:32:28', '2023-06-01', '20:19:34', '2023-10-01 00:00:00', '00:20:23', '4443', '2023-11-09 02:12:58', '2023-11-09 02:12:58'),
(174, '2023-04-01', '18:03:45', '2023-10-01', '05:40:38', '2023-06-01', '17:18:19', '2023-02-01', '13:42:26', '2023-05-01 00:00:00', '00:20:23', '8854', '2023-11-09 02:12:58', '2023-11-09 02:12:58'),
(175, '2023-02-01', '04:55:27', '2023-06-01', '20:01:14', '2023-08-01', '00:04:27', '2023-11-01', '13:13:35', '2023-01-01 00:00:00', '00:20:23', '3012', '2023-11-09 02:12:58', '2023-11-09 02:12:58'),
(176, '2023-01-01', '09:07:08', '2023-09-01', '21:16:22', '2023-01-01', '10:06:55', '2023-01-01', '00:44:18', '2023-11-01 00:00:00', '00:20:23', '7230', '2023-11-09 02:12:58', '2023-11-09 02:12:58'),
(177, '2023-01-01', '09:17:49', '2023-10-01', '06:52:50', '2023-09-01', '23:03:43', '2023-06-01', '16:15:01', '2023-10-01 00:00:00', '00:20:23', '2015', '2023-11-09 02:12:58', '2023-11-09 02:12:58'),
(178, '2023-11-01', '10:11:54', '2023-02-01', '09:24:39', '2023-07-01', '15:01:12', '2023-05-01', '08:40:58', '2023-06-01 00:00:00', '00:20:23', '4008', '2023-11-09 02:12:58', '2023-11-09 02:12:58'),
(179, '2023-10-01', '17:29:37', '2023-02-01', '16:03:53', '2023-10-01', '03:47:18', '2023-04-01', '23:23:46', '2023-01-01 00:00:00', '00:20:23', '3377', '2023-11-09 02:12:58', '2023-11-09 02:12:58'),
(180, '2023-03-01', '02:59:01', '2023-10-01', '19:51:16', '2023-07-01', '14:22:49', '2023-02-01', '22:32:16', '2023-03-01 00:00:00', '00:20:23', '3490', '2023-11-09 02:12:58', '2023-11-09 02:12:58'),
(181, '2023-11-01', '21:58:27', '2023-07-01', '09:36:49', '2023-02-01', '08:53:43', '2023-06-01', '10:29:12', '2023-08-01 00:00:00', '00:20:23', '4929', '2023-11-09 02:12:58', '2023-11-09 02:12:58'),
(182, '2023-03-01', '00:52:50', '2023-06-01', '06:13:29', '2023-10-01', '14:20:40', '2023-04-01', '00:31:32', '2023-01-01 00:00:00', '00:20:23', '1344', '2023-11-09 02:12:58', '2023-11-09 02:12:58'),
(183, '2023-07-01', '19:55:57', '2023-06-01', '00:25:54', '2023-07-01', '20:48:28', '2023-07-01', '07:27:59', '2023-09-01 00:00:00', '00:20:23', '3007', '2023-11-09 02:12:58', '2023-11-09 02:12:58'),
(184, '2023-10-01', '13:22:16', '2023-04-01', '19:25:31', '2023-02-01', '08:44:22', '2023-04-01', '15:13:33', '2023-02-01 00:00:00', '00:20:23', '0010', '2023-11-09 02:12:58', '2023-11-09 02:12:58'),
(185, '2023-09-01', '07:42:56', '2023-05-01', '23:08:12', '2023-08-01', '10:09:20', '2023-02-01', '08:43:40', '2023-05-01 00:00:00', '00:20:23', '1372', '2023-11-09 02:12:58', '2023-11-09 02:12:58'),
(186, '2023-03-01', '12:06:59', '2023-09-01', '04:04:42', '2023-08-01', '16:26:30', '2023-06-01', '11:41:22', '2023-11-01 00:00:00', '00:20:23', '3009', '2023-11-09 02:12:58', '2023-11-09 02:12:58'),
(187, '2023-02-01', '17:14:16', '2023-01-01', '03:37:56', '2023-07-01', '09:52:16', '2023-04-01', '10:51:39', '2023-03-01 00:00:00', '00:20:23', '2130', '2023-11-09 02:12:58', '2023-11-09 02:12:58'),
(188, '2023-01-01', '09:32:36', '2023-10-01', '03:04:41', '2023-01-01', '20:35:36', '2023-02-01', '03:34:29', '2023-04-01 00:00:00', '00:20:23', '4806', '2023-11-09 02:12:58', '2023-11-09 02:12:58'),
(189, '2023-11-01', '21:04:39', '2023-06-01', '23:55:09', '2023-05-01', '00:46:16', '2023-11-01', '15:22:43', '2023-04-01 00:00:00', '00:20:23', '0002', '2023-11-09 02:12:58', '2023-11-09 02:12:58'),
(190, '2023-07-01', '03:10:03', '2023-10-01', '03:17:39', '2023-11-01', '10:04:48', '2023-03-01', '17:52:31', '2023-02-01 00:00:00', '00:20:23', '2006', '2023-11-09 02:12:58', '2023-11-09 02:12:58'),
(191, '2023-04-01', '05:28:25', '2023-04-01', '17:09:29', '2023-09-01', '12:44:17', '2023-05-01', '15:36:17', '2023-10-01 00:00:00', '00:20:23', '0006', '2023-11-09 02:12:58', '2023-11-09 02:12:58'),
(192, '2023-07-01', '21:46:41', '2023-10-01', '12:20:28', '2023-01-01', '14:28:58', '2023-11-01', '20:06:10', '2023-05-01 00:00:00', '00:20:23', '4025', '2023-11-09 02:12:58', '2023-11-09 02:12:58'),
(193, '2023-02-01', '10:41:33', '2023-09-01', '10:27:41', '2023-11-01', '06:32:01', '2023-07-01', '05:59:15', '2023-05-01 00:00:00', '00:20:23', '7658', '2023-11-09 02:12:58', '2023-11-09 02:12:58'),
(194, '2023-09-01', '07:05:50', '2023-03-01', '03:28:04', '2023-02-01', '02:00:56', '2023-02-01', '07:05:12', '2023-02-01 00:00:00', '00:20:23', '1502', '2023-11-09 02:12:58', '2023-11-09 02:12:58'),
(195, '2023-02-01', '01:37:05', '2023-10-01', '04:06:25', '2023-03-01', '15:28:20', '2023-06-01', '17:00:44', '2023-11-01 00:00:00', '00:20:23', '1187', '2023-11-09 02:12:58', '2023-11-09 02:12:58'),
(196, '2023-11-01', '19:16:07', '2023-03-01', '20:42:25', '2023-07-01', '04:00:56', '2023-03-01', '09:56:10', '2023-06-01 00:00:00', '00:20:23', '1344', '2023-11-09 02:12:58', '2023-11-09 02:12:58'),
(197, '2023-03-01', '20:20:15', '2023-08-01', '18:48:58', '2023-11-01', '06:28:15', '2023-07-01', '01:35:59', '2023-07-01 00:00:00', '00:20:23', '1002', '2023-11-09 02:12:58', '2023-11-09 02:12:58'),
(198, '2023-01-01', '23:52:16', '2023-08-01', '14:11:18', '2023-09-01', '06:44:20', '2023-11-01', '00:20:38', '2023-02-01 00:00:00', '00:20:23', '8642', '2023-11-09 02:12:58', '2023-11-09 02:12:58'),
(199, '2023-02-01', '13:55:34', '2023-06-01', '16:46:13', '2023-01-01', '01:18:01', '2023-02-01', '17:46:39', '2023-02-01 00:00:00', '00:20:23', '1021', '2023-11-09 02:12:58', '2023-11-09 02:12:58'),
(200, '2023-02-01', '04:14:11', '2023-07-01', '07:40:02', '2023-10-01', '11:32:57', '2023-09-01', '06:25:58', '2023-02-01 00:00:00', '00:20:23', '4002', '2023-11-09 02:12:58', '2023-11-09 02:12:58'),
(201, '2023-10-01', '12:57:32', '2023-01-01', '16:36:01', '2023-03-01', '06:46:34', '2023-07-01', '03:20:44', '2023-10-01 00:00:00', '00:20:23', '6149', '2023-11-09 02:12:58', '2023-11-09 02:12:58'),
(202, '2023-07-01', '19:31:42', '2023-03-01', '11:44:36', '2023-10-01', '23:22:14', '2023-03-01', '02:21:11', '2023-10-01 00:00:00', '00:20:23', '1010', '2023-11-09 02:12:58', '2023-11-09 02:12:58'),
(203, '2023-07-01', '11:34:13', '2023-08-01', '01:31:22', '2023-03-01', '20:48:09', '2023-08-01', '21:32:26', '2023-05-01 00:00:00', '00:20:23', '9175', '2023-11-09 02:12:58', '2023-11-09 02:12:58'),
(204, '2023-10-01', '20:53:16', '2023-10-01', '20:11:59', '2023-06-01', '03:48:12', '2023-03-01', '10:28:01', '2023-07-01 00:00:00', '00:20:23', '4014', '2023-11-09 02:12:58', '2023-11-09 02:12:58'),
(205, '2023-11-01', '11:11:59', '2023-05-01', '17:58:28', '2023-06-01', '00:43:06', '2023-09-01', '19:52:51', '2023-09-01 00:00:00', '00:20:23', '3490', '2023-11-09 02:12:58', '2023-11-09 02:12:58'),
(206, '2023-04-01', '12:43:45', '2023-08-01', '15:57:47', '2023-05-01', '20:44:16', '2023-03-01', '10:20:57', '2023-06-01 00:00:00', '00:20:23', '5486', '2023-11-09 02:12:58', '2023-11-09 02:12:58'),
(207, '2023-11-01', '16:29:46', '2023-07-01', '17:04:40', '2023-10-01', '08:00:51', '2023-11-01', '22:34:15', '2023-09-01 00:00:00', '00:20:23', '5355', '2023-11-09 02:12:58', '2023-11-09 02:12:58'),
(208, '2023-10-01', '03:29:41', '2023-01-01', '23:01:08', '2023-07-01', '21:54:26', '2023-10-01', '17:04:03', '2023-10-01 00:00:00', '00:20:23', '4312', '2023-11-09 02:12:58', '2023-11-09 02:12:58'),
(209, '2023-03-01', '08:25:25', '2023-02-01', '13:33:41', '2023-05-01', '13:51:31', '2023-06-01', '21:15:39', '2023-10-01 00:00:00', '00:20:23', '3009', '2023-11-09 02:12:58', '2023-11-09 02:12:58'),
(210, '2023-02-01', '06:16:32', '2023-11-01', '21:23:25', '2023-08-01', '13:56:08', '2023-11-01', '00:15:56', '2023-03-01 00:00:00', '00:20:23', '4018', '2023-11-09 02:12:58', '2023-11-09 02:12:58'),
(211, '2023-08-01', '21:57:23', '2023-06-01', '13:06:30', '2023-04-01', '03:27:14', '2023-08-01', '19:38:58', '2023-02-01 00:00:00', '00:20:23', '4016', '2023-11-09 02:12:58', '2023-11-09 02:12:58'),
(212, '2023-08-01', '22:16:09', '2023-07-01', '07:51:49', '2023-09-01', '20:59:21', '2023-01-01', '16:01:27', '2023-02-01 00:00:00', '00:20:23', '6973', '2023-11-09 02:12:58', '2023-11-09 02:12:58'),
(213, '2023-07-01', '05:23:11', '2023-04-01', '00:39:10', '2023-02-01', '11:55:35', '2023-02-01', '04:43:37', '2023-07-01 00:00:00', '00:20:23', '3012', '2023-11-09 02:12:58', '2023-11-09 02:12:58'),
(214, '2023-08-01', '03:30:58', '2023-08-01', '04:21:46', '2023-09-01', '03:14:54', '2023-06-01', '22:27:09', '2023-03-01 00:00:00', '00:20:23', '0282', '2023-11-09 02:12:58', '2023-11-09 02:12:58'),
(215, '2023-01-01', '08:58:49', '2023-10-01', '03:44:24', '2023-03-01', '14:14:21', '2023-04-01', '20:53:14', '2023-04-01 00:00:00', '00:20:23', '4021', '2023-11-09 02:12:58', '2023-11-09 02:12:58'),
(216, '2023-03-01', '15:47:13', '2023-08-01', '08:06:40', '2023-08-01', '12:01:52', '2023-05-01', '11:35:23', '2023-03-01 00:00:00', '00:20:23', '2006', '2023-11-09 02:12:58', '2023-11-09 02:12:58'),
(217, '2023-05-01', '13:02:32', '2023-06-01', '19:12:42', '2023-06-01', '07:38:37', '2023-11-01', '20:19:29', '2023-04-01 00:00:00', '00:20:23', '4026', '2023-11-09 02:12:58', '2023-11-09 02:12:58'),
(218, '2023-06-01', '21:54:40', '2023-11-01', '22:29:53', '2023-10-01', '14:15:54', '2023-04-01', '20:33:16', '2023-04-01 00:00:00', '00:20:23', '0021', '2023-11-09 02:12:58', '2023-11-09 02:12:58'),
(219, '2023-03-01', '05:21:35', '2023-04-01', '19:58:50', '2023-03-01', '19:23:27', '2023-03-01', '20:36:07', '2023-06-01 00:00:00', '00:20:23', '1025', '2023-11-09 02:12:58', '2023-11-09 02:12:58'),
(220, '2023-03-01', '08:44:47', '2023-02-01', '19:18:35', '2023-06-01', '00:10:05', '2023-07-01', '21:24:19', '2023-08-01 00:00:00', '00:20:23', '1026', '2023-11-09 02:12:58', '2023-11-09 02:12:58'),
(221, '2023-06-01', '19:57:03', '2023-09-01', '10:45:26', '2023-10-01', '00:49:46', '2023-06-01', '14:56:37', '2023-06-01 00:00:00', '00:20:23', '3007', '2023-11-09 02:12:58', '2023-11-09 02:12:58'),
(222, '2023-06-01', '09:17:07', '2023-06-01', '07:41:15', '2023-02-01', '14:29:41', '2023-08-01', '14:12:50', '2023-11-01 00:00:00', '00:20:23', '9024', '2023-11-09 02:12:58', '2023-11-09 02:12:58'),
(223, '2023-10-01', '16:35:42', '2023-10-01', '09:40:14', '2023-04-01', '10:23:00', '2023-02-01', '14:15:03', '2023-05-01 00:00:00', '00:20:23', '3502', '2023-11-09 02:12:58', '2023-11-09 02:12:58'),
(224, '2023-10-01', '06:16:25', '2023-09-01', '02:03:58', '2023-02-01', '06:47:49', '2023-02-01', '14:32:46', '2023-09-01 00:00:00', '00:20:23', '6212', '2023-11-09 02:12:58', '2023-11-09 02:12:58'),
(225, '2023-07-01', '01:52:09', '2023-07-01', '22:19:14', '2023-09-01', '23:16:11', '2023-07-01', '01:14:37', '2023-06-01 00:00:00', '00:20:23', '4224', '2023-11-09 02:12:58', '2023-11-09 02:12:58'),
(226, '2023-01-01', '08:23:07', '2023-07-01', '18:19:56', '2023-02-01', '08:50:34', '2023-05-01', '03:01:35', '2023-04-01 00:00:00', '00:20:23', '8044', '2023-11-09 02:13:02', '2023-11-09 02:13:02'),
(227, '2023-09-01', '12:52:06', '2023-03-01', '14:54:09', '2023-05-01', '23:19:56', '2023-09-01', '21:11:37', '2023-02-01 00:00:00', '00:20:23', '2026', '2023-11-09 02:13:02', '2023-11-09 02:13:02'),
(228, '2023-07-01', '00:49:52', '2023-05-01', '04:00:59', '2023-06-01', '20:50:01', '2023-11-01', '23:41:23', '2023-02-01 00:00:00', '00:20:23', '8600', '2023-11-09 02:13:02', '2023-11-09 02:13:02'),
(229, '2023-02-01', '06:11:29', '2023-01-01', '06:00:14', '2023-03-01', '10:21:03', '2023-05-01', '22:37:57', '2023-05-01 00:00:00', '00:20:23', '1106', '2023-11-09 02:13:02', '2023-11-09 02:13:02'),
(230, '2023-01-01', '05:29:54', '2023-01-01', '13:37:01', '2023-08-01', '17:14:21', '2023-06-01', '12:59:30', '2023-01-01 00:00:00', '00:20:23', '2025', '2023-11-09 02:13:02', '2023-11-09 02:13:02'),
(231, '2023-02-01', '06:41:04', '2023-11-01', '23:04:34', '2023-11-01', '18:17:21', '2023-01-01', '19:48:27', '2023-01-01 00:00:00', '00:20:23', '6833', '2023-11-09 02:13:02', '2023-11-09 02:13:02'),
(232, '2023-09-01', '03:35:09', '2023-06-01', '21:58:51', '2023-02-01', '01:21:47', '2023-09-01', '20:04:21', '2023-09-01 00:00:00', '00:20:23', '6833', '2023-11-09 02:13:02', '2023-11-09 02:13:02'),
(233, '2023-05-01', '07:44:47', '2023-05-01', '05:05:21', '2023-09-01', '02:58:34', '2023-05-01', '10:44:54', '2023-02-01 00:00:00', '00:20:23', '0008', '2023-11-09 02:13:02', '2023-11-09 02:13:02'),
(234, '2023-05-01', '06:55:53', '2023-04-01', '15:59:25', '2023-05-01', '01:25:59', '2023-01-01', '03:19:06', '2023-06-01 00:00:00', '00:20:23', '4166', '2023-11-09 02:13:02', '2023-11-09 02:13:02'),
(235, '2023-01-01', '19:56:47', '2023-10-01', '01:06:03', '2023-06-01', '09:23:52', '2023-05-01', '00:39:02', '2023-09-01 00:00:00', '00:20:23', '3004', '2023-11-09 02:13:02', '2023-11-09 02:13:02'),
(236, '2023-05-01', '03:13:20', '2023-05-01', '19:55:00', '2023-09-01', '13:25:11', '2023-05-01', '03:43:31', '2023-08-01 00:00:00', '00:20:23', '7185', '2023-11-09 02:13:02', '2023-11-09 02:13:02'),
(237, '2023-01-01', '12:12:15', '2023-06-01', '20:39:32', '2023-10-01', '18:40:51', '2023-04-01', '01:00:34', '2023-05-01 00:00:00', '00:20:23', '8649', '2023-11-09 02:13:02', '2023-11-09 02:13:02'),
(238, '2023-06-01', '12:32:15', '2023-01-01', '10:26:17', '2023-02-01', '13:29:13', '2023-04-01', '18:18:44', '2023-11-01 00:00:00', '00:20:23', '4010', '2023-11-09 02:13:02', '2023-11-09 02:13:02'),
(239, '2023-02-01', '22:17:38', '2023-02-01', '23:37:39', '2023-06-01', '08:16:37', '2023-04-01', '16:36:59', '2023-05-01 00:00:00', '00:20:23', '4015', '2023-11-09 02:13:02', '2023-11-09 02:13:02'),
(240, '2023-05-01', '12:17:17', '2023-05-01', '13:08:49', '2023-06-01', '19:11:54', '2023-06-01', '06:27:02', '2023-09-01 00:00:00', '00:20:23', '8677', '2023-11-09 02:13:02', '2023-11-09 02:13:02'),
(241, '2023-05-01', '08:18:52', '2023-07-01', '01:17:18', '2023-05-01', '21:38:47', '2023-03-01', '15:41:22', '2023-05-01 00:00:00', '00:20:23', '2019', '2023-11-09 02:13:02', '2023-11-09 02:13:02'),
(242, '2023-08-01', '16:12:02', '2023-04-01', '16:41:38', '2023-05-01', '03:22:43', '2023-05-01', '09:57:08', '2023-11-01 00:00:00', '00:20:23', '0024', '2023-11-09 02:13:02', '2023-11-09 02:13:02'),
(243, '2023-09-01', '20:46:56', '2023-01-01', '15:19:38', '2023-01-01', '08:10:45', '2023-07-01', '17:27:42', '2023-11-01 00:00:00', '00:20:23', '0010', '2023-11-09 02:13:02', '2023-11-09 02:13:02'),
(244, '2023-09-01', '13:30:40', '2023-06-01', '19:20:16', '2023-06-01', '05:49:18', '2023-07-01', '08:34:12', '2023-11-01 00:00:00', '00:20:23', '8492', '2023-11-09 02:13:02', '2023-11-09 02:13:02'),
(245, '2023-07-01', '03:39:57', '2023-11-01', '10:38:44', '2023-04-01', '01:16:35', '2023-05-01', '00:26:20', '2023-09-01 00:00:00', '00:20:23', '8657', '2023-11-09 02:13:02', '2023-11-09 02:13:02'),
(246, '2023-04-01', '09:09:29', '2023-10-01', '00:21:01', '2023-07-01', '20:14:12', '2023-06-01', '21:20:50', '2023-11-01 00:00:00', '00:20:23', '3442', '2023-11-09 02:13:02', '2023-11-09 02:13:02'),
(247, '2023-01-01', '11:23:13', '2023-02-01', '06:33:25', '2023-11-01', '22:06:02', '2023-09-01', '00:54:02', '2023-10-01 00:00:00', '00:20:23', '0006', '2023-11-09 02:13:02', '2023-11-09 02:13:02'),
(248, '2023-01-01', '22:45:31', '2023-06-01', '12:09:40', '2023-02-01', '02:14:08', '2023-02-01', '05:01:33', '2023-09-01 00:00:00', '00:20:23', '2024', '2023-11-09 02:13:02', '2023-11-09 02:13:02'),
(249, '2023-06-01', '21:31:33', '2023-10-01', '16:30:14', '2023-09-01', '23:50:34', '2023-06-01', '16:28:42', '2023-10-01 00:00:00', '00:20:23', '6849', '2023-11-09 02:13:02', '2023-11-09 02:13:02'),
(250, '2023-05-01', '15:35:08', '2023-02-01', '19:34:08', '2023-07-01', '15:32:19', '2023-05-01', '23:06:58', '2023-08-01 00:00:00', '00:20:23', '9015', '2023-11-09 02:13:02', '2023-11-09 02:13:02'),
(251, '2023-04-01', '04:19:56', '2023-01-01', '11:54:29', '2023-06-01', '19:15:56', '2023-08-01', '18:52:19', '2023-01-01 00:00:00', '00:20:23', '4003', '2023-11-09 02:13:02', '2023-11-09 02:13:02'),
(252, '2023-10-01', '00:06:54', '2023-05-01', '03:46:13', '2023-06-01', '22:36:11', '2023-03-01', '11:31:27', '2023-07-01 00:00:00', '00:20:23', '1372', '2023-11-09 02:13:02', '2023-11-09 02:13:02'),
(253, '2023-03-01', '09:16:18', '2023-03-01', '19:25:31', '2023-06-01', '21:38:06', '2023-02-01', '20:14:12', '2023-10-01 00:00:00', '00:20:23', '9120', '2023-11-09 02:13:02', '2023-11-09 02:13:02'),
(254, '2023-09-01', '22:38:02', '2023-05-01', '09:16:09', '2023-07-01', '20:24:44', '2023-05-01', '16:24:28', '2023-01-01 00:00:00', '00:20:23', '1018', '2023-11-09 02:13:02', '2023-11-09 02:13:02'),
(255, '2023-10-01', '19:20:02', '2023-06-01', '03:07:34', '2023-02-01', '05:23:42', '2023-09-01', '02:22:05', '2023-03-01 00:00:00', '00:20:23', '0010', '2023-11-09 02:13:02', '2023-11-09 02:13:02');
INSERT INTO `trazabilidad` (`cod_tra`, `dat_pro_tra`, `tim_pro_tra`, `dat_enp_tra`, `tim_enp_tra`, `dat_com_tra`, `tim_com_tra`, `dat_can_tra`, `tim_can_tra`, `ini_ina_tra`, `fin_ina_tra`, `via_tra`, `created_at`, `updated_at`) VALUES
(256, '2023-05-01', '04:43:37', '2023-08-01', '21:58:50', '2023-06-01', '15:05:25', '2023-08-01', '16:53:23', '2023-05-01 00:00:00', '00:20:23', '7218', '2023-11-09 02:13:02', '2023-11-09 02:13:02'),
(257, '2023-06-01', '02:57:43', '2023-02-01', '12:37:31', '2023-02-01', '21:13:26', '2023-02-01', '01:37:33', '2023-10-01 00:00:00', '00:20:23', '5289', '2023-11-09 02:13:02', '2023-11-09 02:13:02'),
(258, '2023-09-01', '00:36:32', '2023-08-01', '11:04:07', '2023-03-01', '12:49:35', '2023-02-01', '00:05:12', '2023-08-01 00:00:00', '00:20:23', '2049', '2023-11-09 02:13:02', '2023-11-09 02:13:02'),
(259, '2023-08-01', '07:58:37', '2023-08-01', '09:40:36', '2023-11-01', '16:03:46', '2023-05-01', '02:06:12', '2023-02-01 00:00:00', '00:20:23', '3679', '2023-11-09 02:13:02', '2023-11-09 02:13:02'),
(260, '2023-10-01', '21:18:31', '2023-11-01', '05:10:39', '2023-02-01', '02:35:41', '2023-01-01', '02:42:23', '2023-04-01 00:00:00', '00:20:23', '3009', '2023-11-09 02:13:02', '2023-11-09 02:13:02'),
(261, '2023-09-01', '08:16:29', '2023-06-01', '09:33:37', '2023-06-01', '11:10:31', '2023-09-01', '06:17:13', '2023-02-01 00:00:00', '00:20:23', '1722', '2023-11-09 02:13:02', '2023-11-09 02:13:02'),
(262, '2023-09-01', '01:41:05', '2023-02-01', '14:48:08', '2023-07-01', '02:04:56', '2023-08-01', '02:20:38', '2023-06-01 00:00:00', '00:20:23', '8926', '2023-11-09 02:13:02', '2023-11-09 02:13:02'),
(263, '2023-02-01', '09:10:25', '2023-05-01', '02:08:27', '2023-02-01', '06:07:02', '2023-11-01', '00:57:41', '2023-04-01 00:00:00', '00:20:23', '4999', '2023-11-09 02:13:02', '2023-11-09 02:13:02'),
(264, '2023-01-01', '10:44:35', '2023-02-01', '12:19:39', '2023-01-01', '17:32:01', '2023-06-01', '06:11:30', '2023-10-01 00:00:00', '00:20:23', '8600', '2023-11-09 02:13:02', '2023-11-09 02:13:02'),
(265, '2023-10-01', '17:07:43', '2023-01-01', '23:08:01', '2023-09-01', '21:22:48', '2023-03-01', '06:01:18', '2023-08-01 00:00:00', '00:20:23', '3088', '2023-11-09 02:13:02', '2023-11-09 02:13:02'),
(266, '2023-02-01', '20:43:20', '2023-01-01', '11:18:38', '2023-04-01', '04:24:03', '2023-11-01', '05:49:22', '2023-04-01 00:00:00', '00:20:23', '1025', '2023-11-09 02:13:02', '2023-11-09 02:13:02'),
(267, '2023-07-01', '21:09:32', '2023-08-01', '21:40:29', '2023-05-01', '05:23:26', '2023-11-01', '03:20:54', '2023-09-01 00:00:00', '00:20:23', '1012', '2023-11-09 02:13:02', '2023-11-09 02:13:02'),
(268, '2023-01-01', '18:34:39', '2023-08-01', '06:53:27', '2023-03-01', '11:43:52', '2023-07-01', '16:52:20', '2023-07-01 00:00:00', '00:20:23', '5059', '2023-11-09 02:13:02', '2023-11-09 02:13:02'),
(269, '2023-03-01', '11:47:01', '2023-09-01', '06:13:26', '2023-01-01', '12:12:06', '2023-05-01', '07:49:11', '2023-06-01 00:00:00', '00:20:23', '4166', '2023-11-09 02:13:02', '2023-11-09 02:13:02'),
(270, '2023-09-01', '12:13:33', '2023-02-01', '04:45:57', '2023-07-01', '04:31:04', '2023-03-01', '18:56:58', '2023-02-01 00:00:00', '00:20:23', '3012', '2023-11-09 02:13:02', '2023-11-09 02:13:02'),
(271, '2023-10-01', '20:07:37', '2023-07-01', '08:04:54', '2023-11-01', '20:24:41', '2023-04-01', '03:05:06', '2023-07-01 00:00:00', '00:20:23', '3015', '2023-11-09 02:13:02', '2023-11-09 02:13:02'),
(272, '2023-03-01', '06:36:32', '2023-08-01', '17:12:16', '2023-06-01', '03:24:18', '2023-04-01', '05:51:24', '2023-03-01 00:00:00', '00:20:23', '4642', '2023-11-09 02:13:02', '2023-11-09 02:13:02'),
(273, '2023-03-01', '01:54:22', '2023-08-01', '06:39:41', '2023-04-01', '13:24:40', '2023-11-01', '02:51:43', '2023-08-01 00:00:00', '00:20:23', '1666', '2023-11-09 02:13:02', '2023-11-09 02:13:02'),
(274, '2023-07-01', '23:46:20', '2023-02-01', '18:06:17', '2023-04-01', '10:02:22', '2023-01-01', '03:48:24', '2023-06-01 00:00:00', '00:20:23', '3014', '2023-11-09 02:13:02', '2023-11-09 02:13:02'),
(275, '2023-01-01', '17:42:27', '2023-06-01', '06:31:46', '2023-10-01', '12:41:27', '2023-01-01', '14:21:53', '2023-10-01 00:00:00', '00:20:23', '3793', '2023-11-09 02:13:02', '2023-11-09 02:13:02'),
(276, '2023-01-01', '02:42:20', '2023-04-01', '02:48:21', '2023-08-01', '04:57:41', '2023-10-01', '21:00:53', '2023-08-01 00:00:00', '00:20:23', '3003', '2023-11-09 02:13:02', '2023-11-09 02:13:02'),
(277, '2023-06-01', '18:59:58', '2023-06-01', '00:30:59', '2023-08-01', '06:49:05', '2023-05-01', '04:53:55', '2023-09-01 00:00:00', '00:20:23', '0006', '2023-11-09 02:13:02', '2023-11-09 02:13:02'),
(278, '2023-05-01', '21:32:30', '2023-05-01', '03:51:12', '2023-08-01', '23:20:17', '2023-09-01', '00:44:40', '2023-09-01 00:00:00', '00:20:23', '2499', '2023-11-09 02:13:02', '2023-11-09 02:13:02'),
(279, '2023-06-01', '09:44:19', '2023-05-01', '20:41:04', '2023-01-01', '17:21:36', '2023-05-01', '23:40:57', '2023-08-01 00:00:00', '00:20:23', '5405', '2023-11-09 02:13:02', '2023-11-09 02:13:02'),
(280, '2023-04-01', '23:09:51', '2023-09-01', '03:44:14', '2023-04-01', '06:31:44', '2023-04-01', '18:24:54', '2023-10-01 00:00:00', '00:20:23', '2019', '2023-11-09 02:13:02', '2023-11-09 02:13:02'),
(281, '2023-03-01', '02:06:32', '2023-09-01', '18:57:24', '2023-06-01', '05:11:56', '2023-06-01', '00:10:06', '2023-05-01 00:00:00', '00:20:23', '3445', '2023-11-09 02:13:02', '2023-11-09 02:13:02'),
(282, '2023-02-01', '17:15:39', '2023-01-01', '03:26:52', '2023-06-01', '06:09:41', '2023-08-01', '14:02:09', '2023-11-01 00:00:00', '00:20:23', '3793', '2023-11-09 02:13:02', '2023-11-09 02:13:02'),
(283, '2023-02-01', '20:42:20', '2023-11-01', '06:18:37', '2023-05-01', '05:32:50', '2023-11-01', '00:36:15', '2023-04-01 00:00:00', '00:20:23', '8512', '2023-11-09 02:13:02', '2023-11-09 02:13:02'),
(284, '2023-07-01', '09:40:35', '2023-02-01', '16:08:47', '2023-10-01', '03:41:47', '2023-03-01', '20:54:47', '2023-07-01 00:00:00', '00:20:23', '3699', '2023-11-09 02:13:02', '2023-11-09 02:13:02'),
(285, '2023-02-01', '09:49:06', '2023-09-01', '14:21:08', '2023-08-01', '16:19:55', '2023-04-01', '13:08:16', '2023-09-01 00:00:00', '00:20:23', '3021', '2023-11-09 02:13:02', '2023-11-09 02:13:02'),
(286, '2023-02-01', '23:33:42', '2023-06-01', '14:47:35', '2023-06-01', '21:00:43', '2023-09-01', '02:05:27', '2023-03-01 00:00:00', '00:20:23', '4195', '2023-11-09 02:13:02', '2023-11-09 02:13:02'),
(287, '2023-01-01', '08:11:11', '2023-07-01', '21:07:47', '2023-08-01', '15:47:30', '2023-04-01', '13:52:29', '2023-11-01 00:00:00', '00:20:23', '4013', '2023-11-09 02:13:02', '2023-11-09 02:13:02'),
(288, '2023-01-01', '11:05:37', '2023-03-01', '19:14:24', '2023-04-01', '01:42:55', '2023-06-01', '03:25:58', '2023-04-01 00:00:00', '00:20:23', '1502', '2023-11-09 02:13:02', '2023-11-09 02:13:02'),
(289, '2023-01-01', '10:04:41', '2023-01-01', '04:39:22', '2023-08-01', '21:45:42', '2023-05-01', '11:34:14', '2023-01-01 00:00:00', '00:20:23', '8926', '2023-11-09 02:13:02', '2023-11-09 02:13:02'),
(290, '2023-07-01', '18:17:23', '2023-11-01', '16:54:05', '2023-06-01', '12:31:09', '2023-01-01', '13:45:04', '2023-09-01 00:00:00', '00:20:23', '7658', '2023-11-09 02:13:02', '2023-11-09 02:13:02'),
(291, '2023-08-01', '08:32:46', '2023-10-01', '05:25:14', '2023-07-01', '02:04:29', '2023-09-01', '14:38:16', '2023-09-01 00:00:00', '00:20:23', '7229', '2023-11-09 02:13:02', '2023-11-09 02:13:02'),
(292, '2023-05-01', '19:20:50', '2023-08-01', '03:45:51', '2023-08-01', '17:23:38', '2023-08-01', '08:36:30', '2023-08-01 00:00:00', '00:20:23', '1044', '2023-11-09 02:13:02', '2023-11-09 02:13:02'),
(293, '2023-01-01', '04:57:42', '2023-11-01', '08:36:08', '2023-09-01', '22:47:15', '2023-04-01', '19:32:39', '2023-01-01 00:00:00', '00:20:23', '3009', '2023-11-09 02:13:02', '2023-11-09 02:13:02'),
(294, '2023-06-01', '06:59:48', '2023-11-01', '16:47:38', '2023-09-01', '16:06:54', '2023-02-01', '11:02:32', '2023-01-01 00:00:00', '00:20:23', '0005', '2023-11-09 02:13:02', '2023-11-09 02:13:02'),
(295, '2023-04-01', '18:16:29', '2023-11-01', '10:31:15', '2023-04-01', '11:25:22', '2023-04-01', '02:20:52', '2023-07-01 00:00:00', '00:20:23', '4013', '2023-11-09 02:13:02', '2023-11-09 02:13:02'),
(296, '2023-02-01', '00:08:22', '2023-06-01', '14:06:25', '2023-05-01', '02:46:31', '2023-05-01', '21:46:19', '2023-03-01 00:00:00', '00:20:23', '8044', '2023-11-09 02:13:02', '2023-11-09 02:13:02'),
(297, '2023-09-01', '09:24:23', '2023-07-01', '19:45:25', '2023-04-01', '02:43:28', '2023-07-01', '17:57:09', '2023-10-01 00:00:00', '00:20:23', '2004', '2023-11-09 02:13:02', '2023-11-09 02:13:02'),
(298, '2023-04-01', '04:03:05', '2023-01-01', '13:04:50', '2023-08-01', '20:04:14', '2023-02-01', '23:36:50', '2023-07-01 00:00:00', '00:20:23', '0002', '2023-11-09 02:13:02', '2023-11-09 02:13:02'),
(299, '2023-05-01', '09:53:19', '2023-08-01', '08:40:56', '2023-08-01', '03:57:54', '2023-10-01', '21:11:41', '2023-09-01 00:00:00', '00:20:23', '3024', '2023-11-09 02:13:02', '2023-11-09 02:13:02'),
(300, '2023-10-01', '22:40:49', '2023-02-01', '19:27:20', '2023-08-01', '21:32:03', '2023-06-01', '18:03:00', '2023-04-01 00:00:00', '00:20:23', '6973', '2023-11-09 02:13:02', '2023-11-09 02:13:02'),
(301, '2023-07-01', '04:11:43', '2023-02-01', '02:30:10', '2023-02-01', '09:47:57', '2023-07-01', '19:39:34', '2023-03-01 00:00:00', '00:20:23', '0009', '2023-11-09 02:13:02', '2023-11-09 02:13:02'),
(302, '2023-09-01', '15:06:50', '2023-09-01', '04:02:19', '2023-05-01', '12:42:44', '2023-05-01', '13:11:15', '2023-06-01 00:00:00', '00:20:23', '4018', '2023-11-09 02:13:02', '2023-11-09 02:13:02'),
(303, '2023-05-01', '14:46:03', '2023-10-01', '07:48:53', '2023-02-01', '15:34:32', '2023-10-01', '09:36:05', '2023-05-01 00:00:00', '00:20:23', '2090', '2023-11-09 02:13:02', '2023-11-09 02:13:02'),
(304, '2023-09-01', '08:40:17', '2023-05-01', '17:53:58', '2023-07-01', '22:03:02', '2023-08-01', '17:51:50', '2023-07-01 00:00:00', '00:20:23', '3020', '2023-11-09 02:13:02', '2023-11-09 02:13:02'),
(305, '2023-02-01', '22:11:25', '2023-03-01', '10:10:36', '2023-05-01', '17:38:43', '2023-06-01', '03:40:18', '2023-04-01 00:00:00', '00:20:23', '2949', '2023-11-09 02:13:02', '2023-11-09 02:13:02'),
(306, '2023-03-01', '20:44:36', '2023-07-01', '13:32:10', '2023-11-01', '22:29:52', '2023-11-01', '17:38:08', '2023-11-01 00:00:00', '00:20:23', '3023', '2023-11-09 02:13:02', '2023-11-09 02:13:02'),
(307, '2023-07-01', '16:22:52', '2023-07-01', '00:08:30', '2023-03-01', '23:15:59', '2023-03-01', '08:47:09', '2023-01-01 00:00:00', '00:20:23', '1355', '2023-11-09 02:13:02', '2023-11-09 02:13:02'),
(308, '2023-01-01', '07:19:00', '2023-04-01', '20:43:03', '2023-03-01', '15:47:09', '2023-06-01', '17:28:19', '2023-01-01 00:00:00', '00:20:23', '4020', '2023-11-09 02:13:02', '2023-11-09 02:13:02'),
(309, '2023-09-01', '10:31:15', '2023-11-01', '16:19:27', '2023-05-01', '23:28:25', '2023-08-01', '11:05:03', '2023-03-01 00:00:00', '00:20:23', '7069', '2023-11-09 02:13:02', '2023-11-09 02:13:02'),
(310, '2023-07-01', '02:43:30', '2023-09-01', '12:30:42', '2023-04-01', '21:11:50', '2023-07-01', '02:08:43', '2023-09-01 00:00:00', '00:20:23', '4555', '2023-11-09 02:13:02', '2023-11-09 02:13:02'),
(311, '2023-11-01', '14:52:39', '2023-02-01', '16:07:11', '2023-01-01', '04:22:41', '2023-09-01', '10:06:27', '2023-08-01 00:00:00', '00:20:23', '3647', '2023-11-09 02:13:02', '2023-11-09 02:13:02'),
(312, '2023-06-01', '21:37:02', '2023-01-01', '16:49:06', '2023-03-01', '04:59:36', '2023-03-01', '15:30:31', '2023-06-01 00:00:00', '00:20:23', '7282', '2023-11-09 02:13:02', '2023-11-09 02:13:02'),
(313, '2023-09-01', '14:47:01', '2023-08-01', '18:52:37', '2023-09-01', '09:36:43', '2023-09-01', '12:44:15', '2023-05-01 00:00:00', '00:20:23', '5096', '2023-11-09 02:13:02', '2023-11-09 02:13:02'),
(314, '2023-08-01', '16:21:42', '2023-06-01', '10:33:30', '2023-08-01', '05:21:20', '2023-11-01', '06:43:51', '2023-05-01 00:00:00', '00:20:23', '2002', '2023-11-09 02:13:02', '2023-11-09 02:13:02'),
(315, '2023-03-01', '18:51:14', '2023-03-01', '17:02:51', '2023-11-01', '10:12:59', '2023-05-01', '16:41:18', '2023-04-01 00:00:00', '00:20:23', '1007', '2023-11-09 02:13:02', '2023-11-09 02:13:02'),
(316, '2023-10-01', '20:08:16', '2023-07-01', '12:43:24', '2023-10-01', '12:30:18', '2023-02-01', '03:05:16', '2023-03-01 00:00:00', '00:20:23', '0013', '2023-11-09 02:13:02', '2023-11-09 02:13:02'),
(317, '2023-11-01', '03:17:49', '2023-10-01', '21:03:46', '2023-09-01', '10:31:13', '2023-09-01', '10:19:28', '2023-10-01 00:00:00', '00:20:23', '0088', '2023-11-09 02:13:02', '2023-11-09 02:13:02'),
(318, '2023-09-01', '23:31:20', '2023-06-01', '13:04:05', '2023-03-01', '12:35:50', '2023-11-01', '01:44:14', '2023-07-01 00:00:00', '00:20:23', '2012', '2023-11-09 02:13:02', '2023-11-09 02:13:02'),
(319, '2023-08-01', '03:07:41', '2023-07-01', '16:48:07', '2023-08-01', '03:05:04', '2023-08-01', '03:23:20', '2023-07-01 00:00:00', '00:20:23', '7308', '2023-11-09 02:13:02', '2023-11-09 02:13:02'),
(320, '2023-08-01', '13:28:21', '2023-10-01', '09:47:54', '2023-07-01', '16:55:07', '2023-09-01', '17:16:01', '2023-04-01 00:00:00', '00:20:23', '7229', '2023-11-09 02:13:02', '2023-11-09 02:13:02'),
(321, '2023-04-01', '01:06:15', '2023-04-01', '15:50:02', '2023-03-01', '02:54:17', '2023-11-01', '08:41:08', '2023-11-01 00:00:00', '00:20:23', '1011', '2023-11-09 02:13:02', '2023-11-09 02:13:02'),
(322, '2023-09-01', '03:50:38', '2023-06-01', '20:52:30', '2023-11-01', '02:01:51', '2023-07-01', '18:42:34', '2023-01-01 00:00:00', '00:20:23', '3377', '2023-11-09 02:13:02', '2023-11-09 02:13:02'),
(323, '2023-03-01', '21:24:58', '2023-08-01', '13:12:05', '2023-09-01', '10:04:53', '2023-08-01', '00:43:59', '2023-02-01 00:00:00', '00:20:23', '3397', '2023-11-09 02:13:02', '2023-11-09 02:13:02'),
(324, '2023-09-01', '05:20:07', '2023-08-01', '16:56:15', '2023-06-01', '09:47:36', '2023-06-01', '09:38:21', '2023-05-01 00:00:00', '00:20:23', '0007', '2023-11-09 02:13:02', '2023-11-09 02:13:02'),
(325, '2023-07-01', '05:36:04', '2023-04-01', '01:37:18', '2023-04-01', '04:24:04', '2023-01-01', '21:01:40', '2023-02-01 00:00:00', '00:20:23', '1008', '2023-11-09 02:13:02', '2023-11-09 02:13:02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@sistruckfaultsim.com', NULL, '$2y$10$XEXDz1S/bt1arY9qjIwUyuMjsJaTZpPx7bECcaUdngAgnN1vhLp4W', NULL, '2023-09-24 22:38:59', '2023-09-24 22:38:59'),
(2, 'Roberto Reyes', 'rr893018@gmail.com', NULL, '$2y$10$9gU693bjmMJLQKBVpQjWYOBF8neBYwaMpBOLNiXNPO5FhR01diTOi', NULL, '2023-09-25 17:23:58', '2023-09-25 17:23:58'),
(3, 'ANDRES LOPEZ', 'ANDRES@GMAIL.COM', NULL, '$2y$10$6i4Zb308urlKi7irmTR14.rNVgNRcf./hNB0BgWvDI1VdZUnXqQW.', NULL, '2023-09-25 17:27:03', '2023-09-25 17:27:03'),
(4, 'RICARDO MESA', 'ricardom@hotmail.com', NULL, '$2y$10$AgNVC/oDe6soOgn8yqTSOu6qRMaXip4ea8QUxTVVtipVZsGjjJT.O', NULL, '2023-09-25 17:29:04', '2023-09-25 17:29:04'),
(5, 'MAURICIO VARGAS', 'maurcio009@gmail.com', NULL, '$2y$10$CJPJPVHnuCLAAnZzhk.jCee8IaHzJtADZ853uhwcCiutGUcFtAlVO', NULL, '2023-09-25 17:31:45', '2023-09-25 17:31:45'),
(6, 'DALVER CASTILLO', 'DCASTILLO@GMAIL.COM', NULL, '$2y$10$yVy21/XwMZX.smVrsNiY9uWyo8Dz98TfKg0N8UDlh3jzM8z7d5VPm', NULL, '2023-09-25 17:33:30', '2023-09-25 17:33:30'),
(7, 'FELIPE CARDONA', 'FELIPE@GMAIL.COM', NULL, '$2y$10$cs/MvPmGAVgkZj7iWhGNKuqjlaFDpqlDFJTtmQKNx6G6pLtdzcyqq', NULL, '2023-09-29 02:20:09', '2023-09-29 02:20:09'),
(9, 'CAMILO PEREZ', 'CAMILOP@GMAIL.COM', NULL, '$2y$10$fmRkfHDSOx5cKIudxmPMcOpGaXUGUdDusoMdirr2w64KFQVYXRYKG', NULL, '2023-09-29 02:24:07', '2023-09-29 02:24:07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `viajes`
--

CREATE TABLE `viajes` (
  `cod_via` varchar(4) NOT NULL,
  `car_via` varchar(25) NOT NULL,
  `pes_via` int(11) NOT NULL,
  `est_via` varchar(20) NOT NULL,
  `fec_sal_via` date NOT NULL,
  `hor_sal_via` time NOT NULL,
  `fec_lle_via` date NOT NULL,
  `hor_lle_via` time NOT NULL,
  `cam_via` varchar(7) NOT NULL,
  `cli_via` varchar(6) NOT NULL,
  `rut_via` varchar(4) NOT NULL,
  `emp_via` varchar(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `viajes`
--

INSERT INTO `viajes` (`cod_via`, `car_via`, `pes_via`, `est_via`, `fec_sal_via`, `hor_sal_via`, `fec_lle_via`, `hor_lle_via`, `cam_via`, `cli_via`, `rut_via`, `emp_via`, `created_at`, `updated_at`) VALUES
('0001', 'Mercancía general', 18, 'completado', '2023-01-05', '08:30:00', '2023-01-05', '13:59:00', 'ABC123', '000001', '0011', '101220123', '2023-10-02 12:03:54', '2023-10-02 17:18:17'),
('0002', 'Alimentos perecederos', 15, 'completado', '2023-02-12', '10:15:00', '2023-02-12', '23:38:00', 'BCD123', '000002', '0012', '101220123', '2023-10-02 12:06:53', '2023-10-02 17:18:24'),
('0003', 'Mat. de construcción', 20, 'completado', '2023-03-18', '09:00:00', '2023-03-18', '13:51:00', 'BCD789', '000003', '0013', '101220123', '2023-10-02 12:08:20', '2023-10-02 17:18:31'),
('0004', 'Maquinaria pesada', 16, 'completado', '2023-04-25', '11:45:00', '2023-04-26', '05:46:00', 'DEF789', '000004', '0014', '101220123', '2023-10-02 12:09:08', '2023-10-02 17:18:47'),
('0005', 'Productos químicos', 18, 'completado', '2023-06-02', '08:00:00', '2023-06-02', '20:01:00', 'EFG456', '000005', '0015', '101220123', '2023-10-02 12:10:12', '2023-10-02 17:18:53'),
('0006', 'Electrodomésticos', 19, 'cancelado', '2023-07-10', '07:45:00', '2023-07-10', '10:56:00', 'EFG901', '000006', '0016', '101220123', '2023-10-02 12:11:35', '2023-10-02 12:12:37'),
('0007', 'Ropa y textiles', 17, 'completado', '2023-08-20', '10:30:00', '2023-08-20', '19:32:00', 'FHY-145', '000007', '0017', '101220123', '2023-10-02 12:12:25', '2023-10-02 17:19:01'),
('0008', 'Madera', 21, 'completado', '2023-09-05', '09:15:00', '2023-09-05', '23:49:00', 'EFG901', '000008', '0018', '101220123', '2023-10-02 12:14:16', '2023-10-02 17:19:08'),
('0009', 'Equipos electrónicos', 16, 'completado', '2023-10-15', '11:00:00', '2023-10-15', '20:16:00', 'FMN213', '000009', '0019', '101220123', '2023-10-02 12:15:18', '2023-10-02 17:19:22'),
('0010', 'Productos farmacéuticos', 18, 'completado', '2023-11-25', '08:30:00', '2023-11-26', '02:41:00', 'GHI567', '000010', '0030', '101220123', '2023-10-02 12:16:26', '2023-10-02 17:20:58'),
('0011', 'Mat. de construcción', 15, 'completado', '2023-07-05', '10:00:00', '2023-07-05', '19:20:00', 'GPO091', '000011', '0104', '101220123', '2023-10-02 12:18:08', '2023-10-02 17:21:10'),
('0012', 'Alimentos perecederos', 20, 'completado', '2023-12-15', '09:45:00', '2023-12-15', '13:23:00', 'H49033', '000012', '1001', '101220123', '2023-10-02 12:19:24', '2023-10-02 17:21:18'),
('0013', 'Productos químicos', 18, 'completado', '2023-02-25', '08:30:00', '2023-02-25', '16:02:00', 'HIJ234', '000013', '1002', '101220123', '2023-10-02 12:20:17', '2023-10-02 17:21:30'),
('0014', 'Maquinaria pesada', 16, 'completado', '2023-03-10', '10:15:00', '2023-03-11', '03:13:00', 'HIJ789', '000014', '1003', '101220123', '2023-10-02 12:21:30', '2023-10-02 17:21:38'),
('0015', 'Mercancía general', 19, 'completado', '2023-04-20', '09:00:00', '2023-04-20', '17:30:00', 'HIL378', '000015', '1004', '101220123', '2023-10-02 12:22:36', '2023-10-02 17:21:47'),
('0016', 'Ropa y textiles', 17, 'completado', '2023-05-05', '08:45:00', '2023-05-06', '01:40:00', 'JBL-411', '000016', '1005', '101220123', '2023-10-02 12:27:08', '2023-10-02 17:21:55'),
('0017', 'Madera', 21, 'completado', '2023-06-15', '10:30:00', '2023-06-15', '12:52:00', 'JKL901', '000017', '1006', '101220123', '2023-10-02 12:28:08', '2023-10-02 17:22:03'),
('0018', 'Productos químicos', 16, 'completado', '2023-07-25', '09:15:00', '2023-07-25', '12:33:00', 'KLM345', '000018', '1007', '101220123', '2023-10-02 12:28:51', '2023-10-02 17:22:11'),
('0019', 'Equipos electrónicos', 18, 'completado', '2023-09-05', '11:00:00', '2023-09-05', '20:35:00', 'KLM678', '000019', '1008', '101220123', '2023-10-02 12:29:43', '2023-10-02 17:22:19'),
('0020', 'Maquinaria pesada', 20, 'completado', '2023-09-15', '10:15:00', '2023-09-15', '13:29:00', 'KLM901', '004567', '1009', '101220123', '2023-10-02 12:30:27', '2023-10-02 17:22:29'),
('0021', 'Electrodomésticos', 19, 'completado', '2023-08-05', '08:30:00', '2023-08-05', '15:33:00', 'L34067', '123456', '1010', '101220123', '2023-10-02 12:32:34', '2023-10-02 17:22:38'),
('0022', 'Alimentos perecederos', 17, 'completado', '2023-04-15', '10:00:00', '2023-04-16', '01:13:00', 'MNO234', '234567', '1029', '101220123', '2023-10-02 12:33:17', '2023-10-02 17:22:45'),
('0023', 'Mat. de construcción', 20, 'completado', '2023-01-25', '09:45:00', '2023-01-26', '12:53:00', 'NOP234', '345678', '1236', '101220123', '2023-10-02 12:34:16', '2023-10-02 17:22:53'),
('0024', 'Productos químicos', 16, 'cancelado', '2023-02-05', '11:15:00', '2023-02-06', '07:53:00', 'NOP456', '456789', '1578', '101220123', '2023-10-02 12:35:12', '2023-10-02 17:23:02'),
('0025', 'Mercancía general', 18, 'completado', '2023-03-15', '08:00:00', '2023-03-15', '20:10:00', 'NOP901', '567890', '3213', '101220123', '2023-10-02 12:35:56', '2023-10-02 17:23:12'),
('0026', 'Mat. de construcción', 20, 'completado', '2023-10-01', '06:20:58', '2023-09-01', '00:03:57', 'NOP234', '345678', '1236', '101220123', '2023-11-09 01:27:41', '2023-11-09 01:27:41'),
('0088', 'Equipos electrónicos', 18, 'completado', '2023-02-01', '18:20:29', '2023-04-01', '10:34:35', 'KLM678', '000019', '1008', '101220123', '2023-11-09 01:27:41', '2023-11-09 01:27:41'),
('0125', 'Madera', 21, 'completado', '2023-05-01', '23:26:43', '2023-08-01', '10:45:22', 'JKL901', '000017', '1006', '101220123', '2023-11-09 01:27:41', '2023-11-09 01:27:41'),
('0149', 'Mat. de construcción', 15, 'completado', '2023-07-01', '18:28:37', '2023-02-01', '11:50:06', 'GPO091', '000011', '0104', '101220123', '2023-11-09 01:27:41', '2023-11-09 01:27:41'),
('0282', 'Alimentos perecederos', 15, 'completado', '2023-03-01', '02:11:47', '2023-09-01', '11:37:31', 'BCD123', '000002', '0012', '101220123', '2023-11-09 01:27:41', '2023-11-09 01:27:41'),
('0423', 'Electrodomésticos', 19, 'cancelado', '2023-05-01', '23:35:07', '2023-08-01', '06:58:26', 'EFG901', '000006', '0016', '101220123', '2023-11-09 01:27:41', '2023-11-09 01:27:41'),
('0435', 'Ropa y textiles', 17, 'completado', '2023-01-01', '01:12:25', '2023-02-01', '13:31:55', 'FHY-145', '000007', '0017', '101220123', '2023-11-09 01:27:41', '2023-11-09 01:27:41'),
('0585', 'Madera', 21, 'completado', '2023-01-01', '05:31:54', '2023-10-01', '20:27:43', 'JKL901', '000017', '1006', '101220123', '2023-11-09 01:27:41', '2023-11-09 01:27:41'),
('0681', 'Productos químicos', 18, 'completado', '2023-01-01', '21:49:23', '2023-06-01', '15:55:39', 'EFG456', '000005', '0015', '101220123', '2023-11-09 01:27:41', '2023-11-09 01:27:41'),
('0805', 'Maquinaria pesada', 20, 'completado', '2023-10-01', '04:25:06', '2023-03-01', '18:32:33', 'KLM901', '004567', '1009', '101220123', '2023-11-09 01:27:41', '2023-11-09 01:27:41'),
('0866', 'Productos farmacéuticos', 18, 'completado', '2023-01-01', '23:23:33', '2023-09-01', '17:44:46', 'GHI567', '000010', '0030', '101220123', '2023-11-09 01:27:41', '2023-11-09 01:27:41'),
('0930', 'Productos químicos', 16, 'cancelado', '2023-02-01', '12:12:18', '2023-01-01', '19:47:46', 'NOP456', '456789', '1578', '101220123', '2023-11-09 01:27:41', '2023-11-09 01:27:41'),
('0991', 'Productos químicos', 16, 'completado', '2023-01-01', '01:30:05', '2023-02-01', '07:07:19', 'KLM345', '000018', '1007', '101220123', '2023-11-09 01:27:41', '2023-11-09 01:27:41'),
('1001', 'Mercancía general', 18, 'completado', '2023-02-05', '08:30:00', '2023-02-05', '13:59:00', 'ABC123', '000001', '0011', '101220123', '2023-11-02 12:03:54', '2023-11-02 17:18:17'),
('1002', 'Alimentos perecederos', 15, 'completado', '2023-03-12', '10:15:00', '2023-03-12', '23:38:00', 'BCD123', '000002', '0012', '101220123', '2023-11-02 12:06:53', '2023-11-02 17:18:24'),
('1003', 'Mat. de construcción', 20, 'completado', '2023-04-18', '09:00:00', '2023-04-18', '13:51:00', 'BCD789', '000003', '0013', '101220123', '2023-11-02 12:08:20', '2023-11-02 17:18:31'),
('1004', 'Maquinaria pesada', 16, 'completado', '2023-05-25', '11:45:00', '2023-05-26', '05:46:00', 'DEF789', '000004', '0014', '101220123', '2023-11-02 12:09:08', '2023-11-02 17:18:47'),
('1005', 'Productos químicos', 18, 'completado', '2023-07-02', '08:00:00', '2023-07-02', '20:01:00', 'EFG456', '000005', '0015', '101220123', '2023-11-02 12:10:12', '2023-11-02 17:18:53'),
('1006', 'Electrodomésticos', 19, 'cancelado', '2023-08-10', '07:45:00', '2023-08-10', '10:56:00', 'EFG901', '000006', '0016', '101220123', '2023-11-02 12:11:35', '2023-11-02 12:12:37'),
('1007', 'Ropa y textiles', 17, 'completado', '2023-09-20', '10:30:00', '2023-09-20', '19:32:00', 'FHY-145', '000007', '0017', '101220123', '2023-11-02 12:12:25', '2023-11-02 17:19:01'),
('1008', 'Madera', 21, 'completado', '2023-10-05', '09:15:00', '2023-10-05', '23:49:00', 'EFG901', '000008', '0018', '101220123', '2023-11-02 12:14:16', '2023-11-02 17:19:08'),
('1009', 'Equipos electrónicos', 16, 'completado', '2023-11-15', '11:00:00', '2023-11-15', '20:16:00', 'FMN213', '000009', '0019', '101220123', '2023-11-02 12:15:18', '2023-11-02 17:19:22'),
('1010', 'Productos farmacéuticos', 18, 'completado', '2023-12-25', '08:30:00', '2023-12-26', '02:41:00', 'GHI567', '000010', '0030', '101220123', '2023-11-02 12:16:26', '2023-11-02 17:20:58'),
('1011', 'Mat. de construcción', 15, 'completado', '2023-08-05', '10:00:00', '2023-08-05', '19:20:00', 'GPO091', '000011', '0104', '101220123', '2023-11-02 12:18:08', '2023-11-02 17:21:10'),
('1012', 'Alimentos perecederos', 20, 'completado', '2023-01-15', '09:45:00', '2023-01-15', '13:23:00', 'H49033', '000012', '1001', '101220123', '2023-11-02 12:19:24', '2023-11-02 17:21:18'),
('1013', 'Productos químicos', 18, 'completado', '2023-03-25', '08:30:00', '2023-03-25', '16:02:00', 'HIJ234', '000013', '1002', '101220123', '2023-11-02 12:20:17', '2023-11-02 17:21:30'),
('1014', 'Maquinaria pesada', 16, 'completado', '2023-04-10', '10:15:00', '2023-04-11', '03:13:00', 'HIJ789', '000014', '1003', '101220123', '2023-11-02 12:21:30', '2023-11-02 17:21:38'),
('1015', 'Mercancía general', 19, 'completado', '2023-05-20', '09:00:00', '2023-05-20', '17:30:00', 'HIL378', '000015', '1004', '101220123', '2023-11-02 12:22:36', '2023-11-02 17:21:47'),
('1016', 'Ropa y textiles', 17, 'completado', '2023-06-05', '08:45:00', '2023-06-06', '01:40:00', 'JBL-411', '000016', '1005', '101220123', '2023-11-02 12:27:08', '2023-11-02 17:21:55'),
('1017', 'Madera', 21, 'completado', '2023-07-15', '10:30:00', '2023-07-15', '12:52:00', 'JKL901', '000017', '1006', '101220123', '2023-11-02 12:28:08', '2023-11-02 17:22:03'),
('1018', 'Productos químicos', 16, 'completado', '2023-08-25', '09:15:00', '2023-08-25', '12:33:00', 'KLM345', '000018', '1007', '101220123', '2023-11-02 12:28:51', '2023-11-02 17:22:11'),
('1019', 'Equipos electrónicos', 18, 'completado', '2023-10-05', '11:00:00', '2023-10-05', '20:35:00', 'KLM678', '000019', '1008', '101220123', '2023-11-02 12:29:43', '2023-11-02 17:22:19'),
('1020', 'Maquinaria pesada', 20, 'completado', '2023-10-15', '10:15:00', '2023-10-15', '13:29:00', 'KLM901', '004567', '1009', '101220123', '2023-11-02 12:30:27', '2023-11-02 17:22:29'),
('1021', 'Electrodomésticos', 19, 'completado', '2023-09-05', '08:30:00', '2023-09-05', '15:33:00', 'L34067', '123456', '1010', '101220123', '2023-11-02 12:32:34', '2023-11-02 17:22:38'),
('1022', 'Alimentos perecederos', 17, 'completado', '2023-05-15', '10:00:00', '2023-05-16', '01:13:00', 'MNO234', '234567', '1029', '101220123', '2023-11-02 12:33:17', '2023-11-02 17:22:45'),
('1023', 'Mat. de construcción', 20, 'completado', '2023-02-25', '09:45:00', '2023-02-26', '12:53:00', 'NOP234', '345678', '1236', '101220123', '2023-11-02 12:34:16', '2023-11-02 17:22:53'),
('1024', 'Productos químicos', 16, 'cancelado', '2023-03-05', '11:15:00', '2023-03-06', '07:53:00', 'NOP456', '456789', '1578', '101220123', '2023-11-02 12:35:12', '2023-11-02 17:23:02'),
('1025', 'Mercancía general', 18, 'completado', '2023-04-15', '08:00:00', '2023-04-15', '20:10:00', 'NOP901', '567890', '3213', '101220123', '2023-11-02 12:35:56', '2023-11-02 17:23:12'),
('1026', 'Mat. de construcción', 20, 'completado', '2023-11-01', '06:20:58', '2023-10-01', '00:03:57', 'NOP234', '345678', '1236', '101220123', '2023-12-09 01:27:41', '2023-12-09 01:27:41'),
('1044', 'Mercancía general', 18, 'completado', '2023-09-15', '16:07:23', '2023-08-15', '07:42:45', 'NOP901', '567890', '3213', '101220123', '2023-11-09 01:00:28', '2023-11-09 01:00:28'),
('1088', 'Equipos electrónicos', 18, 'completado', '2023-03-01', '18:20:29', '2023-05-01', '10:34:35', 'KLM678', '000019', '1008', '101220123', '2023-12-09 01:27:41', '2023-12-09 01:27:41'),
('1091', 'Mat. de construcción', 20, 'completado', '2023-03-18', '09:27:59', '2023-01-18', '13:58:28', 'BCD789', '000003', '0013', '101220123', '2023-11-09 01:00:28', '2023-11-09 01:00:28'),
('1106', 'Mercancía general', 18, 'completado', '2023-01-01', '01:11:47', '2023-01-01', '22:50:18', 'NOP901', '567890', '3213', '101220123', '2023-11-09 01:27:41', '2023-11-09 01:27:41'),
('1129', 'Maquinaria pesada', 16, 'completado', '2023-03-10', '07:01:48', '2023-07-11', '06:33:37', 'HIJ789', '000014', '1003', '101220123', '2023-11-09 01:00:28', '2023-11-09 01:00:28'),
('1139', 'Mat. de construcción', 20, 'completado', '2023-01-25', '06:41:35', '2023-05-26', '21:45:12', 'NOP234', '345678', '1236', '101220123', '2023-11-09 01:00:28', '2023-11-09 01:00:28'),
('1143', 'Madera', 21, 'completado', '2023-10-15', '02:44:54', '2023-10-15', '17:44:47', 'JKL901', '000017', '1006', '101220123', '2023-11-09 01:00:28', '2023-11-09 01:00:28'),
('1155', 'Productos químicos', 18, 'completado', '2023-10-25', '21:34:48', '2023-04-25', '12:45:46', 'HIJ234', '000013', '1002', '101220123', '2023-11-09 01:00:28', '2023-11-09 01:00:28'),
('1159', 'Productos químicos', 16, 'cancelado', '2023-07-05', '14:13:22', '2023-02-06', '15:56:44', 'NOP456', '456789', '1578', '101220123', '2023-11-09 01:00:28', '2023-11-09 01:00:28'),
('1179', 'Electrodomésticos', 19, 'cancelado', '2023-05-10', '14:50:18', '2023-01-10', '22:48:54', 'EFG901', '000006', '0016', '101220123', '2023-11-09 01:00:28', '2023-11-09 01:00:28'),
('1187', 'Mercancía general', 18, 'completado', '2023-08-05', '16:10:24', '2023-03-05', '22:23:49', 'ABC123', '000001', '0011', '101220123', '2023-11-09 01:00:28', '2023-11-09 01:00:28'),
('1252', 'Alimentos perecederos', 20, 'completado', '2023-09-01', '12:11:12', '2023-03-01', '12:29:08', 'H49033', '000012', '1001', '101220123', '2023-11-09 01:27:41', '2023-11-09 01:27:41'),
('1344', 'Mat. de construcción', 20, 'completado', '2023-03-01', '20:35:45', '2023-06-01', '02:17:09', 'NOP234', '345678', '1236', '101220123', '2023-11-09 01:27:41', '2023-11-09 01:27:41'),
('1355', 'Productos químicos', 16, 'completado', '2023-08-01', '03:35:04', '2023-07-01', '14:49:46', 'KLM345', '000018', '1007', '101220123', '2023-11-09 01:27:41', '2023-11-09 01:27:41'),
('1372', 'Ropa y textiles', 17, 'completado', '2023-04-01', '06:10:40', '2023-04-01', '15:44:00', 'FHY-145', '000007', '0017', '101220123', '2023-11-09 01:27:41', '2023-11-09 01:27:41'),
('1502', 'Mat. de construcción', 15, 'completado', '2023-03-05', '11:40:29', '2023-09-05', '17:45:28', 'GPO091', '000011', '0104', '101220123', '2023-11-09 01:00:11', '2023-11-09 01:00:11'),
('1577', 'Productos químicos', 16, 'completado', '2023-03-01', '15:23:22', '2023-06-01', '18:19:21', 'KLM345', '000018', '1007', '101220123', '2023-11-09 01:27:41', '2023-11-09 01:27:41'),
('1634', 'Maquinaria pesada', 20, 'completado', '2023-06-01', '23:38:06', '2023-05-01', '05:46:16', 'KLM901', '004567', '1009', '101220123', '2023-11-09 01:27:41', '2023-11-09 01:27:41'),
('1666', 'Electrodomésticos', 19, 'completado', '2023-05-01', '09:34:59', '2023-10-01', '02:05:34', 'L34067', '123456', '1010', '101220123', '2023-11-09 01:27:41', '2023-11-09 01:27:41'),
('1670', 'Mercancía general', 19, 'completado', '2023-01-01', '16:44:19', '2023-05-01', '17:56:57', 'HIL378', '000015', '1004', '101220123', '2023-11-09 01:27:41', '2023-11-09 01:27:41'),
('1722', 'Equipos electrónicos', 18, 'completado', '2023-02-05', '04:25:57', '2023-02-05', '18:52:57', 'KLM678', '000019', '1008', '101220123', '2023-11-09 01:00:11', '2023-11-09 01:00:11'),
('1823', 'Equipos electrónicos', 16, 'completado', '2023-01-01', '15:17:17', '2023-01-01', '11:05:25', 'FMN213', '000009', '0019', '101220123', '2023-11-09 01:27:41', '2023-11-09 01:27:41'),
('1931', 'Mercancía general', 18, 'completado', '2023-01-01', '19:07:40', '2023-09-01', '09:43:12', 'ABC123', '000001', '0011', '101220123', '2023-11-09 01:27:41', '2023-11-09 01:27:41'),
('2001', 'Mercancía general', 18, 'completado', '2023-02-05', '08:30:00', '2023-02-05', '13:59:00', 'ABC123', '000001', '0011', '101220123', '2023-11-02 12:03:54', '2023-11-02 17:18:17'),
('2002', 'Alimentos perecederos', 15, 'completado', '2023-03-12', '10:15:00', '2023-03-12', '23:38:00', 'BCD123', '000002', '0012', '101220123', '2023-11-02 12:06:53', '2023-11-02 17:18:24'),
('2003', 'Mat. de construcción', 20, 'completado', '2023-04-18', '09:00:00', '2023-04-18', '13:51:00', 'BCD789', '000003', '0013', '101220123', '2023-11-02 12:08:20', '2023-11-02 17:18:31'),
('2004', 'Maquinaria pesada', 16, 'completado', '2023-05-25', '11:45:00', '2023-05-26', '05:46:00', 'DEF789', '000004', '0014', '101220123', '2023-11-02 12:09:08', '2023-11-02 17:18:47'),
('2005', 'Productos químicos', 18, 'completado', '2023-07-02', '08:00:00', '2023-07-02', '20:01:00', 'EFG456', '000005', '0015', '101220123', '2023-11-02 12:10:12', '2023-11-02 17:18:53'),
('2006', 'Electrodomésticos', 19, 'cancelado', '2023-08-10', '07:45:00', '2023-08-10', '10:56:00', 'EFG901', '000006', '0016', '101220123', '2023-11-02 12:11:35', '2023-11-02 12:12:37'),
('2007', 'Ropa y textiles', 17, 'completado', '2023-09-20', '10:30:00', '2023-09-20', '19:32:00', 'FHY-145', '000007', '0017', '101220123', '2023-11-02 12:12:25', '2023-11-02 17:19:01'),
('2008', 'Madera', 21, 'completado', '2023-10-05', '09:15:00', '2023-10-05', '23:49:00', 'EFG901', '000008', '0018', '101220123', '2023-11-02 12:14:16', '2023-11-02 17:19:08'),
('2009', 'Equipos electrónicos', 16, 'completado', '2023-11-15', '11:00:00', '2023-11-15', '20:16:00', 'FMN213', '000009', '0019', '101220123', '2023-11-02 12:15:18', '2023-11-02 17:19:22'),
('2010', 'Productos farmacéuticos', 18, 'completado', '2023-12-25', '08:30:00', '2023-12-26', '02:41:00', 'GHI567', '000010', '0030', '101220123', '2023-11-02 12:16:26', '2023-11-02 17:20:58'),
('2011', 'Mat. de construcción', 15, 'completado', '2023-08-05', '10:00:00', '2023-08-05', '19:20:00', 'GPO091', '000011', '0104', '101220123', '2023-11-02 12:18:08', '2023-11-02 17:21:10'),
('2012', 'Alimentos perecederos', 20, 'completado', '2023-01-15', '09:45:00', '2023-01-15', '13:23:00', 'H49033', '000012', '1001', '101220123', '2023-11-02 12:19:24', '2023-11-02 17:21:18'),
('2013', 'Productos químicos', 18, 'completado', '2023-03-25', '08:30:00', '2023-03-25', '16:02:00', 'HIJ234', '000013', '1002', '101220123', '2023-11-02 12:20:17', '2023-11-02 17:21:30'),
('2014', 'Maquinaria pesada', 16, 'completado', '2023-04-10', '10:15:00', '2023-04-11', '03:13:00', 'HIJ789', '000014', '1003', '101220123', '2023-11-02 12:21:30', '2023-11-02 17:21:38'),
('2015', 'Mercancía general', 19, 'completado', '2023-05-20', '09:00:00', '2023-05-20', '17:30:00', 'HIL378', '000015', '1004', '101220123', '2023-11-02 12:22:36', '2023-11-02 17:21:47'),
('2016', 'Ropa y textiles', 17, 'completado', '2023-06-05', '08:45:00', '2023-06-06', '01:40:00', 'JBL-411', '000016', '1005', '101220123', '2023-11-02 12:27:08', '2023-11-02 17:21:55'),
('2017', 'Madera', 21, 'completado', '2023-07-15', '10:30:00', '2023-07-15', '12:52:00', 'JKL901', '000017', '1006', '101220123', '2023-11-02 12:28:08', '2023-11-02 17:22:03'),
('2018', 'Productos químicos', 16, 'completado', '2023-08-25', '09:15:00', '2023-08-25', '12:33:00', 'KLM345', '000018', '1007', '101220123', '2023-11-02 12:28:51', '2023-11-02 17:22:11'),
('2019', 'Equipos electrónicos', 18, 'completado', '2023-10-05', '11:00:00', '2023-10-05', '20:35:00', 'KLM678', '000019', '1008', '101220123', '2023-11-02 12:29:43', '2023-11-02 17:22:19'),
('2020', 'Maquinaria pesada', 20, 'completado', '2023-10-15', '10:15:00', '2023-10-15', '13:29:00', 'KLM901', '004567', '1009', '101220123', '2023-11-02 12:30:27', '2023-11-02 17:22:29'),
('2021', 'Electrodomésticos', 19, 'completado', '2023-09-05', '08:30:00', '2023-09-05', '15:33:00', 'L34067', '123456', '1010', '101220123', '2023-11-02 12:32:34', '2023-11-02 17:22:38'),
('2022', 'Alimentos perecederos', 17, 'completado', '2023-05-15', '10:00:00', '2023-05-16', '01:13:00', 'MNO234', '234567', '1029', '101220123', '2023-11-02 12:33:17', '2023-11-02 17:22:45'),
('2023', 'Mat. de construcción', 20, 'completado', '2023-02-25', '09:45:00', '2023-02-26', '12:53:00', 'NOP234', '345678', '1236', '101220123', '2023-11-02 12:34:16', '2023-11-02 17:22:53'),
('2024', 'Productos químicos', 16, 'cancelado', '2023-03-05', '11:15:00', '2023-03-06', '07:53:00', 'NOP456', '456789', '1578', '101220123', '2023-11-02 12:35:12', '2023-11-02 17:23:02'),
('2025', 'Mercancía general', 18, 'completado', '2023-04-15', '08:00:00', '2023-04-15', '20:10:00', 'NOP901', '567890', '3213', '101220123', '2023-11-02 12:35:56', '2023-11-02 17:23:12'),
('2026', 'Mat. de construcción', 20, 'completado', '2023-11-01', '06:20:58', '2023-10-01', '00:03:57', 'NOP234', '345678', '1236', '101220123', '2023-12-09 01:27:41', '2023-12-09 01:27:41'),
('2049', 'Alimentos perecederos', 17, 'completado', '2023-09-01', '01:21:26', '2023-01-01', '05:31:48', 'MNO234', '234567', '1029', '101220123', '2023-11-09 01:27:41', '2023-11-09 01:27:41'),
('2088', 'Equipos electrónicos', 18, 'completado', '2023-03-01', '18:20:29', '2023-05-01', '10:34:35', 'KLM678', '000019', '1008', '101220123', '2023-12-09 01:27:41', '2023-12-09 01:27:41'),
('2090', 'Equipos electrónicos', 18, 'completado', '2023-06-01', '19:33:12', '2023-07-01', '14:21:54', 'KLM678', '000019', '1008', '101220123', '2023-11-09 01:27:41', '2023-11-09 01:27:41'),
('2130', 'Alimentos perecederos', 20, 'completado', '2023-10-01', '19:44:48', '2023-05-01', '17:10:38', 'H49033', '000012', '1001', '101220123', '2023-11-09 01:27:41', '2023-11-09 01:27:41'),
('2131', 'Mercancía general', 18, 'completado', '2023-08-01', '22:15:06', '2023-06-01', '16:44:12', 'ABC123', '000001', '0011', '101220123', '2023-11-09 01:27:41', '2023-11-09 01:27:41'),
('2135', 'Productos químicos', 16, 'completado', '2023-08-01', '23:25:58', '2023-08-01', '15:05:20', 'KLM345', '000018', '1007', '101220123', '2023-11-09 01:27:41', '2023-11-09 01:27:41'),
('2499', 'Productos químicos', 18, 'completado', '2023-05-01', '05:31:28', '2023-11-01', '02:58:51', 'HIJ234', '000013', '1002', '101220123', '2023-11-09 01:27:41', '2023-11-09 01:27:41'),
('2681', 'Madera', 21, 'completado', '2023-03-01', '03:56:19', '2023-03-01', '16:54:29', 'EFG901', '000008', '0018', '101220123', '2023-11-09 01:27:41', '2023-11-09 01:27:41'),
('2856', 'Alimentos perecederos', 17, 'completado', '2023-07-01', '05:31:44', '2023-04-01', '19:21:31', 'MNO234', '234567', '1029', '101220123', '2023-11-09 01:27:41', '2023-11-09 01:27:41'),
('2949', 'Maquinaria pesada', 16, 'completado', '2023-05-01', '02:13:51', '2023-04-01', '02:40:29', 'DEF789', '000004', '0014', '101220123', '2023-11-09 01:27:41', '2023-11-09 01:27:41'),
('3001', 'Mercancía general', 18, 'completado', '2023-02-05', '08:30:00', '2023-02-05', '13:59:00', 'ABC123', '000001', '0011', '101220123', '2023-11-02 12:03:54', '2023-11-02 17:18:17'),
('3002', 'Alimentos perecederos', 15, 'completado', '2023-03-12', '10:15:00', '2023-03-12', '23:38:00', 'BCD123', '000002', '0012', '101220123', '2023-11-02 12:06:53', '2023-11-02 17:18:24'),
('3003', 'Mat. de construcción', 20, 'completado', '2023-04-18', '09:00:00', '2023-04-18', '13:51:00', 'BCD789', '000003', '0013', '101220123', '2023-11-02 12:08:20', '2023-11-02 17:18:31'),
('3004', 'Maquinaria pesada', 16, 'completado', '2023-05-25', '11:45:00', '2023-05-26', '05:46:00', 'DEF789', '000004', '0014', '101220123', '2023-11-02 12:09:08', '2023-11-02 17:18:47'),
('3005', 'Productos químicos', 18, 'completado', '2023-07-02', '08:00:00', '2023-07-02', '20:01:00', 'EFG456', '000005', '0015', '101220123', '2023-11-02 12:10:12', '2023-11-02 17:18:53'),
('3006', 'Electrodomésticos', 19, 'cancelado', '2023-08-10', '07:45:00', '2023-08-10', '10:56:00', 'EFG901', '000006', '0016', '101220123', '2023-11-02 12:11:35', '2023-11-02 12:12:37'),
('3007', 'Ropa y textiles', 17, 'completado', '2023-09-20', '10:30:00', '2023-09-20', '19:32:00', 'FHY-145', '000007', '0017', '101220123', '2023-11-02 12:12:25', '2023-11-02 17:19:01'),
('3008', 'Madera', 21, 'completado', '2023-10-05', '09:15:00', '2023-10-05', '23:49:00', 'EFG901', '000008', '0018', '101220123', '2023-11-02 12:14:16', '2023-11-02 17:19:08'),
('3009', 'Equipos electrónicos', 16, 'completado', '2023-11-15', '11:00:00', '2023-11-15', '20:16:00', 'FMN213', '000009', '0019', '101220123', '2023-11-02 12:15:18', '2023-11-02 17:19:22'),
('3010', 'Productos farmacéuticos', 18, 'completado', '2023-12-25', '08:30:00', '2023-12-26', '02:41:00', 'GHI567', '000010', '0030', '101220123', '2023-11-02 12:16:26', '2023-11-02 17:20:58'),
('3011', 'Mat. de construcción', 15, 'completado', '2023-08-05', '10:00:00', '2023-08-05', '19:20:00', 'GPO091', '000011', '0104', '101220123', '2023-11-02 12:18:08', '2023-11-02 17:21:10'),
('3012', 'Alimentos perecederos', 20, 'completado', '2023-01-15', '09:45:00', '2023-01-15', '13:23:00', 'H49033', '000012', '1001', '101220123', '2023-11-02 12:19:24', '2023-11-02 17:21:18'),
('3013', 'Productos químicos', 18, 'completado', '2023-03-25', '08:30:00', '2023-03-25', '16:02:00', 'HIJ234', '000013', '1002', '101220123', '2023-11-02 12:20:17', '2023-11-02 17:21:30'),
('3014', 'Maquinaria pesada', 16, 'completado', '2023-04-10', '10:15:00', '2023-04-11', '03:13:00', 'HIJ789', '000014', '1003', '101220123', '2023-11-02 12:21:30', '2023-11-02 17:21:38'),
('3015', 'Mercancía general', 19, 'completado', '2023-05-20', '09:00:00', '2023-05-20', '17:30:00', 'HIL378', '000015', '1004', '101220123', '2023-11-02 12:22:36', '2023-11-02 17:21:47'),
('3016', 'Ropa y textiles', 17, 'completado', '2023-06-05', '08:45:00', '2023-06-06', '01:40:00', 'JBL-411', '000016', '1005', '101220123', '2023-11-02 12:27:08', '2023-11-02 17:21:55'),
('3017', 'Madera', 21, 'completado', '2023-07-15', '10:30:00', '2023-07-15', '12:52:00', 'JKL901', '000017', '1006', '101220123', '2023-11-02 12:28:08', '2023-11-02 17:22:03'),
('3018', 'Productos químicos', 16, 'completado', '2023-08-25', '09:15:00', '2023-08-25', '12:33:00', 'KLM345', '000018', '1007', '101220123', '2023-11-02 12:28:51', '2023-11-02 17:22:11'),
('3019', 'Equipos electrónicos', 18, 'completado', '2023-10-05', '11:00:00', '2023-10-05', '20:35:00', 'KLM678', '000019', '1008', '101220123', '2023-11-02 12:29:43', '2023-11-02 17:22:19'),
('3020', 'Maquinaria pesada', 20, 'completado', '2023-10-15', '10:15:00', '2023-10-15', '13:29:00', 'KLM901', '004567', '1009', '101220123', '2023-11-02 12:30:27', '2023-11-02 17:22:29'),
('3021', 'Electrodomésticos', 19, 'completado', '2023-09-05', '08:30:00', '2023-09-05', '15:33:00', 'L34067', '123456', '1010', '101220123', '2023-11-02 12:32:34', '2023-11-02 17:22:38'),
('3022', 'Alimentos perecederos', 17, 'completado', '2023-05-15', '10:00:00', '2023-05-16', '01:13:00', 'MNO234', '234567', '1029', '101220123', '2023-11-02 12:33:17', '2023-11-02 17:22:45'),
('3023', 'Mat. de construcción', 20, 'completado', '2023-02-25', '09:45:00', '2023-02-26', '12:53:00', 'NOP234', '345678', '1236', '101220123', '2023-11-02 12:34:16', '2023-11-02 17:22:53'),
('3024', 'Productos químicos', 16, 'cancelado', '2023-03-05', '11:15:00', '2023-03-06', '07:53:00', 'NOP456', '456789', '1578', '101220123', '2023-11-02 12:35:12', '2023-11-02 17:23:02'),
('3025', 'Mercancía general', 18, 'completado', '2023-04-15', '08:00:00', '2023-04-15', '20:10:00', 'NOP901', '567890', '3213', '101220123', '2023-11-02 12:35:56', '2023-11-02 17:23:12'),
('3026', 'Mat. de construcción', 20, 'completado', '2023-11-01', '06:20:58', '2023-10-01', '00:03:57', 'NOP234', '345678', '1236', '101220123', '2023-12-09 01:27:41', '2023-12-09 01:27:41'),
('3029', 'Ropa y textiles', 17, 'completado', '2023-01-20', '11:55:51', '2023-06-20', '09:58:08', 'FHY-145', '000007', '0017', '101220123', '2023-11-09 01:00:28', '2023-11-09 01:00:28'),
('3088', 'Equipos electrónicos', 18, 'completado', '2023-03-01', '18:20:29', '2023-05-01', '10:34:35', 'KLM678', '000019', '1008', '101220123', '2023-12-09 01:27:41', '2023-12-09 01:27:41'),
('3233', 'Maquinaria pesada', 20, 'completado', '2023-03-15', '01:24:15', '2023-01-15', '21:05:08', 'KLM901', '004567', '1009', '101220123', '2023-11-09 01:00:28', '2023-11-09 01:00:28'),
('3299', 'Maquinaria pesada', 16, 'completado', '2023-08-01', '09:52:47', '2023-01-01', '20:27:17', 'DEF789', '000004', '0014', '101220123', '2023-11-09 01:27:41', '2023-11-09 01:27:41'),
('3350', 'Productos químicos', 16, 'cancelado', '2023-06-05', '08:27:16', '2023-07-06', '08:12:48', 'NOP456', '456789', '1578', '101220123', '2023-11-09 01:00:11', '2023-11-09 01:00:11'),
('3377', 'Mercancía general', 19, 'completado', '2023-04-01', '13:49:16', '2023-11-01', '21:39:20', 'HIL378', '000015', '1004', '101220123', '2023-11-09 01:27:41', '2023-11-09 01:27:41'),
('3397', 'Alimentos perecederos', 15, 'completado', '2023-03-12', '17:17:27', '2023-05-12', '06:58:43', 'BCD123', '000002', '0012', '101220123', '2023-11-09 01:00:11', '2023-11-09 01:00:11'),
('3442', 'Maquinaria pesada', 16, 'completado', '2023-08-01', '14:25:34', '2023-10-01', '07:43:54', 'DEF789', '000004', '0014', '101220123', '2023-11-09 01:27:41', '2023-11-09 01:27:41'),
('3445', 'Mercancía general', 18, 'completado', '2023-06-15', '20:15:39', '2023-05-15', '14:16:07', 'NOP901', '567890', '3213', '101220123', '2023-11-09 01:00:11', '2023-11-09 01:00:11'),
('3468', 'Maquinaria pesada', 16, 'completado', '2023-09-25', '09:51:19', '2023-09-26', '08:00:40', 'DEF789', '000004', '0014', '101220123', '2023-11-09 01:00:28', '2023-11-09 01:00:28'),
('3490', 'Ropa y textiles', 17, 'completado', '2023-07-01', '21:10:06', '2023-08-01', '14:47:51', 'FHY-145', '000007', '0017', '101220123', '2023-11-09 01:27:41', '2023-11-09 01:27:41'),
('3502', 'Mat. de construcción', 20, 'completado', '2023-04-01', '14:55:03', '2023-02-01', '15:46:42', 'BCD789', '000003', '0013', '101220123', '2023-11-09 01:27:41', '2023-11-09 01:27:41'),
('3535', 'Equipos electrónicos', 18, 'completado', '2023-11-05', '22:51:31', '2023-05-05', '13:28:11', 'KLM678', '000019', '1008', '101220123', '2023-11-09 01:00:28', '2023-11-09 01:00:28'),
('3647', 'Madera', 21, 'completado', '2023-01-01', '04:08:23', '2023-08-01', '23:51:43', 'EFG901', '000008', '0018', '101220123', '2023-11-09 01:27:41', '2023-11-09 01:27:41'),
('3679', 'Mercancía general', 19, 'completado', '2023-10-20', '13:26:24', '2023-05-20', '23:03:53', 'HIL378', '000015', '1004', '101220123', '2023-11-09 01:00:28', '2023-11-09 01:00:28'),
('3699', 'Alimentos perecederos', 17, 'completado', '2023-07-15', '14:54:38', '2023-06-16', '02:30:48', 'MNO234', '234567', '1029', '101220123', '2023-11-09 01:00:11', '2023-11-09 01:00:11'),
('3793', 'Productos farmacéuticos', 18, 'completado', '2023-02-25', '19:45:32', '2023-11-26', '20:23:16', 'GHI567', '000010', '0030', '101220123', '2023-11-09 01:00:11', '2023-11-09 01:00:11'),
('3802', 'Equipos electrónicos', 16, 'completado', '2023-04-15', '20:51:43', '2023-03-15', '17:07:43', 'FMN213', '000009', '0019', '101220123', '2023-11-09 01:00:28', '2023-11-09 01:00:28'),
('3838', 'Alimentos perecederos', 15, 'completado', '2023-09-12', '01:13:22', '2023-04-12', '03:06:48', 'BCD123', '000002', '0012', '101220123', '2023-11-09 01:00:28', '2023-11-09 01:00:28'),
('3903', 'Madera', 21, 'completado', '2023-03-01', '03:07:18', '2023-10-01', '22:59:56', 'EFG901', '000008', '0018', '101220123', '2023-11-09 01:27:41', '2023-11-09 01:27:41'),
('3909', 'Electrodomésticos', 19, 'cancelado', '2023-03-01', '02:31:01', '2023-09-01', '11:23:18', 'EFG901', '000006', '0016', '101220123', '2023-11-09 01:27:41', '2023-11-09 01:27:41'),
('3912', 'Mercancía general', 18, 'completado', '2023-10-01', '00:01:54', '2023-06-01', '12:05:40', 'ABC123', '000001', '0011', '101220123', '2023-11-09 01:27:41', '2023-11-09 01:27:41'),
('4001', 'Mercancía general', 18, 'completado', '2023-02-05', '08:30:00', '2023-02-05', '13:59:00', 'ABC123', '000001', '0011', '101220123', '2023-11-02 12:03:54', '2023-11-02 17:18:17'),
('4002', 'Alimentos perecederos', 15, 'completado', '2023-03-12', '10:15:00', '2023-03-12', '23:38:00', 'BCD123', '000002', '0012', '101220123', '2023-11-02 12:06:53', '2023-11-02 17:18:24'),
('4003', 'Mat. de construcción', 20, 'completado', '2023-04-18', '09:00:00', '2023-04-18', '13:51:00', 'BCD789', '000003', '0013', '101220123', '2023-11-02 12:08:20', '2023-11-02 17:18:31'),
('4004', 'Maquinaria pesada', 16, 'completado', '2023-05-25', '11:45:00', '2023-05-26', '05:46:00', 'DEF789', '000004', '0014', '101220123', '2023-11-02 12:09:08', '2023-11-02 17:18:47'),
('4005', 'Productos químicos', 18, 'completado', '2023-07-02', '08:00:00', '2023-07-02', '20:01:00', 'EFG456', '000005', '0015', '101220123', '2023-11-02 12:10:12', '2023-11-02 17:18:53'),
('4006', 'Electrodomésticos', 19, 'cancelado', '2023-08-10', '07:45:00', '2023-08-10', '10:56:00', 'EFG901', '000006', '0016', '101220123', '2023-11-02 12:11:35', '2023-11-02 12:12:37'),
('4007', 'Ropa y textiles', 17, 'completado', '2023-09-20', '10:30:00', '2023-09-20', '19:32:00', 'FHY-145', '000007', '0017', '101220123', '2023-11-02 12:12:25', '2023-11-02 17:19:01'),
('4008', 'Madera', 21, 'completado', '2023-10-05', '09:15:00', '2023-10-05', '23:49:00', 'EFG901', '000008', '0018', '101220123', '2023-11-02 12:14:16', '2023-11-02 17:19:08'),
('4009', 'Equipos electrónicos', 16, 'completado', '2023-11-15', '11:00:00', '2023-11-15', '20:16:00', 'FMN213', '000009', '0019', '101220123', '2023-11-02 12:15:18', '2023-11-02 17:19:22'),
('4010', 'Productos farmacéuticos', 18, 'completado', '2023-12-25', '08:30:00', '2023-12-26', '02:41:00', 'GHI567', '000010', '0030', '101220123', '2023-11-02 12:16:26', '2023-11-02 17:20:58'),
('4011', 'Mat. de construcción', 15, 'completado', '2023-08-05', '10:00:00', '2023-08-05', '19:20:00', 'GPO091', '000011', '0104', '101220123', '2023-11-02 12:18:08', '2023-11-02 17:21:10'),
('4012', 'Alimentos perecederos', 20, 'completado', '2023-01-15', '09:45:00', '2023-01-15', '13:23:00', 'H49033', '000012', '1001', '101220123', '2023-11-02 12:19:24', '2023-11-02 17:21:18'),
('4013', 'Productos químicos', 18, 'completado', '2023-03-25', '08:30:00', '2023-03-25', '16:02:00', 'HIJ234', '000013', '1002', '101220123', '2023-11-02 12:20:17', '2023-11-02 17:21:30'),
('4014', 'Maquinaria pesada', 16, 'completado', '2023-04-10', '10:15:00', '2023-04-11', '03:13:00', 'HIJ789', '000014', '1003', '101220123', '2023-11-02 12:21:30', '2023-11-02 17:21:38'),
('4015', 'Mercancía general', 19, 'completado', '2023-05-20', '09:00:00', '2023-05-20', '17:30:00', 'HIL378', '000015', '1004', '101220123', '2023-11-02 12:22:36', '2023-11-02 17:21:47'),
('4016', 'Ropa y textiles', 17, 'completado', '2023-06-05', '08:45:00', '2023-06-06', '01:40:00', 'JBL-411', '000016', '1005', '101220123', '2023-11-02 12:27:08', '2023-11-02 17:21:55'),
('4017', 'Madera', 21, 'completado', '2023-07-15', '10:30:00', '2023-07-15', '12:52:00', 'JKL901', '000017', '1006', '101220123', '2023-11-02 12:28:08', '2023-11-02 17:22:03'),
('4018', 'Productos químicos', 16, 'completado', '2023-08-25', '09:15:00', '2023-08-25', '12:33:00', 'KLM345', '000018', '1007', '101220123', '2023-11-02 12:28:51', '2023-11-02 17:22:11'),
('4019', 'Equipos electrónicos', 18, 'completado', '2023-10-05', '11:00:00', '2023-10-05', '20:35:00', 'KLM678', '000019', '1008', '101220123', '2023-11-02 12:29:43', '2023-11-02 17:22:19'),
('4020', 'Maquinaria pesada', 20, 'completado', '2023-10-15', '10:15:00', '2023-10-15', '13:29:00', 'KLM901', '004567', '1009', '101220123', '2023-11-02 12:30:27', '2023-11-02 17:22:29'),
('4021', 'Electrodomésticos', 19, 'completado', '2023-09-05', '08:30:00', '2023-09-05', '15:33:00', 'L34067', '123456', '1010', '101220123', '2023-11-02 12:32:34', '2023-11-02 17:22:38'),
('4022', 'Alimentos perecederos', 17, 'completado', '2023-05-15', '10:00:00', '2023-05-16', '01:13:00', 'MNO234', '234567', '1029', '101220123', '2023-11-02 12:33:17', '2023-11-02 17:22:45'),
('4023', 'Mat. de construcción', 20, 'completado', '2023-02-25', '09:45:00', '2023-02-26', '12:53:00', 'NOP234', '345678', '1236', '101220123', '2023-11-02 12:34:16', '2023-11-02 17:22:53'),
('4024', 'Productos químicos', 16, 'cancelado', '2023-03-05', '11:15:00', '2023-03-06', '07:53:00', 'NOP456', '456789', '1578', '101220123', '2023-11-02 12:35:12', '2023-11-02 17:23:02'),
('4025', 'Mercancía general', 18, 'completado', '2023-04-15', '08:00:00', '2023-04-15', '20:10:00', 'NOP901', '567890', '3213', '101220123', '2023-11-02 12:35:56', '2023-11-02 17:23:12'),
('4026', 'Mat. de construcción', 20, 'completado', '2023-11-01', '06:20:58', '2023-10-01', '00:03:57', 'NOP234', '345678', '1236', '101220123', '2023-12-09 01:27:41', '2023-12-09 01:27:41'),
('4088', 'Equipos electrónicos', 18, 'completado', '2023-03-01', '18:20:29', '2023-05-01', '10:34:35', 'KLM678', '000019', '1008', '101220123', '2023-12-09 01:27:41', '2023-12-09 01:27:41'),
('4102', 'Ropa y textiles', 17, 'completado', '2023-04-01', '13:04:58', '2023-08-01', '15:57:26', 'JBL-411', '000016', '1005', '101220123', '2023-11-09 01:27:41', '2023-11-09 01:27:41'),
('4129', 'Electrodomésticos', 19, 'completado', '2023-05-05', '07:49:30', '2023-08-05', '01:33:52', 'L34067', '123456', '1010', '101220123', '2023-11-09 01:00:11', '2023-11-09 01:00:11'),
('4166', 'Productos químicos', 18, 'completado', '2023-01-02', '20:15:32', '2023-09-02', '20:55:45', 'EFG456', '000005', '0015', '101220123', '2023-11-09 01:00:28', '2023-11-09 01:00:28'),
('4195', 'Madera', 21, 'completado', '2023-01-05', '16:35:28', '2023-11-05', '22:32:46', 'EFG901', '000008', '0018', '101220123', '2023-11-09 01:00:28', '2023-11-09 01:00:28'),
('4211', 'Electrodomésticos', 19, 'completado', '2023-02-01', '10:21:53', '2023-09-01', '09:57:47', 'L34067', '123456', '1010', '101220123', '2023-11-09 01:27:41', '2023-11-09 01:27:41'),
('4224', 'Equipos electrónicos', 18, 'completado', '2023-07-05', '06:48:40', '2023-03-05', '04:01:07', 'KLM678', '000019', '1008', '101220123', '2023-11-09 01:00:28', '2023-11-09 01:00:28'),
('4312', 'Maquinaria pesada', 20, 'completado', '2023-03-01', '00:08:34', '2023-03-01', '05:34:08', 'KLM901', '004567', '1009', '101220123', '2023-11-09 01:27:41', '2023-11-09 01:27:41'),
('4343', 'Equipos electrónicos', 16, 'completado', '2023-05-01', '20:53:53', '2023-01-01', '15:14:56', 'FMN213', '000009', '0019', '101220123', '2023-11-09 01:27:41', '2023-11-09 01:27:41'),
('4362', 'Ropa y textiles', 17, 'completado', '2023-01-20', '14:51:49', '2023-05-20', '09:42:28', 'FHY-145', '000007', '0017', '101220123', '2023-11-09 01:00:28', '2023-11-09 01:00:28'),
('4443', 'Electrodomésticos', 19, 'completado', '2023-09-05', '08:23:15', '2023-10-05', '04:43:34', 'L34067', '123456', '1010', '101220123', '2023-11-09 01:00:28', '2023-11-09 01:00:28'),
('4450', 'Madera', 21, 'completado', '2023-11-15', '02:09:33', '2023-11-15', '06:12:52', 'JKL901', '000017', '1006', '101220123', '2023-11-09 01:00:28', '2023-11-09 01:00:28'),
('4488', 'Ropa y textiles', 17, 'completado', '2023-03-01', '14:10:19', '2023-05-01', '04:18:54', 'JBL-411', '000016', '1005', '101220123', '2023-11-09 01:27:41', '2023-11-09 01:27:41'),
('4509', 'Maquinaria pesada', 20, 'completado', '2023-08-01', '21:02:52', '2023-05-01', '14:30:23', 'KLM901', '004567', '1009', '101220123', '2023-11-09 01:27:41', '2023-11-09 01:27:41'),
('4555', 'Maquinaria pesada', 16, 'completado', '2023-04-25', '18:00:31', '2023-07-26', '16:49:43', 'DEF789', '000004', '0014', '101220123', '2023-11-09 01:00:28', '2023-11-09 01:00:28'),
('4580', 'Productos farmacéuticos', 18, 'completado', '2023-07-25', '03:47:34', '2023-05-26', '10:07:51', 'GHI567', '000010', '0030', '101220123', '2023-11-09 01:00:28', '2023-11-09 01:00:28'),
('4598', 'Mat. de construcción', 20, 'completado', '2023-11-25', '09:07:22', '2023-11-26', '14:58:39', 'NOP234', '345678', '1236', '101220123', '2023-11-09 01:00:28', '2023-11-09 01:00:28'),
('4642', 'Productos químicos', 16, 'cancelado', '2023-03-01', '21:29:43', '2023-08-01', '20:08:31', 'NOP456', '456789', '1578', '101220123', '2023-11-09 01:27:41', '2023-11-09 01:27:41'),
('4654', 'Alimentos perecederos', 17, 'completado', '2023-09-15', '13:28:40', '2023-07-16', '00:22:40', 'MNO234', '234567', '1029', '101220123', '2023-11-09 01:00:28', '2023-11-09 01:00:28'),
('4680', 'Madera', 21, 'completado', '2023-05-01', '17:37:21', '2023-05-01', '17:43:51', 'EFG901', '000008', '0018', '101220123', '2023-11-09 01:27:41', '2023-11-09 01:27:41'),
('4717', 'Productos farmacéuticos', 18, 'completado', '2023-04-01', '00:37:14', '2023-03-01', '05:53:44', 'GHI567', '000010', '0030', '101220123', '2023-11-09 01:27:41', '2023-11-09 01:27:41'),
('4806', 'Mat. de construcción', 20, 'completado', '2023-09-01', '05:07:54', '2023-10-01', '17:41:28', 'NOP234', '345678', '1236', '101220123', '2023-11-09 01:27:41', '2023-11-09 01:27:41'),
('4842', 'Mat. de construcción', 15, 'completado', '2023-03-05', '16:25:15', '2023-11-05', '03:46:09', 'GPO091', '000011', '0104', '101220123', '2023-11-09 01:00:28', '2023-11-09 01:00:28'),
('4929', 'Productos farmacéuticos', 18, 'completado', '2023-01-01', '22:30:10', '2023-05-01', '09:04:25', 'GHI567', '000010', '0030', '101220123', '2023-11-09 01:27:41', '2023-11-09 01:27:41'),
('4990', 'Mat. de construcción', 15, 'completado', '2023-04-01', '21:16:57', '2023-07-01', '08:35:01', 'GPO091', '000011', '0104', '101220123', '2023-11-09 01:27:41', '2023-11-09 01:27:41'),
('4999', 'Mat. de construcción', 20, 'completado', '2023-04-01', '03:19:44', '2023-08-01', '03:15:48', 'BCD789', '000003', '0013', '101220123', '2023-11-09 01:27:41', '2023-11-09 01:27:41'),
('5059', 'Productos químicos', 18, 'completado', '2023-08-02', '18:20:22', '2023-07-02', '11:01:03', 'EFG456', '000005', '0015', '101220123', '2023-11-09 01:00:11', '2023-11-09 01:00:11'),
('5091', 'Maquinaria pesada', 16, 'completado', '2023-07-10', '12:36:00', '2023-08-11', '21:12:31', 'HIJ789', '000014', '1003', '101220123', '2023-11-09 01:00:11', '2023-11-09 01:00:11'),
('5096', 'Equipos electrónicos', 16, 'completado', '2023-08-01', '20:29:38', '2023-03-01', '15:18:02', 'FMN213', '000009', '0019', '101220123', '2023-11-09 01:27:41', '2023-11-09 01:27:41'),
('5105', 'Productos químicos', 16, 'completado', '2023-08-25', '02:37:29', '2023-09-25', '23:19:47', 'KLM345', '000018', '1007', '101220123', '2023-11-09 01:00:11', '2023-11-09 01:00:11'),
('5136', 'Alimentos perecederos', 17, 'completado', '2023-10-15', '06:26:54', '2023-10-16', '23:14:34', 'MNO234', '234567', '1029', '101220123', '2023-11-09 01:00:28', '2023-11-09 01:00:28'),
('5148', 'Ropa y textiles', 17, 'completado', '2023-09-01', '07:30:18', '2023-03-01', '07:23:16', 'JBL-411', '000016', '1005', '101220123', '2023-11-09 01:27:41', '2023-11-09 01:27:41'),
('5152', 'Mercancía general', 19, 'completado', '2023-04-01', '01:17:32', '2023-04-01', '09:16:13', 'HIL378', '000015', '1004', '101220123', '2023-11-09 01:27:41', '2023-11-09 01:27:41'),
('5289', 'Equipos electrónicos', 16, 'completado', '2023-05-01', '13:19:55', '2023-06-01', '19:03:07', 'FMN213', '000009', '0019', '101220123', '2023-11-09 01:27:41', '2023-11-09 01:27:41'),
('5309', 'Alimentos perecederos', 15, 'completado', '2023-06-12', '16:19:13', '2023-10-12', '14:39:18', 'BCD123', '000002', '0012', '101220123', '2023-11-09 01:00:28', '2023-11-09 01:00:28'),
('5355', 'Productos químicos', 16, 'cancelado', '2023-06-05', '09:30:11', '2023-09-06', '04:02:05', 'NOP456', '456789', '1578', '101220123', '2023-11-09 01:00:28', '2023-11-09 01:00:28'),
('5364', 'Productos químicos', 18, 'completado', '2023-02-01', '00:20:01', '2023-08-01', '10:27:44', 'HIJ234', '000013', '1002', '101220123', '2023-11-09 01:27:41', '2023-11-09 01:27:41'),
('5384', 'Electrodomésticos', 19, 'cancelado', '2023-08-01', '16:18:08', '2023-05-01', '01:27:07', 'EFG901', '000006', '0016', '101220123', '2023-11-09 01:27:41', '2023-11-09 01:27:41'),
('5405', 'Productos químicos', 18, 'completado', '2023-02-01', '23:05:53', '2023-06-01', '10:06:49', 'HIJ234', '000013', '1002', '101220123', '2023-11-09 01:27:41', '2023-11-09 01:27:41'),
('5486', 'Maquinaria pesada', 16, 'completado', '2023-04-01', '00:43:03', '2023-02-01', '15:07:59', 'DEF789', '000004', '0014', '101220123', '2023-11-09 01:27:41', '2023-11-09 01:27:41'),
('5757', 'Mat. de construcción', 20, 'completado', '2023-09-01', '23:55:00', '2023-09-01', '18:02:56', 'BCD789', '000003', '0013', '101220123', '2023-11-09 01:27:41', '2023-11-09 01:27:41'),
('5764', 'Maquinaria pesada', 20, 'completado', '2023-12-15', '20:16:38', '2023-01-15', '06:55:09', 'KLM901', '004567', '1009', '101220123', '2023-11-09 01:00:11', '2023-11-09 01:00:11'),
('5987', 'Productos químicos', 18, 'completado', '2023-11-02', '09:34:19', '2023-08-02', '14:09:49', 'EFG456', '000005', '0015', '101220123', '2023-11-09 01:00:28', '2023-11-09 01:00:28'),
('6149', 'Mercancía general', 18, 'completado', '2023-09-01', '22:33:25', '2023-05-01', '07:45:17', 'NOP901', '567890', '3213', '101220123', '2023-11-09 01:27:41', '2023-11-09 01:27:41'),
('6212', 'Alimentos perecederos', 20, 'completado', '2023-01-15', '16:41:26', '2023-12-15', '00:00:40', 'H49033', '000012', '1001', '101220123', '2023-11-09 01:00:28', '2023-11-09 01:00:28'),
('6243', 'Mat. de construcción', 20, 'completado', '2023-03-18', '10:56:59', '2023-04-18', '10:11:48', 'BCD789', '000003', '0013', '101220123', '2023-11-09 01:00:11', '2023-11-09 01:00:11'),
('6353', 'Alimentos perecederos', 17, 'completado', '2023-11-01', '18:11:57', '2023-11-01', '16:33:49', 'MNO234', '234567', '1029', '101220123', '2023-11-09 01:27:41', '2023-11-09 01:27:41'),
('6356', 'Mat. de construcción', 15, 'completado', '2023-01-05', '20:55:34', '2023-01-05', '05:03:12', 'GPO091', '000011', '0104', '101220123', '2023-11-09 01:00:28', '2023-11-09 01:00:28'),
('6692', 'Maquinaria pesada', 20, 'completado', '2023-08-15', '12:24:54', '2023-04-15', '03:16:12', 'KLM901', '004567', '1009', '101220123', '2023-11-09 01:00:28', '2023-11-09 01:00:28'),
('6784', 'Ropa y textiles', 17, 'completado', '2023-07-05', '20:03:56', '2023-10-06', '02:24:45', 'JBL-411', '000016', '1005', '101220123', '2023-11-09 01:00:28', '2023-11-09 01:00:28'),
('6809', 'Productos químicos', 16, 'cancelado', '2023-07-01', '21:56:19', '2023-09-01', '05:45:15', 'NOP456', '456789', '1578', '101220123', '2023-11-09 01:27:41', '2023-11-09 01:27:41'),
('6833', 'Maquinaria pesada', 16, 'completado', '2023-02-25', '21:16:36', '2023-09-26', '00:15:19', 'DEF789', '000004', '0014', '101220123', '2023-11-09 01:00:11', '2023-11-09 01:00:11'),
('6849', 'Mat. de construcción', 20, 'completado', '2023-05-01', '01:10:16', '2023-11-01', '18:18:11', 'BCD789', '000003', '0013', '101220123', '2023-11-09 01:27:41', '2023-11-09 01:27:41'),
('6882', 'Mat. de construcción', 15, 'completado', '2023-09-01', '18:35:21', '2023-07-01', '12:31:38', 'GPO091', '000011', '0104', '101220123', '2023-11-09 01:27:41', '2023-11-09 01:27:41'),
('6973', 'Mercancía general', 18, 'completado', '2023-07-01', '01:36:48', '2023-05-01', '00:01:57', 'NOP901', '567890', '3213', '101220123', '2023-11-09 01:27:41', '2023-11-09 01:27:41'),
('7026', 'Productos químicos', 16, 'completado', '2023-07-25', '18:01:49', '2023-02-25', '05:56:11', 'KLM345', '000018', '1007', '101220123', '2023-11-09 01:00:28', '2023-11-09 01:00:28'),
('7069', 'Productos químicos', 18, 'completado', '2023-02-25', '08:13:53', '2023-10-25', '10:44:19', 'HIJ234', '000013', '1002', '101220123', '2023-11-09 01:00:28', '2023-11-09 01:00:28'),
('7164', 'Mercancía general', 18, 'completado', '2023-11-15', '00:30:04', '2023-12-15', '05:34:16', 'NOP901', '567890', '3213', '101220123', '2023-11-09 01:00:28', '2023-11-09 01:00:28'),
('7185', 'Alimentos perecederos', 20, 'completado', '2023-08-15', '03:54:08', '2023-07-15', '21:42:14', 'H49033', '000012', '1001', '101220123', '2023-11-09 01:00:28', '2023-11-09 01:00:28'),
('7205', 'Productos químicos', 18, 'completado', '2023-08-01', '09:28:08', '2023-10-01', '00:15:53', 'EFG456', '000005', '0015', '101220123', '2023-11-09 01:27:41', '2023-11-09 01:27:41'),
('7218', 'Maquinaria pesada', 16, 'completado', '2023-04-01', '13:24:52', '2023-09-01', '02:57:58', 'HIJ789', '000014', '1003', '101220123', '2023-11-09 01:27:41', '2023-11-09 01:27:41'),
('7229', 'Madera', 21, 'completado', '2023-03-05', '01:53:19', '2023-03-05', '06:22:58', 'EFG901', '000008', '0018', '101220123', '2023-11-09 01:00:28', '2023-11-09 01:00:28'),
('7230', 'Productos farmacéuticos', 18, 'completado', '2023-04-01', '05:39:21', '2023-04-01', '23:17:00', 'GHI567', '000010', '0030', '101220123', '2023-11-09 01:27:41', '2023-11-09 01:27:41'),
('7282', 'Madera', 21, 'completado', '2023-02-01', '07:46:08', '2023-04-01', '14:19:06', 'JKL901', '000017', '1006', '101220123', '2023-11-09 01:27:41', '2023-11-09 01:27:41'),
('7308', 'Maquinaria pesada', 16, 'completado', '2023-01-10', '16:20:15', '2023-01-11', '14:59:58', 'HIJ789', '000014', '1003', '101220123', '2023-11-09 01:00:28', '2023-11-09 01:00:28'),
('7321', 'Mercancía general', 18, 'completado', '2023-04-01', '05:52:11', '2023-04-01', '01:22:53', 'NOP901', '567890', '3213', '101220123', '2023-11-09 01:27:41', '2023-11-09 01:27:41'),
('7336', 'Ropa y textiles', 17, 'completado', '2023-11-01', '14:30:45', '2023-02-01', '21:16:40', 'JBL-411', '000016', '1005', '101220123', '2023-11-09 01:27:41', '2023-11-09 01:27:41'),
('7358', 'Mercancía general', 19, 'completado', '2023-08-01', '03:32:38', '2023-08-01', '04:23:38', 'HIL378', '000015', '1004', '101220123', '2023-11-09 01:27:41', '2023-11-09 01:27:41'),
('7397', 'Productos químicos', 18, 'completado', '2023-02-01', '12:41:15', '2023-03-01', '09:16:34', 'HIJ234', '000013', '1002', '101220123', '2023-11-09 01:27:41', '2023-11-09 01:27:41');
INSERT INTO `viajes` (`cod_via`, `car_via`, `pes_via`, `est_via`, `fec_sal_via`, `hor_sal_via`, `fec_lle_via`, `hor_lle_via`, `cam_via`, `cli_via`, `rut_via`, `emp_via`, `created_at`, `updated_at`) VALUES
('7474', 'Electrodomésticos', 19, 'completado', '2023-06-01', '08:50:05', '2023-04-01', '06:25:21', 'L34067', '123456', '1010', '101220123', '2023-11-09 01:27:41', '2023-11-09 01:27:41'),
('7508', 'Ropa y textiles', 17, 'completado', '2023-01-01', '21:00:11', '2023-04-01', '20:52:12', 'FHY-145', '000007', '0017', '101220123', '2023-11-09 01:27:41', '2023-11-09 01:27:41'),
('7658', 'Electrodomésticos', 19, 'cancelado', '2023-05-10', '07:21:52', '2023-01-10', '04:07:18', 'EFG901', '000006', '0016', '101220123', '2023-11-09 01:00:28', '2023-11-09 01:00:28'),
('7721', 'Productos químicos', 16, 'completado', '2023-04-25', '03:59:07', '2023-03-25', '10:24:49', 'KLM345', '000018', '1007', '101220123', '2023-11-09 01:00:28', '2023-11-09 01:00:28'),
('7811', 'Mercancía general', 18, 'completado', '2023-05-05', '05:50:54', '2023-02-05', '19:38:38', 'ABC123', '000001', '0011', '101220123', '2023-11-09 01:00:28', '2023-11-09 01:00:28'),
('7915', 'Mercancía general', 18, 'completado', '2023-01-01', '19:07:41', '2023-10-01', '00:27:19', 'ABC123', '000001', '0011', '101220123', '2023-11-09 01:27:41', '2023-11-09 01:27:41'),
('7932', 'Electrodomésticos', 19, 'completado', '2023-08-05', '19:01:19', '2023-09-05', '03:02:49', 'L34067', '123456', '1010', '101220123', '2023-11-09 01:00:28', '2023-11-09 01:00:28'),
('8044', 'Maquinaria pesada', 16, 'completado', '2023-10-01', '03:07:25', '2023-11-01', '05:35:30', 'HIJ789', '000014', '1003', '101220123', '2023-11-09 01:27:41', '2023-11-09 01:27:41'),
('8064', 'Ropa y textiles', 17, 'completado', '2023-11-05', '02:28:41', '2023-12-06', '21:31:45', 'JBL-411', '000016', '1005', '101220123', '2023-11-09 01:00:28', '2023-11-09 01:00:28'),
('8095', 'Alimentos perecederos', 15, 'completado', '2023-04-01', '05:07:35', '2023-01-01', '18:32:32', 'BCD123', '000002', '0012', '101220123', '2023-11-09 01:27:41', '2023-11-09 01:27:41'),
('8283', 'Alimentos perecederos', 17, 'completado', '2023-06-01', '00:26:16', '2023-07-01', '21:23:16', 'MNO234', '234567', '1029', '101220123', '2023-11-09 01:27:41', '2023-11-09 01:27:41'),
('8385', 'Mercancía general', 18, 'completado', '2023-11-05', '02:41:16', '2023-09-05', '17:49:31', 'ABC123', '000001', '0011', '101220123', '2023-11-09 01:00:11', '2023-11-09 01:00:11'),
('8395', 'Ropa y textiles', 17, 'completado', '2023-08-05', '01:13:29', '2023-08-06', '13:46:52', 'JBL-411', '000016', '1005', '101220123', '2023-11-09 01:00:11', '2023-11-09 01:00:11'),
('8444', 'Mat. de construcción', 20, 'completado', '2023-04-01', '00:36:24', '2023-03-01', '21:07:49', 'NOP234', '345678', '1236', '101220123', '2023-11-09 01:27:41', '2023-11-09 01:27:41'),
('8492', 'Madera', 21, 'completado', '2023-01-01', '10:57:04', '2023-04-01', '00:38:03', 'JKL901', '000017', '1006', '101220123', '2023-11-09 01:27:41', '2023-11-09 01:27:41'),
('8512', 'Madera', 21, 'completado', '2023-10-15', '17:59:16', '2023-10-15', '17:29:00', 'JKL901', '000017', '1006', '101220123', '2023-11-09 01:00:11', '2023-11-09 01:00:11'),
('8600', 'Electrodomésticos', 19, 'cancelado', '2023-04-10', '16:36:21', '2023-05-10', '13:06:48', 'EFG901', '000006', '0016', '101220123', '2023-11-09 01:00:11', '2023-11-09 01:00:11'),
('8642', 'Equipos electrónicos', 18, 'completado', '2023-04-01', '02:23:40', '2023-06-01', '02:49:08', 'KLM678', '000019', '1008', '101220123', '2023-11-09 01:27:41', '2023-11-09 01:27:41'),
('8649', 'Productos químicos', 18, 'completado', '2023-01-01', '17:18:56', '2023-05-01', '22:09:51', 'EFG456', '000005', '0015', '101220123', '2023-11-09 01:27:41', '2023-11-09 01:27:41'),
('8657', 'Equipos electrónicos', 16, 'completado', '2023-10-15', '20:08:02', '2023-08-15', '06:46:39', 'FMN213', '000009', '0019', '101220123', '2023-11-09 01:00:28', '2023-11-09 01:00:28'),
('8677', 'Maquinaria pesada', 16, 'completado', '2023-01-01', '15:37:17', '2023-02-01', '13:22:33', 'HIJ789', '000014', '1003', '101220123', '2023-11-09 01:27:41', '2023-11-09 01:27:41'),
('8744', 'Productos químicos', 16, 'cancelado', '2023-01-01', '19:24:17', '2023-09-01', '11:48:52', 'NOP456', '456789', '1578', '101220123', '2023-11-09 01:27:41', '2023-11-09 01:27:41'),
('8766', 'Madera', 21, 'completado', '2023-10-05', '06:38:32', '2023-06-05', '11:48:38', 'EFG901', '000008', '0018', '101220123', '2023-11-09 01:00:11', '2023-11-09 01:00:11'),
('8804', 'Equipos electrónicos', 16, 'completado', '2023-07-15', '16:40:45', '2023-07-15', '09:36:25', 'FMN213', '000009', '0019', '101220123', '2023-11-09 01:00:11', '2023-11-09 01:00:11'),
('8833', 'Alimentos perecederos', 20, 'completado', '2023-05-01', '11:28:50', '2023-02-01', '03:20:03', 'H49033', '000012', '1001', '101220123', '2023-11-09 01:27:41', '2023-11-09 01:27:41'),
('8854', 'Electrodomésticos', 19, 'completado', '2023-08-01', '20:56:00', '2023-03-01', '14:29:06', 'L34067', '123456', '1010', '101220123', '2023-11-09 01:27:41', '2023-11-09 01:27:41'),
('8926', 'Productos farmacéuticos', 18, 'completado', '2023-04-25', '05:59:31', '2023-04-26', '19:37:20', 'GHI567', '000010', '0030', '101220123', '2023-11-09 01:00:28', '2023-11-09 01:00:28'),
('9015', 'Mat. de construcción', 20, 'completado', '2023-01-18', '15:51:19', '2023-09-18', '12:53:01', 'BCD789', '000003', '0013', '101220123', '2023-11-09 01:00:28', '2023-11-09 01:00:28'),
('9024', 'Productos químicos', 18, 'completado', '2023-11-01', '00:35:56', '2023-04-01', '08:26:42', 'EFG456', '000005', '0015', '101220123', '2023-11-09 01:27:41', '2023-11-09 01:27:41'),
('9033', 'Maquinaria pesada', 16, 'completado', '2023-06-01', '14:17:51', '2023-07-01', '04:31:40', 'HIJ789', '000014', '1003', '101220123', '2023-11-09 01:27:41', '2023-11-09 01:27:41'),
('9120', 'Alimentos perecederos', 15, 'completado', '2023-10-01', '14:36:20', '2023-05-01', '08:30:25', 'BCD123', '000002', '0012', '101220123', '2023-11-09 01:27:41', '2023-11-09 01:27:41'),
('9139', 'Electrodomésticos', 19, 'cancelado', '2023-02-01', '17:35:54', '2023-05-01', '16:58:11', 'EFG901', '000006', '0016', '101220123', '2023-11-09 01:27:41', '2023-11-09 01:27:41'),
('9175', 'Mercancía general', 19, 'completado', '2023-11-20', '11:58:38', '2023-10-20', '07:21:57', 'HIL378', '000015', '1004', '101220123', '2023-11-09 01:00:28', '2023-11-09 01:00:28'),
('9482', 'Mat. de construcción', 20, 'completado', '2023-05-25', '03:55:35', '2023-07-26', '15:01:52', 'NOP234', '345678', '1236', '101220123', '2023-11-09 01:00:11', '2023-11-09 01:00:11'),
('9489', 'Mercancía general', 19, 'completado', '2023-04-20', '11:54:15', '2023-07-20', '22:26:34', 'HIL378', '000015', '1004', '101220123', '2023-11-09 01:00:11', '2023-11-09 01:00:11'),
('9503', 'Productos químicos', 18, 'completado', '2023-11-25', '13:13:23', '2023-03-25', '23:09:42', 'HIJ234', '000013', '1002', '101220123', '2023-11-09 01:00:11', '2023-11-09 01:00:11'),
('9628', 'Ropa y textiles', 17, 'completado', '2023-09-20', '21:29:04', '2023-08-20', '09:07:56', 'FHY-145', '000007', '0017', '101220123', '2023-11-09 01:00:11', '2023-11-09 01:00:11'),
('9739', 'Mat. de construcción', 15, 'completado', '2023-10-01', '13:33:16', '2023-02-01', '23:10:12', 'GPO091', '000011', '0104', '101220123', '2023-11-09 01:27:41', '2023-11-09 01:27:41'),
('9774', 'Alimentos perecederos', 20, 'completado', '2023-09-01', '03:21:32', '2023-03-01', '20:41:09', 'H49033', '000012', '1001', '101220123', '2023-11-09 01:27:41', '2023-11-09 01:27:41'),
('9820', 'Alimentos perecederos', 20, 'completado', '2023-07-15', '11:04:36', '2023-02-15', '22:46:33', 'H49033', '000012', '1001', '101220123', '2023-11-09 01:00:11', '2023-11-09 01:00:11'),
('9839', 'Equipos electrónicos', 18, 'completado', '2023-05-01', '06:01:10', '2023-11-01', '21:49:51', 'KLM678', '000019', '1008', '101220123', '2023-11-09 01:27:41', '2023-11-09 01:27:41'),
('9995', 'Alimentos perecederos', 15, 'completado', '2023-10-01', '12:41:55', '2023-11-01', '01:22:35', 'BCD123', '000002', '0012', '101220123', '2023-11-09 01:27:41', '2023-11-09 01:27:41');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actividades`
--
ALTER TABLE `actividades`
  ADD PRIMARY KEY (`cod_act`),
  ADD KEY `actividades_act_sis_foreign` (`act_sis`);

--
-- Indices de la tabla `almacenes`
--
ALTER TABLE `almacenes`
  ADD PRIMARY KEY (`cod_alm`),
  ADD KEY `almacenes_com_alm_foreign` (`com_alm`);

--
-- Indices de la tabla `camiones`
--
ALTER TABLE `camiones`
  ADD PRIMARY KEY (`pla_cam`),
  ADD KEY `camiones_con_cam_foreign` (`con_cam`);

--
-- Indices de la tabla `categorias_gastos`
--
ALTER TABLE `categorias_gastos`
  ADD PRIMARY KEY (`cod_cat_gas`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`cod_cli`);

--
-- Indices de la tabla `componentes`
--
ALTER TABLE `componentes`
  ADD PRIMARY KEY (`num_ser_com`),
  ADD KEY `componentes_sis_com_foreign` (`sis_com`);

--
-- Indices de la tabla `conductores`
--
ALTER TABLE `conductores`
  ADD PRIMARY KEY (`dni_con`);

--
-- Indices de la tabla `documentos_camiones`
--
ALTER TABLE `documentos_camiones`
  ADD PRIMARY KEY (`cod_doc_cam`),
  ADD KEY `documentos_camiones_cam_doc_cam_foreign` (`cam_doc_cam`);

--
-- Indices de la tabla `empresas`
--
ALTER TABLE `empresas`
  ADD PRIMARY KEY (`nit_emp`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `fallas`
--
ALTER TABLE `fallas`
  ADD PRIMARY KEY (`cod_fal`),
  ADD KEY `fallas_sis_fal_foreign` (`sis_fal`),
  ADD KEY `fallas_cam_fal_foreign` (`cam_fal`),
  ADD KEY `fallas_rut_fal_foreign` (`rut_fal`);

--
-- Indices de la tabla `gastos`
--
ALTER TABLE `gastos`
  ADD PRIMARY KEY (`cod_gas`),
  ADD KEY `gastos_cat_gas_foreign` (`cat_gas`),
  ADD KEY `gastos_via_gas_foreign` (`via_gas`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indices de la tabla `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indices de la tabla `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indices de la tabla `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indices de la tabla `role_user`
--
ALTER TABLE `role_user`
  ADD KEY `role_user_role_id_foreign` (`role_id`),
  ADD KEY `role_user_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `rutas`
--
ALTER TABLE `rutas`
  ADD PRIMARY KEY (`cod_rut`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`cod_ser`),
  ADD KEY `servicios_sis_ser_foreign` (`sis_ser`),
  ADD KEY `servicios_act_ser_foreign` (`act_ser`),
  ADD KEY `servicios_fal_ser_foreign` (`fal_ser`),
  ADD KEY `servicios_tal_ser_foreign` (`tal_ser`),
  ADD KEY `servicios_cam_ser_foreign` (`cam_ser`),
  ADD KEY `servicios_alm_ser_foreign` (`alm_ser`);

--
-- Indices de la tabla `sistemas`
--
ALTER TABLE `sistemas`
  ADD PRIMARY KEY (`cod_sis`);

--
-- Indices de la tabla `talleres`
--
ALTER TABLE `talleres`
  ADD PRIMARY KEY (`nit_tal`),
  ADD KEY `talleres_rut_tal_foreign` (`rut_tal`);

--
-- Indices de la tabla `trazabilidad`
--
ALTER TABLE `trazabilidad`
  ADD PRIMARY KEY (`cod_tra`),
  ADD KEY `trazabilidad_via_tra_foreign` (`via_tra`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indices de la tabla `viajes`
--
ALTER TABLE `viajes`
  ADD PRIMARY KEY (`cod_via`),
  ADD KEY `viajes_cam_via_foreign` (`cam_via`),
  ADD KEY `viajes_cli_via_foreign` (`cli_via`),
  ADD KEY `viajes_rut_via_foreign` (`rut_via`),
  ADD KEY `viajes_emp_via_foreign` (`emp_via`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `actividades`
--
ALTER TABLE `actividades`
  ADD CONSTRAINT `actividades_act_sis_foreign` FOREIGN KEY (`act_sis`) REFERENCES `sistemas` (`cod_sis`);

--
-- Filtros para la tabla `almacenes`
--
ALTER TABLE `almacenes`
  ADD CONSTRAINT `almacenes_com_alm_foreign` FOREIGN KEY (`com_alm`) REFERENCES `componentes` (`num_ser_com`);

--
-- Filtros para la tabla `camiones`
--
ALTER TABLE `camiones`
  ADD CONSTRAINT `camiones_con_cam_foreign` FOREIGN KEY (`con_cam`) REFERENCES `conductores` (`dni_con`);

--
-- Filtros para la tabla `componentes`
--
ALTER TABLE `componentes`
  ADD CONSTRAINT `componentes_sis_com_foreign` FOREIGN KEY (`sis_com`) REFERENCES `sistemas` (`cod_sis`);

--
-- Filtros para la tabla `documentos_camiones`
--
ALTER TABLE `documentos_camiones`
  ADD CONSTRAINT `documentos_camiones_cam_doc_cam_foreign` FOREIGN KEY (`cam_doc_cam`) REFERENCES `camiones` (`pla_cam`);

--
-- Filtros para la tabla `fallas`
--
ALTER TABLE `fallas`
  ADD CONSTRAINT `fallas_cam_fal_foreign` FOREIGN KEY (`cam_fal`) REFERENCES `camiones` (`pla_cam`),
  ADD CONSTRAINT `fallas_rut_fal_foreign` FOREIGN KEY (`rut_fal`) REFERENCES `rutas` (`cod_rut`),
  ADD CONSTRAINT `fallas_sis_fal_foreign` FOREIGN KEY (`sis_fal`) REFERENCES `sistemas` (`cod_sis`);

--
-- Filtros para la tabla `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
