-- Generation Time: 11.06.2015 klo 07:48
-- Palvelimen versio: 5.5.43-log
-- PHP Version: 5.5.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `rpg`
--

-- --------------------------------------------------------

--
-- Rakenne taululle `rpg_kordinaatit`
--

DROP TABLE IF EXISTS `rpg_kordinaatit`;
CREATE TABLE IF NOT EXISTS `rpg_kordinaatit` (
  `Index` int(10) unsigned NOT NULL,
  `Hahmon_numero` int(10) unsigned DEFAULT NULL,
  `Pohjoista` int(10) unsigned DEFAULT '0',
  `Itaista` int(10) unsigned DEFAULT '0',
  `Kartta` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC COMMENT='Koordinaatit';

-- --------------------------------------------------------

--
-- Rakenne taululle `rpg_progress`
--

DROP TABLE IF EXISTS `rpg_progress`;
CREATE TABLE IF NOT EXISTS `rpg_progress` (
  `Rpg_kehitys` int(3) unsigned NOT NULL,
  `Rpg_kartta` int(3) unsigned NOT NULL,
  `Rpg_lisaakartta` int(3) unsigned NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='rpg_progressbar';

-- --------------------------------------------------------

--
-- Rakenne taululle `rpg_stats`
--

DROP TABLE IF EXISTS `rpg_stats`;
CREATE TABLE IF NOT EXISTS `rpg_stats` (
  `id` int(6) NOT NULL,
  `Etunimi` varchar(15) DEFAULT NULL,
  `Sukunimi` varchar(15) DEFAULT NULL,
  `Ika` int(6) DEFAULT '0',
  `Pituus` int(6) DEFAULT '0',
  `Paino` int(6) DEFAULT '0',
  `Appearance` int(6) DEFAULT '0',
  `Attack` int(6) DEFAULT '0',
  `Charisma` int(6) DEFAULT '0',
  `Health_regeneration` int(6) DEFAULT '0',
  `Hp` int(6) DEFAULT '0',
  `Initiative` int(6) DEFAULT '0',
  `Intelligence` int(6) DEFAULT '0',
  `Leadership` int(6) DEFAULT '0',
  `Mana_Power` int(6) DEFAULT '0',
  `Mana_regeneration` int(6) DEFAULT '0',
  `Peacefully` int(6) DEFAULT '0',
  `Rage_multiply` int(6) DEFAULT '0',
  `Rage` int(6) DEFAULT '0',
  `Regeneration` int(6) DEFAULT '0',
  `Strength` int(6) DEFAULT '0',
  `Toughness` int(6) DEFAULT '0',
  `WeaponsSkill` int(6) DEFAULT '0',
  `Wisdom` int(6) DEFAULT '0',
  `Wizard_Level` int(6) DEFAULT '0',
  `Wounds` int(6) DEFAULT '0',
  `Hahmon_numero` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rpg_kordinaatit`
--
ALTER TABLE `rpg_kordinaatit`
  ADD PRIMARY KEY (`Index`);

--
-- Indexes for table `rpg_progress`
--
ALTER TABLE `rpg_progress`
  ADD PRIMARY KEY (`Rpg_kehitys`,`Rpg_kartta`,`Rpg_lisaakartta`);

--
-- Indexes for table `rpg_stats`
--
ALTER TABLE `rpg_stats`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rpg_kordinaatit`
--
ALTER TABLE `rpg_kordinaatit`
  MODIFY `Index` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `rpg_stats`
--
ALTER TABLE `rpg_stats`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT;
