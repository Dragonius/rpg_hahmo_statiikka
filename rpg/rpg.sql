-- phpMyAdmin SQL Dump
-- version 3.2.3
-- http://www.phpmyadmin.net
--
-- Palvelin: localhost
-- Luontiaika: 03.02.2010 klo 08:43
-- Palvelimen versio: 5.1.34
-- PHP:n versio: 5.2.11

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Tietokanta: `np8284_forum`
--

-- --------------------------------------------------------

--
-- Rakenne taululle `rpg_kordinaatit`
--

DROP TABLE IF EXISTS `rpg_kordinaatit`;
CREATE TABLE IF NOT EXISTS `rpg_kordinaatit` (
  `Index` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Hahmon_numero` int(10) unsigned DEFAULT NULL,
  `Pohjoista` int(10) unsigned DEFAULT NULL,
  `Itaista` int(10) unsigned DEFAULT NULL,
  `Kartta` varchar(15) NOT NULL,
  UNIQUE KEY `Id` (`Index`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC COMMENT='Koordinaatit' AUTO_INCREMENT=27 ;

--
-- Vedos taulusta `rpg_kordinaatit`
--

INSERT INTO `rpg_kordinaatit` (`Index`, `Hahmon_numero`, `Pohjoista`, `Itaista`, `Kartta`) VALUES
(3, 4, 465, 66, ''),
(4, 5, 44, 134, ''),
(5, 0, 386, 265, ''),
(6, 1, 82, 412, ''),
(11, 8, 217, 539, ''),
(21, 1, 300, 50, ''),
(22, 2, 236, 359, ''),
(23, 15, 180, 314, ''),
(24, 8, 277, 507, ''),
(25, 0, 462, 203, ''),
(26, 0, 397, 202, 'Pohjoisessa');

-- --------------------------------------------------------

--
-- Rakenne taululle `rpg_progress`
--

DROP TABLE IF EXISTS `rpg_progress`;
CREATE TABLE IF NOT EXISTS `rpg_progress` (
  `Rpg_kehitys` int(3) unsigned NOT NULL,
  `Rpg_kartta` int(3) unsigned NOT NULL,
  `Rpg_lisaakartta` int(3) unsigned NOT NULL,
  PRIMARY KEY (`Rpg_kehitys`,`Rpg_kartta`,`Rpg_lisaakartta`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='rpg_progressbar';

--
-- Vedos taulusta `rpg_progress`
--

INSERT INTO `rpg_progress` (`Rpg_kehitys`, `Rpg_kartta`, `Rpg_lisaakartta`) VALUES
(19, 16, 3);

-- --------------------------------------------------------

--
-- Rakenne taululle `rpg_stats`
--

DROP TABLE IF EXISTS `rpg_stats`;
CREATE TABLE IF NOT EXISTS `rpg_stats` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `Etunimi` varchar(15) DEFAULT NULL,
  `Sukunimi` varchar(15) DEFAULT NULL,
  `Ika` int(6) DEFAULT NULL,
  `Pituus` int(6) DEFAULT NULL,
  `Paino` int(6) DEFAULT NULL,
  `Appearance` int(6) DEFAULT NULL,
  `Attack` int(6) NOT NULL,
  `Charisma` int(6) DEFAULT NULL,
  `Health_regeneration` int(6) DEFAULT NULL,
  `Hp` int(6) DEFAULT NULL,
  `Initiative` int(6) DEFAULT NULL,
  `Intelligence` int(6) DEFAULT NULL,
  `Leadership` int(6) DEFAULT NULL,
  `Mana_Power` int(6) DEFAULT NULL,
  `Mana_regeneration` int(6) DEFAULT NULL,
  `Peacefully` int(6) DEFAULT NULL,
  `Rage_multiply` int(6) DEFAULT NULL,
  `Rage` int(6) DEFAULT NULL,
  `Regeneration` int(6) NOT NULL,
  `Strength` int(6) DEFAULT NULL,
  `Toughness` int(6) DEFAULT NULL,
  `WeaponsSkill` int(6) DEFAULT NULL,
  `Wisdom` int(6) DEFAULT NULL,
  `Wizard_Level` int(6) DEFAULT NULL,
  `Wounds` int(6) NOT NULL,
  `Hahmon_numero` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Vedos taulusta `rpg_stats`
--

INSERT INTO `rpg_stats` (`id`, `Etunimi`, `Sukunimi`, `Ika`, `Pituus`, `Paino`, `Appearance`, `Attack`, `Charisma`, `Health_regeneration`, `Hp`, `Initiative`, `Intelligence`, `Leadership`, `Mana_Power`, `Mana_regeneration`, `Peacefully`, `Rage_multiply`, `Rage`, `Regeneration`, `Strength`, `Toughness`, `WeaponsSkill`, `Wisdom`, `Wizard_Level`, `Wounds`, `Hahmon_numero`) VALUES
(3, 'testi', 'test2', 1, 2, 3, 4, 56, 7, 8, 9, 4, 654, 68, 54, 651, 46, 84, 6, 54, 63, 51, 354, 6, 54, 65, 4),
(4, 'lo', 'lo2', 1, 2, 2, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5),
(5, '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(6, '4 hahmo', '4 testi hahmo', 21, 180, 64, 1, 2, 3, 1, 2, 3, 9, 8, 7, 9, 8, 7, 4, 5, 6, 6, 5, 4, 5, 5, 1),
(11, 'Askar', 'Lothar', 21, 190, 78, 7, 5, 12, 6, 12, 7, 3, 3, 0, 1, 5, 4, 8, 3, 8, 9, 12, 3, 1, 15, 8),
(21, 'Max 20', 'Max 20', 20, 20, 20, 20, 20, 20, 20, 20, 20, 20, 20, 20, 20, 20, 20, 20, 20, 20, 20, 20, 20, 20, 20, 1),
(22, 'test', 'ted', 1, 5, 6, 8, 4, 1, 2, 8, 84, 6, 4, 8, 1, 2, 6, 8, 4, 5, 2, 3, 5, 8, 7, 2),
(23, 'teste', 'qfdlgkmd', 32, 186, 68, 1, 8, 4, 3, 8, 1, 2, 8, 41, 3, 5, 4, 6, 5, 1, 6, 8, 41, 6, 6, 15),
(24, 'kbj', 'kb', 0, 65, 468, 4, 68, 468, 46, 846846, 87, 6, 84, 65, 465, 68, 46, 84, 684, 68, 46, 846, 846, 846, 84, 8),
(25, 'test', 'test', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(26, 'test', 'Versio 0.2', 1, 2, 3, 4, 5, 6, 7, 8, 9, 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 0, 1, 2, 3, 0);
