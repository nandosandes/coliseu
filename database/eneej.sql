-- phpMyAdmin SQL Dump
-- version 2.11.8.1deb5+lenny9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 18, 2012 at 05:57 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6-1+lenny16

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `eneej`
--

-- --------------------------------------------------------

--
-- Table structure for table `eneej_banner`
--

CREATE TABLE IF NOT EXISTS `eneej_banner` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `picture` varchar(200) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=49 ;

--
-- Dumping data for table `eneej_banner`
--

INSERT INTO `eneej_banner` (`id`, `picture`) VALUES
(46, '../images/banner/banner1.jpg'),
(47, '../images/banner/banner1.jpg'),
(48, '../images/banner/banner1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `eneej_fotos`
--

CREATE TABLE IF NOT EXISTS `eneej_fotos` (
  `id` int(5) NOT NULL,
  `titulo` varchar(40) NOT NULL,
  `foto` text NOT NULL,
  `descricao` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eneej_fotos`
--


-- --------------------------------------------------------

--
-- Table structure for table `eneej_news`
--

CREATE TABLE IF NOT EXISTS `eneej_news` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(200) NOT NULL,
  `text` text NOT NULL,
  `subtitle` varchar(250) NOT NULL,
  `date` datetime NOT NULL,
  `photo` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `eneej_news`
--

INSERT INTO `eneej_news` (`id`, `title`, `text`, `subtitle`, `date`, `photo`) VALUES
(17, 'LanÃ§amento do site do CONAJE | ENEEJ', 'EstÃ¡ lanÃ§ado o site oficial do 18Â° Congresso Nacional de Jovens Empreendedores e do 3Â° Encontro Nordestino de Empresas Juniores. Os dois eventos, que serÃ£o realizados pela primeira vez em conjunto, acontecerÃ£o em Salvador, Bahia, uma uniÃ£o entre o Congresso Nacional de Jovens Empreendedores (CONAJE); AssociaÃ§Ã£o de Jovens Empreendedores da Bahia (AJE Bahia) e FederaÃ§Ã£o das Empresas Juniores do Estado da Bahia (UNIJr-BA). Aqui vocÃª encontrarÃ¡ as informaÃ§Ãµes oficiais do evento, bem como espaÃ§o para inscriÃ§Ãµes, galeria de fotos, notÃ­cias e tambÃ©m toda a programaÃ§Ã£o que vocÃª poderÃ¡ conferir nos trÃªs dias dos eventos. AlÃ©m do nosso site, vocÃª poderÃ¡ conferir outras informaÃ§Ãµes atravÃ©s do nosso Facebook, Twitter, Empreendemia e LinkedIn. O 18Âº CONAJE | ENEEJ promete unir os dois maiores movimentos de empreendedorismo jovem do paÃ­s, promovendo palestras, cases, workshops, trocas de tecnologia e muito networking entre os dias 21 e 24 de Novembro no Centro de ConvenÃ§Ãµes da Bahia, em Salvador. NÃ£o perca a chance de acompanhar as notÃ­cias desse evento e muito menos de participar. JÃ¡ favoritou o nosso site? TÃ¡ esperando o quÃª?! NÃ£o fique fora dessa e participe desse evento, jovem lideranÃ§a.', 'Vem aÃ­ o 18Âº CONAJE e o 3Âº ENEEJ', '2012-04-13 15:27:20', '../css/images/fotos_noticias/banner1.jpg.jpg'),
(24, 'Lorem Ipsum', 'Lorem Ipsum Ã© simplesmente uma simulaÃ§Ã£o de texto da indÃºstria tipogrÃ¡fica e de impressos, e vem sendo utilizado desde o sÃ©culo XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu nÃ£o sÃ³ a cinco sÃ©culos, como tambÃ©m ao salto para a editoraÃ§Ã£o eletrÃ´nica, permanecendo essencialmente inalterado. Se popularizou na dÃ©cada de 60, quando a Letraset lanÃ§ou decalques contendo passagens de Lorem Ipsum, e mais recentemente quando passou a ser integrado a softwares de editoraÃ§Ã£o eletrÃ´nica como Aldus PageMaker.', 'Lorem Ipsum', '2012-04-30 21:08:01', '../css/images/fotos_noticias/Teste.png.png');

-- --------------------------------------------------------

--
-- Table structure for table `eneej_newsletter`
--

CREATE TABLE IF NOT EXISTS `eneej_newsletter` (
  `id` int(5) NOT NULL auto_increment,
  `nome` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `celular` varchar(13) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `eneej_newsletter`
--

INSERT INTO `eneej_newsletter` (`id`, `nome`, `email`, `celular`) VALUES
(1, 'Marcio Vicente', 'marciovicente@infojr.com.br', NULL),
(2, 'Marcio Vicente', 'marciovicente@infojr.com.br', NULL),
(3, 'Mar', 'marciovicente@infojr.com.br', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `eneej_users`
--

CREATE TABLE IF NOT EXISTS `eneej_users` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `eneej_users`
--

INSERT INTO `eneej_users` (`id`, `username`, `password`) VALUES
(1, 'admin', 'cnje_eneej'),
(2, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `eneej_videos`
--

CREATE TABLE IF NOT EXISTS `eneej_videos` (
  `id` int(11) NOT NULL auto_increment,
  `titulo` varchar(255) NOT NULL,
  `url` varchar(90) NOT NULL,
  `foto` varchar(90) NOT NULL,
  `embed` varchar(20) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=63 ;

--
-- Dumping data for table `eneej_videos`
--

INSERT INTO `eneej_videos` (`id`, `titulo`, `url`, `foto`, `embed`) VALUES
(53, 'Emej 2011', 'http://www.youtube.com/watch?v=SB49inLUCuA', 'http://i2.ytimg.com/vi/SB49inLUCuA/default.jpg', 'SB49inLUCuA'),
(48, 'ENEEJ Bahia 2012', 'http://www.youtube.com/watch?v=2CqPRg7UAuA', 'http://i2.ytimg.com/vi/2CqPRg7UAuA/default.jpg', '2CqPRg7UAuA'),
(60, 'ESEJ', 'http://www.youtube.com/watch?v=MElwpPyBtj0&feature=related', 'http://i2.ytimg.com/vi/MElwpPyBtj0/default.jpg', 'MElwpPyBtj0'),
(55, 'Ecej 2011', 'http://www.youtube.com/watch?v=35dw0hLgUek&feature=related', 'http://i2.ytimg.com/vi/35dw0hLgUek/default.jpg', '35dw0hLgUek'),
(52, 'Empreendedorismo', 'http://www.youtube.com/watch?v=o5I9cx2Tb64', 'http://i2.ytimg.com/vi/o5I9cx2Tb64/default.jpg', 'o5I9cx2Tb64'),
(62, 'EPEJ', 'header("Location:../view/admin/admin_videos.php");', 'http://i2.ytimg.com/vi/admin_video/default.jpg', 'admin_video'),
(42, 'Consultoria Junior', 'http://www.youtube.com/watch?v=tPf_y0-xhWk', 'http://i2.ytimg.com/vi/tPf_y0-xhWk/default.jpg', 'tPf_y0-xhWk');

-- --------------------------------------------------------

--
-- Table structure for table `inscricoes_inscritos`
--

CREATE TABLE IF NOT EXISTS `inscricoes_inscritos` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `name` varchar(100) collate utf8_unicode_ci NOT NULL default 'nome',
  `name_cracha` varchar(100) collate utf8_unicode_ci NOT NULL default 'cracha',
  `email` varchar(200) collate utf8_unicode_ci NOT NULL default 'email',
  `pass` varchar(50) collate utf8_unicode_ci NOT NULL default 'senha',
  `birth` varchar(50) collate utf8_unicode_ci NOT NULL default '01/01/1001',
  `genero` varchar(1) collate utf8_unicode_ci NOT NULL default 'm',
  `tshirt` varchar(2) collate utf8_unicode_ci NOT NULL default 'GG',
  `country` varchar(100) collate utf8_unicode_ci NOT NULL default 'Brasil',
  `cpf` varchar(30) collate utf8_unicode_ci default NULL,
  `passport` varchar(50) collate utf8_unicode_ci default NULL,
  `estado` varchar(50) collate utf8_unicode_ci NOT NULL default 'Bahia',
  `cidade` varchar(50) collate utf8_unicode_ci NOT NULL default 'Salvador',
  `phone` varchar(50) collate utf8_unicode_ci NOT NULL default '(71)3333-333',
  `type` varchar(10) collate utf8_unicode_ci NOT NULL default 'senior',
  `empresa` varchar(100) collate utf8_unicode_ci default NULL,
  `cargo` varchar(50) collate utf8_unicode_ci default NULL,
  `segmento` varchar(50) collate utf8_unicode_ci default NULL,
  `federacao` varchar(50) collate utf8_unicode_ci default NULL,
  `ej` varchar(50) collate utf8_unicode_ci default NULL,
  `cargo_jr` varchar(50) collate utf8_unicode_ci default NULL,
  `tempo` varchar(50) collate utf8_unicode_ci default NULL,
  `date` datetime NOT NULL,
  `confirm` tinyint(1) NOT NULL,
  `cep` varchar(10) collate utf8_unicode_ci NOT NULL,
  `bairro` varchar(50) collate utf8_unicode_ci NOT NULL,
  `rua` varchar(100) collate utf8_unicode_ci NOT NULL,
  `numero` varchar(5) collate utf8_unicode_ci NOT NULL,
  `complemento` varchar(50) collate utf8_unicode_ci NOT NULL,
  `celular` varchar(15) collate utf8_unicode_ci NOT NULL,
  `codigo` text collate utf8_unicode_ci NOT NULL,
  `adm` tinyint(1) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=59 ;

--
-- Dumping data for table `inscricoes_inscritos`
--

INSERT INTO `inscricoes_inscritos` (`id`, `name`, `name_cracha`, `email`, `pass`, `birth`, `genero`, `tshirt`, `country`, `cpf`, `passport`, `estado`, `cidade`, `phone`, `type`, `empresa`, `cargo`, `segmento`, `federacao`, `ej`, `cargo_jr`, `tempo`, `date`, `confirm`, `cep`, `bairro`, `rua`, `numero`, `complemento`, `celular`, `codigo`, `adm`) VALUES
(45, 'Flavia', 'Flavia', 'flaviatbarreto@gmail.com', 'flavia', '01/05/1991', 'f', 'm', 'Brasil', '8213333', NULL, 'BA', 'Salvador', '12', 'junior', NULL, NULL, NULL, 'unijr', 'infojr', 'diretora', '2,5', '2012-05-17 23:51:23', 1, '41750166', 'ArmaÃ§Ã£o', 'Rua Rodolpho Coelho Cavalcante', '12', '12', '12', '2925ff19d38298e1b9a0eecce4cafc6f', 0);
