-- phpMyAdmin SQL Dump
-- version 3.2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 10, 2011 at 05:33 AM
-- Server version: 5.1.37
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `books`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE IF NOT EXISTS `dvds` (
  `DVDID` int(11) NOT NULL AUTO_INCREMENT,
  `CATEGORIA` varchar(150) NOT NULL,
  `TEMA` varchar(150) NOT NULL,
  `FECHA` year(4) NOT NULL,
  `DISCOS` INT NOT NULL,
  `PACKS` varchar(150) NOT NULL,
  `CAJA` float,
  PRIMARY KEY (`DVDID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9;

--
-- Dumping data for table `books`
--

INSERT INTO `dvds` (`DVDID`, `CATEGORIA`, `TEMA`, `FECHA`, `DISCOS`,`PACKS`,`CAJA`) VALUES
(1, 'DVD', 'Algo grande esta por suceder',2016,1,'Unidad',0),
(2, 'DVD', 'Apremmiados por el amor de Jesus',2014,1,'Unidad',0),
(3, 'DVD', 'Aun sigo esperando',2016,1,'Unidad',0),
(4, 'DVD', 'Como atraer la atencion de Dios',2013,1,'Unidad',0),
(5, 'DVD', 'Como ganar a mi familia para Cristo',2012,1,'Unidad',0),
(6, 'DVD', 'Con Dios a mi favor',2013,1,'Unidad',0),
(7, 'DVD', 'Conservando la fe',2013,1,'Unidad',0),
(8, 'DVD', 'Dios cuida de mi',2015,1,'Unidad',0);
