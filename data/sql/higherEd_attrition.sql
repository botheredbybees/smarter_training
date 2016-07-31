-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 31, 2016 at 10:05 AM
-- Server version: 10.0.26-MariaDB-1~trusty
-- PHP Version: 5.5.9-1ubuntu4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `smarterTraining`
--

-- --------------------------------------------------------

--
-- Table structure for table `higherEd_attrition`
--

CREATE TABLE IF NOT EXISTS `higherEd_attrition` (
  `reference_year` varchar(50) DEFAULT NULL,
  `attrition_rate` varchar(50) DEFAULT NULL,
  `nesbattrition` varchar(50) DEFAULT NULL,
  `disattrition` varchar(50) DEFAULT NULL,
  `seslow2006attrition` varchar(50) DEFAULT NULL,
  `seslow2011attrition` varchar(50) DEFAULT NULL,
  `indigenousattrition` varchar(50) DEFAULT NULL,
  `modeinternalatt` varchar(50) DEFAULT NULL,
  `modeexternalatt` varchar(50) DEFAULT NULL,
  `modemultiatt` varchar(50) DEFAULT NULL,
  `typeftatt` varchar(50) DEFAULT NULL,
  `typeptatt` varchar(50) DEFAULT NULL,
  `genderfemaleatt` varchar(50) DEFAULT NULL,
  `gendermaleatt` varchar(50) DEFAULT NULL,
  `ageunder25att` varchar(50) DEFAULT NULL,
  `age25to39att` varchar(50) DEFAULT NULL,
  `agegt39att` varchar(50) DEFAULT NULL,
  `boahigheredatt` varchar(50) DEFAULT NULL,
  `boasecondaryatt` varchar(50) DEFAULT NULL,
  `boavetatt` varchar(50) DEFAULT NULL,
  `boamatureatt` varchar(50) DEFAULT NULL,
  `boaproffatt` varchar(50) DEFAULT NULL,
  `boaotheratt` varchar(50) DEFAULT NULL,
  `atarunder70att` varchar(50) DEFAULT NULL,
  `atar70to89att` varchar(50) DEFAULT NULL,
  `atargt89` varchar(50) DEFAULT NULL,
  `bfoescienceatt` varchar(50) DEFAULT NULL,
  `bfoeitatt` varchar(50) DEFAULT NULL,
  `bfoeengineeratt` varchar(50) DEFAULT NULL,
  `bfoearchatt` varchar(50) DEFAULT NULL,
  `bfoeagricatt` varchar(50) DEFAULT NULL,
  `bfoehealthatt` varchar(50) DEFAULT NULL,
  `bfoeeducatt` varchar(50) DEFAULT NULL,
  `bfoemanageatt` varchar(50) DEFAULT NULL,
  `bfoesocietyatt` varchar(50) DEFAULT NULL,
  `bfoeartsatt` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `higherEd_attrition`
--

INSERT INTO `higherEd_attrition` (`reference_year`, `attrition_rate`, `nesbattrition`, `disattrition`, `seslow2006attrition`, `seslow2011attrition`, `indigenousattrition`, `modeinternalatt`, `modeexternalatt`, `modemultiatt`, `typeftatt`, `typeptatt`, `genderfemaleatt`, `gendermaleatt`, `ageunder25att`, `age25to39att`, `agegt39att`, `boahigheredatt`, `boasecondaryatt`, `boavetatt`, `boamatureatt`, `boaproffatt`, `boaotheratt`, `atarunder70att`, `atar70to89att`, `atargt89`, `bfoescienceatt`, `bfoeitatt`, `bfoeengineeratt`, `bfoearchatt`, `bfoeagricatt`, `bfoehealthatt`, `bfoeeducatt`, `bfoemanageatt`, `bfoesocietyatt`, `bfoeartsatt`) VALUES
('2005', '18.86372814', '14.67560059', '21.05532787', '20.1056842', '0', '33.14720812', '17.22789439', '34.81486477', '18.38917385', '15.67901775', '33.94999827', '18.69027889', '19.11244774', '16.97620009', '26.17076723', '25.494301', '18.23518362', '17.50687808', '21.86526149', '24.76657888', '29.84025559', '19.32150517', '26.81967213', '18.16763889', '9.070936874', '18.29387595', '22.12071778', '14.88790164', '14.90874615', '23.26517968', '14.98019596', '18.23113086', '18.9616988', '22.3106051', '18.61602647'),
('2006', '18.52458722', '12.62330714', '20.11560694', '20.34193619', '0', '31.35', '17.03821766', '34.17694138', '18.23808997', '15.55342006', '33.43892869', '18.56437655', '18.46762349', '16.86683492', '25.48554606', '25.12431626', '18.30033301', '17.23014965', '20.47060197', '24.57627119', '28.87175893', '19.15927938', '26.20064946', '17.16463601', '9.106918239', '17.96957672', '22.23457476', '13.36410154', '14.64014763', '20.53394858', '14.72865171', '18.44271172', '18.28787487', '22.50718833', '18.70124675'),
('2007', '18.97192863', '13.34070098', '21.84928191', '20.46826734', '0', '34.43770415', '17.55925951', '33.72053985', '17.57681034', '16.02081154', '33.94364692', '18.95629963', '18.99464656', '17.30712161', '25.9389187', '26.52029111', '18.62949056', '17.68614081', '21.3041561', '25.17887984', '24.64835901', '20.28860527', '28.07650365', '17.32725161', '8.93603343', '18.330033', '23.39003645', '13.82311652', '16.30667445', '21.61699212', '15.28995706', '19.2803838', '18.53740399', '22.7220506', '19.75366178'),
('2008', '17.84544262', '13.53071799', '21.13955409', '19.49916178', '0', '29.60442365', '16.47518335', '32.28456914', '16.12842659', '15.05308437', '32.30953766', '18.07003767', '17.5199516', '16.16715241', '24.97353153', '25.30092046', '18.24087079', '16.15134399', '20.67039106', '23.62829478', '25.1414713', '19.30493859', '25.33871918', '15.73331761', '8.426554638', '17.06041956', '21.9310914', '12.85104063', '16.80493922', '18.75', '14.33306301', '19.38445843', '17.00249472', '21.29552549', '18.88814468'),
('2009', '18.11186936', '13.0835896', '20.50878948', '19.50608447', '0', '31.88405797', '16.69945355', '32.7897356', '15.72081508', '15.28087107', '33.0134028', '18.31324635', '17.81733892', '16.43331027', '25.01815125', '25.40445999', '18.34934459', '16.38041528', '21.07041941', '22.25680153', '26.23066104', '20.13772077', '26.02301303', '16.1650758', '8.423548358', '16.92448722', '21.56384774', '13.48439504', '16.49545634', '20.98657326', '14.71359287', '19.79652395', '17.77627686', '21.10704888', '18.63357843'),
('2010', '19.05312847', '14.92851135', '21.39912706', '20.50913148', '0', '31.99861926', '17.70404412', '33.28148466', '15.48146975', '16.17828332', '34.44996405', '19.18040779', '18.86948876', '17.33656919', '25.97289178', '26.28370699', '18.95290116', '17.42553705', '22.14036263', '23.94459729', '27.39420935', '20.89636169', '27.38298865', '17.77700142', '9.253866032', '18.02527567', '21.30528587', '13.29384666', '18.73262924', '21.50112867', '15.338776', '20.88282666', '18.31617841', '22.51233813', '20.10002382'),
('2011', '18.97935407', '14.69740634', '21.70091324', '20.84784807', '20.97109178', '32.29199872', '17.48900278', '34.12779176', '16.54282069', '16.03967411', '35.24549998', '19.26615684', '18.57365352', '17.33777038', '25.64366267', '27.21831356', '18.36648243', '17.4647088', '22.86449699', '23.49605997', '28.91326022', '20.92261734', '26.22196665', '17.26620728', '9.147774979', '17.38887075', '20.50312397', '12.64060411', '19.77118341', '21.15054379', '16.11616495', '20.74130879', '18.32405112', '22.16440344', '20.47866069'),
('2012', '19.49724151', '14.84981438', '21.66096727', '21.68851176', '21.69933315', '31.09393579', '17.84264778', '32.8855759', '15.8302539', '16.52123676', '34.5031329', '19.86164632', '18.97763508', '17.83652333', '25.59285586', '26.91049914', '18.74093151', '17.7653232', '23.46922651', '23.453655', '24.00318979', '23.15460447', '27.37275669', '17.27451079', '9.076496235', '17.25917198', '20.69017709', '13.42440662', '19.0078329', '20.76105204', '17.16734903', '21.13541855', '19.30278537', '22.5219431', '20.99870517'),
('2013', '20.89428199', '15.25042808', '22.76056835', '23.01375006', '23.09897191', '29.24503311', '18.94920196', '35.31545793', '16.57699888', '17.44104079', '37.84636523', '21.1472357', '20.53769689', '18.85069788', '27.51875521', '31.05026257', '20.12737548', '18.44510091', '25.88040226', '23.94334363', '27.3880597', '26.35018768', '27.77073002', '18.12032132', '9.705261571', '18.3858774', '21.79889437', '14.29377336', '21.51898734', '20.96602972', '18.85222786', '23.91122463', '21.03185791', '22.96142665', '23.24259491');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
