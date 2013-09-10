-- phpMyAdmin SQL Dump
-- version 3.5.8.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 10, 2013 at 04:28 PM
-- Server version: 5.5.32-0ubuntu0.13.04.1
-- PHP Version: 5.4.9-4ubuntu2.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `econtas_dev`
--

-- --------------------------------------------------------

--
-- Table structure for table `adesao_ata_licitacao`
--

CREATE TABLE IF NOT EXISTS `adesao_ata_licitacao` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nu_ProcessoCompra` varchar(18) NOT NULL,
  `nu_Ata` varchar(18) NOT NULL,
  `nu_ProcessoLicitatorio` varchar(18) DEFAULT NULL,
  `dt_Publicacao` date DEFAULT NULL,
  `dt_Validade` date NOT NULL,
  `nu_DiarioOficial` varchar(6) DEFAULT NULL,
  `dt_Adesao` date NOT NULL,
  `tp_Adesao` int(2) unsigned NOT NULL,
  `competencia_id` int(10) unsigned NOT NULL,
  `created_by` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int(10) unsigned DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tp_Adesao` (`tp_Adesao`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `item_adesao_ata`
--

CREATE TABLE IF NOT EXISTS `item_adesao_ata` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `adesao_ata_licitacao_id` int(10) unsigned NOT NULL,
  `qt_Item` decimal(15,2) NOT NULL,
  `sq_Item` int(5) DEFAULT NULL,
  `vl_Item` decimal(15,2) NOT NULL,
  `un_Medida` varchar(30) NOT NULL,
  `de_Item` varchar(300) NOT NULL,
  `competencia_id` int(10) unsigned NOT NULL,
  `created_by` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int(10) unsigned DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `adesao_ata_licitacao_id` (`adesao_ata_licitacao_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `adesao_ata_licitacao`
--
ALTER TABLE `adesao_ata_licitacao`
  ADD CONSTRAINT `adesao_ata_licitacao_ibfk_1` FOREIGN KEY (`tp_Adesao`) REFERENCES `tipo_adesao_ata` (`id`);

--
-- Constraints for table `item_adesao_ata`
--
ALTER TABLE `item_adesao_ata`
  ADD CONSTRAINT `item_adesao_ata_ibfk_1` FOREIGN KEY (`adesao_ata_licitacao_id`) REFERENCES `adesao_ata_licitacao` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
