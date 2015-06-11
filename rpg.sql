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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rpg_kordinaatit`
--
ALTER TABLE `rpg_kordinaatit`
  ADD PRIMARY KEY (`Index`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rpg_kordinaatit`
--
ALTER TABLE `rpg_kordinaatit`
  MODIFY `Index` int(10) unsigned NOT NULL AUTO_INCREMENT;
