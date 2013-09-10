-- phpMyAdmin SQL Dump
-- version 3.5.8.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 10, 2013 at 04:35 PM
-- Server version: 5.5.32-0ubuntu0.13.04.1
-- PHP Version: 5.4.9-4ubuntu2.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `econtas`
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
-- Table structure for table `tipo_adesao_ata`
--

CREATE TABLE IF NOT EXISTS `tipo_adesao_ata` (
  `id` int(2) unsigned NOT NULL,
  `descricao` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tipo_adesao_ata`
--

INSERT INTO `tipo_adesao_ata` (`id`, `descricao`) VALUES
(1, 'Adesão Ata Própria (Participante)'),
(2, 'Adesão Ata Externa (Carona)');

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

-- Parte 02

ALTER TABLE `licitacao` CHANGE `nu_ProcessoLicitatorio` `nu_ProcessoLicitatorio` VARCHAR( 18 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL;
ALTER TABLE `licitacao` CHANGE `de_ObjetoLicitacao` `de_ObjetoLicitacao` VARCHAR( 300 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL;
ALTER TABLE `item` DROP `cd_ItemLote`;
ALTER TABLE `item` CHANGE `nu_SequencialItem` `nu_SequencialItem` INT( 5 ) NOT NULL;
ALTER TABLE `item` CHANGE `dt_HomologacaoItem` `dt_HomologacaoItem` DATE NULL DEFAULT NULL ,
CHANGE `dt_PublicacaoHomologacao` `dt_PublicacaoHomologacao` DATE NULL DEFAULT NULL;
 ALTER TABLE `item` CHANGE `de_ItemLicitacao` `de_ItemLicitacao` VARCHAR( 300 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL;
ALTER TABLE `item` ADD `un_Medida` VARCHAR( 30 ) NULL DEFAULT NULL AFTER `dt_PublicacaoHomologacao` ,
ADD `st_Item` INT( 2 ) UNSIGNED NULL DEFAULT NULL AFTER `un_Medida`;
ALTER TABLE `item` ADD INDEX ( `st_Item` );

-- phpMyAdmin SQL Dump
-- version 3.5.8.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 10, 2013 at 04:55 PM
-- Server version: 5.5.32-0ubuntu0.13.04.1
-- PHP Version: 5.4.9-4ubuntu2.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `econtas`
--

-- --------------------------------------------------------

--
-- Table structure for table `status_item_licitacao`
--

CREATE TABLE IF NOT EXISTS `status_item_licitacao` (
  `codigo` int(10) unsigned NOT NULL,
  `descricao` varchar(50) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `status_item_licitacao`
--

INSERT INTO `status_item_licitacao` (`codigo`, `descricao`) VALUES
(1, 'Homologado'),
(2, 'Deserto'),
(3, 'Fracassado'),
(4, 'Cancelado'),
(5, 'Anulado/Revogado (toda licitação foi anulada)');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

ALTER TABLE `item` ADD FOREIGN KEY ( `st_Item` ) REFERENCES `status_item_licitacao` (
`codigo`
) ON DELETE RESTRICT ON UPDATE RESTRICT ;

ALTER TABLE `cotacao`
  DROP `dd_ItemLote`;
ALTER TABLE `certidao` CHANGE `nu_Certidao` `nu_Certidao` VARCHAR( 60 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL;
DROP TABLE `licitacao_dotacao`;

-- phpMyAdmin SQL Dump
-- version 3.5.8.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 10, 2013 at 05:12 PM
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
-- Table structure for table `modalidade`
--

CREATE TABLE IF NOT EXISTS `modalidade` (
  `codigo` int(2) unsigned NOT NULL,
  `descricao` varchar(50) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

TRUNCATE `modalidade`;

--
-- Dumping data for table `modalidade`
--

INSERT INTO `modalidade` (`codigo`, `descricao`) VALUES
(0, 'Dispensa p/ Compras e Serviços'),
(1, 'Convite p/ Compras e Serviços'),
(2, 'Convite p/ Obras e Serviços de Engenharia'),
(3, 'Tomada de Preços p/ Compras e Serviços'),
(4, 'Tomada de Preços p/ Obras e Serviços de Engenharia'),
(5, 'Concorrência p/ Compras e Serviços'),
(6, 'Concorrência p/ Obras e Serviços de Engenharia'),
(7, 'Leilão'),
(8, 'Dispensa de Licitação'),
(9, 'Inexigibilidade de Licitação'),
(10, 'Concurso'),
(11, 'Pregão Eletrônico'),
(12, 'Pregão Presencial'),
(13, 'Concorrência para Concessão Adm. de Uso'),
(14, 'Concorrência para Concessão Adm. de Uso'),
(15, 'Anulada'),
(16, 'Deserta'),
(17, 'Fracassada'),
(18, 'Internacional');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

INSERT INTO `tipo_certidao` (`codigo`, `descricao`) VALUES ('7', 'CNDT');
ALTER TABLE `publicacao`
  DROP `nu_SequencialPublicacao`;

